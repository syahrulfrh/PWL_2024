<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles($artikelId){
        return 'Halaman artikel dengan ID ' .$artikelId;
    }
}