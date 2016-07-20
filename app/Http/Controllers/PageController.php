<?php

namespace App\Http\Controllers;

use App\Kanji;

class PageController extends Controller
{
    public function jlpt($level)
    {
        $kanjis = Kanji::where('jlpt-level', $level)->get();
        return view("page.jlpt", compact('kanjis', 'level'));
    }
}
