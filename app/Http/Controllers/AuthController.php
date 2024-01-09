<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function storeuser(Request $request){
    $data = $request->validate([
        'fullname' => 'required',
        'country_code' => 'required',
        'telephone' => 'required|numeric|digits:9',
        'password' => 'required',
    ]);
    

    $telephone = $request->input('country_code') . $request->input('telephone');
    $data['role'] = 'Farmer';
      try {
        // users::create($request->all());
        users::create([
        'fullname' => $request->input('fullname'),
        'telephone' => $telephone,
        'role' => $data['role'],
        'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('login')->with('success', 'User created successfully.');
    } catch (\Illuminate\Database\QueryException $e) {
        $errorCode = $e->errorInfo[1];
        if ($errorCode == 1062) { 
            return redirect()->back()->withInput()->withErrors(['telephone' => 'The telephone number is already taken.']);
        }
        throw $e;
    }
  }


  public function loginuser(Request $request)
 {
  $credentials = $request->validate([
    'telephone' => 'required',
    'password' => 'required',
]);
$user = users::where('telephone', $credentials['telephone'])->first();

// Check password
if (!$user || !Hash::check($credentials['password'], $user->password)) {
    return redirect()->back()->withInput()->withErrors(['telephone' => 'imyirondoro yawe ntibonetse']);
}

if ($user->role === 'Admin') {
  return redirect()->route('admin.dashboard');
} elseif ($user->role === 'Agronomy') {
  
  return redirect()->route('Copyhome');
}

return redirect()->route('home');
 }

  public function logout(Request $request) {
    auth()->user()->tokens()->delete();
 return redirect()->route('home');
}
}
