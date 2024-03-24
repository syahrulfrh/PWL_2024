<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about(){
        return "syahrul (NIM: ''2241720259)";
    }

    public function articles($artikelId){
        return 'Halaman artikel dengan ID ' .$artikelId;
    }
}
