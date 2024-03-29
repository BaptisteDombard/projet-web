<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        if (session()->has('previous-url')) {
            session()->flash('previous-url', session('previous-url'));
        }
        return view('login');
    }

    public function store(LoginFormRequest $request)
    {
        $validated = $request->only('email', 'password');

        if (auth()->attempt($validated)) {
            $redirect = session()->has('previous-url') ? session('previous-url') : '/';
            request()->session()->regenerate();
            return redirect($redirect);
        }

        return back()
            ->withErrors([
                'email' => trans('auth.failed'),
                'password' => trans('auth.password'),
            ])
            ->withInput();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
