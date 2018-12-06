<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function gallery()
    {
        $gallery_images = Gallery::orderBy('id', 'DESC')->get();
        $count = count($gallery_images)%100;
        $number = 100 - $count;
        if ($number == 100) {
            $number = 0;
        }

        return view('gallery', [
            'gallery_images' => $gallery_images,
            'number' => $number
        ]);

    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function carusel()
    {
        return view('carusel');
    }

    public function feedback()
    {
        return view('feedback');
    }
}