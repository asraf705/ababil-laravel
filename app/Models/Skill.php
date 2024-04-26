<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    private static $skill;


    public static function newSkill($request)
    {

        self::$skill = new Skill();
        self::saveBasicInfo(self::$skill, $request);
        self::$skill->save();
    }

    public static function  updateSkill($request, $id)
    {

        self::$skill = Skill::find($id);
        self::saveBasicInfo(self::$skill, $request);
    }

    public static function  deleteSkill($id)
    {

        self::$skill = Skill::find($id);
        self::$skill->delete();
    }

    private static function saveBasicInfo($skill, $request){
        $skill->name           = $request->name;
        $skill->save();

    }

    public static function checkStatus($id){
        self::$skill = Skill::find($id);
        if (self::$skill->status == 1){
            self::$skill->status = 0;
        }else{
            self::$skill->status = 1;

        }
        self::$skill->save();
    }
}
