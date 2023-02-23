<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'time_in', 'time_out', 'rendered_hours', 'cutoff_attendance_id'
    ];

    public function Employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
