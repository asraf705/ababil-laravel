<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;

    private static $privacyPolicy;

    private static function saveBasicInfo($privacyPolicy, $request)
    {
        $privacyPolicy->one_name                = $request->one_name;
        $privacyPolicy->one_policy              = $request->one_policy;
        $privacyPolicy->two_name                = $request->two_name;
        $privacyPolicy->two_policy              = $request->two_policy;
        $privacyPolicy->three_name                = $request->three_name;
        $privacyPolicy->three_policy              = $request->three_policy;
        $privacyPolicy->four_name                = $request->four_name;
        $privacyPolicy->four_policy              = $request->four_policy;
        $privacyPolicy->save();
    }

    public static function newPrivacyPolicy($request)
    {
        self::$privacyPolicy = new Policy();
        self::$privacyPolicy->one_name                  = $request->one_name;
        self::$privacyPolicy->one_policy                = $request->one_policy;
        self::$privacyPolicy->two_name                  = $request->two_name;
        self::$privacyPolicy->two_policy                = $request->two_policy;
        self::$privacyPolicy->three_name                = $request->three_name;
        self::$privacyPolicy->three_policy              = $request->three_policy;
        self::$privacyPolicy->four_name                 = $request->four_name;
        self::$privacyPolicy->four_policy               = $request->four_policy;
        self::$privacyPolicy->save();
    }

    public static function updatePrivacyPolicy($request, $id)
    {
        self::$privacyPolicy = Product::find($id);
        self::$privacyPolicy->one_name                  = $request->one_name;
        self::$privacyPolicy->one_policy                = $request->one_policy;
        self::$privacyPolicy->two_name                  = $request->two_name;
        self::$privacyPolicy->two_policy                = $request->two_policy;
        self::$privacyPolicy->three_name                = $request->three_name;
        self::$privacyPolicy->three_policy              = $request->three_policy;
        self::$privacyPolicy->four_name                 = $request->four_name;
        self::$privacyPolicy->four_policy               = $request->four_policy;
        self::$privacyPolicy->save();
    }
}
