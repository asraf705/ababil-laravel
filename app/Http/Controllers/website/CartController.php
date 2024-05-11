<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $product;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.cart.index', [
            'carts' => Cart::content()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product = Product::find($request->id);

        Cart::add([
            'id'        =>  $request->id,
            'name'      =>  $request->name,
            'qty'       =>  1,
            'price'     =>  $request->price,
            'options'   =>
            [
                'code' => $request->code,
                'image' => $this->product->image,
            ]
        ]);

        return redirect()->route('carts.index');
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
        Cart::update($id, $request->quantity);
        return back()->with('message', 'Cart product info updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cart::remove($id);
        return redirect()->route('carts.index');

    }
}
