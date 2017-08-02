<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>fullPage.js — 项目导航演示 - 懒人建站http://www.51xuediannao.com/</title>
    <link rel="stylesheet" href="css/jquery.fullPage.css">
    <style>body,h1,h2,h3,h4,h5,h6,hr,p,blockquote,dl,dt,dd,ul,ol,li,pre,form,fieldset,legend,button,input,textarea,th,td,img{border:medium none;margin:0;padding:0}body,button,input,select,textarea{font-family:arial,"\534e\6587\7ec6\9ed1"}h1,h2,h3,h4,h5,h6{font-size:100%}em{font-style:normal}ul,ol{list-style:none}a{text-decoration:none;color:#333}a:hover{text-decoration:underline;color:#F40}table{border-collapse:collapse;border-spacing:0}html,body{height:100%}h1{font-size:50px;color:#333}h2{font-size:40px;color:#333}h3{font-size:28px;color:#666}p{font-size:16px;color:#999}p span{padding:0 5px}.section{position:relative}.b1{text-align:center;z-index:80}.b1 h1{position:relative;z-index:5;line-height:41px;padding-top:40px;transition:padding 1s ease 0s}.b1 p{position:relative;z-index:5;line-height:92px;transition:line-height 1s ease 0s}.b1 a{position:relative;z-index:5;background-image:url(http://p1.qhimg.com/t01757ab91ef5d8832f.png);background-repeat:no-repeat;position:absolute;bottom:70px;left:50%;margin-left:-23px;display:inline-block;width:45px;height:21px;background-position:0 0;transition:bottom 1s ease 0s}.b1 a:hover{background-position:0 -57px}.b1 a:active{background-position:0 -110px}.b1 img{width:203px;height:398px}.b1 p{font-size:18px}.b2,.b3{text-align:center;padding-top:220px}.b2 h2{padding:50px 0 20px 0}.b2 p,.b3 p{width:823px;margin:0 auto;line-height:28px}.b2 .img-wrap{width:982px;position:absolute;top:50%;left:50%;margin:-195px 0 0 -496px}.b2 img{margin:0 2px;width:320px;height:219px}.b3 h2{padding:325px 0 10px 0}.b3 .img-wrap{position:absolute;width:823px;top:50%;left:50%;margin:-206px 0 0 -411px}.b3 img{position:absolute;top:0;left:20px}.b3 .txt img{display:none}.b4 .wrap{width:1024px;position:absolute;top:50%;margin:-270px 0 0 -512px;left:50%}.b4 h2{padding-bottom:10px}.b4 img{float:left}.b4 p{padding-bottom:30px;line-height:30px}.b4 .txt-wrap{float:right;width:470px;margin-top:110px}.b5 img{float:right}.b5 .txt-wrap{float:left}.b8 span{background:url(http://p1.qhimg.com/t01757ab91ef5d8832f.png) no-repeat -71px 0;display:inline-block;width:70px;height:70px;float:left}.b8 .s1{background-position:-182px 0}.b8 .s2{background-position:-71px -110px}.b8 .s3{background-position:-182px -110px}.b8 .s4{background-position:-71px -220px}.b8 .s5{background-position:-182px -220px}.b8 ul{width:934px;position:absolute;top:50%;left:50%;margin:-175px 0 0 -512px}.b8 li{float:left;width:50%;height:170px}.b8 .txt-wrap{float:left;margin-left:20px;width:350px}.b9 a{color:#9365f0;font-size:16px}.b10{text-align:center}.b10 h1{padding:50px 0 10px}.b10 p{line-height:27px;padding-bottom:40px}.b10 a.survey,.b10 a.reserve{font-size:16px;color:#fff;text-decoration:none;display:inline-block;width:137px;height:46px;line-height:46px;background-color:#3b6198}.b10 a.survey{background-image:url(http://p1.qhimg.com/t01757ab91ef5d8832f.png);background-repeat:no-repeat;background-position:-257px -59px;padding-left:24px;width:113px;margin-left:5px}.b10 a.survey:hover{background-color:#4976b9}.b10 a.survey:active{background-color:#305387}.b10 a.reserve{background-color:#4c0ec5}.b10 a.reserve:hover{background-color:#5c16e5}.b10 a.reserve:active{background-color:#4612b0}.b10 .list{display:block;font-size:18px;color:#999;line-height:35px;padding-left:27px;background:url(http://p1.qhimg.com/t01757ab91ef5d8832f.png) no-repeat -283px -22px;width:187px;margin:0 auto}.b10 .list.end{margin-bottom:40px}.b10 .list.selected{background-position:-283px 8px}@media(max-height:728px){.b1 h1{padding:30px 0 10px 0}.b1 a{bottom:0}.b10 h1{padding-top:0}.b10 .list.end{margin-bottom:0}}#superContainer{height:100%;position:relative;-ms-touch-action:none;touch-action:none}.fp-section{position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.fp-slide{float:left}.fp-slide,.fp-slidesContainer{height:100%;display:block}.fp-slides{z-index:1;height:100%;overflow:hidden;position:relative;-webkit-transition:all .3s ease-out;transition:all .3s ease-out}.fp-section.fp-table,.fp-slide.fp-table{display:table;table-layout:fixed;width:100%}.fp-tableCell{display:table-cell;vertical-align:middle;width:100%;height:100%}.fp-slidesContainer{float:left;position:relative}.fp-controlArrow{position:absolute;z-index:4;top:50%;cursor:pointer;width:0;height:0;border-style:solid;margin-top:-38px}.fp-controlArrow.fp-prev{left:15px;width:0;border-width:38.5px 34px 38.5px 0;border-color:transparent #fff transparent transparent}.fp-controlArrow.fp-next{right:15px;border-width:38.5px 0 38.5px 34px;border-color:transparent transparent transparent #fff}.fp-scrollable{overflow:scroll}.fp-notransition{-webkit-transition:none!important;transition:none!important}#fp-nav{position:fixed;z-index:100;margin-top:-32px;top:50%;opacity:1}#fp-nav.right{right:17px}#fp-nav.left{left:17px}.fp-slidesNav{position:absolute;z-index:4;left:50%;opacity:1}.fp-slidesNav.bottom{bottom:17px}.fp-slidesNav.top{top:17px}#fp-nav ul,.fp-slidesNav ul{margin:0;padding:0}#fp-nav ul li,.fp-slidesNav ul li{display:block;width:14px;height:13px;margin:7px;position:relative}.fp-slidesNav ul li{display:inline-block}#fp-nav ul li a,.fp-slidesNav ul li a{display:block;position:relative;z-index:1;width:100%;height:100%;cursor:pointer;text-decoration:none}#fp-nav ul li a.active span,.fp-slidesNav ul li a.active span{background-position:2px -185px}#fp-nav ul li a span,.fp-slidesNav ul li a span{top:2px;left:2px;background:rgba(0,0,0,0);position:absolute;z-index:1;width:18px;height:18px;background:url(http://p1.qhimg.com/t01757ab91ef5d8832f.png) no-repeat 4px -158px}#fp-nav ul li .fp-tooltip{position:absolute;top:-2px;color:#fff;font-size:14px;font-family:arial,helvetica,sans-serif;white-space:nowrap;max-width:220px;overflow:hidden;display:block;opacity:0;width:0}#fp-nav ul li:hover .fp-tooltip{-webkit-transition:opacity .2s ease-in;transition:opacity .2s ease-in;width:auto;opacity:1}#fp-nav ul li .fp-tooltip.right{right:20px}#fp-nav ul li .fp-tooltip.left{left:20px}.sky{width:100%;position:absolute;top:0;left:0;height:100%}.sky .track{position:relative;width:112px;margin:247px auto 0 auto}.sky .track .img-top,.sky .track .img-bottom{z-index:2;position:relative;height:69px;-webkit-mask-image:url(http://p7.qhimg.com/t014c8ce65a705bb8df.png);background:url(http://p1.qhimg.com/t0161daaae35eb7b787.png) no-repeat 0 0}.sky .track .img-top{-webkit-mask-position-x:-113px}.sky .track .img-bottom{background-position:0 0;background-position:0 -69px;-webkit-mask-position-x:-145px}.sky .star{*display:none;position:absolute;top:0;left:0;width:100%;height:100%;background-color:#0a1a21;background-repeat:repeat;background-position:center top;background-size:cover;background-image:url(http://p0.qhimg.com/t016471d7b900d34da8.jpg)}@-webkit-keyframes rotate{from{-webkit-transform:rotate(0deg)}to{-webkit-transform:rotate(360deg)}}@-moz-keyframes rotate{from{-moz-transform:rotate(0deg)}to{-moz-transform:rotate(360deg)}}@-o-keyframes rotate{from{-o-transform:rotate(0deg)}to{-o-transform:rotate(360deg)}}@keyframes rotate{from{transform:rotate(0deg)}to{transform:rotate(360deg)}}.star-top,.star-bottom{z-index:6;-webkit-animation:rotate 2s linear infinite;-moz-animation:rotate 2s linear infinite;-o-animation:rotate 2s linear infinite;animation:rotate 2s linear infinite;display:none;width:34px;height:34px;position:absolute;top:30px;left:95px;background:url(http://p7.qhimg.com/t01400d01ae0a78a7ac.png) no-repeat 0 0}.star-bottom{top:54px;left:-19px;-webkit-animation:rotate 1.5s linear infinite;-moz-animation:rotate 1.5s linear infinite;-o-animation:rotate 1.5s linear infinite;animation:rotate 1.5s linear infinite}.sky .mask{display:none;position:absolute;top:14px;left:0;width:116;height:116px}.sky .bg1,.sky .bg2{width:116px;height:116px;position:absolute;top:0;left:0}.sky .bg1{background:url(http://p5.qhimg.com/t014a1f0da93d8dce71.png);-webkit-animation:rotate 5s linear infinite;-moz-animation:rotate 5s linear infinite;-o-animation:rotate 5s linear infinite;animation:rotate 5s linear infinite;z-index:3}.sky .bg2{background:url(http://p4.qhimg.com/t010a284d188d12d562.png);-webkit-animation:rotate 8s linear infinite;-moz-animation:rotate 8s linear infinite;-o-animation:rotate 8s linear infinite;animation:rotate 8s linear infinite}.sky .ball{display:none;background:url(http://p7.qhimg.com/t01b74e480896ad5024.png) no-repeat 0 0;width:116px;height:116px;position:absolute;top:14px;left:0;z-index:5}.submit{position:absolute;top:0;left:0;width:100%;height:100%;display:none}.submit .bg{width:100%;height:100%;opacity:.5;background:#000;filter:alpha(opacity=50)}.submit .wrap{position:relative;width:700px;height:510px;background-color:#fff;border-radius:4px;position:absolute;top:50%;left:50%;margin:-210px 0 0 -350px;text-align:center}.submit div{font-size:18px;color:#999;height:63px}.submit .xc{position:absolute;top:-118px;left:223px;display:none}.submit .txt{width:244px;border-bottom:1px solid #ccc;margin-left:8px;color:#666;font-size:18px;outline:0}.submit .txt:focus{border-bottom:1px solid #999}.submit .s{width:150px;height:50px;display:block;margin:0 auto;font-size:18px;color:#fff;background-color:#4b0dc4;cursor:pointer}.submit .s:hover{background-color:#5b15e4}.submit .s:active{background-color:#4511af}.submit .s.disabled{background-color:#ccc;outline:0}.submit .warning{opacity:.8;filter:alpha(opacity=80);display:none;position:absolute;z-index:10;background:#7d0000;top:50%;left:50%;width:370px;height:90px;border-radius:10px;margin:-45px 0 0 -185px;line-height:90px;color:#fff;box-shadow:2px 2px 2px rgba(0,0,0,0.3)}.submit .close{display:block;width:25px;height:25px;position:absolute;top:20px;right:20px;background:url(http://p1.qhimg.com/t01757ab91ef5d8832f.png) no-repeat -280px -120px}.submit .title{color:#933;font-size:34px;margin-top:117px}.submit .desc{padding:20px 40px 40px 40px;line-height:30px;font-size:18px}#fp-nav{display:none}#section8 p{padding-top:5px}
    </style>
    <script src="http://blog.app/vendor/x_material_kit/assets/js/jquery.min.js"></script>
    <script src="http://s0.qhimg.com/!61f821bf/fullpage.js"></script>
    <script>
        $(function(){
            $('#fullpage').fullpage({
                //sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90'],
                'navigation': true
            });
        });
    </script>
</head>

<body>

    <div id="fullpage">
        <div id="section1" class="section b1">
            <div class="sky">
                <div class="star">
                    <div class="track">
                        <div class="img-top"></div>
                        <div class="img-bottom"></div>
                        <div class="star-top"></div>
                        <div class="star-bottom"></div>
                    </div>
                </div>
                <div class="track back-ball">
                    <div class="ball"></div>
                    <div class="mask">
                        <div class="bg1"></div>
                        <div class="bg2"></div>
                    </div>
                </div>
            </div>
            <img src="http://p2.qhimg.com/t017b56ff3f628eec9f.png">
            <h1  class="web-font">人鱼泪珠</h1>
            <p>好搜全新次世代智能搜索惊艳之作</p>
            <p style="color:#bbb">2015 夏季心动上市</p>
            <a href="javascript:;"></a>
        </div>
        <div id="section2" class="section b4">
            <div class="wrap">
                <img src="http://p3.qhimg.com/t01f1a2688fb76558ca.jpg">
                <div class="txt-wrap">
                    <h2 class="web-font">你的最佳逛街闺蜜</h2>
                    <p>当你在购物中心、专卖店购买一款服装时，你可以轻轻敲击人鱼泪珠，启动扫描功能，人鱼泪珠会告诉你更实惠的价格和购买地点。</p>
                    <p><span>·</span>对准衣物扫描，识别服装并告诉你最佳的购买地点<br><span>·</span>自动帮你寻找附近类似的服装、配饰以及最优价格<br><span>·</span>你可以通过手机端APP一键下单购买</p>
                </div>
            </div>
        </div>
        <div id="section3" class="section b4 b5">
            <div class="wrap">
                <img src="http://p9.qhimg.com/t011a5ee6d7fa27171d.jpg">
                <div class="txt-wrap">
                    <h2 class="web-font">舌尖上的食材顾问</h2>
                    <p>当你从超市购买新鲜食材放入家中冰箱时，你可以轻轻敲击人鱼泪珠，她自动开启扫描功能，她可以轻松录入冰箱类所有食材信息。</p>
                    <p><span>·</span>自动扫描冰箱食物条形码，记录食品名称及保质期<br><span>·</span>分析你的营养记录，自动帮你生成营养菜谱<br><span>·</span>帮你预定O2O业内大厨，上门帮你烧菜，下班即可享用</p>
                </div>
            </div>
        </div>
        <div id="section4" class="section b4">
            <div class="wrap">
                <img src="http://p2.qhimg.com/t014ffd60801b35c5bb.jpg">
                <div class="txt-wrap">
                    <h2 class="web-font">智能家居的连接核心</h2>
                    <p>人鱼泪珠与市场上主流智能家居连接，您可随时了解家中智能硬件反馈的数据，更可远程控制家中智能产品，遇紧急事件，人鱼泪珠会振动提醒。</p>
                    <p><span>·</span>聚会结束到家前，轻轻敲击人鱼泪珠，可开启家中热水器<br><span>·</span>发生燃气泄漏或者陌生人闯入等危险事件，人鱼泪珠会主动报警<br><span>·</span>利用前置摄像头可轻松与家中老人或宠物远程互动</p>
                </div>
            </div>
        </div>
        <div id="section5" class="section b4 b5">
            <div class="wrap">
                <img src="http://p6.qhimg.com/t019f2becad60be2f0a.jpg">
                <div class="txt-wrap">
                    <h2 class="web-font">你最华丽的运动装备</h2>
                    <p>轻轻敲击人鱼泪珠，开始新一天的运动，当你锻炼或开启心率 Glance 时，她能凭红外线和可见光 LED 以及感光器来检测你的心率。人鱼泪珠可以全面展现你的锻炼和日常运动情况，为你建议个人运动目标，并在你达标时给予奖励。</p>
                    <p><span>·</span>为你制定最合理的运动方案<br><span>·</span>给你推荐周围最佳的锻炼场地<br><span>·</span>实时的天气、空气、温度、服装建议</p>
                </div>
            </div>
        </div>
        <div id="section6" class="section b8">
            <ul>
                <li>
                    <span></span>
                    <div class="txt-wrap">
                        <h3 class="web-font">IP67级防水级别</h3>
                        <p>根据国际 IP67 防尘防水标准制造可佩戴淋浴，无需摘下</p>
                    </div>
                </li>
                <li>
                    <span class="s1"></span>
                    <div class="txt-wrap">
                        <h3 class="web-font">超长待机时间</h3>
                        <p>使用微型纽扣电池，无需充电，待机时长达2个月</p>
                    </div>
                </li>
                <li>
                    <span class="s2"></span>
                    <div class="txt-wrap">
                        <h3 class="web-font">低功耗蓝牙4.0</h3>
                        <p>采用微型蓝牙4.0模块，传输更宽，耗电更低</p>
                    </div>
                </li>
                <li>
                    <span class="s3"></span>
                    <div class="txt-wrap">
                        <h3 class="web-font">佩戴舒适</h3>
                        <p>主体部分仅重4.2克，直径4.8毫米，佩戴极其舒适</p>
                    </div>
                </li>
                <li>
                    <span class="s4"></span>
                    <div class="txt-wrap">
                        <h3 class="web-font">固件无线升级</h3>
                        <p>通过蓝牙自动升级固件，免去插线烦恼</p>
                    </div>
                </li>
                <li>
                    <span class="s5"></span>
                    <div class="txt-wrap">
                        <h3 class="web-font">极致工艺</h3>
                        <p>克什米尔蓝宝石切割而成，搭配18k玫瑰金打造</p>
                    </div>
                </li>
            </ul>
        </div>
        <div id="section7" class="section b4 b5 b9">
            <div class="wrap">
                <img src="http://p9.qhimg.com/t018be488476fb14d3b.jpg">
                <div class="txt-wrap">
                    <h2 class="web-font">开放平台</h2>
                    <p>人鱼泪珠配备了多项传感器和微型摄像头，可随时传递丰富的数据给第三方。开发者根据好搜提供的强大 SDK 可轻易地开发应用。强大的软硬件结合体系，又与用户如此贴近，这为第三方开发者带来激动人心的机遇。</p>
                </div>
            </div>
        </div>
    </div>


</body>
</html>