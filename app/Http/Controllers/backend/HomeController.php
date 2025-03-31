<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function adminHome()
    {

        return view('backend.home');
    }

    public function changePassword(Request $request)
    {
        return view('backend.auth.change-password');
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ],[
            'current_password.required' => 'Current Password is required',
            'password.required' => 'New Password is required',
            'password.confirmed' => 'Password and Confirm Password does not match',
            'password.min' => 'Password must be at least 8 characters.',
            'password_confirmation.required' => 'Confirm Password is required',
            'password_confirmation.min' => 'Confirm Password must be at least 8 characters.',

        ]);


        #Match The Old Password
        if(!Hash::check($request->current_password, Auth::user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.dashboard')->with("message", "Password changed successfully!");
    }
}
