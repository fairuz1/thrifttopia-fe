<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller {
    
    public function index() {
        return view('dashboard');
        // return view('dashboard', compact('data'));
    }

    public function jualBarang() {
        return view('jualBarang');
        // return view('dashboard', compact('data'));
    }
}