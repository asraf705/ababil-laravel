<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ThemeInfo;
use Illuminate\Http\Request;
use Psy\Output\Theme;

class ThemeInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.error.404error');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.error.404error');
        // return view('admin.theme-info.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ThemeInfo::newThemeInfo($request);
        return back()->with('Gmessage', 'ThemeInfo create successfully.');
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
        return view('admin.theme-info.edit',[
            'info' => ThemeInfo::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ThemeInfo::updateThemeInfo($request, $id);
        return back()->with('Gmessage', 'Information updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
