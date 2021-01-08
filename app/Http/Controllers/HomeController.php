<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $comics = config('comics');

        //Controllo
        //dd($comics);


        foreach ($comics as $key => $comic) {
            //Pssare dal titolo a slug
            $slug = Str::slug($comic['title'], '-');

            $comics[$key]['slug'] = $slug;
        }

        
        return view('home', compact('comics'));

    }
}
