<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Http\Requests\v1\EnrollmentRequest;
use App\Http\Resources\v1\EnrollmentResource;

class ApiEnrollmentController extends Controller
{
    public function index(){
        $enrollment = Enrollment::all();
        return new EnrollmentResource($enrollment);
    }

    public function store(EnrollmentRequest $request){
        $enrolled = Enrollment::create($request->validated());
        return new EnrollmentResource($enrolled);
    }

    public function show($id){
        $enrolled = Enrolled::findOrFail($id);
        return new EnrollmentResource($enrolled);
    }

    public function update(EnrollmentRequest $request){
        $enrolled = Enrollment::update($request->validated());
        return new EnrollmentResource($enrolled);
    }

    public function destroy($id){
        $enrolled = Enrollment::findOfail($id);
        $enrolled->destroy();
        $enrolled->save();
        return response()->json(['message' => 'Admission deactivated successfully']);
    } 
}
