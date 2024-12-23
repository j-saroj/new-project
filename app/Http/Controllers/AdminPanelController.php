<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\Images;
use App\Models\Resume;
use App\Models\SubscribedEmails;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;
class AdminPanelController extends Controller
{

   


    public function dashboard()
    {
      return view('admin.pages.dashboard');
    }



    public function detach_image(Request $request)
    {
        try {
            $modelType = $request->input('model_type');
            $modelId = $request->input('model_id');
            $modelInstance = App::make($modelType)->find($modelId);
            $img = GalleryImage::find($request->input('image'));
            $filePath = $img->image;
            $flag = $modelInstance->image()->where('id', $img->id)->delete();
            Storage::delete($filePath);
            return back()->withSuccess('Image was deleted!');
        } catch (ModelNotFoundException $e) {
            return back()->with('error', 'Model not found.');
        }
    }


    // public function getemailsubscribe()
    // {
    //     $email = SubscribedEmails::simplePaginate(15);
    //     return view('admin.pages.email_subscribe.index', compact('email'));
    // }

    // public function resume(){
    //     $resume = Resume::with('career')->simplePaginate(15);
    //     return view('admin.pages.resume.index', compact('resume'));

    //     }
}
