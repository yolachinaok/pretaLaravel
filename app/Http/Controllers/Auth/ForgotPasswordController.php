<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class ForgotPasswordController extends Controller
{
    public function newPassword(Request $request){
      $usuario = User::where('email', '=', $request->email)->get();
      $error = 'No existen usuarios registrados con ese email';
      if (!isset($usuario[0])) {
      return redirect('/reset-password')->with('status',$error);
    }
      return view('auth/passwords/reset')->with(['email'=>$usuario[0]->email, 'id' =>$usuario[0]->id]);
    }

    public function updatePassword(Request $request){
      $this->validate($request,
      [
        'password'=> 'required|min:8',
        'repeatpassword'=> 'required|same:password|min:8',
        'codigo'=> 'required',

      ],[
        'password.required' => 'Ingrese la contraseña.',
        'password.min' => 'Al menos debe tener 8 digitos.',
        'repeatpassword.required' => 'Ingrese la contraseña.',
        'repeatpassword.min' => 'Al menos debe tener 8 digitos.',
        'repeatpassword.same' => 'Las contraseñas no coinciden.',
        'codigo.required' => 'Ingrese el codigo de seguridad.'
      ]);

      $usuario = User::find($request->userid);
      $usuario->password = Hash::make($request->password);
      $usuario->save();
      return redirect('/login');

  }
}
