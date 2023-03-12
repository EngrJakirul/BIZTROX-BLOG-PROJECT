<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use function Illuminate\Validation\message;


class BlogController extends Controller
{
    private $blog, $blogs;
    private $category, $categories;
    private $message;

    public function addBlog()
    {

        $this->categories = Category::all();
        return view('admin.blog.add_blog.index', [
            'categories' => $this->categories,
        ]);
    }
    public function newBlog(Request $request)
    {
        Blog::newBlog($request);
        return redirect()->back()->with('success', 'Blog add successfully');
    }
    public function manageBlog()
    {
        $this->blogs = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blog.manage_blog.index', ['blogs' => $this->blogs]);
    }

    public function detailBlog($id)
    {
        $this->blog = Blog::find($id);
        return view('admin.blog.detail_blog.index', ['blog' => $this->blog] );
    }
    public function publishedBlog($id)
    {

    }
    public function editBlog($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('admin.blog.edit_blog.index', [
            'categories' => $this->categories,
            'blog' => $this->blog,
        ]);
    }
    public function updateBlog(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect()->back()->with('info', 'Blog update successfully');
    }
    public function deleteBlog($id)
    {
        Blog::deleteBlog($id);
        return redirect()->back()->with('error', 'Blog delete successfully');
    }

    public function updateStatus($id)
    {
        $this->blog = Blog::find($id);
        if ($this->blog->status == 1)
        {
            $this->blog->status = 0;
            $this->message = 'Blog status info unpublished successfully';
            $this->blog->save();
            return redirect('/manage-blog')->with('warning', $this->message );
        }
        else
        {
            $this->blog->status = 1;
            $this->message = 'Blog status info published successfully';
            $this->blog->save();
            return redirect('/manage-blog')->with('success', $this->message );
        }
    }
}
