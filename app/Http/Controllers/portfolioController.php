<?php

namespace App\Http\Controllers;

use SebastianBergmann\Environment\Console;

class portfolioController extends Controller
{
    public function index()
    {
        
        return view('top');
    }
}