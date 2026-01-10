<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Log;
use App\Models\User;

class AuthController extends Controller
{ 
    public function Autenticar(Request $request): RedirectResponse 
    {
        $validacao = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);
        
        $credenciais = ['email' => $request->email, 'password' => $request->senha];

        if(Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Email ou senha errado.'
        ])->onlyInput('email');
    }

    public function CriarConta(Request $request): RedirectResponse
    {
        $validacao = $request->validate([
            'nome' =>['required'],
            'email' => ['required', 'unique:users,email', 'email'],
            'senha' => ['required', 'min:4', 'confirmed'],
        ],
        [
            'nome.required' => 'O campo nome é obrigatório.', 
            'email.required' => 'O campo email é obrigatório.',
            'email.unique' => 'Este email já está em uso.',
            'email.email' => 'Formato de email inválido.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter no mínimo 4 caracteres.',
            'senha.confirmed' => 'A senha não coincide com repetir senha',
        ]);

        if($validacao) {
            $usuario = User::create([
                'name' => $request->nome,
                'email' => $request->email,
                'password' => Hash::make($request->senha),
            ]);
        }

        return redirect('/login');
    }

    public function EncerrarSessao(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
