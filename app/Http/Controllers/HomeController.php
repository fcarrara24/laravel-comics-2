<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    //stampa 4 fumetti presi randomicamente dall'array
    public function index()
    {
        $comics = Comic::inRandomOrder()
            ->limit(4)
            ->get();
        return view('home', compact('comics'));
    }
}
