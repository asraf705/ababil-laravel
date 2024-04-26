<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    private static $post;


    public static function newPost($request)
    {

        self::$post = new Post();
        self::saveBasicInfo(self::$post, $request);
        self::$post->save();
    }

    public static function  updatePost($request, $id)
    {

        self::$post = Post::find($id);
        self::saveBasicInfo(self::$post, $request);
    }

    public static function  deletePost($id)
    {

        self::$post = Post::find($id);
        self::$post->delete();
    }

    private static function saveBasicInfo($post, $request){
        $post->name           = $request->name;
        $post->save();

    }

    public static function checkStatus($id){
        self::$post = Post::find($id);
        if (self::$post->status == 1){
            self::$post->status = 0;
        }else{
            self::$post->status = 1;

        }
        self::$post->save();
    }
}
