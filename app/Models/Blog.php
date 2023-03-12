<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Blog extends Model
{
    use HasFactory;

    private static $blog;
    private static $image, $imageName, $imageExtension, $imageUrl, $imageDirectory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            self::$imageExtension = self::$image->getClientOriginalExtension();
            self::$imageName      = 'blog-image'.time().rand(0, 90000000000000).'.'.self::$imageExtension;
            self::$imageDirectory = 'blog-images/';
            self::$image->move(self::$imageDirectory, self::$imageName);
            return self::$imageDirectory.self::$imageName;
        }
        else
        {
            return '';
        }
    }
    public static function newBlog ($request)
    {
        self::$blog = new Blog();
        self::$imageUrl = self::getImageUrl($request);
        self::blogBasicCode(self::$blog, $request, self::$imageUrl);
        //ey function ta likha hoiche nicher code gola komate
    }
    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$blog->image;
        }
        // ey function ta lekha hoiche same code gola komanor jonno
        self::blogBasicCode(self::$blog, $request, self::$imageUrl );

    }
    public static function deleteBlog($id)
    {
        self::$blog                 = Blog::find($id);
        self::$blog->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public static function blogBasicCode($blog, $request, $imageUrl )
    {
        $blog->category_id                  = $request->category_id;
        $blog->author_id                    = Auth::user()->id;
        $blog->main_title                   = $request->main_title;
        $blog->sub_title                    = $request->sub_title;
        $blog->short_description            = $request->short_description;
        $blog->long_description             = $request->long_description;
        $blog->image                        = $imageUrl;
        $blog->status                       = $request->status;
        $blog->save();
    }
}
