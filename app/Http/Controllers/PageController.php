<?php

namespace App\Http\Controllers;

use App\Kanji;

class PageController extends Controller
{
    public function jlpt($jlptLevel)
    {
        $kanjis = Kanji::all();
        return view("page.jlpt", compact('kanjis', 'jlptLevel'));
    }
}
