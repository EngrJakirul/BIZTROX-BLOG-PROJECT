<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BiztroxController extends Controller
{
    private $recentBlogs;
    private $previousRecentBlogs;
    private $singleBlogDetails;
    private $categories;
    private $blogs;

    public function index()
    {
        $this->recentBlogs = Blog::where('status', 1)->orderBy('id','DESC')->take('6')->get();
        $this->previousRecentBlogs = Blog::where('status', 1)->orderBy('id', 'DESC')->skip(6)->take(20)->get();
        return view('front.home.index', [
            'recentBlogs' => $this->recentBlogs,
            'previousRecentBlogs' => $this->previousRecentBlogs,
        ]);
    }
    public function blog($id)
    {
        $this->categories = Category::all();
        $this->blogs = Blog::where('category_id', $id)->where('status', 1)->orderBy('id', 'DESC')->paginate(6);
        return view('front.blog.index', [
            'categories' => $this->categories,
            'blogs' => $this->blogs,
        ]);
    }
    public function singleBlog($id)
    {
        $this->singleBlogDetails = Blog::find($id);
        return view('front.blog.single-blog.index', [
            'singleBlogDetails' => $this->singleBlogDetails,
        ]);
    }
//    public function about()
//    {
//        return view('front.about.index');
//    }
//    public function service()
//    {
//        return view('front.service.index');
//    }
//    public function page()
//    {
//        return view('front.pages.index');
//    }
    public function contact()
    {
        return view('front.contact.index');
    }
}
