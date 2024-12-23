<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\GalleryImage;
use Illuminate\Foundation\Validation\ValidatesRequests;

class WebPageController extends Controller
{
    use ValidatesRequests;
    //

    public function index()
    {

        return view('pages.home');
    }

    public function experience()
    {
        $experiences = Experience::where('status', true)->get();
        return view('pages.experience', compact('experiences'));
    }

    public function portfolio()
    {
        
        return view('pages.portfolio');
    }
    public function contactUs()
    {
        return view('pages.contact');
    }

    public function inquiry(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required',
            'message' => 'required|string',
        ]);


        $msg = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'message' => $request->message,
        ]);

        if ($msg) {
        } else {
            return redirect()->back()->withInput()->withErrors('The message could not be sent!');
        }
    }

    public function gallery()
    {
        $gallery = GalleryImage::where('status', true)->with('image')->get();
        return view('pages.gallery', compact('gallery'));
    }

    public function gallery_detail($slug)
    {
        $pages = GalleryImage::where('slug', $slug)->firstOrFail();
        // return view('pages.gallery.detail', ['album_item' => $pages]);
    }
}
