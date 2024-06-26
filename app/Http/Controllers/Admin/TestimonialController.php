<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.testimonial.index',[
            'testimonials' => Testimonial::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Testimonial::newTestimonial($request);
        return back()->with('Gmessage', 'Testimonial create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Testimonial::checkStatus($id);
        return redirect('/testimonial')->with('Gmessage', 'Testimonial Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.testimonial.edit',[
            'testimonial' => Testimonial::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Testimonial::updateTestimonial($request, $id);
        return redirect('/testimonial')->with('Gmessage', 'Testimonial Updated Successfully');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::deleteTestimonial($id);
        return redirect('/testimonial')->with('Rmessage', 'Testimonial Deleted Successfully');
    }
}
