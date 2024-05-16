<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    private static $customer, $image, $imageUrl, $directory, $imageName, $extension, $images;
    public static function saveInfo($request)
    {
        self::$customer = new Customer();
        self::$customer->fname              = $request->fname;
        self::$customer->lname              = $request->lname;
        self::$customer->phone              = $request->phone;
        self::$customer->email              = $request->email;
        if ($request->password){
            self::$customer->password = bcrypt($request->password);
        }
        else{
            self::$customer->password = bcrypt($request->email);
        }
        self::$customer->address            = $request->address;
        self::$customer->gender             = $request->gender;
        self::$customer->date_of_birth      = $request->date_of_birth;
        self::$customer->image              = getImageUrl($request->image, 'upload/customer-images/');
        self::$customer->save();
        return self::$customer;
    }
}
