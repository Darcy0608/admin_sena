<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    // LOGIN 

    // Muestra la vista de inicio de sesion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesa el inicio de sesion
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'Las credenciales ingresadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    //  REGISTRO 

    // Muestra la vista de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Procesa el registro
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(8)],
            // El rol "administrador" no se puede elegir al registrarse
            'role' => ['required', Rule::in(['instructor', 'aprendiz'])],
        ], [
            'email.unique' => 'Este correo ya está registrado.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'role.required' => 'Selecciona un rol.',
            'role.in' => 'El rol seleccionado no es válido.',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);

        // Inicia sesión automaticamente despues de registrarse
        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('home');
    }

    //  LOGOUT 

    // Cierra la sesion
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}