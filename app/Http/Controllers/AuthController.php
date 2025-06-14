<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User registered successfully'], 201);
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['Invalid credentials'],
        ]);
    }

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'token' => $token,
        'user_id' => $user->id,  // 🔹 Include user ID in the response
        'name' => $user->name,    // 🔹 Optionally include user name
        'email' => $user->email,  // 🔹 Optionally include email
    ], 200);
}

    public function logout(Request $request)
{
    if ($request->user()) {
        $request->user()->tokens()->delete(); // Revoke all tokens
        return response()->json(['message' => 'Logged out successfully'], 200);
    }
    
    return response()->json(['message' => 'Unauthorized'], 401);
}

    
    
}
