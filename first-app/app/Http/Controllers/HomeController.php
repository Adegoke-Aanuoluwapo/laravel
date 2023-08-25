<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
         return '<h1>You are Welcome </h1>';
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return '<h2>contact page </h2>';
    }
}
