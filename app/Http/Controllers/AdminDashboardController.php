<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function allUsers()
    {
        return view('admin.allUsers');
    }
    public function Productlist()
    {
        return view('admin.Productlist');
    }
    public function message()
    {
        return view('admin.message');
    }
    public function rabuser()
    {
        return view('admin.rabuser');
    }
    public function agronomy()
    {
        return view('admin.agronomy');
    }
    public function team()
    {
        return view('admin.team');
    }
    public function settings()
    {
        return view('admin.settings');
    }
}
