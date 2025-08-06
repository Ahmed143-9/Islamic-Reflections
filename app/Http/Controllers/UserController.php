<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show all users in the users list page
     */
    public function showUsers()
    {
        $users = User::select('id', 'name', 'age', 'city', 'pen_name', 'islamic_background')
                     ->orderBy('created_at', 'desc')
                     ->get();

        if ($users->isEmpty()) {
            $message = 'Assalamu Alaikum! No writers have joined our community yet. Be the first to register and share Islamic knowledge!';
            return view('users', compact('message'));
        }

        return view('users', compact('users'));
    }

    /**
     * Show the join us page (login/register forms)
     */
    public function showJoinUs()
    {
        return view('joinus');
    }

    /**
     * Handle user registration
     */
    public function register(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'pen_name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|same:password',
            'islamic_background' => 'required|string',
            'age' => 'nullable|integer|min:13|max:120',
            'city' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'terms' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                           ->withErrors($validator)
                           ->withInput();
        }

        try {
            // Create new user
            $user = User::create([
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'pen_name' => $request->pen_name,
                'password' => Hash::make($request->password),
                'islamic_background' => $request->islamic_background,
                'age' => $request->age ?? 25, // Default age if not provided
                'city' => $request->city ?? 'Not specified',
                'bio' => $request->bio,
                'phone' => $request->phone ?? '', // Default empty phone
            ]);

            // Log the user in automatically after registration
            Auth::login($user);

            return redirect()->route('home')->with('success', 'Alhamdulillah! Welcome to our Islamic writers community, ' . $user->pen_name . '!');

        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Registration failed. Please try again.')
                           ->withInput();
        }
    }

    /**
     * Handle user login
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                           ->withErrors($validator)
                           ->withInput();
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            
            return redirect()->intended(route('home'))
                           ->with('success', 'Assalamu Alaikum, ' . Auth::user()->pen_name . '! Welcome back.');
        }

        return redirect()->back()
                       ->withErrors(['email' => 'Invalid credentials'])
                       ->withInput();
    }

    /**
     * Handle user logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('home')
                       ->with('success', 'You have been logged out successfully. Barakallahu feeki!');
    }

    /**
     * Show user profile (optional)
     */
    public function profile()
    {
        if (!Auth::check()) {
            return redirect()->route('joinus')
                           ->with('error', 'Please login to view your profile.');
        }

        return view('profile', ['user' => Auth::user()]);
    }
}