<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SeriesController extends Controller
{

    public function index()
    {
        $series = [
            "Jumpers",
            "Arquivo X",
            "Friends"
        ];

        return view('series.index', ["series" => $series]);

    }

}