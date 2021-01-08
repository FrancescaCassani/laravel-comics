<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    public function show($slug)
    {
        $comics = config('comics');

        $comic = [];
        //$comic = collect($comics)->firstWhere('id', $id); //il firstWhere esegue un foreach con if e return

        foreach ($comics as $item) {
            $titleUrl = Str::slug($item['title'], '-');

            if($slug == $titleUrl) {
                $comic = $item;
            break; //il break blocca quella parte dello script e fa proseguire l esecuzione. il return posso metterlo solo una volta perchè blocca l esecuzione e non fa più proseguire
            }
        }

        return view('comics.show', compact('comic'));
    }
}
