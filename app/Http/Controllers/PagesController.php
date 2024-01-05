<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function login()
    {
        return view('auth.login'); 
    }

    public function register()
    {
        return view('auth.register'); 
    }
    
    public function farmerForm()
    {
        return view('auth.farmerform');
    }

    // If you want to handle form submission for farmerForm
    public function submitFarmerForm(Request $request)
    {
        // Handle form submission logic here
        // You can access form data using $request->input('field_name')

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
