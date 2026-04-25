<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\v1\StoreUserRequest;

class RegisterController extends Controller
{
    

    public function store(StoreUserRequest $request)
    {
        $attributes = $request->validated();
    
        // Hash the password
        $attributes['password'] = bcrypt($attributes['password']);
    
        $user = User::create($attributes);
    
          return response()->json([
                'user' => $user,
                'token' => $token
            ], 201); 
        
    }
}
