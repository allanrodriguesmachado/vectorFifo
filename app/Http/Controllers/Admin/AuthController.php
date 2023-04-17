<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Models\User;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
//        $user = User::where('id', 2)->first();
//        $user->password = bcrypt('teste');
//        $user->save();

        return view('admin.index');
    }

    public function home()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if (in_array('', $request->only('email', 'password'))) {
            $json['message'] = $this->message->error("Opsss, Informe todos os dados para efetuar o login")->render();
            return response()->json($json);
        }

        if (!filter_var($request->email, FILTER_SANITIZE_EMAIL)) {
            $json['message'] = $this->message->error("Opsss, E-mail invalido")->render();
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($credentials)) {
            $json['message'] = $this->message->error("Opsss,Invalido")->render();
            return response()->json($json);
        }

        $json['redirect'] = route('admin.home');
        return response()->json($json);
    }
}
