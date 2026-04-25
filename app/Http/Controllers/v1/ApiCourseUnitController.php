<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseUnit;
use App\Http\Requests\v1\CourseUnitRequest;
use App\Http\Resources\v1\CourseUnitResource;

class ApiCourseUnitController extends Controller
{
    public function index(){
        $courseunit = CourseUnit::all();
        return new CourseUnitResource($courseunit);
    }

    public function store(CourseUnitRequest $request){
        $attributes = $request->validated();
        CourseUnit::create($attributes);
        return new CourseUnitResource($attributes);
    }

    public function show($id){
        $attribute = CourseUnit::findOrFail($id);
        return new CourseUnitResource($attribute);
    }

    public function update(CourseUnitRequest $request){
        $attribute = $request->validated();
        CourseUnit::update($attribute);
        return new CourseUnitResource($attribute);
    }

    public function destroy($id){
        $attribute = CourseUnit::FindOrFail($id);
        $attribute->destroy();
        $attribute->save();
        return response()->json(['message' => 'Course unit deactivated successfully']);
    }
}
