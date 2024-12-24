<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioItem;
use App\Models\PortfolioCategory;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = PortfolioItem::simplePaginate(15);
        $categories = PortfolioCategory::all();
        return view('admin.pages.portfolio.index',['portfolios' => $portfolios, 'categories' => $categories]);
    }

    public function store(PortfolioItem $portfolio, Request $request)
    {
        $category = PortfolioCategory::find($request->category_id)->first;
        $flag = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image.*' => 'required|mimes:jpg,png,jpeg',
            'category_id' => 'required',
        ]);
        if ($request->hasFile('image')) {
            // foreach ($request->file('image') as $file) {
                $file = $request->file('image');
                $imageName = $request->user()->id . '_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('images/portfolio', $imageName);
            // }
        }
        $portfolio = PortfolioItem::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $path,
            'extra' => $request->extra,
            'category_id' => $request->category_id,
        ]);
        if ($portfolio) {
            return redirect(route('portfolio.index'))->withSuccess('The portfolio has been added!');
        } else {
            return redirect()->back()->withInput()->withErrors($flag);
        }
    }


    public function show(PortfolioItem $portfolio)
    {
        return view('admin.pages.portfolio.view', ['value' => $portfolio]);
    }

    public function edit(PortfolioItem $portfolio)
    {
        $categories = PortfolioCategory::all();
        $data = PortfolioCategory::find($portfolio->category_id);
        return view('admin.pages.portfolio.edit', ['portfolio' => $portfolio, 'categories' => $categories, 'data' => $data]);
    }

    public function update(Request $request, PortfolioItem $portfolio)
    {
        $flag = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image.*' => 'mimes:jpg,png,jpeg',
            'category_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = $request->user()->id . '_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('images/portfolio', $imageName);
            $portfolio->image = $path;
        }

        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->extra = $request->extra;
        $portfolio->category_id = $request->category_id;

        if ($portfolio->save()) {
            return redirect(route('portfolio.index'))->withSuccess('The portfolio has been updated!');
        } else {
            return redirect()->back()->withInput()->withErrors($flag);
        }
    }

    public function destroy(PortfolioItem $portfolio)
    {
        if ($portfolio->delete()) {
            return redirect(route('portfolio.index'))->withSuccess('The portfolio has been deleted!');
        } else {
            return redirect()->back()->withErrors('Failed to delete the portfolio.');
        }
    }


}
