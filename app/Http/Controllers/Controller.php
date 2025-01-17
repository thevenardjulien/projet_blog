<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        return view('index');
    }

    public function add()
    {
        return view('articles.add');
    }
}
