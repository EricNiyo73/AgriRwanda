<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\farmers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function home()
    {
        $products = farmers::all();
        foreach ($products as $product) {
            $carbonDate = Carbon::parse($product->created_at);
            $product->formatted_created_at = $carbonDate->format('j F Y');
            // $product->short_description = Str::limit($product->product_description, 10);
            $product->short_desc = Str::limit($product->product_description, 100);

        }

        return view('pages.home', compact('products'));
        // return view('pages.home');
    }

     public function copyhome()
    {
        $products = farmers::all();
        foreach ($products as $product) {
            $carbonDate = Carbon::parse($product->created_at);
            $product->formatted_created_at = $carbonDate->format('j F Y');
            // $product->short_description = Str::limit($product->product_description, 10);
            $product->short_desc = Str::limit($product->product_description, 100);

        }

        return view('pages.CopyHome', compact('products'));
        // return view('pages.home');
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


}
