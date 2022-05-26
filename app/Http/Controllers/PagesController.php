<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function services() {
        return view('services');
    }

    public function service() {
        return view('service');
    }

    public function contact() {
        return view('contact');
    }
}
