<?php

use Illuminate\Database\Seeder;

class SettingPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('single_pages')->insert([
            [
                'id' => '1',
                'type' => '1',
                'content' => "<h2>七、免责声明</h2>\n\n<p><a name=\"specialcase\"></a></p>\n\n<ul>\n	<li>1. 由于您将用户密码告知他人或与他人共享注册账户，由此导致的任何个人信息的泄漏，或其他非因堆糖原因导致的个人信息的泄漏，堆糖不承担任何法律责任；</li>\n	<li>2. 任何第三方根据堆糖规则列明的情况使用您的个人信息，由此所产生的纠纷，堆糖不承认任何法律责任；</li>\n	<li>3. 任何由于黑客攻击、电脑病毒侵入或政府管制而造成的暂时性网站关闭，堆糖不承担任何法律责任；</li>\n	<li>4. 我们鼓励用户充分利用堆糖平台自由地张贴和共享自己的信息。您可以自由张贴图片等内容，但您应拥有这些内容的使用权。同时，用户不应在自己的个人主页或社区中张贴其他受版权保护的内容。</li>\n	<li>5. 用户在堆糖发表的内容（包含但不限于堆糖目前各产品功能里的内容）仅表明其个人的立场和观点，并不代表堆糖的立场或观点。</li>\n	<li>6. 用户在堆糖发布侵犯他人知识产权或其他合法权益的内容，堆糖有权予以删除，并保留移交司法机关处理的权利。</li>\n	<li>7. 用户对于其创作并在堆糖上发布的合法内容依法享有著作权及其相关权利。</li>\n	<li>8. 互联网是一个开放平台，用户将图片等资料上传到互联网上，有可能会被其他组织或个人复制、转载、擅改或做其它非法用途，用户必须充分意识此类风险的存在。用户明确同意其使用堆糖服务所存在的风险将完全由其自己承担；因其使用堆糖服务而产生的一切后果也由其自己承担，堆糖对用户不承担任何责任。</li>\n	<li>9. 对免责声明的解释、修改及更新权均属于堆糖所有。</li>\n</ul>"
            ],
            [
                'id' => '2',
                'type' => '2',
                'content' => "<h2>&gt; 教你如何玩转堆糖</h2>\n\n<p><a href=\"javascript:;\">1、堆糖怎么玩?我在这里可以做些什么?</a></p>\n\n<p><a href=\"javascript:;\">2、怎样才能快速找到自己喜欢的图片？</a></p>\n\n<p><a href=\"javascript:;\">3、收集图片有什么用？收集过的图片在哪里可以看到？</a></p>\n\n<p><a href=\"javascript:;\">4、专辑有什么用?为什么要创建专辑?</a></p>\n\n<p><a href=\"javascript:;\">5、堆糖的东西可以买吗?怎么买呢?</a></p>\n\n<p><a href=\"javascript:;\">6、怎样才能被更多人关注?</a></p>\n\n<p><a href=\"javascript:;\">7、怎样才能得到星星?星星有什么用?</a></p>\n\n<p><a href=\"javascript:;\">8、怎样修改个人主页的头图，对图片有哪些要求？<b>HOT</b></a></p>\n\n<h2>&gt; 堆糖常见问题FAQ</h2>\n\n<p><a href=\"javascript:;\">1、头像保存不了怎么办？</a></p>\n\n<p><a href=\"javascript:;\">2、怎么修改图片所在专辑？怎样删除不想要的图片？</a></p>\n\n<p><a href=\"javascript:;\">3、合作网站账号登录、注册和账号绑定之间的关系是什么？</a></p>\n\n<p><a href=\"javascript:;\">4、忘记密码怎么办？</a></p>\n\n<p><a href=\"javascript:;\">5、如何修改自己的密码？</a></p>\n\n<p><a href=\"javascript:;\">6、到哪里可以改名字？</a></p>\n\n<p><a href=\"javascript:;\">7、我想注销我的堆糖账号怎么操作？</a></p>\n\n<p><a href=\"javascript:;\">8、账号被封了怎么办？为什么会被封？</a></p>\n\n<h2>&gt; 堆糖近期热门问题</h2>\n\n<p><a href=\"javascript:;\">1、怎么举报不良图片内容？</a></p>\n\n<p><a href=\"javascript:;\">2、堆糖出现问题联系谁？</a></p>\n\n<p><a href=\"javascript:;\">3、商务合作、入驻良品购如何联系？</a></p>\n\n<p><a href=\"javascript:;\" name=\"albumrec\">4、你的专辑也能上首页，快来自荐专辑吧！</a></p>\n\n<p><a href=\"javascript:;\" name=\"albumrec\">5、我们需要帮助！专辑玩法大募集！</a></p>"
            ],
            [
                'id' => '3',
                'type' => '3',
                'content' => "<div class=\"about-description text-center\">\n<div class=\"row\">\n<div class=\"col-md-8 col-md-offset-2\">\n<h5 class=\"description\">堆糖，堆积生活中的一切美好，帮你收集和组织你喜欢的图片与物品。你可以用堆糖收集网络上你喜欢的图片和商品，保存你的设计灵感、计划你的旅行、准备你的换季购物清单。 更多玩法等待大家与我们分享！</h5>\n</div>\n</div>\n</div>\n\n<div class=\"about-team team-1\">\n<div class=\"row\">\n<div class=\"col-md-8 col-md-offset-2 text-center\">\n<h2 class=\"title\">我们的团队或证书</h2>\n\n<h5 class=\"description\">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-md-3\">\n<div class=\"card card-profile card-plain\">\n<div class=\"card-avatar\"><a href=\"#pablo\"><img alt=\"\" class=\"img\" src=\"{{ asset(\'/dist/avatar.jpg\') }}\" /> </a></div>\n\n<div class=\"content\">\n<h4 class=\"card-title\">Alec Thompson</h4>\n\n<h6 class=\"category text-muted\">CEO / Co-Founder</h6>\n\n<p class=\"card-description\">And I love you like Kanye loves Kanye. We need to restart the human foundation.</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n\n<div class=\"about-services features-2\">\n<div class=\"row\">\n<div class=\"col-md-8 col-md-offset-2 text-center\">\n<h2 class=\"title\">我们的产品领域</h2>\n\n<h5 class=\"description\">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information.</h5>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<div class=\"info info-horizontal\">\n<div class=\"icon icon-rose\"><i class=\"material-icons\">gesture</i></div>\n\n<div class=\"description\">\n<h4 class=\"info-title\">1. Design</h4>\n\n<p>The moment you use Material Kit, you know you&rsquo;ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.</p>\n<a href=\"#pablo\">Find more...</a></div>\n</div>\n</div>\n\n<div class=\"col-md-4\">\n<div class=\"info info-horizontal\">\n<div class=\"icon icon-rose\"><i class=\"material-icons\">build</i></div>\n\n<div class=\"description\">\n<h4 class=\"info-title\">2. Develop</h4>\n\n<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>\n<a href=\"#pablo\">Find more...</a></div>\n</div>\n</div>\n\n<div class=\"col-md-4\">\n<div class=\"info info-horizontal\">\n<div class=\"icon icon-rose\"><i class=\"material-icons\">mode_edit</i></div>\n\n<div class=\"description\">\n<h4 class=\"info-title\">3. Make Edits</h4>\n\n<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>\n<a href=\"#pablo\">Find more...</a></div>\n</div>\n</div>\n</div>\n</div>\n\n<div class=\"about-office\">\n<div class=\"row  text-center\">\n<div class=\"col-md-8 col-md-offset-2\">\n<h2 class=\"title\">我们的推荐或我们的环境</h2>\n\n<h4 class=\"description\">Here are some pictures from our office. You can see the place looks like a palace and is fully equiped with everything you need to get the job done.</h4>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-md-4\"><img alt=\"Raised Image\" class=\"img-rounded img-responsive img-raised\" height=\"400\" src=\"/ckuploadfiles/images/card-profile1-square(1).jpg\" width=\"400\" /></div>\n\n<div class=\"col-md-4\"><img alt=\"Raised Image\" class=\"img-rounded img-responsive img-raised\" src=\"{{ asset(\'/dist/avatar.jpg\') }}\" /></div>\n\n<div class=\"col-md-4\"><img alt=\"Raised Image\" class=\"img-rounded img-responsive img-raised\" src=\"{{ asset(\'/dist/avatar.jpg\') }}\" /></div>\n</div>\n</div>"
            ],
            [
                'id' => '4',
                'type' => '4',
                'content' => "<h3>商务合同</h3>\n随着现代商务活动的日益频繁，社会对商务合同的需要也越来越迫切。\n\n<p>《中华人民共和国合同法》第二条规定：&ldquo;合同是平等主体的自然人、法人、其他组织之间设立、变更、终止民事权利义务关系的协议&rdquo;。商务合同是指有关各方之间在进行某种商务合作时，为了确定各自的权利和义务，而正式依法订立的、并且经过公证的、必须共同遵守的协议条文。</p>\n\n<p>商务合同是一种通用合同。在国际贸易中，若双方对合同货物无特殊要求的条件下，一般都采用商业合同的内容和形式。</p>\n随着现代商务活动的日益频繁，社会对商务合同的需要也越来越迫切。\n\n<p>《中华人民共和国合同法》第二条规定：&ldquo;合同是平等主体的自然人、法人、其他组织之间设立、变更、终止民事权利义务关系的协议&rdquo;。商务合同是指有关各方之间在进行某种商务合作时，为了确定各自的权利和义务，而正式依法订立的、并且经过公证的、必须共同遵守的协议条文。</p>\n\n<p>商务合同是一种通用合同。在国际贸易中，若双方对合同货物无特殊要求的条件下，一般都采用商业合同的内容和形式。</p>\n随着现代商务活动的日益频繁，社会对商务合同的需要也越来越迫切。\n\n<p>《中华人民共和国合同法》第二条规定：&ldquo;合同是平等主体的自然人、法人、其他组织之间设立、变更、终止民事权利义务关系的协议&rdquo;。商务合同是指有关各方之间在进行某种商务合作时，为了确定各自的权利和义务，而正式依法订立的、并且经过公证的、必须共同遵守的协议条文。</p>\n\n<p>商务合同是一种通用合同。在国际贸易中，若双方对合同货物无特殊要求的条件下，一般都采用商业合同的内容和形式。</p>"
            ]
        ]);
    }
}
