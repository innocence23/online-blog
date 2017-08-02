<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{

    private $pageSize = 10;
    private $urlPrefix = 'http://blog.app/uploads/';

    public function articles(Request $request)
    {
        $blogs = Post::select('pic', 'title', 'desc')->where('status', 1)->paginate($this->pageSize);
        foreach ($blogs as $k=>$v) {
            $blogs[$k]->pic = $this->urlPrefix . $v->pic;
        }
        return $blogs;
    }
}