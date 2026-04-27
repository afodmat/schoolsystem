<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admission;
use App\Http\Requests\v1\AdmissionRequest;
use App\Http\Resources\v1\AdmissionResource;

class ApiAdmissionController extends Controller
{
    public function index(){
        $admission=Admission::all();
        return new AdmissionResource($admission);
    }

    public function store(AdmisssionRequest $request){
        $admission = Admission::create($request->validated());
        return new AdmissionResource($admission);
    }

    public function show($id){
        $admission = Admission::findOrFail($id);
        return new AdmissionResource($admission);
    }

    public function update(AdmissionRequest $request){
        $admission= Admission::update($request->validated());
        return new AdmissionResource($admission);
    }

    public function destroy($id){
        $deleted_admission = Admission::findOrFail($id);
        $deleted_admission->destroy();
        $deleted_admission->save();
        return response()->json(['message' => 'Admission deactivated successfully']);
    } 
}
