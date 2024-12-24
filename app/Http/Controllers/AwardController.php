<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;

class AwardController extends Controller
{
    public function index () {
        $awards = Award::paginate(10);
        return view('admin.pages.award.index',['awards' => $awards]);
    }

    public function show($id) {
        $award = Award::findOrFail($id);
        return view('admin.pages.award.show', compact('award'));
    }

    public function store (Request $request) {
        $flag = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);
        $award = Award::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
        ]);
        if ($award) {
            return redirect(route('award.index'))->withSuccess('The award has been added!');
        } else {
            return redirect()->back()->withInput()->withErrors($flag);
        }
    }

    public function edit(Award $award) {
        return view('admin.pages.award.edit', compact('award'));
    }

    public function update(Request $request, Award $award) {
        $flag = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $award->title = $request->title;
        $award->description = $request->description;
        $award->date = $request->date;
        $award->save();
        if ($award) {
            return redirect(route('award.index'))->withSuccess('The award has been updated!');
        } else {
            return redirect()->back()->withInput()->withErrors($flag);
        }
    }

    public function destroy(Award $award) {
        $award->delete();
        return redirect(route('award.index'))->withSuccess('The award has been deleted!');
    }
}
