<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\User;

class ApiDashboardController extends Controller
{
    public function index(){
        $totalTeachers = Teacher::count();
        $activeTeachers = Teacher::where('is_active', true)->count();
        $inactiveTeachers = Teacher::where('is_active', false)->count();
        $newTeachersToday = Teacher::whereDate('created_at', Carbon::today())->count();
        $teachersIncrease= ($totalTeachers - $newTeachersToday);
        $percentageTeachersIncrease = ($teachersIncrease / $totalTeachers) * 100;

        $totalStudents = Student::count();
        $activeStudents = Student::where('is_active', true)->count();
        $inactiveStudents = Student::where('is_active', false)->count();
        $newStudentsToday = Student::whereDate('created_at', Carbon::today())->count();
        $studentsIncrease= ($totalStudents - $newStudentsToday);
        $percentageStudentsIncrease = ($studentsIncrease / $totalStudents) * 100;

        $totalUsers = User::count();
        // $activeUsers = User::where('is_active',true)->count();
        $newUsersToday = User::whereDate('created_at',Carbon::today())->count();
        $usersIncrease= ($totalUsers - $newUsersToday);
        $percentageUsersIncrease = ($usersIncrease / $totalUsers) * 100;

        $totalVisitors = $totalTeachers + $totalStudents +$totalUsers;

        return response()->json([
            'totalTeachers' => (float)$totalTeachers,
            'activeTeachers' => (float)$activeTeachers,
            'inactiveTeachers' => (float)$inactiveTeachers,
            'newTeachersToday' => (float)$newTeachersToday,
            'percentageTeachersIncrease' => (float)$percentageTeachersIncrease,
    
            'totalStudents' => (float)$totalStudents,
            'activeStudents' => (float)$activeStudents,
            'inactiveStudents' => (float)$inactiveStudents,
            'newStudentsToday' => (float)$newStudentsToday,
            'percentageStudentsIncrease' => (float)$percentageStudentsIncrease,
    
            'totalUsers' => (float)$totalUsers,
            'newUsersToday' => (float)$newUsersToday,
            'usersIncrease' => (float)$usersIncrease,
            'percentageUsersIncrease' =>(float) $percentageUsersIncrease,
        ]);
    }
}