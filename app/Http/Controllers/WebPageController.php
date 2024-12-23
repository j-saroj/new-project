<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\GalleryImage;
use Illuminate\Foundation\Validation\ValidatesRequests;

class WebPageController extends Controller
{
    use ValidatesRequests;
    //

    public function home()
    {
       
        $gallery = GalleryImage::where('status', true)->with('image')->latest()->get();
        return view('pages.index', compact('blogs', 'testimonial', 'testimonialExtra', 'aboutus', 'gallery', 'videos'));
    }

    public function aboutUs()
    {
       
    }


    public function contactUs()
    {
      
        return view('pages.contact-us', compact('contactus'));
    }

    public function videos()
    {
        return view('pages.videos', compact('videos'));
    }

    public function podcasts()
    {
        return view('pages.podcasts', compact('podcasts'));
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



    public function allServices()
    {

    }



    // public function serviceDetail($slug)
    // {
    //     $service = Services::where(['status' => true, 'slug' => $slug])->with(['image'])->first();
    //     $services = Services::where(['status' => true])->with(['image'])->get();
    //     return view('pages.service.service-detail', compact('service', 'services'));
    // }

    public function allTestimonials()
    {
    }


    public function allBlogs()
    {
      
    }

    public function events()
    {
       
    }

    public function news()
    {
       
    }

    public function gallery()
    {
        $gallery = GalleryImage::where('status', true)->with('image')->get();
        // dd($gallery);
        // return view('pages.gallery.gallery', compact('gallery'));
    }

    public function gallery_detail($slug)
    {
        $pages = GalleryImage::where('slug', $slug)->firstOrFail();
        // return view('pages.gallery.detail', ['album_item' => $pages]);
    }


   


    public function emailSubscribe(Request $request)
    {

        $this->validate($request, [
            'email' => 'required'
        ]);

       

        return redirect()->back()->withSuccess("Your email has been subscribed!");
    }





  





   

   
   


   
}
