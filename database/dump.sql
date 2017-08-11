/*
Navicat MySQL Data Transfer

Source Server         : homestead
Source Server Version : 50718
Source Host           : localhost:33060
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-08-11 18:33:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', '莞尔', 'admin@admin.com', '$2y$10$CihROLiupOfgXeHM1ZNRQeD0dL2HCmt0dXZTlzhLUb9L9PUX5j3.G', null, '2017-08-11 16:59:49', '2017-08-11 16:59:56', '1');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父子关系',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '名称',
  `created_by` int(10) unsigned NOT NULL,
  `updated_by` int(10) unsigned NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `weight` tinyint(4) NOT NULL DEFAULT '0' COMMENT '排序',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '999999',
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `support` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_index` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------

-- ----------------------------
-- Table structure for friend_links
-- ----------------------------
DROP TABLE IF EXISTS `friend_links`;
CREATE TABLE `friend_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'url唯一标记',
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL DEFAULT '0',
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `friend_links_url_unique` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of friend_links
-- ----------------------------
INSERT INTO `friend_links` VALUES ('1', 'lofter', 'http://www.lofter.com/', '2017-07/sNgpnpqpuK7ZUQoEnXYidFIJ76R9IXtNExSFVESE.jpeg', '网易lofter', '1', '网易lofter', '1', '2017-08-11 17:20:56', '2017-08-11 17:20:58');
INSERT INTO `friend_links` VALUES ('2', '推搪', 'https://www.duitang.com/', '2017-07/T9K04A87zneQ1ONq5zktauHFiLMnij3rdSAy3GqD.png', '推搪', '1', '推搪', '1', '2017-08-11 17:21:01', '2017-08-11 17:21:02');
INSERT INTO `friend_links` VALUES ('3', '象形字典', 'http://www.vividict.com/', '2017-07/WVYl2aqB5rKLkac4fwwGnoo4gg2IkxSqCBL4iJ3j.jpeg', '象形字典', '1', '象形字典', '1', '2017-08-11 17:21:06', '2017-08-11 17:21:08');
INSERT INTO `friend_links` VALUES ('4', '字得其乐', 'http://www.zzideqile.com/', '2017-07/AzgNh5sMDWWAr3lew7Cvm3KmtgGUUIZC1dvasq2Y.jpeg', '字得其乐', '1', '字得其乐', '1', '2017-08-11 17:21:11', '2017-08-11 17:21:14');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '菜单关系',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '菜单链接地址',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '菜单名称',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'material-icons图标',
  `weight` tinyint(4) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', '0', '/home', '首页', 'home', '5', '1', null, '2017-08-11 09:17:12');
INSERT INTO `menus` VALUES ('2', '0', '/blogs', '博客', 'view_quilt', '4', '1', null, '2017-08-11 09:17:12');
INSERT INTO `menus` VALUES ('3', '0', '/tops', '排行', 'whatshot', '3', '1', null, '2017-08-11 09:17:12');
INSERT INTO `menus` VALUES ('4', '6', '/app', 'APP', 'apps', '7', '1', null, '2017-08-11 09:19:08');
INSERT INTO `menus` VALUES ('5', '6', '/single', '专题', 'art_track', '6', '1', null, '2017-08-11 09:15:29');
INSERT INTO `menus` VALUES ('6', '0', 'other', '其他', 'view_carousel', '1', '1', null, '2017-08-11 09:17:12');
INSERT INTO `menus` VALUES ('7', '6', '/about', '关于我们', 'account_balance', '5', '1', null, '2017-08-11 09:15:29');
INSERT INTO `menus` VALUES ('8', '6', '/contact', '联系我们', 'location_on', '4', '1', null, '2017-08-11 09:15:29');
INSERT INTO `menus` VALUES ('9', '6', '/item', '条款', 'local_cafe', '3', '1', null, '2017-08-11 09:15:29');
INSERT INTO `menus` VALUES ('10', '6', '/search', '搜索', 'search', '2', '1', null, '2017-08-11 09:15:29');
INSERT INTO `menus` VALUES ('11', '6', '/products', '购物车', 'shopping_cart', '1', '1', null, '2017-08-11 09:15:29');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('28', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('29', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('30', '2017_01_17_025328_create_posts_table', '1');
INSERT INTO `migrations` VALUES ('31', '2017_01_17_025525_create_tags_table', '1');
INSERT INTO `migrations` VALUES ('32', '2017_01_17_025541_create_post_tag_table', '1');
INSERT INTO `migrations` VALUES ('33', '2017_01_17_033607_create_comments_table', '1');
INSERT INTO `migrations` VALUES ('34', '2017_02_07_183751_entrust_setup_tables', '1');
INSERT INTO `migrations` VALUES ('35', '2017_02_23_091518_create_table_friend_links', '1');
INSERT INTO `migrations` VALUES ('36', '2017_02_23_091540_create_table_settings', '1');
INSERT INTO `migrations` VALUES ('37', '2017_02_23_101152_create_single_pages_table', '1');
INSERT INTO `migrations` VALUES ('38', '2017_03_08_075641_create_menus_table', '1');
INSERT INTO `migrations` VALUES ('39', '2017_04_10_061108_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('40', '2017_07_11_031754_create_admins_table', '1');
INSERT INTO `migrations` VALUES ('41', '2017_08_11_082057_add_status_to_users_table', '1');
INSERT INTO `migrations` VALUES ('42', '2017_08_11_083401_add_status_to_admin_table', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'admin', '超级管理员', '超级管理员', '2017-08-11 09:14:22', '2017-08-11 09:14:22');

-- ----------------------------
-- Table structure for post_tag
-- ----------------------------
DROP TABLE IF EXISTS `post_tag`;
CREATE TABLE `post_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned DEFAULT NULL,
  `tag_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tag_post_id_index` (`post_id`),
  KEY `post_tag_tag_id_index` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of post_tag
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'url唯一标记',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `updated_by` int(10) unsigned NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  UNIQUE KEY `posts_title_unique` (`title`),
  KEY `posts_cate_id_index` (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_user
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'user_admin', '账号管理员', '账号管理员', '2017-08-11 09:13:58', '2017-08-11 09:13:58');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站名称',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站logo',
  `bgimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站头部背景图',
  `QQ` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weixin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weibo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `google` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '传真',
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站联系人',
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站位置详细地址',
  `position_x` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站位置X坐标',
  `position_y` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站位置Y坐标',
  `bstable_line_count` int(11) NOT NULL COMMENT 'bootstrap 显示行数',
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站描述',
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '其他补充信息',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', '自得其乐', '1', '1', '954072637', '954072637@qq.com', '微信搜索\'zi得其乐\'', 'http://weibo.com/u/demo', 'http://plus.google.com/', 'https://www.facebook.com/', 'https://twitter.com/', '暂无', '水云阁主', '中原腹地周口太昊陵公园', '114.893517', '33.75399', '20', '欲刚，必以柔守之；欲强，必以弱保之。积于柔必刚，积于弱必强。观其所积，以知祸福之乡。', '© 2002－2018 all rights reserved 自得其乐文化有限公司', '做真实的自己', null, '2017-08-11 09:36:23');

-- ----------------------------
-- Table structure for single_pages
-- ----------------------------
DROP TABLE IF EXISTS `single_pages`;
CREATE TABLE `single_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL COMMENT '唯一索引 一个类型只能建立一条内容 1 关于我们 2 免责声明 3 网站帮助',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `single_pages_type_unique` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of single_pages
-- ----------------------------
INSERT INTO `single_pages` VALUES ('1', '1', '<div style=\"padding:0 0 30px\">\n    <div>\n        <h3 class=\"title\">法律申明</h3>\n        <p>1、本网站所载的文字图片等稿件均出于为公众传播有益资讯信息之目的，并不意味着赞同其观点或证实其内容的真实性，我们不对其科学性、严肃性等作任何形式的保证。如其他媒体、网络或个人从本网下载使用须自负版权等法律责任。</p>\n        <p>2、本网站内凡注明“来源：本网站”的所有文字、图片、音频、视频稿件均属本网站原创内容，版权均属本网站所有，任何媒体、网站或个人未经本网站协议授权（需要提供《授权协议》）不得转载、链接、转贴或以其他方式复制发表。已经本网协议授权的媒体、网站，在下载使用时必须注明“稿件来源：本网站”，违者本网将依法追究责任。</p>\n        <p>3、凡本网站转载的所有的文章、图片、音频、视频文件等资料的版权归版权所有人所有，本站采用的非本站原创文章及图片等内容无法一一和版权者联系，如果本网所选内容的文章作者及编辑认为其作品不宜上网供大家浏览，或不应无偿使用（涉及费用问题，需要删除“不宜上网供大家浏览，或不应无偿使用”）请及时用电子邮件或电话通知我们，以迅速采取适当措施，避免给双方造成不必要的经济损失。</p>\n        <p>4、对于已经授权本站独家使用并提供给本站资料的版权所有人的文章、图片等资料，如需转载使用，需取得本站和版权所有人的同意。</p>\n    </div>\n\n    <div>\n        <h3 class=\"title\">法律责任</h3>\n        <p>（1）本网站包含子目录网站 使用者因为违反本声明的规定而触犯中华人民共和国法律的，一切后果自己负责，本网站 包含子目录网站 不承担任何责任。</p>\n        <p>（2） 凡以任何方式登陆本网站包含子目录网站 或直接、间接使用本网站包含子目录网站 资料者，视为自愿接受本网站包含子目录网站 声明的约束。</p>\n        <p>（3） 本声明未涉及的问题参见国家有关法律法规，当本声明与国家法律法规冲突时，以国家法律法规为准。 关于解释权本网站包含子目录网站 之声明以及其修改权、更新权及最终解释权均属本网站包含子目录网站 所有。</p>\n    </div>\n</div>', null, '2017-08-11 10:21:28');
INSERT INTO `single_pages` VALUES ('2', '2', '<div style=\"padding:0 0 30px\">\n<div>\n<h3 class=\"title\">网站流程</h3>\n\n<p>暂无</p>\n\n<blockquote>\n<p>古人秉烛夜游；良有以也。</p>\n</blockquote>\n<img alt=\"Raised Image\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\" /></div>\n\n<div>\n<h3 class=\"title\">使用引导</h3>\n\n<p>暂无</p>\n<img alt=\"Raised Image\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/beautiful.jpg\" /></div>\n</div>', null, '2017-08-11 10:09:09');
INSERT INTO `single_pages` VALUES ('3', '3', '<div class=\"about-team\">\n<div class=\"row\">\n<div class=\"col-md-8 col-md-offset-2 text-center\">\n<h2 class=\"title\">我们的团队或证书</h2>\n\n<h5 class=\"description\">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-sm-3\">\n<div class=\"card card-profile card-plain\">\n<div class=\"card-avatar\"><img alt=\"\" class=\"img\" src=\"/ckuploadfiles/images/card-profile4-square.jpg\" /></div>\n\n<div class=\"content\">\n<h4 class=\"card-title\">Alec Thompson</h4>\n\n<h6 class=\"category text-muted\">CEO / Co-Founder</h6>\n\n<p class=\"card-description\">And I love you like Kanye loves Kanye. We need to restart the human foundation.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-3\">\n<div class=\"card card-profile card-plain\">\n<div class=\"card-avatar\"><img alt=\"\" class=\"img\" src=\"/ckuploadfiles/images/card-profile4-square.jpg\" /></div>\n\n<div class=\"content\">\n<h4 class=\"card-title\">Alec Thompson</h4>\n\n<h6 class=\"category text-muted\">CEO / Co-Founder</h6>\n\n<p class=\"card-description\">And I love you like Kanye loves Kanye. We need to restart the human foundation.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-3\">\n<div class=\"card card-profile card-plain\">\n<div class=\"card-avatar\"><img alt=\"\" class=\"img\" src=\"/ckuploadfiles/images/card-profile4-square.jpg\" /></div>\n\n<div class=\"content\">\n<h4 class=\"card-title\">Alec Thompson</h4>\n\n<h6 class=\"category text-muted\">CEO / Co-Founder</h6>\n\n<p class=\"card-description\">And I love you like Kanye loves Kanye. We need to restart the human foundation.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-3\">\n<div class=\"card card-profile card-plain\">\n<div class=\"card-avatar\"><img alt=\"\" class=\"img\" src=\"/ckuploadfiles/images/card-profile4-square.jpg\" /></div>\n\n<div class=\"content\">\n<h4 class=\"card-title\">Alec Thompson</h4>\n\n<h6 class=\"category text-muted\">CEO / Co-Founder</h6>\n\n<p class=\"card-description\">And I love you like Kanye loves Kanye. We need to restart the human foundation.</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n\n<div class=\"about-services\">\n<div class=\"row\">\n<div class=\"col-md-8 col-md-offset-2 text-center\">\n<h2 class=\"title\">我们的产品领域</h2>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-sm-4\">\n<div class=\"info-horizontal\">\n<div class=\"icon icon-rose\"><i class=\"material-icons\">gesture</i></div>\n\n<div class=\"description\">\n<h4 class=\"info-title\">1. Design</h4>\n\n<p>The moment you use Material Kit, you know you&rsquo;ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-4\">\n<div class=\"info-horizontal\">\n<div class=\"icon icon-rose\"><i class=\"material-icons\">build</i></div>\n\n<div class=\"description\">\n<h4 class=\"info-title\">2. Develop</h4>\n\n<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-4\">\n<div class=\"info-horizontal\">\n<div class=\"icon icon-rose\"><i class=\"material-icons\">mode_edit</i></div>\n\n<div class=\"description\">\n<h4 class=\"info-title\">3. Make Edits</h4>\n\n<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n\n<div class=\"about-office\">\n<div class=\"row  text-center\">\n<div class=\"col-md-8 col-md-offset-2\">\n<h2 class=\"title\">我们的推荐或我们的环境</h2>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-sm-4\"><img alt=\"\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/20170810115605.png\" /></div>\n\n<div class=\"col-sm-4\"><img alt=\"\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/201603111211189339.jpg\" /></div>\n\n<div class=\"col-sm-4\"><img alt=\"\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/201603111211104365.jpg\" /></div>\n</div>\n</div>\n\n<p>&nbsp;你猜猜猜，你再猜是不是真的。</p>', null, '2017-08-11 10:10:48');
INSERT INTO `single_pages` VALUES ('4', '4', '<h3>商务伙伴</h3>\n<div class=\"row\">\n    <div class=\"col-sm-3\">\n        <div class=\"card card-plain card-blog\">\n            <div class=\"card-image\"><img alt=\"\" class=\"img img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\"/></div>\n            <div class=\"card-content\">\n                <h6><a class=\"text-info\" href=\"#pablo\">阿里云</a></h6>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"col-sm-3\">\n        <div class=\"card card-plain card-blog\">\n            <div class=\"card-image\"><img alt=\"\" class=\"img img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\"/></div>\n            <div class=\"card-content\">\n                <h6><a class=\"text-success\" href=\"#pablo\">自得其乐</a></h6>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"col-sm-3\">\n        <div class=\"card card-plain card-blog\">\n            <div class=\"card-image\"><img alt=\"\" class=\"img img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\"/></div>\n            <div class=\"card-content\">\n                <h6><a class=\"text-danger\" href=\"#\">Google+</a></h6>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"col-sm-3\">\n        <div class=\"card card-plain card-blog\">\n            <div class=\"card-image\"><img alt=\"\" class=\"img img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\"/></div>\n            <div class=\"card-content\">\n                <h6><a class=\"text-gray\" href=\"#\" target=\"_blank\">Google</a></h6>\n            </div>\n        </div>\n    </div>\n</div>', null, '2017-08-11 10:32:30');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `updated_by` int(10) unsigned NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('1', '天文', '1', '1', '1', '2017-08-11 09:02:45', '2017-08-11 09:02:45');
INSERT INTO `tags` VALUES ('2', '历法', '1', '1', '1', '2017-08-11 09:03:03', '2017-08-11 09:03:03');
INSERT INTO `tags` VALUES ('3', '诗文', '1', '1', '1', '2017-08-11 09:03:17', '2017-08-11 09:03:17');
INSERT INTO `tags` VALUES ('4', '甲骨文', '1', '1', '1', '2017-08-11 09:04:10', '2017-08-11 09:04:10');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '上善若水', '654037450@qq.com', '$2y$10$BQ874adR0l6bEgBgjqrCNugitWbg80xP6mgsncaP5uswyQe1eNWt2', 'Q26EtKkCRN1hoIp73djMMse0M7T7gsl3qia4Lz3fJ1o43N49MgFQSqWQF7jb', '2017-08-11 09:08:08', '2017-08-11 09:08:08', '1');
INSERT INTO `users` VALUES ('2', '水云阁主', '954072637@qq.com', '$2y$10$FWiBY..egA09yg4lnVIR9uESb/f1Kmizju9j.IbM7L3g5GAN.6V22', null, '2017-08-11 09:09:29', '2017-08-11 09:09:29', '1');
