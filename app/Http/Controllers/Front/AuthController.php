<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\FrontUser;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    private $frontUser;

    public function index($id = null)
    {
        if ($id)
        {
            Session::put('singleBlogDetails_id', $id);
        }
        return view('auth.user-login');
    }
    public function userRegister()
    {
        return view('auth.user-register');
    }
    public function newRegister(Request $request)
    {
        FrontUser::newFrontUser($request);
        return redirect('/blog-details/'.Session::get('singleBlogDetails_id'))->with('success', 'Your Registration Successful, Write Your Comment');
    }
}
