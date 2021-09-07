<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComiController extends Controller
{
    public function index() {
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }
    public function singleComic($id) {
        $comics = Comic::where('id',$id)->first();
        return view('singleComic', compact('comics'));
    }
}
