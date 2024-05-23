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
        return $privacyPolicy;
    }

    public static function newPrivacyPolicy($request)
    {
        self::$privacyPolicy = new Policy();
        self::saveBasicInfo(self::$privacyPolicy, $request);
    }

    public static function updatePrivacyPolicy($request, $id)
    {
        self::$privacyPolicy = Product::find($id);
        self::saveBasicInfo(self::$privacyPolicy, $request);
    }
}
