<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Hey, welcome to the test Laravel App!";
        // return view('pages/index', compact('title'));
        return view('pages/index')->with('title', $title);
    }

    public function about() {
        return view('pages/about');
    }

    public function services() {
        $services = array('Cooking', 'Cleaning', 'Laundry');
        return view('pages/services')->with('services', $services);
    }
}
