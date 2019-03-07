<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function vendors()
    {
        $vendors = DB::table('vendors')->get();
        $title = 'vendors';
        return view('admin.vendors',compact('vendors','title'));
    }


    public function reps()
    {
        $reps = DB::table('reps')->get();
        $title = 'Reps';
        return view('admin.vendors',compact('reps','title'));
    }
    public function sliders()
    {
        $sliders = DB::table('sliders')->get();
        $title = 'Sliders';
        return view('admin.vendors',compact('sliders','title'));
    }

    public function about()
    {
        $abouts = DB::table('about')->get();
        $title = 'About';
        return view('admin.vendors',compact('abouts','title'));
    }

    public function contact()
    {
        $contact = DB::table('contact_info')->first();
        $title = 'Contact';
        return view('admin.contact',compact('contact','title'));
    }


    public function contactDetails()
    {
        $contact_details = DB::table('contact_details')->get();
        $title = 'Contact Details';
        return view('admin.vendors',compact('contact_details','title'));
    }

     public function vendorEdit($id)
    {
        $vendor = DB::table('vendors')->where('id',$id)->first();
        return view('admin.vendor_edit',compact('vendor'));
    }
     public function repEdit($id)
    {
        $rep = DB::table('reps')->where('id',$id)->first();
        return view('admin.vendor_edit',compact('rep'));
    }
    public function sliderEdit($id)
    {
        $slider = DB::table('sliders')->where('id',$id)->first();
        return view('admin.vendor_edit',compact('slider'));
    }
    public function aboutEdit($id)
    {
        $about = DB::table('about')->where('id',$id)->first();
        return view('admin.vendor_edit',compact('about'));
    }
    public function contactDetailEdit($id)
    {
        $contact_detail = DB::table('contact_details')->where('id',$id)->first();
        return view('admin.vendor_edit',compact('contact_detail'));
    }




}
