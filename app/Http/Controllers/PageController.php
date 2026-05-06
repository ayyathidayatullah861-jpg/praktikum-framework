<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function programs()
    {
        return view('pages.programs');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
