<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    private static $testimonial, $image, $imageUrl, $directory, $imageName, $extension, $images;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000) . '.' . self::$extension;
        self::$directory = 'upload/testimonial-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newTestimonial($request){
        if ($request->file('image')) {
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = ' ';
        }
        self::$testimonial = new Testimonial();
        return self::saveBasicInfo(self::$testimonial, $request, self::$imageUrl);

    }


    private static function saveBasicInfo($testimonial, $request, $imageUrl)
    {
        $testimonial->name                  = $request->name;
        $testimonial->post                  = $request->post;
        $testimonial->description           = $request->description;
        $testimonial->image                 = $imageUrl;
        $testimonial->save();
    }


    public static function checkStatus($id){
        self::$testimonial = Testimonial::find($id);
        if (self::$testimonial->status == 1){
            self::$testimonial->status = 0;
        }else{
            self::$testimonial->status = 1;

        }
        self::$testimonial->save();
    }
}
