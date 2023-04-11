<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function homepage()
    {
        $movies = Movie::all()
            ->get();

        $data = [
            'movies' => $movies
        ];

        return view('welcome', $data);
    }
}
