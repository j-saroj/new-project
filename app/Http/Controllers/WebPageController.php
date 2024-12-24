<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Contact;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\GalleryImage;
use App\Models\JourneyStat;
use App\Models\Organization;
use App\Models\PortfolioItem;

use App\Models\Skill;
use Illuminate\Foundation\Validation\ValidatesRequests;

class WebPageController extends Controller
{
    use ValidatesRequests;
    //

    public function index()
    {
        $organization = Organization::first();

        $journeys = JourneyStat::get();
        $portfolios = PortfolioItem::get();
        $skills = Skill::get();
        $galleryimages = GalleryImage::latest()->take(6)->get();
        $awards = Award::get();
        return view('pages.homepage', compact('organization', 'journeys', 'portfolios', 'skills','galleryimages','awards'));
    }


    public function experience()
    {
        $organization = Organization::first();

        $experiences = Experience::get();
        return view('pages.experience', compact('experiences','organization'));
    }


    public function contactUs()
    {
        $organization = Organization::first();
        return view('pages.contact',['organization' => $organization]);
    }

    public function inquiry(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);


        $msg = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'message' => $request->message,
        ]);

        if ($msg) {
            return redirect()->back()->withSuccess('The message has been sent!');
        } else {
            return redirect()->back()->withInput()->withErrors('The message could not be sent!');
        }
    }

    public function gallery()
    {
        $gallery = GalleryImage::get();
        $organization = Organization::first();
        $portfolios = PortfolioItem::get();
        return view('pages.gallery', compact('gallery','organization','portfolios'));
    }

    public function gallery_detail($slug)
    {
        $pages = GalleryImage::where('slug', $slug)->firstOrFail();
        // return view('pages.gallery.detail', ['album_item' => $pages]);
    }

}
