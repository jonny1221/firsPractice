<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() {
        return view('gumanaka');

    
    }

    function secondIndex () {
        return view('example.index');
        
    }
    function thirdIndex() {
        return view('example.home');
    }
    
}
