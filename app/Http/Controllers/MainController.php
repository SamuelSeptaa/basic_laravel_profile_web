<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\judul;
use App\Models\layanan;
use App\Models\team;
use App\Models\tentang;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('index', [
            'header' => judul::first(),
            'tentang' => tentang::first(),
            'layanan' => layanan::all(),
            'title' => "TEAMWIN INFORMATIKA"
        ]);
    }

    public function profile(){
        return view('profile', 
        [
            'team' => team::all(),
            'title' => 'Profil Keempat Anggota TeamWin'
        ]);
    }

    public function gallery(){
        return view('gallery', 
        [
            'gallery' => gallery::orderBy('id', 'desc')->get(),
            'title' => 'Gallery TeamWin'
        ]);
    }
}
