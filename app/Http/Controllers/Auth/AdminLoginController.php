<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    //

    public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {

          $validated = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
          ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
