<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function cats()
    {
        return view('pages.cats');
    }

    public function adoption()
    {
        return view('pages.adoption');
    }
}
