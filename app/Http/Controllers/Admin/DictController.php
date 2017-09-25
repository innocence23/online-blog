<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Dict;
use App\Models\DictBushou;
use App\Models\DictCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class DictController extends Controller
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
        $bushou_id = $request->input('bushou_id', '');
        $where = [];
        if(!empty($name)) {
            $where[] = ['jianti', 'like', '%'.$name.'%'];
        }
        if(strlen($status) != 0) {
            $where[] = ['status', '=', $status];
        }
        if(!empty($cate_id)) {
            $cate_id = explode(':', $cate_id)[1];
            $where[] = ['dict_category_id', '=', $cate_id];
        }
        if(!empty($bushou_id)) {
            $bushou_id = explode(':', $bushou_id)[1];
            $where[] = ['dict_bushou_id', '=', $bushou_id];
        }
        $curpage = ($offset / $limit) + 1;
        $res = Dict::where($where)->orderby($sort, $order)->paginate($limit, ['*'], 'page', $curpage);
        $total = $res->total();
        $rows = $res->items();
        $categories = DictCategory::pluck('name','id');
        $bushous = DictBushou::pluck('name','id');
        $users = Admin::userList();
        foreach ($rows as $k=>$v) {
            $rows[$k]['cate_name'] = $categories[$v['dict_category_id']];
            $rows[$k]['bushou_name'] = $bushous[$v['dict_bushou_id']];
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
    public function cateAndBushou()
    {
        $data['bushous'] = DictBushou::all(['id','name']);
        $data['categories'] = [];
        $categories = DictCategory::orderby('weight', 'desc')->get(['id','name', 'pid']);
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
        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dict.dicts.index');
    }

    /**
     * Display the specified resource.
     * @param Dict $dict
     * @return mixed
     */
    public function show(Dict $dict)
    {
        return $dict;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dict.dicts.create');
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
            'jianti' => 'required|unique:dicts,jianti',
            'fanti' => 'required|unique:dicts,fanti',
            'slug' => 'required|unique:dicts,slug',
            'pinyin' => 'required',
            'dict_bushou_id' => 'required',
            'dict_category_id' => 'required',
            'jiagu' => 'required|image',
            'yitizi' => 'required',
            'shuowen' => 'required',
            'jieshi' => 'required',
            'cizu' => 'required'
        ]);
        $model = new Dict();
        $file = $request->file('jiagu');
        if($file->isValid()) {
            $res = $file->store(date('Y-m'), 'public');
            Image::make(public_path('uploads/' . $res))->resize(500, 500)->save();
            $model->jiagu = $res;
        }
        $model->jianti = $request->input('jianti', '');
        $model->fanti = $request->input('fanti', '');
        $model->slug = $request->input('slug', '');
        $model->pinyin = $request->input('pinyin', '');
        $model->dict_bushou_id = explode(':', $request->input('dict_bushou_id', 0))[1];
        $model->dict_category_id = explode(':', $request->input('dict_category_id', 0))[1];
        $model->yitizi = $request->input('yitizi', '');
        $model->shuowen = $request->input('shuowen', '');
        $model->jieshi = $request->input('jieshi', '');
        $model->cizu = $request->input('cizu', '');
        $id = auth('admin')->user()->id;
        $model->created_by = $id;
        $model->updated_by = $id;
        $model->save();
        Session::flash('flash_message','字典添加成功');
        return redirect()->route('dict.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Dict $dict
     * @return \Illuminate\Http\Response
     */
    public function edit(Dict $dict)
    {
        return view('admin.dict.dicts.edit', ['id'=>$dict->id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Dict $dict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dict $dict)
    {
        $this->validate($request, [
            'jianti' => 'required|unique:dicts,jianti,'.$dict->id,
            'fanti' => 'required|unique:dicts,fanti,'.$dict->id,
            'slug' => 'required|unique:dicts,slug,'.$dict->id,
            'pinyin' => 'required',
            'dict_bushou_id' => 'required',
            'dict_category_id' => 'required',
            'jiagu' => 'image',
            'yitizi' => 'required',
            'shuowen' => 'required',
            'jieshi' => 'required',
            'cizu' => 'required'
        ]);

        $model = $dict;
        if($request->hasFile('jiagu')){
            $file = $request->file('jiagu');
            if($file->isValid()) {
                //如果跟新了图片就删除就图片
                if ($request->input('jiagu') != $model->jiagu) {
                    if (file_exists(public_path(). $model->jiagu)) {
                        unlink(public_path(). $model->jiagu);
                    }
                }
                $res = $file->store(date('Y-m'), 'public');
                Image::make(public_path('uploads/' . $res))->resize(500, 500)->save();
                $model->jiagu = $res;
            }
        }
        $model->jianti = $request->input('jianti', '');
        $model->fanti = $request->input('fanti', '');
        $model->slug = $request->input('slug', '');
        $model->pinyin = $request->input('pinyin', '');
        $model->dict_bushou_id = explode(':', $request->input('dict_bushou_id', 0))[1];
        $model->dict_category_id = explode(':', $request->input('dict_category_id', 0))[1];
        $model->yitizi = $request->input('yitizi', '');
        $model->shuowen = $request->input('shuowen', '');
        $model->jieshi = $request->input('jieshi', '');
        $model->cizu = $request->input('cizu', '');
        $id = auth('admin')->user()->id;
        $model->updated_by = $id;
        $model->save();
        Session::flash('flash_message','字典修改成功');
        return redirect()->route('dict.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Dict $dict
     * @return \Illuminate\Http\Response
     */
    public function disable(Request $request, Dict $dict)
    {
        $model = $dict;
        $status = $request->input('status', 0) ;
        $model->updated_by = auth('admin')->user()->id;
        $model->status = $status ? 0 : 1 ;
        $model->save();
        return response()->json(['errorCode' => '0', 'errorMsg' => 'success']);
    }
}
