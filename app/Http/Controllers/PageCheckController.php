<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageCheckController extends Controller
{
    public function index()
    {
        $comicsList = Comic::all();
        return view('home', compact('comicsList'));
    }
}
