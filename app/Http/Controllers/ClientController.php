<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function Contact(){
        $contact_info = DB::table('contact_info')->first();
        $contact_details = DB::table('contact_details')->get();
        return view('contact', compact('contact_info','contact_details'));
    }

public function About(){
    $about_details = DB::table('about')->get();
    return view('about',compact('about_details'));
}

public function ourReps(){
    $reps = DB::table('reps')->get();
    return view('our_reps',compact('reps'));
}

public function Vendors(){
    $vendors = DB::table('vendors')->get();
    return view('vendors',compact('vendors'));
}
}
