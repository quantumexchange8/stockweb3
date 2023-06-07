<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('web.home');
    }
    public function contactUs() {
        return view('web.contact_us');
    }
}
