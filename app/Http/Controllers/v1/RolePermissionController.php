<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    public function index(){
        $roles = Role::all();
        return response()->json(['message' => 'all roles']);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|unique:roles,name'
        ]);

        $role = Role::create([
            'name' => strtolower($request->name)
        ]);

        return response()->json([
            'message' => 'Role created successfully',
            'data' => $role
        ], 201);
    }

    public function show($id){
        $role = Role::findOrFail($id);
        return response()->json([$rolw, 200]);
    }

    public function update(Request $request, $id){
        $role = Role::findOrFail($id);

        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $role->id
        ]);

        $role->update([
            'name' => strtolower($request->name)
        ]);

        return response()->json([
            'message' => 'Role updated',
            'data' => $role
        ]);
    }

    public function delete($id){
        $role = Role::findOrFail($id);
        $role->delete();

        return response()->json([
            'message' => 'Role deleted'
        ]);
    }
}
