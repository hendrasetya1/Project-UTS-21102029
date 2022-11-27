<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlutama extends Controller
{
    function prj(){
        return view('Projek');
    }

    function komponent(){
        return view('Komponent');
    }

    function code(){
        return view('Code');
    }
}
