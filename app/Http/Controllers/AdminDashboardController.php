<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\farmers;
use App\Models\agronomies;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class AdminDashboardController extends Controller
{
    public function index()
    {
         $registeredUsers = users::count();
         $agronomyUsersCount = users::where('role', 'Agronomy')->count();
        $registeredProductsCount = farmers::count();
        return view('admin.dashboard', compact('registeredProductsCount','registeredUsers','agronomyUsersCount'));
    }

    public function allUsers()
    {
     $users = users::all(); // Fetch all users
    return view('admin.allUsers', compact('users'));

    }
    public function Productlist()
    {
          $products = farmers::all();
        foreach ($products as $product) {
            $carbonDate = Carbon::parse($product->created_at);
            $product->formatted_created_at = $carbonDate->format('j F Y');
            $product->short_description = Str::limit($product->product_description, 10);
            $product->short_desc = Str::limit($product->product_description, 50);
        }
        return view('admin.Productlist', compact('products'));
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
           $agronomy = agronomies::all();
        foreach ($agronomy as $agro) {
            $carbonDate = Carbon::parse($agro->created_at);
            $agro->formatted_created_at = $carbonDate->format('j F Y');
            $agro->short_description = Str::limit($agro->additional_info, 10);
            $agro->short_desc = Str::limit($agro->additional_info, 50);
        }
        return view('admin.agronomy',compact('agronomy'));
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
