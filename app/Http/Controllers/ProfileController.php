<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
  public function showProfile(){
    $user = Auth::user();
    return view('user/profile')->with(['user' => $user]);
  }

  public function editProfile(Request $request){
    $user = Auth::user();
   $route1 = $request->file('avatar')->store('public');
   $avatar = basename($route1);
    $user->name = $request->name;
    $user->lastname = $request->lastname;
    $user->email = $request->email;
    $user->adress = $request->adress;
    $user->avatar = $avatar;

    $user->save();

    return redirect('/perfil');
  }
}
