<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Student extends Model
{
    use  HasFactory,HasApiTokens,Notifiable, SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'date_of_birth',
        'gender',
        'student_number',
        'nin_number',
        'age',
        'enrollment_date',
        'is_enrolled',
        'address',
        'nationality',
        'course_id',
        'guardian_name',
        'guardian_contact',
        'guardian_relationship',
        'guardian_address',
        'admission_year',
        'study_mode',
        'academic_status',
        'photo_url'
    ];
    
    protected static function booted()
    {
        static::creating(function ($student) {
            $student->student_number = self::generateStudentNumber();
        });
    }

    public static function generateStudentNumber(): string
    {
        $year = date('Y');
        $latestStudent = self::whereYear('created_at', $year)
            ->orderByDesc('id')
            ->first();

        $lastNumber = 0;

        if ($latestStudent && preg_match('/STD-' . $year . '-(\d+)/', $latestStudent->student_number, $matches)) {
            $lastNumber = (int) $matches[1];
        }

        $newNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
        return "STD-{$year}-{$newNumber}";
    }

     public function course()
    {
        return $this->belongsTo(Course::class, 'Course_id');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function admission()
    {
        return $this->belongsTo(Admission::class);
    }

   
}

