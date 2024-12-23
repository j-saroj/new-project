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
        $skills = skill::all();

            return view('admin.pages.skill.index', ['skill' => $skills]);

    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $skill = Skill::first();

        if (!isset($skill)) {
            return view('admin.pages.skill.create');
        } else {
            return redirect(route('skill.index'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $skill = Skill::first();
        if (!is_null($skill)) {
            return redirect(route('skill.show', $skill->id));
        }
        $validator = $request->validate([

        ]);

        $skill = Skill::create([



        ]);

        if ($skill) {
            return redirect(route('skill.index'))->withSuccess("The skill details has beed set.");
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

        return view('admin.pages.skill.edit', ['skill' => $skill]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'phone' => 'required',
            'address' => 'required|string',
            'mobile' => 'required|string',
            'email' => 'required|email',
            'logo' => 'required|mimes:jpg,png,jpeg|max:1024',
        ]);

        $flag = $skill->update([

        ]);




    }

    /**
     * Remove the specified resource from storage.
     */

}
