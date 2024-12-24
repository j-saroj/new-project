<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index(){
        $experiences = Experience::paginate(10);
        return view('admin.pages.experience.index', ['experiences' => $experiences]);

    }
    public function create(){
        return view('admin.pages.experience.create');
    }
    public function store(Request $request){
        $flag = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $experience = Experience::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'extra' => $request->extra,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        if ($experience) {
            return redirect(route('experience.index'))->withSuccess('The experience has been added!');
        } else {
            return redirect()->back()->withInput()->withErrors($flag);
        }
    }
    public function show(Experience $experience){
        return view('admin.pages.experience.view', ['value' => $experience]);
    }
    public function edit(Experience $experience){
        return view('admin.pages.experience.edit', ['experience' => $experience]);
    }

    public function update(Request $request, Experience $experience){
        $flag = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $experience->title = $request->title;
        $experience->description = $request->description;
        $experience->extra = $request->extra;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->save();
        if ($experience) {
            return redirect(route('experience.index'))->withSuccess('The experience has been updated!');
        } else {
            return redirect()->back()->withInput()->withErrors($flag);
        }
    }

    public function destroy(Experience $experience){
        $experience->delete();
        return redirect(route('experience.index'))->withSuccess('The experience has been deleted!');
    }


}
