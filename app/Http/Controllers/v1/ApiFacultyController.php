<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Http\Requests\v1\FacultyRequest;
use App\Http\Resources\v1\FacultyResource;

class ApiFacultyController extends Controller
{
    public function index(){
        $faculties = Faculty::all();
        return new Facultyresponse($faculties);
    }

    public function store(FacultyRequest $request){
        $faculty = Faculty::create($request->validated());
         
        return new  FacultyResponse($faculty);
    }

    public function show($id){
        $faculty = Faculty::findOrFail($id);
        return new FacultyResponse($faculty);
    }

    public function update(Request $request){
        $faculty = Faculty::update($request->validated());
        
        return new FacultyResponse($faculty);

    }

    public function destroy($id){
        $faculty = Faculty::findOrFail($id);
        $faculty->destroy();
        $faculty->save();
        return response()->json(['message' => 'Faculty deactivated successfully']);
    }
}
