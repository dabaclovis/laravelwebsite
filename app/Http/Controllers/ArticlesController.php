<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function git()
    {
        return view('articles.git');
    }

    public function laravel()
    {
        return view('articles.laravel');
    }
}
