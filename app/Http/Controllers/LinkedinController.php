<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class LinkedinController extends Controller
{

    public function create()
    {
        return Inertia::render('Auth/LinkedinLogin', [
        'linkedInURL' => route('linkedinLoginRedirect')
        ]);
    }

    public function linkedinRedirect(){
        return Socialite::driver('linkedin-openid')
            ->scopes(['profile', 'email'])
            ->with([
                'response_type' => 'code',
                'state' => Str::random(20)
            ])
            ->redirect();
    }

    public function linkedinAuthCallback(){
        $user = Socialite::driver('linkedin-openid')
            ->stateless()
            ->user();
        dd($user);
    }
}
