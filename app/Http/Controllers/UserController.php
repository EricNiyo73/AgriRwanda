<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;


class UserController extends Controller
{

public function showAll(){
    $users = users::all(); // Fetch all users
    return view('user.user', compact('users'));
}
public function showEdit($id)
  {
    $user = users::find($id);
    return view('user.editing', compact('user'));
  }

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'fullname' => 'required',
        'telephone' => 'required',
        // Add other validation rules as needed
    ]);

    $user = users::find($id);
    $user->update($validatedData);

    return redirect()->route('user.showAll')->with('success', 'User updated successfully.');
}

public function destroyUser($id)
{
    $user = users::find($id);
    $user->delete();
    return redirect()->route('user.showAll')->with('success', 'User deleted successfully.');
}

}
