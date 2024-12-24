<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioCategory;

class PortfolioCategoryController extends Controller
{
    public function index(){
        $categories = PortfolioCategory::simplePaginate(15);
        return view('admin.pages.portfolio_category.index',['categories' => $categories]);
     }

     public function store(Request $request)
     {
         $flag = $request->validate([
             'name' => 'required',
         ]);

         $category = PortfolioCategory::create([
             'name' => $request->name,
         ]);
         if ($category) {
             return redirect(route('portfoliocategory.index'))->withSuccess("The category details has beed set.");
         } else {
             return redirect()->back()->withInput()->withErrors("The category details has beed set.");
         }
     }

     public function edit(Request $request, PortfolioCategory $portfoliocategory)
     {
         return view('admin.pages.portfolio_category.edit', ['category' => $portfoliocategory]);
     }

     public function update( PortfolioCategory $portfoliocategory)
     {
         $validator = request()->validate([
             'name' => 'required|string',
         ]);

        $portfoliocategory ->update([
             'name' => request()->name,
         ]);
         if ($portfoliocategory) {
             return redirect(route('portfoliocategory.index'))->withSuccess("The category details has beed updated.");
         } else {
             return redirect()->back()->withInput()->withErrors($validator);
         }
     }

     public function destroy(PortfolioCategory $portfoliocategory)
     {
        $portfoliocategory->delete();
         return redirect(route('portfoliocategory.index'))->withSuccess("The category details has beed deleted.");
     }

}
