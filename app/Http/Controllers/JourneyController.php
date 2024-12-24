<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JourneyStat;

class JourneyController extends Controller
{
    public function index () {
        $journeys = JourneyStat::paginate(10);
        return view('admin.pages.journey.index',['journeys' => $journeys]);
    }

    public function show($id) {
        $journey = JourneyStat::findOrFail($id);
        return view('admin.pages.journey.show', compact('journey'));
    }

    public function store(Request $request){
        $flag = $request->validate([
           'title' => 'required',
           'count' => 'required',
        ]);
        $journey = JourneyStat::create([
            'title' => $request->title,
            'count' => $request->count,
            'icon' => $request->icon,
            'extra' => $request->extra,
        ]);
        if ($journey) {
            return redirect(route('journey.index'))->withSuccess('The journey has been added!');
        } else {
            return redirect()->back()->withInput()->withErrors($flag);
        }
    }


    public function edit(JourneyStat $journey) {
        return view('admin.pages.journey.edit', compact('journey'));
    }

    public function update(Request $request, JourneyStat $journey) {
        $flag = $request->validate([
            'title' => 'required',
            'count' => 'required',
        ]);

        $journey->title = $request->title;
        $journey->count = $request->count;
        $journey->icon = $request->icon;
        $journey->extra = $request->extra;
        $journey->save();
        if ($journey) {
            return redirect(route('journey.index'))->withSuccess('The journey has been updated!');
        } else {
            return redirect()->back()->withInput()->withErrors($flag);
        }
    }


    public function destroy(JourneyStat $journey) {
        $journey->delete();
        return redirect(route('journey.index'))->withSuccess('The journey has been deleted!');
    }
}
