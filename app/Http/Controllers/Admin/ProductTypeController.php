<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.productType.index',['productTypes' => ProductType::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.productType.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductType::newProductType($request);
        return back()->with('Gmessage', 'Product Type create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        ProductType::checkStatus($id);
        return redirect('/product-type')->with('Gmessage', 'Product Type Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.ProductType.edit',[
            'item' => ProductType::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ProductType::updateProductType($request, $id);
        return redirect('/product-type')->with('Gmessage', 'Product Type Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ProductType::deleteProductType($id);
        return redirect('/product-type')->with('Rmessage', 'Product Type Deleted Successfully');
    }
}
