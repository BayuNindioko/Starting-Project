<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\News;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $galeri = Galeri::paginate(3);
        $pengumuman = Galeri::paginate(1);
        return view('front.layouts.frontend', compact('galeri', 'pengumuman'));
    }

    public function galeri()
    {
        $galeri = Galeri::all();
        return view('front.layouts.galeri', compact('galeri'));
    }

    public function home()
    {
        return view('front.layouts.home');
    }

    public function news()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('front.layouts.news', [
            'news' => News::all(),
            'posts' => Post::latest()->paginate(7)->withQueryString()
        ]);
    }
}
