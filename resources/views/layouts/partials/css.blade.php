<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<title>@yield('html_title') | 字得其乐</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

<!--     Fonts and icons     -->
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>-->
<link href="https://cdn.bootcss.com/material-design-icons/3.0.1/iconfont/material-icons.min.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('/vendor/x_material_kit/assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('/vendor/x_material_kit/assets/css/material-kit.min.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

<link rel="stylesheet" href="{{ asset('/vendor/plugins/fancybox-3.0/dist/jquery.fancybox.min.css') }}" />
<link rel="stylesheet" href="{{ asset('/vendor/plugins/sweetalert/dist/sweetalert.css') }}" />

<style type="text/css">
    #fix-controls {
        position: fixed;
        bottom: 5%;
        margin-top: -60px;
        right: 9px;
        width: 38px;
        z-index: 6;
        background: #f6f6f6;
        border: 1px solid #ddd;
        font-size: 2rem;
    }
    .scroll-to {
        position: relative;
        display: block;
        color: #444;
        text-align: center;
        padding: 6px 0;
        border-bottom: 1px solid #ececec;
    }
</style>

@yield('css')