<!--     *********    BIG FOOTER     *********      -->
<footer class="footer footer-black footer-big">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <h5>关于我们</h5>
                    <p>{{ $desc }}</p>
                </div>
                <div class="col-md-4">
                    <h5>Social Feed</h5>
                    <div class="social-feed">
                        <div class="feed-line">
                            <i class="fa fa-weibo"></i>
                            <p>新浪微博</p>
                        </div>
                        <div class="feed-line">
                            <i class="fa fa-weixin"></i>
                            <p>微信微信</p>
                        </div>
                        <div class="feed-line">
                            <i class="fa fa-home"></i>
                            <p>我的客户端</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>友情链接</h5>
                    <div class="gallery-feed">
                        @foreach($friend_links as $k=>$friend_link)
                            <a href="{{$friend_link['url']}}" target="_blank">
                                <img src="/uploads/{{$friend_link['pic']}}" title="{{$friend_link['name']}}"
                                     class="img img-raised img-rounded" alt="{{$friend_link['name']}}">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!--BIG FOOTER （简单的footer 注册登陆可以用这个） copyright -->
        @include('layouts.partials.copyright')
    </div>
</footer>
<!--     *********   END BIG FOOTER     *********      -->