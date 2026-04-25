<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Student extends Model
{
    use  HasFactory, SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'date_of_birth',
        'gender',
        'student_number',
        'course',
        'year',
        'semester',
        'age',
        'enrollment_date',
        'is_enrolled',
        'city',
        'district',
        'country',
        'guardian_name',
        'guardian_contact',
        'guardian_relationship',
        'photo_url',
        'is_active'
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

   
}
