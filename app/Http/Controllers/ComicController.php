<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function show($id)
    {
        $comics = config('comics');

        $comic = [];
        $comic = collect($comics)->firstWhere('id', $id); //il firstWhere esegue un foreach con if e return

        return view('comics.show', compact('comic'));
    }
}
