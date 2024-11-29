<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('frontend.pages.login');
    }

    public function login(Request $request)
    {
        $client = Client::where('Email', $request->Email)->where('Password', $request->Password)->first();

        if ($client) {
            session(['Clientid' => $client->Id]);
            return "Login successful!";
        }

        return "Invalid email or password.";

        return redirect()->route('front.index')->with('success', 'Admin created successfully');
    }

    // Logout Function
    public function logout()
    {
        session()->flush();
        return "Logout successful!";
    }

}
