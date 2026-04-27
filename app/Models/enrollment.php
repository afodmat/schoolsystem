<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class enrollment extends Model
{
    use  HasFactory,HasApiTokens,Notifiable, SoftDeletes;
    protected $fillable = [
        'student_id',
        'course_id',
        'academic_year',
        'semester',
        'level',
        'status',
        'isactive'
    ];
}
