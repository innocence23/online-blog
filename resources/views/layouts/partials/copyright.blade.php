<!--     *********   BIG FOOTER （简单的footer 注册登陆可以用这个） copyright   *********      -->
<ul class="pull-left">
    <li>
        <a href="{{ route('contact') }}">
            联系我们
        </a>
    </li>
    <li>
        <a href="{{ route('cooperation') }}">
            商务合作
        </a>
    </li>
    <li>
        <a href="{{ route('about') }}#join-us">
            加入我们
        </a>
    </li>
    <li>
        <a href="{{ route('help') }}">
            帮助中心
        </a>
    </li>
    <li>
        <a href="{{ route('item') }}">
            免责声明
        </a>
    </li>
</ul>
<div class="copyright pull-right">
    {{$setting['copyright']}}
</div>
<!--     *********   END BIG FOOTER  （简单的footer 注册登陆可以用这个） copyright    *********      -->