<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    // with method
    public function about() {
        $names = ['John', 'Michael', 'David', 'Jessica'];
        return view('about', [
            'names' => $names
            ]);
    }
} 

