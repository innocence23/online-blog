<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//权限设置
Auth::routes();

//后台登陆
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');
});

//后台模块
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth.admin:admin'], function () {
    //首页
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get('/index', function () {
        return view('admin.dashboard');
    });

    //栏目
    Route::get('category/lists', 'CategoryController@getLists')->name('category.lists');
    Route::post('category/{category}', 'CategoryController@disable')->name('category.disable');
    Route::post('category-order', 'CategoryController@order')->name('category.order');
    Route::resource('category', 'CategoryController', ['only' =>
        ['index', 'store', 'update', 'show']
    ]);

    //tag
    Route::get('tag/lists', 'TagController@getLists')->name('tag.lists');
    Route::post('tag/{tag}', 'TagController@disable')->name('tag.disable');
    Route::resource('tag', 'TagController', ['only' =>
        ['index', 'store', 'update', 'show']
    ]);

    //文章
    Route::get('post/lists', 'PostController@getLists')->name('post.lists');
    Route::get('post/catetag', 'PostController@cateAndTag')->name('post.catetag');
    Route::post('post/{post}', 'PostController@disable')->name('post.disable');
    Route::resource('post', 'PostController', ['only' =>
        ['index', 'create', 'store', 'edit', 'update', 'show']
    ]);

    //评论
    Route::get('comment/lists', 'CommentController@getLists')->name('comment.lists');
    Route::post('comment/{comment}', 'CommentController@disable')->name('comment.disable');
    Route::get('comment', 'CommentController@index')->name('comment.index');

    //后台用户
    Route::get('admin-user/lists', 'AdminUserController@getLists')->name('admin-user.lists');
    Route::resource('admin-user', 'AdminUserController');
    //角色
    Route::get('role/lists', 'RoleController@getLists')->name('role.lists');
    Route::resource('role', 'RoleController');

    //权限
    Route::get('permission/lists', 'PermissionController@getLists')->name('permission.lists');
    Route::resource('permission', 'PermissionController');

    //网站导航分类
    Route::get('menu/lists', 'MenuController@getLists')->name('menu.lists');
    Route::post('menu/{menu}', 'MenuController@disable')->name('menu.disable');
    Route::resource('menu', 'MenuController', ['only' =>
        ['index', 'store', 'update', 'show']
    ]);
    Route::post('menu-order', 'MenuController@order')->name('menu.order');

    //网站配置设置
    Route::get('setting/lists', 'SettingController@getLists')->name('setting.lists');
    Route::resource('setting', 'SettingController', ['only' =>
        ['index', 'store', 'edit', 'update', 'show']
    ]);

    //友情链接
    Route::get('friend-link/lists', 'FriendLinkController@getLists')->name('friend-link.lists');
    Route::post('friend-link/{friend_link}', 'FriendLinkController@disable')->name('friend-link.disable');
    Route::resource('friend-link', 'FriendLinkController', ['only' =>
        ['index', 'store', 'edit', 'update', 'show']
    ]);

    //单页 专题
    Route::get('single-page/lists', 'SinglePageController@getLists')->name('single-page.lists');
    Route::resource('single-page', 'SinglePageController', ['only' =>
        ['index', 'store', 'edit', 'update', 'show']
    ]);

    //帮助文档
    Route::get('manual', function () {
        return view('admin.manuals.index');
    })->name('manual');
});

//前台模块
Route::group([], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/home', 'IndexController@index')->name('home');

    Route::get('blog/{blog}', 'IndexController@blog')->name('blog');
    Route::get('blog/tag/{tag}', 'IndexController@blogTag')->name('blog.tag');
    Route::get('blog/category/{category}', 'IndexController@blogCategory')->name('blog.category');
    Route::get('blogs', 'IndexController@blogs')->name('blogs');
    Route::get('tops', 'IndexController@tops')->name('tops');

    Route::get('signup', 'IndexController@signup')->name('signup');
    Route::get('login', 'IndexController@login')->name('login');

    Route::get('contact', 'IndexController@contact')->name('contact');
    Route::get('about', 'IndexController@about')->name('about');

    Route::get('item', 'IndexController@item')->name('item');
    Route::get('cooperation', 'IndexController@cooperation')->name('cooperation');
    Route::get('help', 'IndexController@help')->name('help');

    Route::get('search', 'IndexController@search')->name('search');

    Route::get('products', 'IndexController@productList')->name('product');
    Route::get('products/{slug}', 'IndexController@productInfo')->name('product-info');

    Route::get('profile', 'IndexController@profile')->name('profile');
    Route::get('app', 'IndexController@app')->name('app');

    //Route::get('test', 'IndexController@test')->name('test');
});