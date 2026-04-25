<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\v1\UpdateProfileRequest;
use App\Http\Resources\v1\ProfileResource;

class ApiProfileController extends Controller
{
    public function show() {
        return new ProfileResource(auth()->user());
    }

    public function update(UpdateProfileRequest $request){
        $user = auth()->user();
        $data = $request->validated();

        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);
        return new ProfileResource($user);

    }
    
}
