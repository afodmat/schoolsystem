<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\v1\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(LoginRequest $request)
    {
        $data = $request->validated();

        $email = $data['email'];
        $password = $data['password'];

        $user = User::where('email', $email)->first();

        if (! $user) {
            return response()->json([
                'message' => 'Invalid email or password'
            ], 401);
        }

        //  Check password
        if (! Hash::check($password, $user->password)) {
            return response()->json([
                'message' => 'Invalid email or password'
            ], 401);
        }

        // 4. Create token 
        $token = $user->createToken('api-token')->plainTextToken;

        return redirect('/dashboard');
    }
}
