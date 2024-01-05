<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgronomyController extends Controller
{
    public function Agronomy()
    {
        
        return view('auth.agronomyform'); 
    }
}
