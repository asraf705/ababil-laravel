<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    private static $testimonial, $image, $imageUrl, $directory, $imageName, $extension, $images ;

    private static function saveBasicInfo($testimonial, $request, $imageUrl){

    }

}
