/*
Navicat MySQL Data Transfer

Source Server         : homestead
Source Server Version : 50718
Source Host           : localhost:33060
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-08-22 10:24:56
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
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', '莞尔', 'admin@admin.com', '$2y$10$CihROLiupOfgXeHM1ZNRQeD0dL2HCmt0dXZTlzhLUb9L9PUX5j3.G', null, '1', '2017-08-11 16:59:49', '2017-08-11 16:59:56');

-- ----------------------------
-- Table structure for carousels
-- ----------------------------
DROP TABLE IF EXISTS `carousels`;
CREATE TABLE `carousels` (
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
  UNIQUE KEY `carousels_url_unique` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of carousels
-- ----------------------------
INSERT INTO `carousels` VALUES ('1', '灯火通明，遁入空门，只是年犹少', 'http://www.sou.com', '2017-08/JNZMYUee8fNBU9XxrgBRU1KeWYetPOxxjN8KHFUb.jpeg', '灯火通明，遁入空门，只是年犹少', '1', '灯火通明，遁入空门，只是年犹少', '1', '2017-08-11 10:54:37', '2017-08-16 07:59:34');
INSERT INTO `carousels` VALUES ('2', '江湖夜雨十年灯', 'http://www.sou3.com', '2017-08/Q6DhI2GhkCSNHXRswiDuCiQxtC0NpZgBfhaZ2nxI.png', '江湖夜雨十年灯', '1', '江湖夜雨十年灯', '1', '2017-08-11 10:54:37', '2017-08-16 07:59:54');
INSERT INTO `carousels` VALUES ('3', '人生如逆旅 我亦是行人', 'http://www.sou1.com', '2017-08/Xnt7pbJfwhEhITUpFLQQqKh3iArO7XPr0zmucIlL.png', '人生如逆旅 我亦是行人', '1', '人生如逆旅 我亦是行人', '1', '2017-08-11 10:54:37', '2017-08-16 08:09:24');
INSERT INTO `carousels` VALUES ('4', '灵感源于爱，心爱之物，心爱之人', 'http://www.sou4.com', '2017-08/Ajpe2YGXKTK4sfjFLJcfrxTlCQ0IwtXbP9xpanAK.jpeg', '灵感，源于爱，心爱之物，心爱之人。', '1', '灵感，源于爱，心爱之物，心爱之人。', '1', '2017-08-11 10:54:37', '2017-08-16 08:04:01');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', '2', '散文', '1', '1', '1', '1', '2017-08-14 03:47:31', '2017-08-14 05:46:18');
INSERT INTO `categories` VALUES ('2', '0', '文学', '1', '1', '1', '0', '2017-08-14 03:48:30', '2017-08-14 05:47:23');
INSERT INTO `categories` VALUES ('3', '2', '寓言', '1', '1', '1', '0', '2017-08-14 05:46:49', '2017-08-14 05:46:49');
INSERT INTO `categories` VALUES ('4', '2', '诗歌', '1', '1', '1', '0', '2017-08-14 05:47:15', '2017-08-14 05:47:15');
INSERT INTO `categories` VALUES ('5', '2', '小小说', '1', '1', '1', '0', '2017-08-14 05:47:31', '2017-08-14 05:47:31');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('1', '0', '上邪', '0', '1', '0', '村上春树作品，哈哈。![file](2017-08/qVXhhSkh2xb5F2VG3lgs5BXumT5CZxcyKDEaZcxH.png)', '1', '2017-08-14 04:16:56', '2017-08-14 04:16:56');

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
INSERT INTO `migrations` VALUES ('43', '2017_08_11_104543_create_carousel_table', '3');
INSERT INTO `migrations` VALUES ('45', '2017_08_18_062243_add_avatar_to_user', '4');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of post_tag
-- ----------------------------
INSERT INTO `post_tag` VALUES ('1', '1', '5');
INSERT INTO `post_tag` VALUES ('2', '2', '3');
INSERT INTO `post_tag` VALUES ('3', '3', '5');
INSERT INTO `post_tag` VALUES ('4', '4', '3');
INSERT INTO `post_tag` VALUES ('5', '5', '5');
INSERT INTO `post_tag` VALUES ('6', '6', '3');
INSERT INTO `post_tag` VALUES ('7', '7', '3');
INSERT INTO `post_tag` VALUES ('8', '8', '3');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', '1', '四月一个晴朗的早晨，遇到百分百的女孩', '四月一个晴朗的早晨，遇到百分百的女孩', '四月一个晴朗的早晨，遇到百分百的女孩', '四月一个晴朗的早晨，遇到百分百的女孩', '2017-08/r4MpkVTcsnKKMoXX4nILIuwvApaYOju5jso2GDK4.jpeg', '<p>四月一个晴朗的早晨，我在原宿后街同一个百分之百的女孩擦肩而过。&nbsp;&nbsp;&nbsp; 女孩算不得怎么漂亮，衣着也不出众，脑后的头发执著地带有睡觉挤压的痕迹。年龄也恐怕快三十了。严格来说，恐怕难以称之为女孩。然而，相距五十米开外我便一眼看出：对我来说，她是个百分之百的女孩。从看见她的身姿的那一瞬间，我的胸口便如发生地鸣一般地震颤，口中如沙漠一般干得沙沙作响。 或许你也有你的理想型女孩，例如喜欢足踝细弱的女孩，还有眼睛大的女孩，十指绝对好看的女孩，或不明所以地迷上慢慢花时间进食的女孩。我当然也有自己的偏爱，在饭店吃饭时就曾看邻桌一女孩的鼻形看得发呆。<br />\r\n但要明确勾勒百分之百的女孩形象，任何人都无法做到。我就绝对想不起她长有怎样的鼻子。甚至是否有鼻子都已记不真切，现在我所能记的，只是她并非十分漂亮这一点。事情也真是不可思议。<br />\r\n&ldquo;昨天在路上同一个百分之百的女孩擦肩而过。&rdquo;我对一个人说。<br />\r\n&ldquo;唔，&rdquo;他应道，&ldquo;人可漂亮？&rdquo;<br />\r\n&ldquo;不，不是说这个。&rdquo;<br />\r\n&ldquo;那，是合你口味的那种类型喽？&rdquo;<br />\r\n&ldquo;记不得了。眼睛什么样啦，胸部是大是小啦，统统忘得一干二净。&rdquo;<br />\r\n&ldquo;莫名其妙啊！&rdquo;<br />\r\n&ldquo;是莫名其妙。&rdquo;<br />\r\n&ldquo;那么，&rdquo;他显得兴趣索然，&ldquo;你做什么了？搭话了？还是跟踪了？&rdquo;<br />\r\n&ldquo;什么都没做，&rdquo;我说，&ldquo;仅仅擦肩而过而已。&rdquo;<br />\r\n她由东往西走，我从西向东走，在四月里一个神清气爽的清晨。&nbsp;&nbsp;&nbsp; 我想和她说话，哪怕三十分钟也好。想打听她的身世，也想全盘托出自己的身世。而最重要的，是想弄清导致一九八一年四月一个晴朗的早晨我们在原宿后街擦肩而过这一命运的原委，那里面肯定充满着和平时代的古老机器般的温馨的秘密。&nbsp;&nbsp;&nbsp; 如此谈罢，我们可以找地方吃午饭，看伍迪&middot;艾伦的影片，再顺路到宾馆里的酒吧喝鸡尾酒什么的。弄得好，喝完后说不定能同她睡上一觉。<br />\r\n可能性在叩击我的心扉。<br />\r\n我和她之间的距离已经近至十五六米了。<br />\r\n问题是，我到底该如何向她搭话呢？<br />\r\n&ldquo;你好！和我说说话可以么？哪怕三十分钟也好。&rdquo;<br />\r\n过于傻气，简直像劝人加入保险。<br />\r\n&ldquo;请问，这一带有二十四小时营业的洗衣店么？&rdquo;<br />\r\n这也同样傻里傻气。何况我岂非连洗衣袋都没带！有谁能相信我的道白呢？<br />\r\n或许开门见山好些。&ldquo;你好！你对我可是百分之百的女孩哟！&rdquo;&nbsp;&nbsp;&nbsp; 不，不成，她恐怕不会相信我的直白。纵然相信，也未必愿同我说什么话。她可能这样说：即便我对你是百分之百的女孩，你对我却不是百分之百的男人，抱歉！而这是大有可能的。假如陷入这般境地，我肯定全然不知所措。这一打击说不定会使我一蹶不振。我已三十二岁，所谓上年纪归根结蒂便是这么一回事。 我是在花店门前和她擦肩而过的，那暖暖的小小的空气块儿触到我的肌肤。柏油路面洒了水，周围荡漾着玫瑰花香。连向她打声招呼我都未能做到。她身穿白毛衣，右手拿一个尚未贴邮票的白色四方信封。她给谁写了这封信。那般睡眼惺忪，说不定整整写了一个晚上。那四方信封里有可能装着她的全部秘密。<br />\r\n走几步回头时，她的身影早已消失在人群里。&nbsp;&nbsp;&nbsp; 当然，今天我已完全清楚当时应怎样向她搭话。但不管怎么说，那道白实在太长，我肯定表达不好&mdash;&mdash;就是这样，我所想到的每每不够实用。<br />\r\n总之，道白自&ldquo;很久很久以前&rdquo;开始，而以&ldquo;你不觉得这是个令人伤感的故事吗&rdquo;结束。&nbsp;&nbsp;&nbsp; 很久很久以前，有个地方有一个少男和一个少女。少男十八，少女十六。少男算不得英俊，少女也不怎么漂亮，无非随处可见的孤独而平常的少男少女。但两人坚信世上某个地方一定存在百分之百适合自己的少女和少男。是的，两人相信奇迹，而奇迹果真发生了。<br />\r\n一天两人在街头不期而遇。<br />\r\n&ldquo;真巧！我一直在找寻你。也许你不相信，你对我是百分之百的女孩！&rdquo;少男对少女说。<br />\r\n少女对少男道：&ldquo;你对我也正是百分之百的男孩。从头到脚和我想象的一模一样。简直是在做梦。&rdquo;&nbsp;&nbsp;&nbsp; 两人坐在公园长椅上，手拉着手百谈不厌。两人已不再孤独。百分之百的需求对方，百分之百被对方需求。而百分之百需求对方和百分之百被对方需求是何等美妙的事情啊！这已是宇宙奇迹！<br />\r\n但两人心中掠过了一个小小的、的确小而又小的疑虑：梦想如此轻易成真，是不是好事呢？<br />\r\n交谈突然中断时，少男这样说道：&nbsp;&nbsp;&nbsp; &ldquo;我说，再尝试一次吧！如果我们两人真是一对百分之百的恋人的话，肯定还会有一天在哪里相遇。下次相遇时如果仍觉得对方百分之百，就马上在那里结婚，好么？&rdquo;<br />\r\n&ldquo;好的。&rdquo;少女回答。<br />\r\n于是两人分开，各奔东西。&nbsp;&nbsp;&nbsp; 然而说实在话，根本没有必要尝试，纯属多此一举。为什么呢？因为两人的的确确是一对百分之百的恋人，因为那是奇迹般的邂逅。但两人过于年轻，没办法知道这许多，于是无情的命运开始捉弄两人了。&nbsp;&nbsp;&nbsp; 一年冬天，两人都染上了那年肆虐的恶性流感，在死亡线徘徊几个星期后，过去的记忆丧失殆尽。事情也真是离奇，当两人睁眼醒来时，脑袋里犹如D&middot;H&middot;劳伦斯少年时代的贮币盒一样空空如也。&nbsp;&nbsp;&nbsp; 但这对青年男女毕竟聪颖豁达且极有毅力，经过不懈努力，终于再度获得了新的知识新的情感，胜任愉快地重返社会生活。啊，我的上帝！这两人真是无可挑剔！他们完全能够换乘地铁，能够在邮局寄快信，并且分别体验了百分之七十五和百分之八十五的恋爱。&nbsp;&nbsp;&nbsp; 如此一来而去，少男三十二，少女三十岁了。时光以惊人的速度流逝。&nbsp;&nbsp;&nbsp; 四月一个晴朗的早晨，少男为喝上折价的早咖啡沿原宿后街由西向东走，少女为买快信邮票沿同一条街由东向西去，两人在路的正中央擦肩而过。失却的记忆的微光刹那间照亮了两颗心：<br />\r\n<strong>她对我是百分之百的女孩。<br />\r\n他对我是百分之百的男孩。</strong><br />\r\n<img alt=\"\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/20170814040058-5991207a9aaba.jpg\" /> 然而两人记忆的烛光委实过于微弱，两人的话语也不似十四年前那般清晰，结果连句话也没说便擦肩而过，径直消失在人群中，永远永远。<br />\r\n你不觉得这是个令人伤感的故事么？<br />\r\n是的，我本该这样向她搭话。</p>', '1', '1', '1', '2017-08-14 04:01:15', '2017-08-14 06:01:12');
INSERT INTO `posts` VALUES ('2', '4', '苏幕遮-周邦彦', '苏幕遮-周邦彦', '苏幕遮-周邦彦', '苏幕遮-周邦彦', '2017-08/bW1Ujgs6iC79Sits8sKumzkiFNkf5e08BmqfnIw3.jpeg', '<h2>苏幕遮&middot;燎沈香​​​​​​</h2>\r\n\r\n<pre>\r\n作者： 周邦彦\r\n\r\n燎沉香，消溽暑。鸟雀呼晴，侵晓窥檐语。叶上初阳干宿雨，水面清圆，一一风荷举。\r\n\r\n故乡遥，何日去？家住吴门，久作长安旅。五月渔郎相忆否。小楫轻舟，梦入芙蓉浦。</pre>\r\n\r\n<p><img alt=\"\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/20170814042730-599126b2090c7.jpg\" /></p>', '1', '1', '1', '2017-08-14 04:28:40', '2017-08-14 05:47:52');
INSERT INTO `posts` VALUES ('3', '3', '《黑羊》- 卡尔维诺', '《黑羊》- 卡尔维诺', '《黑羊》- 卡尔维诺', '《黑羊》- 卡尔维诺', '2017-08/ObAe1PbSTLK1zoOqWTkRxbTVTpZww6TDnzgH2AFY.jpeg', '<p>&nbsp; &nbsp; 从前有个国家，里面人人是贼。&nbsp;<br />\r\n&nbsp; &nbsp; 一到傍晚，他们手持万能钥匙和遮光灯笼出门，走到邻居家里行窃。破晓时分，他们提着偷来的东西回到家里，总能发现自己家也失窃了。&nbsp;<br />\r\n　他们就这样幸福地居住在一起。没有不幸的人，因为每个人都从别人那里偷东西，别人又再从别人那里偷，依次下去，直到最后一个人去第一个窃贼家行窃。该国贸易也就不可避免地是买方和卖方的双向欺骗。政府是个向臣民行窃的犯罪机构，而臣民也仅对欺骗政府感兴趣。所以日子倒也平稳，没有富人和穷人。&nbsp;<br />\r\n　有一天－－到底是怎么回事没人知道－－总之是有个诚实人到了该地定居。到晚上，他没有携袋提灯地出门，却呆在家里抽烟读小说。&nbsp;<br />\r\n　贼来了，见灯亮着，就没进去。&nbsp;<br />\r\n　这样持续了有一段时间。后来他们感到有必要向他挑明一下，纵使他想什么都不做地过日子，可他没理由妨碍别人做事。他天天晚上呆在家里，这就意味着有一户人家第二天没了口粮。&nbsp;<br />\r\n　诚实人感到他无力反抗这样的逻辑。从此他也像他们一样，晚上出门，次日早晨回家，但他不行窃。他是诚实的。对此，你是无能为力的。他走到远处的桥上，看河水打桥下流过。每次回家，他都会发现家里失窃了。&nbsp;<br />\r\n　不到一星期，诚实人就发现自己已经一文不名了；他家徒四壁，没任何东西可吃。但这不能算不了什么，因为那是他自己的错；不，问题是他的行为使其他人很不安。因为他让别人偷走了他的一切却不从别人那儿偷任何东西；这样总有人在黎明回家时，发现家里没被动过－－那本该是由诚实人进去行窃的。不久以后，那些没有被偷过的人家发现他们比人家就富了，就不想再行窃了。更糟的是，那些跑到诚实人家里去行窃的人，总发现里面空空如也，因此他们就变穷了。&nbsp;<br />\r\n　同时，富起来的那些人和诚实人一样，养成了晚上去桥上的习惯，他们也看河水打桥下流过。这样，事态就更混乱了，因为这意味着更多的人在变富，也有更多的人在变穷。&nbsp;<br />\r\n　现在，那些富人发现，如果他们天天去桥上，他们很快也会变穷的。他们就想：&ldquo;我们雇那些穷的去替我们行窃吧。&rdquo;他们签下合同，敲定了工资和如何分成。自然，他们依然是贼，依然互相欺骗。但形势表明，富人是越来越富，穷人是越来越穷。&nbsp;<br />\r\n　有些人富裕得已经根本无须亲自行窃或雇人行窃就可保持富有。但一旦他们停止行窃的话，他们就会变穷，因为穷人会偷他们。因此他们又雇了穷人中的最穷者来帮助他们看守财富，以免遭穷人行窃，这就意味着要建立警察局和监狱。&nbsp;<br />\r\n　因此，在那诚实人出现后没几年，人们就不再谈什么偷盗或被偷盗了，而只说穷人和富人；但他们个个都还是贼。&nbsp;<br />\r\n　唯一诚实的只有开头的那个人，但他不久便死了，饿死的。&nbsp;</p>', '1', '1', '1', '2017-08-14 05:53:58', '2017-08-14 05:55:22');
INSERT INTO `posts` VALUES ('4', '4', '桃花源记', '桃花源记', '桃花源记', '桃花源记', '2017-08/vWOsNeiSVfW57bnAVK1H02RIgX7cQrQ9rb1PFbxq.jpeg', '<p>　　晋太元中，武陵人捕鱼为业。缘溪行，忘路之远近。忽逢桃花林， 夹（jiā）岸数百步，中无杂树，芳草鲜美，落英缤纷。渔人甚异之。复前行，欲穷其林。&nbsp;<br />\r\n　　林尽水源，便得一山，山有小口，仿佛若有光。便舍（shě）船，从口入。初极狭，才通人。复行数十步，豁（hu&ograve;）然开朗。土地平旷，屋舍（sh&egrave;）俨（yǎn）然，有良田美池桑竹之属。阡（qiān）陌（m&ograve;）交通，鸡犬相闻。其中往来种（zh&ograve;ng）作，男女衣着（zhu&oacute;），悉如外人。黄发垂髫（ti&aacute;o），并怡然自乐。&nbsp;<br />\r\n　　见渔人，乃大惊，问所从来。具答之。便要（yāo）还家，设酒杀鸡作食。村中闻有此人，咸（xi&aacute;n）来问讯。自云先世避秦时乱，率妻子邑（y&igrave;）人来此绝境，不复出焉，遂与外人间隔。问今是何世，乃不知有汉，无论魏晋。此人一一为具言所闻，皆叹惋。余人各复延至其家，皆出酒食。停数日，辞去。此中人语（y&ugrave;）云：&ldquo;不足为外人道也。&rdquo;&nbsp;<br />\r\n　　既出，得其船，便扶向路，处处志之。及郡下，诣（y&igrave;）太守，说如此。太守即遣人随其往，寻向所志，遂迷，不复得路。&nbsp;<br />\r\n　　南阳刘子骥（j&igrave;），高尚士也，闻之，欣然规往。未果，寻病终。后遂无问津者。</p>', '1', '1', '1', '2017-08-14 06:08:45', '2017-08-14 06:13:05');
INSERT INTO `posts` VALUES ('5', '5', '我的心曾悲伤七次', '我的心曾悲伤七次', '我的心曾悲伤七次', '我的心曾悲伤七次', '2017-08/JTRnY6mX9r0kL3oD4oKXGOcEJfkrDi9UAodCrpJB.jpeg', '<p>　　The first time when I saw her being meek that she might attain height.&nbsp;<br />\r\n　　第一次，是当我看到她本可进取，却故作谦卑时。&nbsp;<br />\r\n　　&nbsp;<br />\r\n　　The second time when I saw her limping before the crippled.&nbsp;<br />\r\n　　第二次，是当我看到她在瘸子面前跛行而过时。&nbsp;<br />\r\n　　&nbsp;<br />\r\n　　The third time when she was given to choose between the hard and the easy, and she chose the easy.&nbsp;<br />\r\n　　第三次，是当她在难易之间，却选择了容易时。&nbsp;<br />\r\n　　&nbsp;<br />\r\n　　The fourth time when she committed a wrong, and comforted herself that others also commit wrong.&nbsp;<br />\r\n　　第四次，是当她犯了错，却借由别人也会犯错来宽慰自己时。&nbsp;<br />\r\n　　&nbsp;<br />\r\n　　The fifth time when she forbore for weakness, and attributed her patience to strength.&nbsp;<br />\r\n　　第五次，是当她因为软弱而忍让，却声称为自己的坚韧时。&nbsp;<br />\r\n　　&nbsp;<br />\r\n　　The sixth time when she despised the ugliness of a face, and knew not that it was one of her own masks.&nbsp;<br />\r\n　　第六次，是当她鄙夷一张丑恶的嘴脸，却不知那正是自己面具中的一副时。&nbsp;<br />\r\n　　&nbsp;<br />\r\n　　And the seventh time when she sang a song of praise, and deemed it a virtue.&nbsp;<br />\r\n　　第七次，是当她吟唱圣歌，却自诩为一种美德时。&nbsp;<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; Kahlil Gibran，1883&mdash;1931 纪伯伦</p>', '1', '1', '1', '2017-08-14 06:20:51', '2017-08-14 06:20:51');
INSERT INTO `posts` VALUES ('6', '4', '项脊轩志', '项脊轩志', '项脊轩志', '项脊轩志', '2017-08/UhcDDRYn5OPeHFH9c5Nf2WVyopDn8mLSc2GlI9mj.jpeg', '<p>　　 项脊轩，旧南阁子也。室仅方丈，可容一人居。百年老屋，尘泥渗漉，雨泽下注；每移案，顾视无可置者。又北向，不能得日，日过午已昏。余稍为修葺，使不上漏。前辟四窗，垣墙周庭，以当南日，日影反照，室始洞然。又杂植兰桂竹木于庭，旧时栏楯，亦遂增胜。借书满架，偃仰啸歌，冥然兀坐，万籁有声；而庭阶寂寂，小鸟时来啄食，人至不去。三五之夜，明月半墙，桂影斑驳，风移影动，珊珊可爱。<br />\r\n　　 然余居于此，多可喜，亦多可悲。先是，庭中通南北为一。迨诸父异爨，内外多置小门,墙往往而是。东犬西吠，客逾庖而宴，鸡栖于厅。庭中始为篱，已为墙，凡再变矣。家有老妪， 尝居于此。妪，先大母婢也，－乳－二世，先妣抚之甚厚。室西连于中闺，先妣尝一至。妪每谓余曰：&ldquo;某所，而母立于兹。&rdquo;妪又曰：&ldquo;汝姊在吾怀，呱呱而泣；娘以指叩门扉曰：&lsquo;儿寒乎？欲食乎？&rsquo;吾从板外相为应答。&rdquo;语未毕， 余泣，妪亦泣。<br />\r\n　　 余自束发读书轩中，一日，大母过余曰：&ldquo;吾儿，久不见若影，何竟日默默在此，大类女郎也？&rdquo;比去，以手阖门，自语曰：&ldquo;吾家读书久不效，儿之成，则可待乎！&rdquo;顷之，持一象笏至，曰：&ldquo;此吾祖太常公宣德间执此以朝，他日汝当用之！&rdquo;瞻顾遗迹，如在昨日，令人长号不自禁。<br />\r\n　　 轩东故尝为厨，人往，从轩前过。余扃牖而居，久之能以足音辨人。轩凡四遭火，得不焚，殆有神护者。&nbsp;<br />\r\n　　 项脊生曰：&ldquo;蜀清守丹穴，利甲天下，其后秦皇帝筑女怀清台；刘玄德与曹操争天下，诸葛孔明起陇中。方二人之昧昧于一隅也，世何足以知之，余区区处败屋中，方扬眉、瞬目，谓有奇景。人知之者，其谓与坎井之蛙何异？&rdquo;<br />\r\n　　 余既为此志，后五年，吾妻来归，时至轩中从余问古事，或凭几学书。 吾妻归宁，述诸小妹语曰：&ldquo;闻姊家有阁子，且何谓阁子也？&rdquo;其后六年，吾妻死，室坏不修。其后二年，余久卧病无聊，乃使人复葺南阁子，其制稍异于前。然自后余多在外，不常居。&nbsp;<br />\r\n　　 庭有枇杷树，吾妻死之年所手植也，今已亭亭如盖矣。</p>', '1', '1', '1', '2017-08-14 06:23:54', '2017-08-14 06:23:54');
INSERT INTO `posts` VALUES ('7', '4', '严重的时刻', '严重的时刻', '严重的时刻', '严重的时刻', '2017-08/9odYOwGqSX87bj2qhX9AYIWdsbcxV08DWJBhWpsa.jpeg', '<p>此刻有谁在世上的某处哭，&nbsp;<wbr /><br />\r\n无缘无故地在世上哭，&nbsp;<wbr /><br />\r\n哭我。&nbsp;<wbr /><br />\r\n<br />\r\n此刻有谁在夜里的某处笑，&nbsp;<wbr /><br />\r\n无缘无故地在夜里笑，&nbsp;<wbr /><br />\r\n笑我。&nbsp;<wbr /><br />\r\n<br />\r\n此刻有谁在世上的某处走，&nbsp;<wbr /><br />\r\n无缘无故地在世上走，&nbsp;<wbr /><br />\r\n走向我。&nbsp;<wbr /><br />\r\n<br />\r\n此刻有谁在世上的某处死&nbsp;<wbr /><br />\r\n无缘无故地在世上死，&nbsp;<wbr /><br />\r\n望着我。&nbsp;</p>', '1', '1', '1', '2017-08-14 06:25:33', '2017-08-14 06:25:33');
INSERT INTO `posts` VALUES ('8', '1', '棠花开出怎样的结果', '棠花开出怎样的结果', '棠花开出怎样的结果', '棠花开出怎样的结果', '2017-08/r2xOUTa4Fr6b6w6LOzAhSvvosZWCyyAMqqs2JaJJ.jpeg', '<h1>&nbsp;</h1>\r\n\r\n<p><img alt=\"\" src=\"http://upload-images.jianshu.io/upload_images/2376462-cdd914ada529aa48.jpg?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240\" /></p>\r\n\r\n<h2><b>1、传统文化的失落</b></h2>\r\n\r\n<p>现如今一部优秀的国产的动画是越来越难得到普罗大众的认可，即便很多作品被堪称国漫巅峰的到来，从制作到发行上映，期间多少口诛笔伐，征讨得你来我往。我们的国产动画一定要超过日本、欧美的制作水平，就算得上是里程碑了么？</p>\r\n\r\n<p>国产3D动画电影《大鱼海棠》于七月八日上映，还没有几天就炸开锅，褒贬不一。有的人等了十二年的情怀，依旧看不好一场戏，有的人搅屎棍般和稀泥，不掺进去什么都觉得不够臭，有的人倒是挑起鱼刺来，如哽在喉中不吐不快。时代趋向前看，反倒是人心退化的明显。</p>\r\n\r\n<p>《大鱼海棠》是&ldquo;金玉其外，败絮其中&rdquo;，还是&ldquo;败絮其外，金玉其中&rdquo;？电影本质是通俗的故事，却点缀着丰富的传统文化，又或电影在内涵上表现了传统文化的精髓，虽然表面故事多有俗套；圭臬不一，又该如何说清，这不是一场水手与黑子的战斗。</p>\r\n\r\n<p>我们媒体行业越来越发达，电影不再取决于它的本身，它变成一种媒体混合物，其先决条件不是文学价值，而是促销和圈票的能力。导演和投资方为了求保险，抹杀了电影的独创性。动画片也是需要独创性的，无独创性便是恶俗。</p>\r\n\r\n<p>很多人深挖《大鱼海棠》发现好几部熟悉的动画情节，刨根问祖的以为自己找到纰漏，其实不然。如果要说失败，就是《大鱼海棠》摆出杰作的架势，露出破绽让人招架不住了。这是我们传统文化的失落，属于我们的不自信，从庄子《逍遥游》，还有《山海经》里觅生的国学典故，仅仅是以符号的方式存在于观者心里，他们不去深究才显得肤浅。</p>\r\n\r\n<p>就连电影画面的中国元素都有人提出质疑，无稽的好笑，我泱泱大国的灵魂画师难道会少。<b>从2Dflash动画转3D制式的电影，视觉修饰的效果比原画色彩来得暗，因此就觉得色彩是浅薄的，但多了一分质感。</b>别人不明白，就不给好脸色了。</p>\r\n\r\n<p>说这话并没有任何偏袒，还拿套路说事，&ldquo;<b>套路&rdquo;是属于孔子六艺的范围里，六艺为行仪、奏乐、驾车、射箭、书写、算数这六套行为</b>。我们做一件事情动作形态这个过程很重要，关键是要自己有敬意，尊重别人是为了自尊。</p>\r\n\r\n<p>对于电影本身，我们也要尊重，这是一个民族的传统，不应该失落。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://upload-images.jianshu.io/upload_images/2376462-b1a9cff7d2e693fa.jpg?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240\" /></p>\r\n\r\n<h2>2、<b>小义与大爱</b></h2>\r\n\r\n<h3><b>小义</b></h3>\r\n\r\n<p>《假面》中有一段台词，今bo来之：</p>\r\n\r\n<p>&ldquo;<b>你自己心目中的你存在着一个深远，每一个声调都是一个谎言，一个欺骗行为，每一个手势都是虚假的，每一个微笑都是一个鬼脸。你能保持沉默，你至少不撒谎了。你能离群索居，把自己关起来，于是你不必扮演角色，不必装模做样，不必做虚假的手势。</b>&rdquo;</p>\r\n\r\n<p>这是人的本质。</p>\r\n\r\n<p>那么椿呢？她不属于人类，不是神仙，是其他人。</p>\r\n\r\n<p>一个十六岁的少女在历经人间的七天游历的成年礼，最后被渔网所阻，少年鲲为救她失去性命。于是开始一场爱的救赎，这才是成长的开始。直到椿老去，回想起来，她只记得他的模样，不知道他的名字。</p>\r\n\r\n<p>一个看似公式化爱情模式，美人鱼式的朱丽叶，在这个故事里面，我们真正要看到的，不应该耽于爱情的表面，更应该注重椿的本身。在游离人世的日子里，她怀着未知的迷茫和恐惧，心里想着那句要&ldquo;远离人类&rdquo;，但还是逃不过。不禁想到李莫愁的师傅曾说，要远离男人，男人是洪水猛兽。</p>\r\n\r\n<p>情字几乎是听到了某个呼唤，才向你游来。少年鲲的牺牲，是打开椿心房的一片钥匙。她前所未有的感受到有种爱包裹着自己，所以她的生理和心理都得到完全的发育，一个女孩亦是如此。这才是真正意义上的成人礼，她为此不得不走上一条没有尽头的路，背弃她那个世界的生存法则，直到灾难降临，她也依然要将鲲送回人间，还他一命。</p>\r\n\r\n<p><b>世上情花万种，有一种叫生死相随。你以命殉我，我便拿命还你。一偿一报。</b></p>\r\n\r\n<p>但这种爱情是小义，是确认自身的存在而产生的，抚养小鱼陪伴成长的同时是椿人性的完整。当一个女孩站在背叛的场面上，她要面对的是整个世界，此时她还没有社会性。椿内在生命的关心是鲲，是与她生命联系在一起的鲲。当椿完成生命的内需，她的社会性才体现出来，开始承担责任和自我牺牲。她化身为海棠弥补过错拯救的时候，她的爱情才能得到完整的救赎。</p>\r\n\r\n<p>这一切都是她的一厢情愿，而她善于自我拯救。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://upload-images.jianshu.io/upload_images/2376462-f59ab2b1fdb8932f.jpg?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240\" /></p>\r\n\r\n<h3><b>大爱</b></h3>\r\n\r\n<p>世有三恨，一恨鲫鱼多刺，二恨海棠无香，三恨&hellip;&hellip;</p>\r\n\r\n<p>湫的出场，仿佛只是这幕电影的一个注脚，是椿此生的回眸，也是椿来生的倒影。当然不否认，他对椿的爱几乎已超过椿对鲲的。可即使你有了一把钥匙，也未必能打开一个房门。又或者，即使你打开了房门，而你要找的人也许不在，那么有钥匙也是枉然。</p>\r\n\r\n<p><b>湫的悲情在于付出，以命换命，是有区别于椿的。他不动声色的守护是最稳妥的姿态，祈望她有美满的归宿，一分不让她受苦的爱，才能衬得起她的爱&mdash;&mdash;椿对鲲。</b></p>\r\n\r\n<p>湫能克制念想，是他成熟的标志，有责任心，懂得克制占有欲，是人格的操守。他对椿的忠贞，可想而知多么难能可贵。到最后，他甘愿死掉也要开启海天之门，椿的选择已经毫无悬念，她的幸福唾手可得。这时候，湫的爱完全超乎椿的想象。可这是他的悲哀，我们用心爱着一个人，却要用生命去爱另一个人。</p>\r\n\r\n<p>如果还认为这是一个备胎的故事，那么天底下所有的爱情还有什么好值得歌颂的。人除了爱，还有更重要的坚持和责任。爱就要海枯石烂么，可海天倒灌又如何？湫放弃了，为了椿爱的人，放弃掉。这是对椿和鲲的托付，也是对自己的成全。</p>\r\n\r\n<p>这样的故事还有很多，很多年前的TVB港剧《人龙传说》中的小鱼，为了叶希的幸福，甘愿不成龙，躲藏在一副画卷里。最后牺牲自我救周傲天，而灰飞烟灭。（有兴趣的可以去看看）超越界限的爱，本身就是一种大义。</p>\r\n\r\n<p>还有想那每日里隐居于远离尘世的山间，浇灌着遍地花草的程灵素。如果不遇上胡斐，她的一生，大概都会如此般淡然度过。只为了少年留心不让马蹄践踏了她种下的小花，便毫无保留地付出了所有。她跟着胡斐踏遍江湖，从白马寺，直到京城。她无数次救胡斐，救马春花，破掌门大会&hellip;&hellip;所有眷恋，不过是落花有意，流水无情。</p>\r\n\r\n<p>为胡斐出生入死，终究抵不过袁紫衣一只玉凤的温存。程灵素就此心死。身为毒手药王的弟子，有着惊人才智，她却从未乱用过毒杀过人。最后一次布下死局，是为着清理师门。她为胡斐吸取毒物，就连这一刻，也还是挂念着胡大哥的后路。</p>\r\n\r\n<p>她并未让石万嗔死，而是毒瞎了他的眼睛，留着他半条命，因为她担心胡斐见到她死去后伤心过度，会随她下黄泉。所以她必须给胡斐留下个要复仇的念想，她知道一日大仇未报，胡斐一日不会放弃生命。而当他报仇以后，时间却早已冲淡了她曾在胡斐生命中留下过的痕迹。（抱歉，扯远了）</p>\r\n\r\n<p>如果我不曾付出过，我不会懂。</p>\r\n\r\n<p>如果我不曾得到过，我不会懂。</p>\r\n\r\n<p>爱始终如刀口舔蜜，也不过，可怜世上有情人。</p>\r\n\r\n<p>棠花开出怎样的结果，已经不重要了，就让你在别人怀里快乐吧！</p>\r\n\r\n<p>（转载）</p>', '1', '1', '1', '2017-08-14 06:55:03', '2017-08-14 06:55:03');

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of single_pages
-- ----------------------------
INSERT INTO `single_pages` VALUES ('1', '1', '', '<div style=\"padding:0 0 30px\">\n    <div>\n        <h3 class=\"title\">法律申明</h3>\n        <p>1、本网站所载的文字图片等稿件均出于为公众传播有益资讯信息之目的，并不意味着赞同其观点或证实其内容的真实性，我们不对其科学性、严肃性等作任何形式的保证。如其他媒体、网络或个人从本网下载使用须自负版权等法律责任。</p>\n        <p>2、本网站内凡注明“来源：本网站”的所有文字、图片、音频、视频稿件均属本网站原创内容，版权均属本网站所有，任何媒体、网站或个人未经本网站协议授权（需要提供《授权协议》）不得转载、链接、转贴或以其他方式复制发表。已经本网协议授权的媒体、网站，在下载使用时必须注明“稿件来源：本网站”，违者本网将依法追究责任。</p>\n        <p>3、凡本网站转载的所有的文章、图片、音频、视频文件等资料的版权归版权所有人所有，本站采用的非本站原创文章及图片等内容无法一一和版权者联系，如果本网所选内容的文章作者及编辑认为其作品不宜上网供大家浏览，或不应无偿使用（涉及费用问题，需要删除“不宜上网供大家浏览，或不应无偿使用”）请及时用电子邮件或电话通知我们，以迅速采取适当措施，避免给双方造成不必要的经济损失。</p>\n        <p>4、对于已经授权本站独家使用并提供给本站资料的版权所有人的文章、图片等资料，如需转载使用，需取得本站和版权所有人的同意。</p>\n    </div>\n\n    <div>\n        <h3 class=\"title\">法律责任</h3>\n        <p>（1）本网站包含子目录网站 使用者因为违反本声明的规定而触犯中华人民共和国法律的，一切后果自己负责，本网站 包含子目录网站 不承担任何责任。</p>\n        <p>（2） 凡以任何方式登陆本网站包含子目录网站 或直接、间接使用本网站包含子目录网站 资料者，视为自愿接受本网站包含子目录网站 声明的约束。</p>\n        <p>（3） 本声明未涉及的问题参见国家有关法律法规，当本声明与国家法律法规冲突时，以国家法律法规为准。 关于解释权本网站包含子目录网站 之声明以及其修改权、更新权及最终解释权均属本网站包含子目录网站 所有。</p>\n    </div>\n</div>', '1', '2017-08-11 22:43:12', '2017-08-12 10:21:28');
INSERT INTO `single_pages` VALUES ('2', '2', '', '<div style=\"padding:0 0 30px\">\n<div>\n<h3 class=\"title\">网站流程</h3>\n\n<p>暂无</p>\n\n<blockquote>\n<p>古人秉烛夜游；良有以也。</p>\n</blockquote>\n<img alt=\"Raised Image\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\" /></div>\n\n<div>\n<h3 class=\"title\">使用引导</h3>\n\n<p>暂无</p>\n<img alt=\"Raised Image\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/beautiful.jpg\" /></div>\n</div>', '1', '2017-08-11 22:43:16', '2017-08-12 10:09:09');
INSERT INTO `single_pages` VALUES ('3', '3', '', '<div class=\"about-team\">\n<div class=\"row\">\n<div class=\"col-md-8 col-md-offset-2 text-center\">\n<h2 class=\"title\">我们的团队或证书</h2>\n\n<h5 class=\"description\">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-sm-3\">\n<div class=\"card card-profile card-plain\">\n<div class=\"card-avatar\"><img alt=\"\" class=\"img\" src=\"/ckuploadfiles/images/card-profile4-square.jpg\" /></div>\n\n<div class=\"content\">\n<h4 class=\"card-title\">Alec Thompson</h4>\n\n<h6 class=\"category text-muted\">CEO / Co-Founder</h6>\n\n<p class=\"card-description\">And I love you like Kanye loves Kanye. We need to restart the human foundation.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-3\">\n<div class=\"card card-profile card-plain\">\n<div class=\"card-avatar\"><img alt=\"\" class=\"img\" src=\"/ckuploadfiles/images/card-profile4-square.jpg\" /></div>\n\n<div class=\"content\">\n<h4 class=\"card-title\">Alec Thompson</h4>\n\n<h6 class=\"category text-muted\">CEO / Co-Founder</h6>\n\n<p class=\"card-description\">And I love you like Kanye loves Kanye. We need to restart the human foundation.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-3\">\n<div class=\"card card-profile card-plain\">\n<div class=\"card-avatar\"><img alt=\"\" class=\"img\" src=\"/ckuploadfiles/images/card-profile4-square.jpg\" /></div>\n\n<div class=\"content\">\n<h4 class=\"card-title\">Alec Thompson</h4>\n\n<h6 class=\"category text-muted\">CEO / Co-Founder</h6>\n\n<p class=\"card-description\">And I love you like Kanye loves Kanye. We need to restart the human foundation.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-3\">\n<div class=\"card card-profile card-plain\">\n<div class=\"card-avatar\"><img alt=\"\" class=\"img\" src=\"/ckuploadfiles/images/card-profile4-square.jpg\" /></div>\n\n<div class=\"content\">\n<h4 class=\"card-title\">Alec Thompson</h4>\n\n<h6 class=\"category text-muted\">CEO / Co-Founder</h6>\n\n<p class=\"card-description\">And I love you like Kanye loves Kanye. We need to restart the human foundation.</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n\n<div class=\"about-services\">\n<div class=\"row\">\n<div class=\"col-md-8 col-md-offset-2 text-center\">\n<h2 class=\"title\">我们的产品领域</h2>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-sm-4\">\n<div class=\"info-horizontal\">\n<div class=\"icon icon-rose\"><i class=\"material-icons\">gesture</i></div>\n\n<div class=\"description\">\n<h4 class=\"info-title\">1. Design</h4>\n\n<p>The moment you use Material Kit, you know you&rsquo;ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-4\">\n<div class=\"info-horizontal\">\n<div class=\"icon icon-rose\"><i class=\"material-icons\">build</i></div>\n\n<div class=\"description\">\n<h4 class=\"info-title\">2. Develop</h4>\n\n<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-4\">\n<div class=\"info-horizontal\">\n<div class=\"icon icon-rose\"><i class=\"material-icons\">mode_edit</i></div>\n\n<div class=\"description\">\n<h4 class=\"info-title\">3. Make Edits</h4>\n\n<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n\n<div class=\"about-office\">\n<div class=\"row  text-center\">\n<div class=\"col-md-8 col-md-offset-2\">\n<h2 class=\"title\">我们的推荐或我们的环境</h2>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-sm-4\"><img alt=\"\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/20170810115605.png\" /></div>\n\n<div class=\"col-sm-4\"><img alt=\"\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/201603111211189339.jpg\" /></div>\n\n<div class=\"col-sm-4\"><img alt=\"\" class=\"img-rounded img-responsive img-raised\" src=\"/ckuploadfiles/images/201603111211104365.jpg\" /></div>\n</div>\n</div>\n\n<p>&nbsp;你猜猜猜，你再猜是不是真的。</p>', '1', '2017-08-11 22:43:20', '2017-08-12 10:10:48');
INSERT INTO `single_pages` VALUES ('4', '4', '', '<h3>商务伙伴</h3>\n<div class=\"row\">\n    <div class=\"col-sm-3\">\n        <div class=\"card card-plain card-blog\">\n            <div class=\"card-image\"><img alt=\"\" class=\"img img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\"/></div>\n            <div class=\"card-content\">\n                <h6><a class=\"text-info\" href=\"#pablo\">阿里云</a></h6>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"col-sm-3\">\n        <div class=\"card card-plain card-blog\">\n            <div class=\"card-image\"><img alt=\"\" class=\"img img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\"/></div>\n            <div class=\"card-content\">\n                <h6><a class=\"text-success\" href=\"#pablo\">自得其乐</a></h6>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"col-sm-3\">\n        <div class=\"card card-plain card-blog\">\n            <div class=\"card-image\"><img alt=\"\" class=\"img img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\"/></div>\n            <div class=\"card-content\">\n                <h6><a class=\"text-danger\" href=\"#\">Google+</a></h6>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"col-sm-3\">\n        <div class=\"card card-plain card-blog\">\n            <div class=\"card-image\"><img alt=\"\" class=\"img img-raised\" src=\"/ckuploadfiles/images/5372d0b64e163.jpg\"/></div>\n            <div class=\"card-content\">\n                <h6><a class=\"text-gray\" href=\"#\" target=\"_blank\">Google</a></h6>\n            </div>\n        </div>\n    </div>\n</div>', '1', '2017-08-11 22:43:25', '2017-08-12 10:32:30');
INSERT INTO `single_pages` VALUES ('5', '5', '月令24节气-专题1', '<p>月令七十二候集解　　元　崇仁吴澄伯清著<br />\n<br />\n　<br />\n<br />\n　夫七十二候，吕不韦载于《吕氏春秋》，汉儒入于《礼记?月令》，与六经同传不朽。后魏载之于历，欲民皆知，以验气序。然其禽兽草木，多出北方，盖以汉前之儒皆江北者也。故江南老师宿儒，亦难尽识。况陈澔之注，多为谬说，而康成、颖达，亦有讹处。予因是广取诸家之解，并《说文》《埤雅》等书，而又询之农牧，似得所归。然后并将二十四气什之于槁，以俟博识者鉴焉。<br />\n<br />\n　　○立春<br />\n<br />\n　　立春，正月节。立，建始也。五行之气往者过来者续于此。而春木之气始至，故谓之立也。立夏、秋、冬同。东风解冻。冻结于冬，遇春风而解散；不曰春而曰东者，《吕氏春秋》曰：东方属木，木，火母也。然气温，故解冻。蛰虫始振。蛰，藏也；振，动也。密藏之虫，因气至，而皆苏动之矣。鲍氏曰：动而未出，至二月，乃大惊而走也。鱼陟负冰。陟，升也。鱼当盛寒伏水底而遂暖，至正月阳气至，则上游而近冰，故曰负。<br />\n<br />\n　　○雨水<br />\n<br />\n　　雨【去声】水，正月中。天一生水，春始属木，然生木者，必水也，故立春后继之雨水，且东风既解冻，则散而为雨水矣。獭祭鱼。獭，一名水狗，贼鱼者也。祭鱼，取鱼以祭天也。所谓豺獭知报本，岁始而鱼上游，则獭初取以祭。徐氏曰：獭祭圆铺，圆者，水象也；豺祭方铺，方者，金象也。候雁北【《月令》、《汉书》作鸿雁北】。雁，知时之鸟。热归塞北，寒来江南，沙漠乃其居也。孟春阳气既达，候雁自彭蠡而北矣。草木萌动。天地之气交而为泰，故草木萌生发动矣。<br />\n<br />\n　　○惊蛰<br />\n<br />\n　　惊蛰，二月节。《夏小正》曰：正月启蛰，言发蛰也。万物出乎震，震为雷，故曰惊蛰。是蛰虫惊而出走矣。桃始华【《吕氏春秋》作桃李华】。桃，果名，花色红，是月始开。仓庚鸣，庚亦作鹒，黄鹂也。诗所谓&lsquo;有鸣仓庚&rsquo;是也。《章龟经》曰：仓，清也；庚，新也；感春阳清新之气而初出，故名。其名最多，《诗》曰黄鸟，齐人谓之搏黍，又谓之黄袍，僧家谓之金衣公子，其色鵹黑而黄，又名鵹黄。谚曰黄栗留、黄莺莺儿，皆一种也。鹰化为鸠。鹰，鸷鸟也，鹞鹯之属。鸠，即今之布谷，《章龟经》曰：仲春之时，林木茂盛，口啄尚柔，不能捕鸟，瞪目忍饥如痴而化，故名曰鸤鸠。《王制》曰鸠化为鹰，秋时也。此言鹰化为鸠，春时也。以生育肃杀气盛，故鸷鸟感之而变耳。孔氏曰：化者，反归旧形之谓。故鹰化为鸠，鸠复化为鹰，如田鼠化为鴽，则鴽又化为田鼠。若腐草为萤，鴙为蜃，爵为蛤，皆不言化，是不再复本形者也。<br />\n<br />\n　　○春分<br />\n<br />\n　　春分，二月中。分者，半也。此当九十日之半，故谓之分。秋同义。夏、冬不言分者，盖天地闲二气而已。方氏曰：阳生于子，终于午，至卯而中分，故春为阳中，而仲月之节为春分，正阴阳适中，故昼夜无长短云。元鸟至。元鸟，燕也。高诱曰：春分而来，秋分而去也。雷乃发声。阴阳相薄为雷，至此，四阳渐盛，犹有阴焉，则相薄乃发声矣。乃者，《韵会》曰：象气出之难也。注疏曰：发，犹出也。始电。电，阳光也，四阳盛长，值气泄时而光生焉，故《历解》曰：凡声阳也，光亦阳也。《易》曰：雷电合而章。《公羊传》曰：电者，雷光是也。《徐氏》曰：雷阳阴电，非也。盖盛夏无雷之时，电亦有之，可见矣。<br />\n<br />\n　　○清明<br />\n<br />\n　　清明，三月节。按《国语》曰：时有八风。历独指清明风为三月节，此风属巽故也。万物齐乎巽，物至此时皆以洁齐而清明矣。桐始华。桐，木名。有三种：华而不实者曰白桐，《尔雅》所谓荣桐木是也；皮青而结实者曰梧桐，一曰青桐，《淮南子》曰梧桐断角是也；生于山冈、子大而有油者曰油桐，毛诗所谓梧桐不生山冈者是也。今始华者，乃白桐耳。按《埤雅》：桐木知日月、闰年，每一枝生十二叶，闰则十三叶，与天地合气者也。今造琴瑟者，以花桐木，是知桐为白桐也。田鼠化为鴽【音如】。按《尔雅》注曰：鼫鼠，形大如鼠，头似兔，尾有毛，青黄色，好在田中食粟豆，谓之田鼠。《本草》《素问》曰：鴽，鹑也，似鸽而小。《尔雅?释鸟》：鴽，鴾母。郭注：{酓鸟}也，青州人呼为鴾母。鲍氏曰：鼠，阴类；鴽，阳类；阳气盛故化为鴽，盖阴为阳所化也。虹始见【去声】。虹，虹霓也，诗所谓?蝀，俗读去声也。注疏曰：是阴阳交会之气，故先儒以为云薄漏日，日照雨滴则虹生焉，今以水噀日，自剑视之则晕为虹。朱子曰：日与雨交，倏然成质，阴阳不当交而交者，天地淫气也。虹为雄，色赤白，霓为雌，色青白，然二字皆从虫。《说文》曰：似?蝀状。诸书又云：尝见虹入溪饮水，其首如驴。恐天地闲亦有此种物也，但虹气似之借名也。<br />\n<br />\n　　○谷雨<br />\n<br />\n　　谷雨【去声】，三月中。自雨水后，土膏脉动，今又雨其谷于水也。雨读作去声，如&lsquo;雨我公田&rsquo;之雨，盖谷以此时播种自上而下也。故《说文》云雨本去声，今风雨之雨在上声，雨下之雨在去声也。萍始生。萍，水草也，与水相平，故曰萍。漂流随风，故又曰漂。《历解》曰：萍阳物，静以承阳也。鸣鸠拂其羽。鸠，即鹰所化者，布谷也。拂，过击也；《本草》云：拂羽飞而翼拍其身，气使然也。盖当三月之时，趋农急矣，鸠乃追逐而鸣，鼓羽直刺上飞，故俗称布谷。戴胜降于桑。戴胜一名戴鵀，《尔雅注》曰：头上有胜毛。此时恒在于桑，盖蚕将生之候矣。言降者，重之若天而下，亦气使之然也。<br />\n<br />\n　　○立夏<br />\n<br />\n　　立夏，四月节。立字解见春。夏，假也。物至此时皆假大也。蝼蝈鸣。蝼蝈，小虫，生穴土中，好夜出，今人谓之土狗是也；一名蝼蛄，一名石鼠，一名螜【音斛】，各地方言之不同也。《淮南子》曰：蝼蝈鸣，邱蚓出，阴气始而二物应之。《夏小正》：三月螜则鸣是也。且有五能，不能成一技：飞不能过屋；缘不能穷木；泅不能渡谷；穴不能覆身；走不能先人。故《说文》称鼫为五技之鼠。《古今注》又以蝼名鼫，鼠可知。《埤雅》《本草》俱以为臭虫，陆德明、郑康成以为蛙，皆非也。蚯蚓出。蚯蚓即地龙也【一名曲蟺】，《历解》曰：阴而屈者，乘阳而伸见也。王瓜生。《图经》云：王瓜处处有之，生平野、田宅及墙垣，叶似栝楼、乌药，圆无丫缺，有毛如刺，蔓生，五月开黄花，花下结子如弹丸，生青熟赤，根似葛，细而多糁，又名土瓜，一名落鸦瓜，今药中所用也。《礼记》郑元注曰：即萆挈。《本草》作菝葜，陶隐居以辨其谬，谓菝葜自有本条，殊不知王瓜亦自有本条，先儒当时如不检书而谩言者，可笑。<br />\n<br />\n　　○小满<br />\n<br />\n　　小满，四月中。小满者，物至于此小得盈满。苦菜秀。《埤雅》以荼为苦菜，《毛诗》曰：谁谓荼苦【荼即茶也，故韵今茶注本作荼】。是也。鲍氏曰：感火之气而苦味成。《尔雅》曰：不荣而实，谓之秀，荣而不实，谓之英。此苦菜宜言英也。蔡邕《月令》以谓苦荬菜，非。靡草死。郑康成、鲍景翔皆云靡草葶苈之属，《礼记注》曰：草之枝叶而靡细者。方氏曰：凡物感阳而生者则强而立，感阴而生者则柔而靡，谓之靡草，则至阴之所生也，故不胜至阳而死。麦秋至。秋者，百谷成熟之期，此于时虽夏，于麦则秋，故云麦秋也。<br />\n<br />\n　　○芒种<br />\n<br />\n　　芒种【上声】，五月节。谓有芒之种谷可稼种【去声】矣。螳螂生。螳螂，草虫也，饮风食露，感一阴之气而生，能捕蝉而食，故又名杀虫；曰天马，言其飞捷如马也；曰斧虫，以前二足如斧也，尚名不一，各随其地而称之。深秋生子于林木闲，一壳百子，至此时则破壳而出，药中桑螵蛸是也。鵙【音局】始鸣。鵙，百劳也，《本草》作博劳；朱子《孟》注曰：博劳，恶声之鸟，盖枭类也。曹子建《恶鸟论》：百劳以五月鸣，其声鵙鵙然，故以之立名，似俗称浊温。故《埤雅》禽经注云：伯劳不能翺翔，直飞而已。《毛诗》曰：七月鸣鵙。盖周七月夏五月也。反舌无声。诸书以为百舌鸟，以其能反复其舌故名，特注疏以为虾蟆，盖蛙属之舌尖向内，故名之。今辨其非者，以其此时正鸣，不知失者也，《易通卦验》亦名为虾蟆无声，若以五月正鸣，殊不知初旬见形后，形亦藏矣。陈氏曰：螳螂、鵙皆阴类，感微阴而或生或鸣，反舌感阳而发，遇微阴而无声也。<br />\n<br />\n　　○夏至<br />\n<br />\n　　夏至，五月中。《韵会》曰：夏，假也；至，极也；万物于此皆假大而至极也。鹿角解【音骇】。鹿，形小山兽也，属阳，角支向前与黄牛一同；麋，形大泽兽也，属阴，角支向后与水牛一同。夏至一阴生，感阴气而鹿角解。解，角退落也。冬至一阳生，麋感阳气而角解矣，是夏至阳之极，冬至阴之极也。蜩【音调】始鸣【《月令》注疏作蝉始鸣】。蜩，蝉之大而黑色者，蜣螂脱壳而成，雄者能鸣，雌者无声，今俗称知了是也。按蝉乃总名，鸣于夏者曰蜩，即《庄子》云&lsquo;蟪蛄不知春秋者&rsquo;是也。盖蟪蛄夏蝉，故不知春秋。鸣于秋者曰寒蜩，即楚辞所谓寒螀也。故《风土记》曰：蟪蛄鸣朝，寒螀鸣夕。今秋初夕阳之际，小而绿色声急疾者俗称都了是也。故《埤雅》各释其义，然此物生于盛阳，感阴而鸣。半夏生。半夏，药名，居夏之半而生，故名。<br />\n<br />\n　　○小暑<br />\n<br />\n　　小暑，六月节。《说文》曰：暑，热也。就热之中，分为大小，月初为小，月中为大，今则热气犹小也。温风至。至，极也，温热之风至此而极矣。蟋【音悉】蟀【音率】居壁。一名蛬【音拱】，一名蜻蛚，即今之促织也。《礼记注》曰：生土中。此时羽翼稍成，居穴之壁，至七月则远飞而在野矣。盖肃杀之气初生则在穴，感之深则在野而鬬。鹰始击【《礼记》作鹰乃学习】。击，搏击也。应氏曰：杀气未肃，鸷猛之鸟始习于击，迎杀气也。<br />\n<br />\n　　○大暑<br />\n<br />\n　　大暑，六月中。解见小暑。腐草为萤。曰丹良，曰丹鸟，曰夜光，曰宵烛，皆萤之别名。离明之极，则幽阴至微之物亦化而为明也。《毛诗》曰：熠耀宵行。另一种也，形如米虫，尾亦有火，不言化者，不复原形，解见前。土润溽【音辱】暑。溽，湿也，土之气润，故蒸郁而为湿；暑，俗称龌龊，热是也。大雨时行。前候湿暑之气蒸郁，今候则大雨时行，以退暑也。<br />\n<br />\n　　○立秋<br />\n<br />\n　　立秋，七月节。立字解见春。秋，揪也。物于此而揪敛也。凉风至【礼记作盲风至】。西方凄清之风曰凉风，温变而凉气始肃也。《周语》曰火见而清风戒寒是也。白露降。大雨之后，清凉风来，而天气下降，茫茫而白者，尚未凝珠，故曰白露。降示秋金之白色也。寒蝉鸣。寒蝉，《尔雅》曰寒螀，蝉小而青紫者。马氏曰：物生于暑者，其声变之矣。<br />\n<br />\n　　○处暑<br />\n<br />\n　　处暑，七月中。处，止也。暑气至此而止矣。鹰乃祭鸟，鹰，义禽也。秋令属金，五行为义，金气肃杀，鹰感其气始捕击诸鸟，然必先祭之，犹人饮食祭先代为之者也。不击有胎之禽，故谓之义。天地始肃秋者，阴之始，故曰天地始肃。 禾乃登。禾者。谷连藁秸之总名。又，稻秫苽粱之属皆禾也。成热曰登。<br />\n<br />\n　　○白露<br />\n<br />\n　　白露，八月节。秋属金，金色白，阴气渐重，露凝而白也。鸿【淮南子作候】雁来。鸿大雁小，自北而来南也。不谓南乡，非其居耳。详见雨水节下。元鸟归。元鸟，解见前，此时自南而往北也。燕乃北方之鸟，故曰归。 群鸟养羞【淮南子作群鸟翔】。三人以上为众，三兽以上为群；群，众也。《礼记注》曰：羞者，所羹之食；养羞者，藏之以备冬月之养也。<br />\n<br />\n　　○秋分<br />\n<br />\n　　秋分，八月中。解见春分。 雷始收声。鲍氏曰：雷二月阳中发声，八月阴中收声入地，则万物随入也。蛰虫坏【音培】户。淘瓦之泥曰坏，细泥也。按《礼记注》曰：坏益其蛰穴之户，使通明处稍小，至寒甚乃墐塞之也。水始涸。《礼记注》曰：水本气之所为，春夏气至故长，秋冬气返故涸也。<br />\n<br />\n　　○寒露<br />\n<br />\n　　寒露，九月节。露气寒冷，将凝结也。 鸿雁来宾。雁以仲秋先至者为主，季秋后至者为宾。《通书》作来滨。滨，水际也，亦通。雀入大水为蛤。雀，小鸟也，其类不一，此为黄雀。大水，海也，《国语》云：雀入大海为蛤。盖寒风严肃，多入于海。变之为蛤，此飞物化为潜物也。蛤，蚌属，此小者也。菊有黄华。草木皆华于阳，独菊华于阴，故言有桃桐之华皆不言色，而独菊言者，其色正应季秋土旺之时也。<br />\n<br />\n　　○霜降<br />\n<br />\n　　霜降，九月中。气肃而凝露结为霜矣。《周语》曰：驷见而陨霜。豺祭兽【《月令》作豺乃祭兽戮禽】。祭兽，以兽而祭天，报本也。方铺而祭，秋金之义。 草木黄落。色黄而摇落也。蛰虫咸俯【淮南子作俛】。咸，皆也；俯，垂头也。此时寒气肃凛，虫皆垂头而不食矣。<br />\n<br />\n　　○立冬<br />\n<br />\n　　立冬，十月节。立字解见前。冬，终也，万物收藏也。 水始冰。水面初凝，未至于坚也。 地始冻。土气凝寒，未至于拆。雉入大水为蜃。雉，野鸡；郑康成、《淮南子》、高诱俱注蜃为大蛤。《玉篇》亦曰：蜃，大蛤也。《墨子》又曰：蚌，一名蜃，蚌非蛤类乎？《礼记之注》曰蛟属，《埤雅》又以蚌、蜃各释，似非蛤类。然按《本草》车螯之条曰：车螯，是大蛤，一名蜃，能吐气为楼台，又尝闻海旁蜃气成楼垣。《章龟经》曰：蜃大者为车轮岛屿，月闲吐气成楼，与蛟龙同也。则知此为蛤，明矣。况《尔雅翼》引周礼诸家，辩蜃为蛤甚明。《礼记之注》以谓雉，由于蛇化之说，故以雉子为蜃，《埤雅》既曰似蛇而大，腹下尽逆鳞，知之悉矣，然复疑之：一曰状似螭龙，有耳，有角，则亦闻而识之，不若《本草》、《章龟经》为是，即一物耳。大水，淮也，晋语曰：雉入于淮为蜃。<br />\n<br />\n　　○小雪<br />\n<br />\n　　小雪，十月中。雨下而为寒气所薄，故凝而为雪。小者，未盛之辞。虹藏不见。《礼记注》曰：阴阳气交而为虹，此时阴阳极乎辨，故虹伏。虹非有质，而曰藏，亦言其气之下伏耳。 天气上升，地气下降。闭塞而成冬。天地变而各正其位，不交则不通，不通则闭塞，而时之所以为冬也。<br />\n<br />\n　　○大雪<br />\n<br />\n　　大雪，十一月节。大者，盛也。至此而雪盛矣。鹖鴠不鸣。《禽经》曰：鹖，毅鸟也。似雉而大，有毛角，鬬死方休，古人取为勇士，冠名可知矣，《汉书音义》亦然。《埤雅》云：黄黑色，故名为鹖。据此，本阳鸟，感六阴之极不鸣矣。若郭璞《方言》：似鸡，冬无毛，昼夜鸣，即寒号虫。陈澔与方氏亦曰求旦之鸟，皆非也。夜既鸣，何为不鸣耶？《丹铅余录》作雁，亦恐不然。《淮南子》作鳱鴠，《诗》注作渴旦。虎始交。虎，猛兽。故《本草》曰能避恶魅，今感微阳气，益甚也，故相与而交。荔挺出。荔，《本草》谓之蠡，实即马薤也。郑康成、蔡邕、高诱皆云马薤，况《说文》云：荔似蒲而小，根可为刷，与《本草》同。但陈澔注为香草，附和者即以为零陵香，殊不知零陵香自生于三月也。<br />\n<br />\n　　○冬至<br />\n<br />\n　　冬至，十一月中。终藏之气至此而极也。 蚯蚓结。六阴寒极之时，蚯蚓交相结而如绳也。 麋角解。说见鹿角解下。水泉动。水者，天一之阳所生，阳生而动，今一阳初生故云耳。<br />\n<br />\n　　○小寒<br />\n<br />\n　　小寒，十二月节。月初寒尚小，故云。月半则大矣。雁北乡【去声】。乡，向导之义。二阳之候，雁将避热而回，今则乡北飞之，至立春后皆归矣，禽鸟得气之先故也。鹊始巢。喜鹊也，鹊巢之门每向太岁，冬至天元之始，至后二阳已得来年之节气，鹊遂可为巢，知所向也。雉雊【音姤】。雉，文明之禽，阳鸟也；雊，雌雄之同鸣也，感于阳而后有声。<br />\n<br />\n　　○大寒<br />\n<br />\n　　大寒，十二月中。解见前。 鸡乳。育也，马氏曰：鸡木畜，丽于阳而有形，故乳在立春节也。征鸟厉疾。征，伐也；杀伐之鸟，乃鹰隼之属；至此而猛厉迅疾也。水泽腹坚。陈氏曰：冰之初凝，水面而已，至此则彻，上下皆凝。故云腹坚。腹，犹内也。</p>', '1', '2017-08-11 14:32:42', '2017-08-14 07:50:12');
INSERT INTO `single_pages` VALUES ('6', '5', '月令24节气-专题2', '<p>&nbsp;附1：<br />\n二十四气：七十二候<br />\n<br />\n正月<br />\n立春：初候，东风解冻；阳和至而坚凝散也。 二候，蛰虫始振；振，动也。三侯，鱼陟负冰。 陟，言积，升也，高也。阳气已动，鱼渐上游而近于冰也。<br />\n雨水：初候，獭祭鱼。此时鱼肥而出，故獭而先祭而后食。二候，候雁北；自南而北也 三候，草木萌动。是为可耕之候。<br />\n<br />\n二月<br />\n惊蛰：初候，桃始华；阳和发生，自此渐盛。 二候，仓庚鸣；黄鹂也。 三候，鹰化为鸠。鹰鸷鸟也。此时鹰化为鸠，至秋则鸠复化为鹰。<br />\n春分：初候，玄鸟至；燕来也。 二候，雷乃发声：雷者阳之声，阳在阴内不得出，故奋激而为雷。 三候，始电。电者阳之光，阳气微则光不见，阳盛欲达而抑于阴。其光乃发，故云始电。<br />\n<br />\n三月<br />\n清明：初候，桐始华；二候，田鼠化为鴽，牡丹华；鴑音如，鹌鹑属，鼠阴类。阳气盛则鼠化为鴽，阴气盛则鴽复化为鼠。 三候，虹始见。虹，音洪，阴阳交会之气，纯阴纯阳则无，若云薄漏日，日穿雨影，则虹见。<br />\n谷雨：初候，萍始生，二候，鸣鸠拂其羽，飞而两翼相排，农急时也。 三候、戴胜降于桑，织网之鸟，一名戴鵀，阵于桑以示蚕妇也，故曰女功兴而戴鵀鸣。<br />\n<br />\n四月<br />\n立夏：初候，蝼蝈鸣；蝼蛄也，诸言蚓者非。 二候，蚯蚓出；蚯蚓阴物，感阳气而出。 三候，王瓜生；王瓜色赤，阳之盛也。<br />\n小满：初候，苦菜秀；火炎上而味苦，故苦菜秀。 二候，靡草死；葶苈之属。 三候，麦秋至。秋者，百谷成熟之期。此时麦熟，故曰麦秋。<br />\n<br />\n五月<br />\n芒种：初候，螳螂生；俗名刀螂，说文名拒斧。 二候，鹃始鸣；鹃，屠畜切，伯劳也。 三候，反舌无声。百舌鸟也。<br />\n夏至：初候，鹿角解；阳兽也，得阴气而解。 二候，蜩始鸣，蜩，音蜩，蝉也。 三候，半夏生，药名也，阳极阴生。<br />\n<br />\n六月<br />\n小暑：初候，温风至；二候，蟋蜂居壁；亦名促织，此时羽翼未成，故居壁。 三侯，鹰始挚。挚，言至.鹰感阴气，乃生杀心，学习击搏之事。<br />\n大暑：初候，腐草为萤；离明之极，故幽类化为明类。 二候，土润溽暑；溽，音辱，湿也。三候，大雨行时。<br />\n<br />\n七月<br />\n立秋：初候，凉风至，二候，白露降；三候，寒蝉鸣。蝉小而青赤色者。<br />\n处暑：初候，鹰乃祭鸟；鹰，杀鸟。不敢先尝，示报本也。 二候，天地始肃；清肃也，寨也。 三候，禾乃登。稷为五谷之长，首熟此时。<br />\n<br />\n八月<br />\n白露：初候，鸿雁来；自北而南也。 一曰：大曰鸿，小曰雁。二候，玄鸟归；燕去也。三候，群鸟养羞。羞，粮食也。养羞以备冬月。<br />\n秋分：初候，雷始收声；雷于二月阳中发生，八月阴中收声。 二候，蛰虫坯户；坯，昔培。坯户，培益其穴中之户窍而将蛰也。 三候，水始涸。国语曰：辰角见而雨毕，天根见而水涸，雨毕而除道，水涸而成梁。辰角者，角宿也。天根者，氐房之间也。见者，旦见于东方也。辰角见九月本，天根见九月末，本末相去二十一余。<br />\n<br />\n九月<br />\n寒露：初候，鸿雁来宾。宾，客也。先至者为主，后至者为宾，盖将尽之谓 二候，雀入大水为蛤；飞者化潜，阳变阴也。 三候，菊有黄花。诸花皆不言，而此独言之，以其华于阴而独盛于秋也。<br />\n霜降：初候，豺乃祭兽；孟秋鹰祭鸟，飞者形小而杀气方萌，季秋豺祭兽，走者形大而杀气乃盛也。二候， 草木黄落；阳气去也。 三侯，蛰虫咸俯。俯，蛰伏也<br />\n<br />\n十月<br />\n立冬：初候，水始冻；二候，地始冻；三侯，雉入大水为蜃。蜃，蚌属。<br />\n小雪：初候，虹藏不见，季春阳胜阴，故虹见；孟冬阴胜阳，故藏而不见。 二候，天气上升，地气下将；三侯， 闭塞而成冬。阳气下藏地中，阴气闭固而成冬。<br />\n<br />\n十一月<br />\n大雪：初候，鹖鴠不鸣，鹖鴠，音曷旦，夜鸣求旦之鸟，亦名寒号虫，乃阴类而求阳者，兹得一阳之生，故不鸣矣。 二候，虎始交；虎本阴类。感一阳而交也。三候，荔挺出。荔，一名马蔺叶似蒲而小，根可为刷。<br />\n冬至：初候，蚯蚓结；阳气未动，屈首下向，阳气已动，回首上向，故屈曲而结。 二候，麇角解；阴兽也。得阳气而解。 三侯，水泉动&middot;天一之阳生也。<br />\n<br />\n十二月<br />\n小寒：初候，雁北乡；一岁之气，雁凡四候。如十二月雁北乡者，乃大雁，雁之父母也。正月侯雁北者，乃小雁，雁之子也。盖先行者其大，随后者其小也。此说出晋&middot;干宝，宋人述之以为的论。 二候，鹊始巢；鹊知气至，故为来岁之巢。 三候，雉雊；雊，句姤二音，雉鸣也。雉火畜，感于阳而后有声。<br />\n大寒：初候，鸡乳，鸡，水畜也，得阳气而卵育，故云乳。 二候，征鸟厉疾；征鸟，鹰隼之属，杀气盛极，故猛厉迅疾而善于击也。 三候，水泽腹坚。阳气未达，东风未至，故水泽正结而坚。<br />\n<br />\n<br />\n<br />\n附2：<br />\n立春：立春之日东风解冻，又五日蛰虫始振，又五日鱼上冰（鱼陟负冰）。<br />\n雨水：雨水之日獭祭鱼，又五日鸿雁来（候雁北），又五日草木萌动。<br />\n惊蛰：惊鸷之日桃始华，又五日仓庚鸣，又五日鹰化为鸠。<br />\n春分：春分之日玄鸟至，又五日雷乃发声，又五日始电。<br />\n清明：清明之日桐始华，又五日田鼠化为鴽，又五日虹始见。<br />\n谷雨：榖雨之日萍始生，又五日鸣鸠拂奇羽，又五日戴胜降于桑。<br />\n立夏：立夏之日蝼蝈鸣，又五日蚯蚓出，又五日王瓜生。<br />\n小满：小满之日苦菜秀，又五日靡草死，又五日小暑至（麦秋生）。<br />\n芒种：芒种之日螳螂生，又五日鵙始鸣，又五日反舌无声。<br />\n夏至：夏至之日鹿角解，又五日蜩始鸣，又五日半夏生。<br />\n小暑：小暑之日温风至，又五日蟋蟀居辟，又五日鹰乃学习（鹰始挚）。<br />\n大暑：大暑之日腐草为蠲，又五日土润溽暑，又五日大雨时行。<br />\n立秋：立秋之日凉风至，又五日白露降，又五日寒蝉鸣。<br />\n处暑：处暑之日鹰乃祭鸟，又五日天地始肃，又五日禾乃登。<br />\n白露：白露之日鸿雁来，又五日玄鸟归，又五日群鸟养羞。<br />\n秋分：秋分之日雷始收声，又五日蛰虫培户，又五日水始涸。<br />\n寒露：寒露之日鸿雁来宾，又五日雀入大水为蛤，又五日菊有黄华。<br />\n霜降：霜降之日豺乃祭兽，又五日草木黄落，又五日蛰虫咸俯。<br />\n立冬：立冬之日水始冰，又五日地始冻，又五日雉入大水为蜃。<br />\n小雪：小雪之日虹藏不见，又五日天气上腾地气下降，又五日闭塞而成冬。<br />\n大雪：大雪之日鹖旦不鸣，又五日虎始交，又五日荔挺生。<br />\n冬至：冬至之日蚯蚓结，又五日麋角解，又五日水泉动。<br />\n小寒：小寒之日雁北乡，又五日鹊始巢，又五日雉始雊。<br />\n大寒：大寒之日鸡使乳，又五日鹫鸟厉疾，又五日水泽腹坚。<br />\n<br />\n<br />\n<br />\n附3：<br />\n七十二候 - 歌谣<br />\n<br />\n立春正月春气动，东风能解凝寒冻； 土底蛰虫始振摇，鱼陟负冰相戏泳；<br />\n<br />\n半月交得雨水后，獭祭鱼时随应候； 候雁时催归北乡，那堪草木萌芽透。<br />\n<br />\n惊蛰二月节气浮，桃始开花放树头； 鸧鹧鸣动无休歇，崔得胡鹰化作鸠；<br />\n<br />\n春色平分纔一半，向时玄鸟重相见； 雷乃发声天际头，闪闪云开始见电。<br />\n<br />\n芳菲三月报清明，梧桐枝上始含英； 田鼠化鴽人不觉，虹桥始见雨初晴；<br />\n<br />\n三月中时交谷雨，萍始生遍闲洲渚； 鸣鸠自拂其羽毛，戴胜降于桑树隅。<br />\n<br />\n立夏四月始相争，知他蝼蝈为谁鸣； 无端坵蚓纵横出，有意王瓜取次生；<br />\n<br />\n小满瞬时更叠至，闲寻苦菜争荣处； 靡草千村死欲枯，微看初暄麦秋至；<br />\n<br />\n芒种一番新换豆，不谓螳螂生如许； 鵙者鸣时声不休，反舌无声没半语。<br />\n<br />\n夏至纔交阴始生，鹿乃解角养新茸； 阴阴蜩始鸣长日，细细田间半夏生；<br />\n<br />\n小暑乍来浑未觉，温风时至褰帘幙； 蟋蟀纔居屋璧诸，天崖又见鹰始挚。<br />\n<br />\n大暑虽炎犹自好，且看腐草为萤秒； 匀匀土润散溽蒸，大雨时行苏枯槁。<br />\n<br />\n大火西流又立秋，凉风至透内房幽； 一庭白露微微降，几个寒蝉鸣树头；<br />\n<br />\n一瞬中间处暑至，鹰乃祭鸟谁教汝； 天地属金始肃清，禾乃登堂收几许；<br />\n<br />\n无可奈何白露秋，大鸿小雁来南洲； 旧石玄鸟都归去，教令诸禽各养羞。<br />\n<br />\n自入秋分八月中，雷始收声敛震宫； 蛰虫坏户先为御，水始涸兮势向东；<br />\n<br />\n寒露人言晚节佳，鸿雁来宾时不差； 雀入大水化为蛤，争看篱菊有黄花；<br />\n<br />\n休言霜降非天意，豺乃祭兽班时意； 草木皆黄落叶天，蛰虫咸俯迎寒气；<br />\n<br />\n谁看书来立冬信，水始成冰寒日进； 地始冻兮折裂开，雉入大水潜为蜃；<br />\n<br />\n逡巡小雪年华暮，虹藏不见知何处； 天升地降两不交，闭寒成冬如禁锢；<br />\n<br />\n纷飞大雪转凄迷，鹖旦不鸣马肯啼； 虎始交后风生壑，荔挺出时霜满溪。<br />\n<br />\n短日渐长冬至矣，蚯蚓结泉更不起； 渐渐林间麋角解，水泉摇动温井底；<br />\n<br />\n去岁小寒今岁又，雁声北乡春去旧； 鹊寻枝上始为巢，雉入寒烟时一雊。<br />\n<br />\n一年时尽大寒来，鸡始乳兮如乳孩； 征鸟当权飞厉疾，泽腹弥坚冻不开；<br />\n<br />\n五朝一候如麟次，一岁从头七十二； 达人观此发天机，多少乾坤无限事。<br />\n<br />\n<br />\n附4：<br />\n<br />\n&nbsp;月份 节气 初候 二候 三候<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;立春 东风解冻 蛰虫始振 鱼陟负冰<br />\n正 月（孟春）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;雨水 獭祭鱼 候雁北 草木萌动<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;惊蛰 桃始华 仓庚鸣 鹰化为鸠<br />\n二 月（仲春）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;春分 玄鸟至 雷乃发声 始电<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;清明 桐始华 田鼠化为鴽 虹始见<br />\n三 月（季春）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;谷雨 萍始生 鸣鸠拂其羽 戴胜降于桑<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;立夏 蝼蝈鸣 蚯蚓出 王瓜生<br />\n四 月（孟夏）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小满 苦菜秀 靡草死 麦秋至<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;芒种 螳螂生 鹃始鸣 反舌无声<br />\n五 月（仲夏）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;夏至 鹿角解 蜩始鸣 半夏生<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小暑 温风至 蟋蜂居壁 鹰始挚<br />\n六 月（季夏）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大暑 腐草为萤 土润溽暑 大雨时行<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;立秋 凉风至 白露降 寒蝉鸣<br />\n七 月（孟秋）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;处暑 鹰乃祭鸟 天地始肃 禾乃登<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;白露 鸿雁来 玄鸟归 群鸟养羞<br />\n八 月（仲秋）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;秋分 雷始收声 蛰虫坯户 水始涸<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;寒露 鸿雁来宾 雀入大水为蛤 菊有黄华<br />\n九 月（季秋）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;霜降 豺乃祭兽 草木黄落 蛰虫咸俯<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;立冬 水始冰 地始冻 雉入大水为蜃<br />\n十 月（孟冬）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小雪 虹藏不见 天气上升地气下降 闭塞而成冬<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大雪 鹖鴠不鸣 虎始交 荔挺出<br />\n十一月（仲冬）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冬至 蚯蚓结 麇角解 水泉动<br />\n<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小寒 雁北乡 鹊始巢 雉始鸲<br />\n十二月（季冬）<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大寒 鸡使乳 鹫鸟厉疾 水泽腹坚</p>', '1', '2017-08-11 14:45:43', '2017-08-14 07:51:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('1', '天文', '1', '1', '1', '2017-08-11 09:02:45', '2017-08-11 09:02:45');
INSERT INTO `tags` VALUES ('2', '历法', '1', '1', '1', '2017-08-11 09:03:03', '2017-08-11 09:03:03');
INSERT INTO `tags` VALUES ('3', '诗文', '1', '1', '1', '2017-08-11 09:03:17', '2017-08-11 09:03:17');
INSERT INTO `tags` VALUES ('4', '甲骨文', '1', '1', '1', '2017-08-11 09:04:10', '2017-08-11 09:04:10');
INSERT INTO `tags` VALUES ('5', '短文', '1', '1', '1', '2017-08-14 03:47:53', '2017-08-14 03:47:53');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oauth` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oauth_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '上善若水', '6540374501@qq.com', '$2y$10$BQ874adR0l6bEgBgjqrCNugitWbg80xP6mgsncaP5uswyQe1eNWt2', 'https://avatars1.githubusercontent.com/u/5745078?v=4', '', '0', 'CcdZjtaMVsD80cOz9ISxcL9x6afy9b73oRc67fMtivw3tPC8w5z9eLCFl1aj', '1', '2017-08-11 09:08:08', '2017-08-18 06:58:56');
INSERT INTO `users` VALUES ('2', '水云阁主', '954072637@qq.com', '$2y$10$FWiBY..egA09yg4lnVIR9uESb/f1Kmizju9j.IbM7L3g5GAN.6V22', '', '', '0', null, '1', '2017-08-11 09:09:29', '2017-08-11 09:09:29');
INSERT INTO `users` VALUES ('4', 'innocence23', '654037450@qq.com', '', 'https://avatars1.githubusercontent.com/u/5745078?v=4', 'github', '5745078', '6hWXrQGC4nOe2P52CgtIB1OLnWlNqXNIbSblD66d3ZGhJHbmb1nAgOmXERMF', '1', '2017-08-18 07:09:26', '2017-08-18 07:09:26');
INSERT INTO `users` VALUES ('5', '张云飞', 'zyf880916@gmail.com', '', 'https://lh4.googleusercontent.com/-R2w-qMjgp7w/AAAAAAAAAAI/AAAAAAAAAGw/R57m3d-CXss/photo.jpg?sz=50', 'google', '116542506709203004307', null, '1', '2017-08-18 07:58:45', '2017-08-18 07:58:45');
