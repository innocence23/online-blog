<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CommentController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function postComment(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'post_id' => 'required',
        ]);
        $model = new Comment();
        $model->uid = $request->input('user_id', 0);
        $model->parent_id =  $request->input('parent_id', 0);
        $model->post_id = $request->input('post_id', '');
        $model->content = $request->input('content', '');
        $model->support = 0;
        $model->save();
        return response($model);
    }

    /**
     * @param $post_id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function ListComments($post_id)
    {
        $model = Comment::where(['post_id'=>$post_id, 'status'=>1])->orderBy('created_at', 'desc')
            ->get(['id', 'uid', 'parent_id', 'post_id', 'support', 'content', 'created_at'])->keyBy('id');
        echo tree($model);
    }
}

//函数 函数
function tree($arr, $pid=0){
    $str = '';
    foreach ($arr as $v) {
        if ($v->parent_id == $pid) {
            $content = $v->content;
            $preg = '/!\[file\]\((.*)\)/';
            preg_match($preg, $content ,$result);
            if($result) {
                $content =  preg_replace($preg,
                    '<a href="/uploads/'.$result[1].'" data-fancybox><img src="/uploads/'.$result[1].'" width="40%" height="40%"/></a>',
                    $content);
            }
            $str .=  <<<EOF
<div class="media">
<a class="pull-left" href="#pablo">
<div class="avatar">
<img class="media-object" src="/assets/placeholder.jpg" alt="avatar"/>
</div>
</a>
<div class="media-body">
<h4 class="media-heading">{$v->user->name}
<small> {$v->created_at}</small>
</h4>
<p>{$content}</p>
<div class="media-footer">
<a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip" index="{$v->id}">
<i class="material-icons">reply</i> 回复
</a>
<a href="#pablo" class="btn btn-danger btn-simple pull-right">
<i class="material-icons">favorite</i> {$v->support}
</a>
</div>
EOF;
            $str .= tree($arr, $v->id);
            $str .= '</div></div>';
        }
    }
    return $str;
}
