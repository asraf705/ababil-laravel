<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.post.index',['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::newPost($request);
        return back()->with('Gmessage', 'Product Type create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Post::checkStatus($id);
        return redirect('/post')->with('Gmessage', 'Product Type Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.post.edit',[
            'item' => Post::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Post::updatePost($request, $id);
        return redirect('/post')->with('Gmessage', 'Product Type Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::deletePost($id);
        return redirect('/post')->with('Rmessage', 'Product Type Deleted Successfully');
    }
}
