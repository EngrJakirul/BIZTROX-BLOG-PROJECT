<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;
    private static $image, $imageName, $imageExtension, $imageUrl, $imageDirectory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            self::$imageExtension = self::$image->getClientOriginalExtension();
            self::$imageName      = 'category-image'.time().rand(0, 90000000000000).'.'.self::$imageExtension;
            self::$imageDirectory = 'category-images/';
            self::$image->move(self::$imageDirectory, self::$imageName);
            return self::$imageDirectory.self::$imageName;
        }
        else
        {
            return '';
        }
    }

    public static function newCategory ($request)
    {
        self::$category                 = new Category();
        self::$category->name           = $request->name;
        self::$category->description    = $request->description;
        self::$category->image          = self::getImageUrl($request);
        self::$category->status         = $request->status;
        self::$category->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$category                 = Category::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }
        self::$category->name           = $request->name;
        self::$category->description    = $request->description;
        self::$category->image          = self::$imageUrl;
        self::$category->status         = $request->status;
        self::$category->save();
    }
    public static function deleteCategory($id)
    {
        self::$category                 = Category::find($id);
        self::$category->delete();
    }
}
