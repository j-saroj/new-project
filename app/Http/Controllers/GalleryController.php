<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\Gallerys;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = GalleryImage::simplePaginate(15);
        $portfolios = PortfolioItem::all();
        // dd($portfolios);
        return view('admin.pages.gallerys.index', ['gallerys' => $gallery, 'portfolios' => $portfolios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.gallerys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            'portfolio_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imageName = $request->user()->id . '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/members', $imageName);
        }
        // dd($request->all());

        $gallery = GalleryImage::create([
            'title' => $request->title,
            'description' => $request->description,
            'portfolio_id' => $request->portfolio_id,
            'image' => $path,
        ]);



        if ($gallery) {
            return redirect(route('gallery.index'))->withSuccess('The gallery has been added!');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(GalleryImage $gallery)
    {
        return view('admin.pages.gallerys.view', ['value' => $gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GalleryImage $gallery)
    {
        return view('admin.pages.gallerys.edit', ['gallery' => $gallery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GalleryImage $gallery)
    {
        $validator = $request->validate([
            'name' => 'required',
            'image.*' => 'required|mimes:jpg,png,jpeg',
        ]);

        $flag = $gallery->update([
            'name' => $request->name,
            'order' => $request->order,
            'nepali_name' => $request->nepali_name,
        ]);

        if ($request->hasFile('image')) {
            foreach ($gallery->image as $img) {
                $gallery->image()->detach($img->id);
            }
            $imageName = $request->user()->id . '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/members', $imageName);
            $img = $gallery->image()->create(['image' => $path]);
        }
        if ($flag) {
            return redirect(route('gallery.index'))->withSuccess('The gallery has been updated!');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GalleryImage $gallery)
    {
        if ($gallery->delete()) {
            return redirect(route('gallery.index'))->withSuccess('The gallery has been deleted!');
        } else {
            return redirect(route('gallery.index'))->withErrors('The gallery could not be deleted!');
        }
    }


    public function change_status(Request $request)
    {
        $gallery = GalleryImage::where('slug', $request->slug)->first();
        $status = !$gallery->status;
        $gallery->update([
            'status' => $status,
        ]);
        return back()->withSuccess('The status has been switched!');
    }
}
