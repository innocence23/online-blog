@extends('adminlte::page')

@section('title', 'TAG管理')

@section('content_header')
    <h1>TAG管理</h1>
    <ol class="breadcrumb">
        <li class="active">TAG管理</li>
    </ol>
@stop

@section('content')
    <div ng-app="myModule" ng-controller="myController">
        <div class="container-fluid spark-screen" >
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        标签管理
                        <button type="button" class="btn btn-info" style="margin: -6px;float: right;" ng-click="toggle('add')">
                            <i class="glyphicon glyphicon-plus"></i> 新建
                        </button>
                    </div>
                    <div class="panel-body">
                        <div class="container-fluid">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="search-name">名称</label>
                                    <input type="text" class="form-control" id="search-name" placeholder="名称" name="search-name">
                                </div>
                                <div class="form-group">
                                    <label for="search-status">状态</label>
                                    <select class="form-control" id="search-status" name="search-status">
                                        <option value="">请选择</option>
                                        <option value="0">禁用</option>
                                        <option value="1">启用</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" ng-click="btnquery()">查询</button>
                                    <input type="reset" class="btn btn-default" />
                                </div>
                            </form>
                            <hr/>
                            <table bs-table-control="bsTableControl" id="table"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal" aria-labelledby="exampleModalLabel" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="exampleModalLabel">@{{ form_title }}</h4>
                    </div>
                    <div class="modal-body">
                        <form name="myForm" id="form1" novalidate>
                            <div class="form-group" ng-class="{ 'has-error' : !myForm.name.$pristine && myForm.name.$invalid }">
                                <label for="tag-name" class="control-label">名称:</label>
                                <input type="text" class="form-control" name="name"  id="tag-name" required ng-model="tag.name">
                                <p ng-show="!myForm.name.$pristine && myForm.name.$invalid" class="help-block">不能为空</p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary" form="form1" ng-disabled="myForm.$invalid"
                                ng-click="save(modalstate, id)">保存
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
        //bootstraptable 过渡到ng-click函数
        function ngclick(row, index, value) {
            var m = '<a href="" ng-click="$parent.toggle( \'edit\', ' + index.id + ')" class="btn btn-default">修改</a>';
            var e = row == 1 ?
                '<button class="btn btn-default" type="button" ng-click="$parent.disableditem(' + row + ',' + index.id + ')">禁用</button> ' :
                '<button class="btn btn-default" type="button" ng-click="$parent.disableditem(' + row + ',' + index.id + ')">启用</button> ';
            return e + m;
        }

        angular.module('myModule', ['bsTable'])
            .controller('myController', function ($scope, $http) {

                //初始化表格
                $scope.bsTableControl = {
                    options: {
                        striped: true,                      //是否显示行间隔色
                        cache: false,                       //是否使用缓存，默认为true，所以一般情况下需要设置一下这个属性（*）
                        pagination: true,                   //是否显示分页（*）
                        sortName: 'id',
                        sortOrder: 'desc',
                        onSort: function (name, order) {
                            this.sortName = name;
                            this.sortOrder = order;
                        },
                        queryParams: function (params) { //传递参数（*）
                            return {   //这里的键的名字和控制器的变量名必须一直，这边改动，控制器也需要改成一样的
                                //search:params.search 自带的搜索框 我把自带的先隐藏了，
                                limit: params.limit,   //页面大小
                                offset: params.offset,  //页码
                                order: params.order,
                                sort: params.sort,
                                name: $("#search-name").val(),
                                status: $("#search-status").val()
                                //请求服务器数据时，你可以通过重写参数的方式添加一些额外的参数，例如 toolbar 中的参数 如果 queryParamsType = 'limit' ,返回参数必须包含
                                //limit, offset, search, sort, order 否则, 需要包含: pageSize, pageNumber, searchText, sortName, sortOrder. 返回false将会终止请求
                            };
                        },
                        sidePagination: "server",           //分页方式：client客户端分页，server服务端分页（*）
                        pageNumber: 1,                       //初始化加载第一页，默认第一页
                        pageSize:"{{$setting['bstable_line_count']}}",      //每页的记录行数（*）读取数据库配置
                        pageList: [10, 25, 50, 100],        //可供选择的每页的行数（*）
                        clickToSelect: true,                //是否启用点击选中行
                        uniqueId: "id",                     //每一行的唯一标识，一般为主键列
                        url: "{{route('tag.lists')}}",
                        columns: [{
                            field: 'id',
                            title: 'ID',
                            valign: 'middle',
                            sortable: true
                        }, {
                            field: 'name',
                            title: '名称',
                            valign: 'middle',
                            sortable: true
                        }, {
                            field: 'created_at',
                            title: '创建时间',
                            valign: 'middle',
                            sortable: true
                        }, {
                            field: 'status',
                            title: '状态',
                            valign: 'middle',
                            formatter: function (value, row, index) {
                                return value == 1 ? '正常' : '<span class="text-warning">禁用</span>';
                            }
                        }, {
                            field: 'status',
                            title: '操作',
                            align: 'center',
                            valign: 'middle',
                            formatter: ngclick
                        }]
                    }
                };

                //搜索按钮事件
                $scope.btnquery = function () {
                    $("#table").bootstrapTable('refresh', {url: "{{route('tag.lists')}}"});
                    //主要解决在不是第一页搜索的情况下 如在第二页搜索搜索不到数据，但其实第一页是有数据的
                };
                //回车搜索事件
                $('#search-name').keypress(function(event){
                    if(event.keyCode == "13")
                        $scope.btnquery();
                });
                //禁用按钮事件
                $scope.disableditem = function (status, id) {
                    swal({
                            title: "确定此操作吗？",
                            text: "",
                            type: "warning",
                            showCancelButton: true,
                            cancelButtonText: "取消",
                            confirmButtonColor: "#337ab7",
                            confirmButtonText: "确认",
                            closeOnConfirm: false
                        },
                        function () {
                            $.ajax({
                                url: '/admin/tag/' + id,
                                type: 'POST',
                                data: {
                                    status: status,
                                    _token: '{{ csrf_token() }}'
                                },
                                dataType: 'json',
                                success: function (data, textStatus, jqXHR) {
                                    swal("成功!", "", "success");
                                    $("#table").bootstrapTable('refresh');
                                },
                                error: function (xhr, textStatus) {
                                    swal("错误!", "", "error");
                                }
                            })
                        });
                };

                //添加和修改按钮ng-click触发函数
                $scope.toggle = function (modalstate, id) {
                    //避免下次第二次add时候直接输入框是红色警告的
                    $scope.myForm.$setPristine();

                    $scope.modalstate = modalstate;
                    switch (modalstate) {
                        case 'add':
                            $scope.form_title = "新建";
                            $scope.tag = {};
                            break;
                        case 'edit':
                            $scope.form_title = "修改--" + id;
                            $scope.id = id;
                            $http.get('/admin/tag/' + id)
                                .then(function successCallback(response) {
                                    $scope.tag = response.data;
                                });
                            break;
                        default:
                            break;
                    }
                    $('#myModal').modal('show');
                };

                //添加和修改保存记录
                $scope.save = function (modalstate, id) {
                    var url = "{{route('tag.store')}}";
                    var dataparam = $.param($scope.tag);
                    if (modalstate === 'edit') {
                        url += '/' + id;
                        dataparam += '&_method=put';
                    }
                    $http({
                        url: url,
                        method: "POST",
                        data: dataparam,
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).then(function successCallback(response) {
                        swal("成功", '', "success");
                        $('#myModal').modal('hide');
                        if (modalstate === 'edit') { //修改时刷新当前页
                            $("#table").bootstrapTable('refresh');
                        } else { //添加时刷新返回的第一页
                            $("#table").bootstrapTable('refresh', {url: "{{route('tag.lists')}}"});
                        }
                    }, function errorCallback(response) {
                        var errorMsg = '';
                        $.each(response.data, function(i,val){
                            errorMsg += i + ": " + val + "\n";
                        });
                        //for (i in response.data) {
                        //    errorMsg += i + ": " + response.data[i] + "\n";
                        //}
                        swal("错误", errorMsg, "error");
                    });
                };
            });
    </script>
@stop