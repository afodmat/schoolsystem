<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return response()->json(['message' => 'all permissions']);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|unique:permissions,name'
        ]);

        $permission = Permission::create([
            'name' => strtolower($request->name)
        ]);

        return response()->json([
            'message' => 'Role created successfully',
            'data' => $permission
        ], 201);
    }

    public function show($id){
        $permission = Permission::findOrFail($id);
        return response()->json([$rolw, 200]);
    }

    public function update(Request $request, $id){
        $permission = Permission::findOrFail($id);

        $request->validate([
            'name' => 'required|string|unique:permissions,name,' . $permission->id
        ]);

        $permission->update([
            'name' => strtolower($request->name)
        ]);

        return response()->json([
            'message' => 'Role updated',
            'data' => $permission
        ]);
    }

    public function delete($id){
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return response()->json([
            'message' => 'Role deleted'
        ]);
    }
}
