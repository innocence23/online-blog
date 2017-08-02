<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
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

        //\DB::enableQueryLog();
        //$res = Role::where($where)->orderby($sort, $order)->paginate($limit, $columns = ['*'], $pageName = 'page', $page = null);
        $res = Role::where($where)->orderby($sort, $order)->paginate($limit, ['*'], 'page', $curpage);
        //echo  response()->json(\DB::getQueryLog()); die;
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
        return view('admin.roles.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexold()
    {
        return view('admin.roles.indexold');
    }

    /**
     * Display the specified resource.
     * @param Role $role
     * @return mixed
     */
    public function show(Role $role)
    {
        return $role;
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
            'name' => 'required|max:10|unique:roles,name',
        ]);
        $model = new Role();
        $model->name = $request->input('name', '');
        $model->display_name = $request->input('display_name', '');
        $model->description  = $request->input('description', '');
        $model->save();
        return response($model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit', ['id'=>$role->id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request, [
            'name' => 'required|max:10|unique:roles,name,'.$role->id,
        ]);
        $model = $role;
        $model->name = $request->input('name', '');
        $model->display_name = $request->input('display_name', '');
        $model->description  = $request->input('description', '');
        $model->save();
        return response($model);
    }

    /**
     * @param Role $role
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Role $role)
    {
        // 正常删除
        $role->delete();
        // 强制删除
        $role->users()->sync([]); // 删除关联数据
        $role->perms()->sync([]); // 删除关联数据
        return response()->json(['errorCode' => '0', 'errorMsg' => 'success']);
    }
}
