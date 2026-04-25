<?php
namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Http\Resources\v1\StudentResource;
use App\Http\Resources\v1\StudentCollection;
use Illuminate\Http\Request;
use App\Filters\v1\StudentFilter;
use App\Http\Requests\v1\StoreStudentRequest;
use App\Http\Requests\v1\UpdateStudentRequest;
use App\Http\Requests\v1\BulkStudentStoreRequest;

class ApiStudentController extends Controller
{
    // Show all active students
    public function index(Request $request)
    {
        $filter = new StudentFilter();
        $queryItems = $filter->transform($request);
        if(count($queryItems) ==0){
            return new StudentCollection(Student::where('is_active', true)->get());
        }else{
            $students = Student::where($queryItems)->paginate();
            return new StudentCollection($students->append($request->query()));
        }
        


        
    }

    public function show(Student $student)
    {
        // dd($student);
        return new StudentResource($student);
        // return response()->json(
        //     $student = Student::findOrFail($id)
           
        // );
    }

    public function store(StoreStudentRequest $request){
        return new StudentResource(Student::create($request->all()));
    }

    // public function bulkStore(BulkStudentStoreRequest $request){

    // }

    public function update(UpdateStudentRequest $request, Student $student){
        $student->update($request->all());
        return new StudentResource($student);
    }
}
