<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tex extends Model
{
    use HasFactory;

    private static $payment;
    public static function newTex($request)
    {
        self::$payment = new Tex();
        self::$payment->tex                 = $request->tex;
        self::$payment->currency_type       = $request->currency_type;
        self::$payment->save();
    }

    public static function updateTex($request, $id)
    {
        self::$payment = Tex::find($id);
        self::$payment->tex                 = $request->tex;
        self::$payment->currency_type       = $request->currency_type;
        self::$payment->save();
    }
}
