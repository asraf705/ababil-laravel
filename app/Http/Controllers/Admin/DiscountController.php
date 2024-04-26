<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.discount.index',[
            'discountes' =>Discount::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.discount.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Discount::newDiscount($request);
        return back()->with('Gmessage', 'Discount create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Discount::checkStatus($id);
        return redirect('/discountes')->with('Gmessage', 'Discount Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.Discount.edit',[
            'item' => Discount::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Discount::updateDiscount($request, $id);
        return redirect('discountes')->with('Gmessage', 'Discount Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Discount::deleteDiscount($id);
        return redirect('/discountes')->with('Rmessage', 'Discount Deleted Successfully');
    }
}
