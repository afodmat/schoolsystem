<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApiUserController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json($users);
    }

    public function show($id){
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        $user->save();
        return response()->json(['message' => 'User deactivated successfully']);
    }
}
