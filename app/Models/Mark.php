<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = [
        'enrollment_id',
        'assignment_marks',
        'mid_term_marks',
        'final_marks',
        'total_marks',
        'grade'
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
