<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|unique:users|min:3|max:255',
            'password' => 'required|min:6|max:255'
        ]);
        
        try{
            User::create([
                'username' => $credentials['username'],
                'password' => bcrypt($credentials['password']),
            ]);
            return redirect()->route('register_success');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => 'An error occurred while creating your account.'
            ]);
        }
        
    }

    public function showRegistrationForm()
    {
        return view('register');
    }



    public function showTopUp(){
        return view('topup');
    }

    public function topUp(Request $request){
        $request->validate([
        'amount' => 'required|numeric|min:1000|max:1000000'
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->balance += $request->input('amount');
        $user->save();
        return redirect()->route('topup')->with('success', 'Topup successful');
    }

    public function showRedemptionForm()
    {
        return view('redemption');
    }

    public function redeemPoints()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->points -= 10000;
        $user->balance += 10000;
        $user->save();
        return redirect()->route('redeem')->with('success', 'Points redeemed! New balance: Rp' . number_format($user->balance, 0, ',', '.'));
    }


}
