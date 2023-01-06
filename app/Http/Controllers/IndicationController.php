<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndicationController extends Controller
{
    public function index()
    {
        return view('indication.index');
    }
}
