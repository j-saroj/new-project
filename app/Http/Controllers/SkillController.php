<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = skill::paginate(10);

            return view('admin.pages.skill.index', ['skills' => $skills]);

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'percentage' => 'required|numeric',
        ]);

        $skill = Skill::create([
            'name' => $request->name,
            'percentage' => $request->percentage,


        ]);

        if ($skill) {
            return redirect(route('skills.index'))->withSuccess("The skill details has beed set.");
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {

        return view('admin.pages.skill.view', ['value' => $skill]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        $skills = Skill::paginate(10);
        return view('admin.pages.skill.edit', ['skill' => $skill, 'skills' => $skills]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'percentage' => 'required|numeric',


        ]);



        $flag = $skill->update(['name' => $request->name,
            'percentage' => $request->percentage,

        ]);

        if ($flag) {
            return redirect(route('skills.index'))->withSuccess("The skill details has beed updated.");
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill){
        $flag = $skill->delete();

        if ($flag) {
            return redirect(route('skills.index'))->withSuccess("The skill details has beed deleted.");
        } else {
            return redirect()->back()->withInput()->withErrors("The skill details has not been deleted.");
        }
    }

}
