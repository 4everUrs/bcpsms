<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'cutoff_attendance_id', 'monthly_attendance_id', 'attendance_id'
    ];

    public function MonthlyAttendance()
    {
        return $this->belongsTo(MonthlyAttendance::class);
    }
    public function CutoffAttendance()
    {
        return $this->belongsTo(CutoffAttendance::class);
    }
}
