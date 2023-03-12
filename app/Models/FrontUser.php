<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class FrontUser extends Model
{
    use HasFactory;

    private static $frontUser;
    private static $image, $imageName, $imageExtension, $imageUrl, $imageDirectory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            self::$imageExtension = self::$image->getClientOriginalExtension();
            self::$imageName      = 'front-user-image'.time().rand(0, 90000000000000).'.'.self::$imageExtension;
            self::$imageDirectory = 'front-user-images/';
            self::$image->move(self::$imageDirectory, self::$imageName);
            return self::$imageDirectory.self::$imageName;
        }
        else
        {
            return '';
        }
    }
    public static function newFrontUser($request)
    {
        if ($request->password == $request->confirm_password)
        {
            self::$frontUser                   = new FrontUser();
            self::$frontUser->name             = $request->name;
            self::$frontUser->email            = $request->email;
            self::$frontUser->password         = bcrypt($request->password);
            self::$frontUser->mobile           = $request->mobile;
            self::$frontUser->image            = self::getImageUrl($request);
            self::$frontUser->address          = $request->address;
            self::$frontUser->date_of_birth    = $request->date_of_birth;
            self::$frontUser->nid              = $request->nid;
            self::$frontUser->save();

            Session::put('user_id', self::$frontUser->id);
            Session::put('user_name', self::$frontUser->name);

        }
        else
        {
            return redirect()->back()->with('error', 'sorry password and confirm password not match');
        }
    }
}
