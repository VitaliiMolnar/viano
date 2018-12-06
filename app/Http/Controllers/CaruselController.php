<?php

namespace App\Http\Controllers;

use App\Models\Carusel;
use App\Models\Gallery;
use Illuminate\Http\Request;

class CaruselController extends Controller
{
    public function imageBySlug($slug)
    {
        try {
            $id = Gallery::where('slug', $slug)->first()->id;
            $carusel_images = Carusel::where('gallery_id', $id)->get();
        } catch (\Exception $e) {
            abort(404);
        }
        return view('carusel', [
            'carusel_images' => $carusel_images
        ]);
    }
}
