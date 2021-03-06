@extends('adminlte::page')

@section('title', '文章修改')

@section('content_header')
    <h1>文章管理</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('post.index')}}"> 文章管理 </a></li>
        <li class="active">文章编辑</li>
    </ol>
@stop

@section('content')
    <div ng-app="myModule" ng-controller="myController">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> 填写的信息不完整。<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container-fluid spark-screen" >
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">类别文章</div>
                    <div class="panel-body container-fluid">
                        {{--<form name="myForm" ng-submit="save()" novalidate>--}}
                        <form name="myForm" novalidate enctype="multipart/form-data" action="{{route('post.update', $id)}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden"  name="_method" value="PUT">
                            <div class="form-group"  ng-class="{ 'has-error' : myForm.title.$dirty && myForm.title.$invalid }">
                                <label for="title" class="control-label">标题:</label>
                                <input type="text" class="form-control" name="title" id="title" required ng-model="post.title">
                                <p ng-show="myForm.title.$dirty && myForm.title.$invalid" class="help-block">不能为空</p>
                            </div>
                            <div class="form-group"  ng-class="{ 'has-error' : myForm.keyword.$dirty && myForm.keyword.$invalid }">
                                <label for="keyword" class="control-label">关键字:</label>
                                <input type="text" class="form-control" name="keyword" id="keyword" required ng-model="post.keyword">
                                <p ng-show="myForm.keyword.$dirty && myForm.keyword.$invalid" class="help-block">不能为空</p>
                            </div>
                            <div class="form-group"  ng-class="{ 'has-error' : myForm.desc.$dirty && myForm.desc.$invalid }">
                                <label for="desc" class="control-label">描述:</label>
                                <input type="text" class="form-control" name="desc" id="desc" required ng-model="post.desc">
                                <p ng-show="myForm.desc.$dirty && myForm.desc.$invalid" class="help-block">不能为空</p>
                            </div>
                            <div class="form-group"  ng-class="{ 'has-error' : myForm.cate_id.$dirty && myForm.cate_id.$invalid }">
                                <label for="cate_id" class="control-label">所属分类:</label>
                                <select chosen class="form-control" name="cate_id" id="cate_id"
                                        placeholder-text-single="'请选择分类'" no-results-text="'未找到'"
                                        required ng-model="post.cate_id"
                                        {{--ng-options="s.id as s.name for s in data.categories">--}}
                                        ng-options="s.id as s.name group by s.group for s in data.categories">
                                    <option value=""></option>
                                </select>
                                <p ng-show="myForm.cate_id.$dirty && myForm.cate_id.$invalid" class="help-block">不能为空</p>
                            </div>
                            <div class="form-group"  ng-class="{ 'has-error' : myForm['tags[]'].$dirty && myForm['tags[]'].$invalid }">
                                <label for="tags" class="control-label">所属TAG:</label>
                                <select multiple chosen class="form-control" name="tags[]" id="tags"
                                        placeholder-text-multiple="'请选择TAG'" no-results-text="'未找到'"
                                        required ng-model="post.tags" ng-options="s.id as s.name for s in data.tags">
                                    <option value=""></option>
                                </select>
                                <p ng-show="myForm['tags[]'].$dirty && myForm['tags[]'].$invalid" class="help-block">不能为空</p>
                            </div>
                            <div class="form-group"  ng-class="{ 'has-error' : myForm.slug.$dirty && myForm.slug.$invalid }">
                                <label for="slug" class="control-label">Slug:</label>
                                <input type="text" class="form-control" name="slug" id="slug" required ng-model="post.slug">
                                <p ng-show="myForm.slug.$dirty && myForm.slug.$invalid" class="help-block">不能为空</p>
                            </div>
                            <div class="form-group">
                                <label for="pic" class="control-label">头图:</label>
                                <input type="file" class="form-control" name="pic" id="pic" ng-model="post.pic">
                            </div>
                            <div class="form-group <?php if($errors->has('content')) echo 'has-error';?>" >
                                <label for="content" class="control-label">内容:</label>
                                <textarea name="content" id="editor1" rows="10" cols="80" ng-model="post.content"></textarea>
                                <p ng-show="<?php if($errors->has('content')) echo true; ?>" class="help-block">内容不能为空</p>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" ng-disabled="myForm.$invalid">保存</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .cke_dialog_ui_file, .cke_dialog_ui_input_file{
            height: 60px !important;
        }
    </style>
@stop

@section('js')
    {{--<script src="http://sdk.ckeditor.com/vendor/ckeditor/ckeditor.js" type="text/javascript"></script>--}}
    <script src="https://cdn.bootcss.com/ckeditor/4.7.2/ckeditor.js" type="text/javascript"></script>
    <script>
        CKEDITOR.replace( 'editor1', {
            extraPlugins: 'uploadimage,image2',
            language: 'zh-cn',
            height: 300,
            allowedContent: true, //解决源码切换的问题
            //filebrowserImageUploadUrl: '{{route("api.image.imageckeditor")}}',
            filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            //filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images'
        });

        angular.module('myModule', ['localytics.directives'])
            .controller('myController', function ($scope, $http) {
                $http({
                    url: "{{route('post.catetag')}}",
                    method:'GET'
                }).then(function successCallback(response) {
                    $scope.data = response.data;
                }, function errorCallback(response) {
                    swal("错误", '服务异常', "error");
                });

                $http({
                    url: "{{route('post.show', $id)}}",
                    method:'GET'
                }).then(function successCallback(response) {
                    $scope.post = response.data;
                    //console.log($scope.post);
                    //setData 是异步的
                    setTimeout(CKEDITOR.instances.editor1.setData(response.data.content), 0);
                    $("#pic").fileinput({
                        language: 'zh',
                        showUpload: false,
                        allowedFileExtensions: ['jpg','jpeg', 'png', 'gif'],
                        initialPreview: [
                            '/uploads/'+response.data.pic
                        ],
                        initialPreviewAsData: true,
                        initialCaption: response.data.pic
                    });
                }, function errorCallback(response) {
                    swal("错误", '服务数据异常', "error");
                });
            });
    </script>
@endsection