<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts-admin.adminKonten');
    }

    public function pengguna()
    {
        return view('layouts-admin.adminPengguna');
    }

    public function ringkasan()
    {
        return view('layouts-admin.adminRingkasan');
    }
}
