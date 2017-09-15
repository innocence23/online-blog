<script src="{{ asset('/vendor/x_material_kit/assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/vendor/x_material_kit/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/vendor/x_material_kit/assets/js/material.min.js') }}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{ asset('/vendor/x_material_kit/assets/js/material-kit-1.js') }}" type="text/javascript"></script>
{{--<script src="http://demos.creative-tim.com/material-kit-pro/assets/js/material-kit.min.js?v=1.1.1" type="text/javascript"></script>--}}
<script src="{{ asset('/vendor/plugins/sweetalert/dist/sweetalert.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/vendor/plugins/fancybox-3.0/dist/jquery.fancybox.min.js') }}" type="text/javascript"></script>
<script>
    $(function () {
        $('.scroll-top').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
        $('.scroll-bottom').click(function(){$('html,body').animate({scrollTop:$('.copyright').offset().top}, 800);});
    })
</script>
@yield('js')