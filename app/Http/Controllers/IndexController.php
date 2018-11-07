<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function feedback()
    {
        return view('feedback');
    }
}
