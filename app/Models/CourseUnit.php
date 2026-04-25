<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseUnit extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'type'
    ];
}

// protected static function boot()
// {
//     parent::boot();

//     static::creating(function ($courseUnit) {

//         if ($courseUnit->code) return;

        
//         $prefix = $courseUnit->faculty_prefix ?? ;

//         $lastId = self::max('id') + 1;

//         $courseUnit->code =
//             strtoupper($prefix) . '-' .
//             str_pad($lastId, 4, '0', STR_PAD_LEFT);
//     });
// }

class Course extends Model
{
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function courseUnits()
    {
        return $this->belongsToMany(CourseUnit::class);
    }
}

static::creating(function ($courseUnit) {

    if ($courseUnit->code) return;

    $prefix = $courseUnit->faculty_prefix ?? 'CU';

    $lastId = self::max('id') + 1;

    $courseUnit->code = strtoupper($prefix) . '-' . str_pad($lastId, 4, '0', STR_PAD_LEFT);
});
