<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

class TagController extends Controller
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
        $where = [];
        if(!empty($name)) {
            $where[] = ['name', 'like', '%'.$name.'%'];
        }
        if(strlen($status) != 0) {
            $where[] = ['status', '=', $status];
        }
        $curpage = ($offset / $limit) + 1;
        $res = Tag::where($where)->orderby($sort, $order)->paginate($limit, ['*'], 'page', $curpage);
        $total = $res->total();
        $rows = $res->items();
        $response = [
            'total' => $total,
            'rows' => $rows
        ];
        return json_encode($response);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tags.index');
    }

    /**
     * Display the specified resource.
     * @param Tag $tag
     * @return mixed
     */
    public function show(Tag $tag)
    {
        return $tag;
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
            'name' => 'required|max:10|unique:tags,name',
        ]);
        $model = new Tag();
        $model->name = $request->input('name', '');
        $id = auth('admin')->user()->id;
        $model->created_by = $id;
        $model->updated_by = $id;
        $model->save();
        return response($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, [
            'name' => 'required|max:10|unique:tags,name,'.$tag->id,
        ]);
        $model = $tag;
        $model->name = $request->input('name', '') ;
        $model->updated_by = auth('admin')->user()->id;
        $model->save();
        return response($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function disable(Request $request, Tag $tag)
    {
        $model = $tag;
        $status = $request->input('status', 0) ;
        $model->updated_by = auth('admin')->user()->id;
        $model->status = $status ? 0 : 1 ;
        $model->save();
        return response()->json(['errorCode' => '0', 'errorMsg' => 'success']);
    }
}
