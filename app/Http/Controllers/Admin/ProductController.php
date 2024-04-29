<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $product;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.error.503error');
        return view('admin.product.theme.index',[
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.theme.add',[
            'categories' => Category::where('status', 1)->get(),
        //   'member' =>  ::where('status',1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::newProduct($request);
        return back()->with('Gmessage', 'Product create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.product.details',[
            'product'=>Product::find($id),
            'prices' =>ProductPrice::all(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product.theme.edit',[
            'categories' => Category::where('status',1)->get(),
            'product' => Product::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Product::updateProduct($request,$id);
        return redirect('/products')->with('Gmessage','Product update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


    }

    public function info($id){
        Product::checkStatus($id);
        return back()->with('Gmessage', 'Product Status Updated Successfully');
    }

    public function fullDetailDelete(string $id){
        Product::deletefullProduct($id);
        return back()->with('Rmessage', 'Full Product Deleted Successfully');
    }

    public function categoryWiseProduct($categoryId){
        return view('admin.product.category-wise-productes',[
            'products'=>Product::where('category_id',$categoryId)->latest()->get()
        ]);
    }

}
