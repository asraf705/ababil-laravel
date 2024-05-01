<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeInfo extends Model
{
    use HasFactory;

    private static $themeInfo, $image, $imageUrl, $directory, $imageName, $extension, $images;


    public static function newThemeInfo($request)
    {

        self::$themeInfo = new ThemeInfo();
        self::$themeInfo->name                          = $request->name;
        self::$themeInfo->motto                         = $request->motto;
        self::$themeInfo->biography                     = $request->biography;
        self::$themeInfo->contact_mobile                = $request->contact_mobile;
        self::$themeInfo->whapp_mobile                  = $request->whapp_mobile;
        self::$themeInfo->support_mobile                = $request->support_mobile;
        self::$themeInfo->contact_email                 = $request->contact_email;
        self::$themeInfo->support_email                 = $request->support_email;
        self::$themeInfo->address                       = $request->address;
        self::$themeInfo->domain_url                    = $request->domain_url;
        self::$themeInfo->facebook_url                  = $request->facebook_url;
        self::$themeInfo->twitter_url                   = $request->twitter_url;
        self::$themeInfo->youtube_url                   = $request->youtube_url;
        self::$themeInfo->linked_in_url                 = $request->linked_in_url;
        self::$themeInfo->instagram_url                 = $request->instagram_url;
        self::$themeInfo->header_logo                   = getImageUrl($request->header_logo, 'upload/themeInfo-images/');
        self::$themeInfo->footer_logo                   = getImageUrl($request->footer_logo, 'upload/themeInfo-images/');
        self::$themeInfo->favicon                       = getImageUrl($request->favicon, 'upload/themeInfo-images/');
        self::$themeInfo->trade_license                 = getImageUrl($request->trade_license, 'upload/themeInfo-images/');
        self::$themeInfo->tin_certificate               = getImageUrl($request->tin_certificate, 'upload/themeInfo-images/');
        self::$themeInfo->ecab_certificate              = getImageUrl($request->ecab_certificate, 'upload/themeInfo-images/');
        self::$themeInfo->save();
    }


    public static function updateThemeInfo($request, $id)
    {

        self::$themeInfo = ThemeInfo::find($id);
        if ($request->header_logo){
            if (file_exists(self::$themeInfo->header_logo)) {
                unlink(self::$themeInfo->header_logo);
            }
            $headerlogoUrl = getImageUrl($request->header_logo, 'upload/company-images/');
        } else {
            $headerlogoUrl = self::$themeInfo->header_logo;
        }

        if ($request->footer_logo) {
            if (file_exists(self::$themeInfo->footer_logo)) {
                unlink(self::$themeInfo->footer_logo);
            }
            $footerlogoUrl = getImageUrl($request->footer_logo, 'upload/company-images/');
        } else {
            $footerlogoUrl = self::$themeInfo->footer_logo;
        }

        if ($request->favicon) {
            if (file_exists(self::$themeInfo->favicon)) {
                unlink(self::$themeInfo->favicon);
            }
            $faviconUrl = getImageUrl($request->favicon, 'upload/company-images/');
        } else {
            $faviconUrl = self::$themeInfo->favicon;
        }

        if ($request->trade_license) {
            if (file_exists(self::$themeInfo->trade_license)) {
                unlink(self::$themeInfo->trade_license);
            }
            $tradeUrl = getImageUrl($request->trade_license, 'upload/company-images/');
        } else {
            $tradeUrl = self::$themeInfo->trade_license;
        }

        if ($request->tin_certificate) {
            if (file_exists(self::$themeInfo->tin_certificate)) {
                unlink(self::$themeInfo->tin_certificate);
            }
            $tinUrl = getImageUrl($request->tin_certificate, 'upload/company-images/');
        } else {
            $tinUrl = self::$themeInfo->tin_certificate;
        }

        if ($request->ecab_certificate) {
            if (file_exists(self::$themeInfo->ecab_certificate)) {
                unlink(self::$themeInfo->ecab_certificate);
            }
            $ecabUrl = getImageUrl($request->ecab_certificate, 'upload/company-images/');
        } else {
            $ecabUrl = self::$themeInfo->ecab_certificate;
        }

        self::$themeInfo->name                          = $request->name;
        self::$themeInfo->motto                         = $request->motto;
        self::$themeInfo->biography                     = $request->biography;
        self::$themeInfo->contact_mobile                = $request->contact_mobile;
        self::$themeInfo->whapp_mobile                  = $request->whapp_mobile;
        self::$themeInfo->support_mobile                = $request->support_mobile;
        self::$themeInfo->contact_email                 = $request->contact_email;
        self::$themeInfo->support_email                 = $request->support_email;
        self::$themeInfo->address                       = $request->address;
        self::$themeInfo->domain_url                    = $request->domain_url;
        self::$themeInfo->facebook_url                  = $request->facebook_url;
        self::$themeInfo->twitter_url                   = $request->twitter_url;
        self::$themeInfo->youtube_url                   = $request->youtube_url;
        self::$themeInfo->linked_in_url                 = $request->linked_in_url;
        self::$themeInfo->instagram_url                 = $request->instagram_url;
        self::$themeInfo->header_logo                          = $headerlogoUrl;
        self::$themeInfo->footer_logo                          = $footerlogoUrl;
        self::$themeInfo->favicon                       = $faviconUrl;
        self::$themeInfo->trade_license                 = $tradeUrl;
        self::$themeInfo->tin_certificate               = $tinUrl;
        self::$themeInfo->ecab_certificate              = $ecabUrl;
        self::$themeInfo->save();
    }
}
