<?php

namespace App\Http\Controllers\Admin;

use App\Models\DictCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redis;

class DictCategoryController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function getLists(Request $request)
    {
        $res = DictCategory::orderby('weight', 'desc')->get();
        return json_encode($res);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dict.categories.index');
    }

    /**
     * Display the specified resource.
     * @param DictCategory $category
     * @return mixed
     */
    public function show(DictCategory $category)
    {
        return $category;
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
            'name' => 'required|max:8|unique:dict_categories,name',
        ]);
        $model = new DictCategory();
        foreach ($request->all() as $k=>$v ) {
            if ($v && $k != '_method')
                $model->$k = $v ;
        }
        $id = auth('admin')->user()->id;
        $model->created_by = $id;
        $model->updated_by = $id;
        $model->save();
        //更新缓存
        Redis::DEL('dict_category_info');
        return response($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  DictCategory $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DictCategory $category)
    {
        $this->validate($request, [
            'name' => 'required|max:8|unique:dict_categories,name,'.$category->id,
        ]);
        $model = $category;
        foreach ($request->all() as $k=>$v ) {
            if ($v && $k != '_method')
                $model->$k = $v ;
        }
        $model->updated_by = auth('admin')->user()->id;
        $model->save();
        //更新缓存
        Redis::DEL('dict_category_info');
        return response($model);
    }

    /**
     * order weight
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
        $target_pid = $request->input('targetPid', 0);
        $id = $request->input('node_id', '');
        $ids = $request->input('ids', '');
        //修改拖拽节点的从属关系
        $model = DictCategory::find($id);
        $model->pid = $target_pid ;
        $model->save();
        //修改拖拽节点后节点的排序权重处理
        $ids = trim($ids, ',');
        $ids = explode(',', $ids);
        $weight = count($ids);
        foreach ($ids as $k=>$v) {
            $model = DictCategory::find($v);
            $model->weight = $weight-- ;
            $res = $model->save();
        }
        //更新缓存
        Redis::DEL('dict_category_info');
        return response($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  DictCategory $category
     * @return \Illuminate\Http\Response
     */
    public function disable(Request $request, DictCategory $category)
    {
        $model = $category;
        $status = $request->input('status', 0) ;
        $model->status = $status ? 0 : 1 ;
        $model->save();
        return response()->json(['errorCode' => '0', 'errorMsg' => 'success']);
        //更新缓存
        Redis::DEL('dict_category_info');
    }
}
