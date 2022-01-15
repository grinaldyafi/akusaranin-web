<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('koleksi-buku');
    }
    public function admin()
    {
        return view('tambah-buku');
    }
}
