<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function getLists(Request $request)
    {
        $limit = $request->input('limit', 10);
        $offset = $request->input('offset', 0);
        $sort = $request->input('sort', 'id');
        $order = $request->input('order', 'desc');
        $name = $request->input('name', '');
        $status = $request->input('status', '');
        $cate_id = $request->input('cate_id', '');
        $tag_id = $request->input('tags', '');
        $where = [];
        if(!empty($name)) {
            $where[] = ['title', 'like', '%'.$name.'%'];
        }
        if(strlen($status) != 0) {
            $where[] = ['status', '=', $status];
        }
        if(!empty($cate_id)) {
            $cate_id = explode(':', $cate_id)[1];
            $where[] = ['cate_id', '=', $cate_id];
        }

        $curpage = ($offset / $limit) + 1;
        if(!empty($tag_id)) {
            $tags = explode(':', $tag_id)[1];
            $tag_post_id = \DB::table('post_tag')->where('tag_id', $tags)->get(['post_id']);
            $post_id = [];
            foreach ($tag_post_id as $v) {
                $post_id[] = $v->post_id;
            }
            $res = Post::with('tags')->where($where)->whereIn('id', $post_id)->orderby($sort, $order)->paginate($limit, ['*'], 'page', $curpage);
        } else {
            $res = Post::with('tags')->where($where)->orderby($sort, $order)->paginate($limit, ['*'], 'page', $curpage);
        }
        $total = $res->total();
        $rows = $res->items();
        $categories = Category::cateList();
        $users = Admin::userList();
        foreach ($rows as $k=>$v) {
            $rows[$k]['cate_name'] = $categories[$v['cate_id']];
            //$rows[$k]['cate_name'] = $v->category->name;
            foreach ($v->tags as $vv) {
                $rows[$k]['tag_name'] .= $vv->name . ',';
            }
            $rows[$k]['tag_name'] = trim($rows[$k]['tag_name'], ',');
            //$res = Post::with('category')->where($where)->orderby($sort, $order)->paginate($limit, ['*'], 'page', $curpage);
            $rows[$k]['created_by_name'] = $users[$v['created_by']];
        }
        $response = [
            'total' => $total,
            'rows' => $rows
        ];
        return json_encode($response);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function cateAndTag()
    {
        $data['categories'] = [];
        $categories = Category::where('status', 1)->orderby('weight', 'desc')->get(['id','name', 'pid']);
        if($categories){
            foreach ($categories as $v) {
                if($v->pid == 0){
                    $pname[$v->id] = $v->name;
                }
            }
            foreach ($categories as $v) {
                if($v->pid != 0){
                    $data['categories'][] = [
                        'id' => $v->id,
                        'name' => $v->name,
                        'group' => $pname[$v->pid]
                    ];
                }
            }
        }
        $data['tags'] = Tag::all(['id','name']);
        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Display the specified resource.
     * @param Post $post
     * @return mixed
     */
    public function show(Post $post)
    {
        $tags = [];
        foreach ($post->tags as $v) {
            $tags[] = $v['id'];
        }
        unset($post->tags);
        $post->tags = $tags;
        return $post;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:posts,title',
            'keyword' => 'required',
            'desc' => 'required',
            'cate_id' => 'required',
            'pic' => 'required|image',
            'content' => 'required',
            'slug' => 'required|unique:posts,slug',
        ]);

        $model = new Post();

        $file = $request->file('pic');
        if($file->isValid()) {
            $res = $file->store(date('Y-m'), 'public');
            Image::make(public_path('uploads/' . $res))->resize(500, 500)->save();
            $model->pic = $res;
        }

        $model->cate_id = explode(':', $request->input('cate_id', 0))[1];
        $model->keyword = $request->input('keyword', '');
        $model->desc = $request->input('desc', '');
        $model->slug = $request->input('slug', '');
        $model->title = $request->input('title', '');
        $model->content = $request->input('content', '');
        $tags_temp = $request->input('tags', []);
        foreach ($tags_temp as $v) {
            $tags[] = explode(':', $v)[1];
        }

        $id = auth('admin')->user()->id;
        $model->created_by = $id;
        $model->updated_by = $id;
        $model->save();
        $model->tags()->sync($tags);
        Session::flash('flash_message','文章添加成功');
        return redirect()->route('post.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['id'=>$post->id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|unique:posts,title,'.$post->id,
            'keyword' => 'required',
            'desc' => 'required',
            'cate_id' => 'required',
            'content' => 'required',
            'slug' => 'required|unique:posts,slug,'.$post->id,
        ]);

        $model = $post;
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            if($file->isValid()) {
                //如果跟新了图片就删除就图片
                if ($request->input('pic') != $model->pic) {
                    if (file_exists(public_path(). $model->pic)) {
                        unlink(public_path(). $model->pic);
                    }
                }
                $res = $file->store(date('Y-m'), 'public');
                Image::make(public_path('uploads/' . $res))->resize(500, 500)->save();
                $model->pic = $res;
            }
        }
        $model->cate_id = explode(':', $request->input('cate_id', 0))[1];
        $model->keyword = $request->input('keyword', '');
        $model->desc = $request->input('desc', '');
        $model->slug = $request->input('slug', '');
        $model->title = $request->input('title', '');
        $model->content = $request->input('content', '');
        $tags_temp = $request->input('tags', []);
        foreach ($tags_temp as $v) {
            $tags[] = explode(':', $v)[1];
        }
        $id = auth('admin')->user()->id;
        $model->updated_by = $id;
        $model->save();
        $model->tags()->sync($tags);
        Session::flash('flash_message','文章修改成功');
        return redirect()->route('post.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function disable(Request $request, Post $post)
    {
        $model = $post;
        $status = $request->input('status', 0) ;
        $model->updated_by = auth('admin')->user()->id;
        $model->status = $status ? 0 : 1 ;
        $model->save();
        return response()->json(['errorCode' => '0', 'errorMsg' => 'success']);
    }
}
