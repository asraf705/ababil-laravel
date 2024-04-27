<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductBasicAuth;
use App\Models\ProductProAuth;
use App\Models\ProductPreAuth;
use App\Models\ProductPrice;
use Illuminate\Http\Request;

class ProductPriceController extends Controller
{
    public static $products;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.theme-price.index',[
            'productPrices' => ProductPrice::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.theme-price.add', [
            'products' => Product::where('status', 1)->get(),
            'productTypes' => ProductType::where('status', 1)->get(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    private $price;
    public function store(Request $request)
    {
        // return $request;
        $this->price = ProductPrice::newPrice($request);
        ProductBasicAuth::newBasicType($request->basic_types, $this->price->id);
        ProductProAuth::newProType($request->pro_types, $this->price->id);
        ProductPreAuth::newPreType($request->pre_types, $this->price->id);
        return back()->with('Gmessage', 'Product Price create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getProductInfoByTitle()
    {
        self::$products = Product::where('id', $_GET['id'])->get();
        return response()->json(self::$products);
    }

}