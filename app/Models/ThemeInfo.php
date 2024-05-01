<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeInfo extends Model
{
    use HasFactory;

    private static $themeInfo, $image, $imageUrl, $directory, $imageName, $extension, $images;

    // function getImageUrl($image, $directory)
    // {
    //     $imageExtension = $image->getClientOriginalExtension();
    //     $imageName      = rand(100000, 50000000000) . '.' . $imageExtension;
    //     if ($directory) {
    //         $imageDirectory = $directory;
    //     } else {
    //         $imageDirectory = 'upload/';
    //     }
    //     $image->move($imageDirectory, $imageName);
    //     $imageUrl = $directory . $imageName;
    //     return $imageUrl;
    // }


    public static function newCompany($request){

        self::$themeInfo = new ThemeInfo();
        return self::saveBasicInfo(self::$themeInfo, $request);
        self::$themeInfo->logo                          =getImageUrl($request->logo,'upload/themeInfo-images');
        self::$themeInfo->favicon                       =getImageUrl($request->favicon,'upload/themeInfo-images');
        self::$themeInfo->trade_license                 =getImageUrl($request->trade_license,'upload/themeInfo-images');
        self::$themeInfo->tin_certificate               =getImageUrl($request->tin_certificate,'upload/themeInfo-images');
        self::$themeInfo->ecab_certificate              =getImageUrl($request->ecab_certificate,'upload/themeInfo-images');
        self::$themeInfo->save();
    }
















    private static function saveBasicInfo($themeInfo, $request)
    {
        $themeInfo->name                          = $request->name;
        $themeInfo->motto                         =$request->motto;
        $themeInfo->biography                     =$request->biography;
        $themeInfo->contact_mobile                =$request->contact_mobile;
        $themeInfo->whapp_mobile                  =$request->whapp_mobile;
        $themeInfo->support_mobile                =$request->support_mobile;
        $themeInfo->contact_email                 =$request->contact_email;
        $themeInfo->support_email                 =$request->support_email;
        $themeInfo->address                       =$request->address;
        $themeInfo->domain_url                    =$request->domain_url;
        $themeInfo->facebook_url                  =$request->facebook_url;
        $themeInfo->twitter_url                   =$request->twitter_url;
        $themeInfo->youtube_url                   =$request->youtube_url;
        $themeInfo->linked_in_url                 =$request->linked_in_url;
        $themeInfo->instagram_url                 =$request->instagram_url;
        // $themeInfo->logo                          =getImageUrl($request->logo,'upload/themeInfo-images');
        // $themeInfo->favicon                       =getImageUrl($request->favicon,'upload/themeInfo-images');
        // $themeInfo->trade_license                 =getImageUrl($request->trade_license,'upload/themeInfo-images');
        // $themeInfo->tin_certificate               =getImageUrl($request->tin_certificate,'upload/themeInfo-images');
        // $themeInfo->ecab_certificate              =getImageUrl($request->ecab_certificate,'upload/themeInfo-images');
        return $themeInfo;
    }
}
