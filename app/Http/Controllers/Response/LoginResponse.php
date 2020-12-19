<?php

namespace App\Http\Responses;


use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        if (Auth::user()->hasAnyRole(['admin', 'kitchen'])) {
            
           return redirect(route('dashboard'));
        } else {
            return redirect('/index');
        }
        
        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
        
        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended(config('fortify.home'));
    }

}