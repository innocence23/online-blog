<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class AppController extends Controller
{
    private $pageSize = 10;
    private $url = '';
    private $imgPrefix = '';

    public function __construct()
    {
        $this->url =  Config::get('app.url');
        $this->imgPrefix =  Config::get('app.url') . 'uploads/';
    }

    public function articles(Request $request)
    {
        $blogs = Post::select('id', 'pic', 'title', 'desc')->where('status', 1)->paginate($this->pageSize);
        foreach ($blogs as $k=>$v) {
            $blogs[$k]->pic = $this->imgPrefix . $v->pic;
        }
        return $blogs;
    }

    public function articleInfo(Request $request, $id)
    {
        $blog = Post::find($id);
        //转变头图
        $blog->pic = $this->imgPrefix . $blog->pic;
        //转变文章里面的图
        $blog->content = str_replace('src="/', "src=\"{$this->url}", $blog->content);
        return $blog;
    }
}