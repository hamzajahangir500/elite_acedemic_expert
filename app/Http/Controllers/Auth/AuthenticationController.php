<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        $request->authenticate();

        $request->session()->regenerate();
        $user = Auth::user();
        if($user->delete_status == 1)
        {
            auth()->logout();
        }
        // Redirect based on the user's role
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard'); // Redirect to the admin dashboard
        }

        // Default redirect for non-admin users
        return redirect()->route('home'); // Or wherever you'd like
    }
    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // Logout User Method
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
