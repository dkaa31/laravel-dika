<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    //
    public function satu()
    {
        return view('index');
    }

    public function dua()
    {
        return view('formm');
    }

    public function tiga()
    {
        return view('welcome');
    }

    public function form()
    {
        return view('form');
    }
}
