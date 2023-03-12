<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Session;


class CommentController extends Controller
{
    private $comment;
    private $commentCount;

    public function newComment(Request $request, $id)
    {
        $this->comment                   = new Comment();
        $this->comment->blog_id          = $id;
        $this->comment->front_user_id    = Session::get('user_id');
        $this->comment->comment          = $request->comment;

        $lastBlogComment = Comment::where('blog_id', $id)->orderBy('id', 'DESC')->first();
        if ($lastBlogComment)
        {
            $commentCount = $lastBlogComment->comment_count + 1;
        }
        else
        {
            $commentCount = 1;
        }
        $this->comment->comment_count    = $commentCount;
        $this->comment->save();
        return redirect('/blog-details/'.$id)->with('success', 'Your comment post success');
    }
}
