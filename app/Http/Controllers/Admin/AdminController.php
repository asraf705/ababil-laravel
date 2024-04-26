<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    //category

    public static function category(){
        return view('admin.category.index');
    }

    public static function addcategory(){
        return view('admin.category.add');
    }
}
