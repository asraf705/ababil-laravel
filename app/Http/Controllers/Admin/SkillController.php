<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.skill.index',['skills' => Skill::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skill::newSkill($request);
        return back()->with('Gmessage', 'Skill create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Skill::checkStatus($id);
        return redirect('/skill')->with('Gmessage', 'Skill Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.skill.edit',[
            'item' => Skill::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Skill::updateSkill($request, $id);
        return redirect('/skill')->with('Gmessage', 'Skill Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::deleteSkill($id);
        return redirect('/skill')->with('Rmessage', 'Skill Deleted Successfully');
    }
}
