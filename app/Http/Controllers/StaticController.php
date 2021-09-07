<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function characters() {
        return view('characters');
    }

    public function movie() {
        return view('movie');
    }
    public function tv() {
        return view('tv');
    }
    public function game() {
        return view('game');
    }
    public function collectibles() {
        return view('collectibles');
    }
    public function videos() {
        return view('videos');
    }
    public function fans() {
        return view('fans');
    }
    public function news() {
        return view('news');
    }
    public function shop() {
        return view('shop');
    }
}
