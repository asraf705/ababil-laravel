<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard

    public static function dashboard(){
        return view('admin.dashboard.index');
    }
}
