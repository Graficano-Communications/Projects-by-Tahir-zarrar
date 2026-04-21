<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User_login;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Carbon;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
    
        $userAgent = request()->userAgent();
        $device = Agent::device();
        $browser = Agent::browser();
        $platform = Agent::platform();
        $version = Agent::version($platform);
        $robots = Agent::isRobot();
    
        $lastLogin = User_login::latest()->first();
   
        if ($lastLogin && $lastLogin->last_login_ip === request()->ip()) {
            // If the most recent IP is the same, do not add a new record
            $userLogin = $lastLogin;

            $lastLogin->update([
                'last_login_at' => Carbon::now()->format('F j, Y \a\t g:i A'),
                'last_login_ip' => request()->ip(),
                'user_agent' => "{$userAgent} / {$robots}",
                'device' => $device,
                'browser' => $browser,
                'platform' => "{$platform} version {$version}",
            ]);
            

        } else {
            // If the IP is different or there is no previous login record, add a new record
            $userLogin = User_login::create([
                'last_login_at' => Carbon::now()->format('F j, Y \a\t g:i A'),
                'last_login_ip' => request()->ip(),
                'user_agent' => "{$userAgent} / {$robots}",
                'device' => $device,
                'browser' => $browser,
                'platform' => "{$platform} version {$version}",
            ]);
        }
    
        $request->session()->regenerate();
    
        return redirect()->intended(RouteServiceProvider::HOME);
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
