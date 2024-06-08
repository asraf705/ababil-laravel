<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function productReport()
    {
        return view('admin.report.product-report', [
            'products' => Product::all(),
        ]);
    }

    public function sellesReport()
    {
        return view('admin.report.selles-report', [
            'products' => Product::all(),
        ]);
    }
}
