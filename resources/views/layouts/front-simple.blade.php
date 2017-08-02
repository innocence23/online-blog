<!doctype html>
<html lang="zh-cn">
<head>
    @include('layouts.partials.css')
</head>

<body class="index-page">
{{--<body class="@yield('body-class')">--}}

@include('layouts.partials.navbar')

@yield('main-content')


{{--@include('front.partials.footer')--}}
@include('layouts.partials.footer-simple')

<!--   Core JS Files   -->
@include('layouts.partials.js')


</body>
</html>