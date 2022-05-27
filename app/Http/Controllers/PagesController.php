<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Image;

class PagesController extends Controller
{
    public function home() {
        return view('welcome', [
            'services' => Service::all()
        ]);
    }

    public function services() {}

    public function contact() {
        return view('contact');
    }
}
