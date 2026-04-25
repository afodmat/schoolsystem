<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class ApiCourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return response()->json($courses);
    }

    

    public function store(Request $request){
        $validated = $request->validate([
            'course_name' => 'required',
            'duration'=>'required'
        ]);

        Course::create([
            'course_name' => $validated['course_name'],
            'duration' => $validated['duration']
        ]);
        
        return response()->json([
            'message'=> "course created successfully"
        ]);
    }

    public function show($id){
        $course = Course::findOrFail($id);
        return response()->json($course);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'course_name' => 'required',
            'duration'=>'required'
        ]);

        Course::update([
            'course_name' => $validated['course_name'],
            'duration' => $validated['duration']
        ]);
        
        return response()->json([
            'message'=> "course updated successfully"
        ]);
    }

    public function destroy($id){
        $course = Course::findOrFail($id);
        $course->delete();
        $course->save();
        return response()->json(['message' => 'Course deactivated successfully']);
    }
}
