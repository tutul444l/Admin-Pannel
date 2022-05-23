<?php

namespace App\Http\Controllers\adnin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sportsController extends Controller
{
    public function index()
    {
        return view('sports');
    }
}
