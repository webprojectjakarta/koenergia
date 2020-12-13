<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarierController extends Controller
{
    public function index()
    {
        return view('carier.app');
    }
}
