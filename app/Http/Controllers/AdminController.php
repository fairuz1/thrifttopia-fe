<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminKonten');
    }

    public function pengguna()
    {
        return view('adminPengguna');
    }

    public function ringkasan()
    {
        return view('adminRingkasan');
    }
}
