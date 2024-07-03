<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\movie;

class PageController extends Controller
{

    public function home()
    {
        $film = movie::all();

        $dati = [
            "film" => $film
        ];

        return view('home', $dati);
    }
}
