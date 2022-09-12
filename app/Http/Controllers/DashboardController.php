<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\News;

class DashboardController extends Controller
{
    public function index(){
        $galeri = Galeri::paginate(3);
        return view('front.layouts.frontend', compact('galeri'));
    }

    public function galeri(){
        $galeri = Galeri::all();
        return view('front.layouts.galeri', compact('galeri'));
    }

    public function home(){
        return view('front.layouts.home');
    }

    public function news(){
        $news = News::all();
        return view('front.layouts.news', compact('news'));
    }
}
