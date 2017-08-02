<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SinglePage;

class SinglePageController extends Controller
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
        $res = SinglePage::where($where)->orderby($sort, $order)->paginate($limit, ['*'], 'page', $curpage);
        $total = $res->total();
        $rows = $res->items();

        $single_type = config('setting.single_type');
        foreach ($rows as $k=>$v){
            $rows[$k]['content'] = mb_substr(strip_tags($v['content']), 0, 30) .'……';
            $rows[$k]['type'] = $single_type[$v['type']];
        }
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
        return view('admin.single-pages.index');
    }

    /**
     * Display the specified resource.
     * @param SinglePage $single_page
     * @return mixed
     */
    public function show(SinglePage $single_page)
    {
        return $single_page;
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
            'type' => 'required|numeric|unique:single_pages,type',
            'content' => 'required'
        ]);

        $model = new SinglePage();
        $model->type = $request->input('type', '');
        $model->content = $request->input('content', '');
        $model->save();
        return response($model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  SinglePage $single_page
     * @return \Illuminate\Http\Response
     */
    public function edit(SinglePage $single_page)
    {
        return view('admin.single_pages.edit', ['id'=>$single_page->id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  SinglePage $single_page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SinglePage $single_page)
    {
        $this->validate($request, [
            'type' => 'required|numeric|unique:single_pages,type,'.$single_page->id,
            'content' => 'required'
        ]);
        $model = $single_page;
        $model->type = $request->input('type', '');
        $model->content = $request->input('content', '');
        $model->save();
        return response($model);
    }
}
