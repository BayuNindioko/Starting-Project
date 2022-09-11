<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('front.layouts.frontend');
    }

    public function galeri(){
        return view('front.layouts.galeri');
    }

    public function news(){
        return view('front.layouts.news');
    }
}
