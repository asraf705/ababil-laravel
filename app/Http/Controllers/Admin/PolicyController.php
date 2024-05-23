<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.error.404error');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.error.404error');
        // return view('admin.policy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return view('admin.error.404error');
        // Policy::newPrivacyPolicy($request);
        // return back()->with('Gmessage','Privacy Policy Create Successfully');
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
        return view('admin.policy.edit', [
            'Info' => Policy::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Policy::updatePrivacyPolicy($request, $id);
        return back()->with('Gmessage', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('admin.error.404error');
    }
}
