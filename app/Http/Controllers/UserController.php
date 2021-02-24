<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // return $request->input();
        // dd($request->all());
        $user = User::where('email',$request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user',$user);
            return redirect(route('home'));
        } else {
            return "username or password does not match";
        }
    }
}
