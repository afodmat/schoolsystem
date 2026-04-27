<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class admission extends Model
{
    use  HasFactory,HasApiTokens,Notifiable, SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'address',
        'nationality',
        'program_applied_for',
        'admission_year',
        'documents',
        'status',
        'nin_number',
        'passport_number',
        'guardian_first_name',
        'guardian_last_name',
        'guardian_relationship',
        'guardian_phone',
        'photo_url'
    ];
}
