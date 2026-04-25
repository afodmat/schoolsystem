<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faculty extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    protected $fillable = [
        'name',
        // 'courses_id',
        'description',
        'dean_name',
        'dean_email',
        'dean_contact',
        'assistant_dean_name',
        'assistant_dean_contact',
        'assistant_dean_email'
    ];
}

class Faculty extends Model
{
    public function course()
    {
        return $this->hasMany(course::class);
    }
}