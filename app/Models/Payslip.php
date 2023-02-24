<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'cutoff_attendance_id', 'total_hours', 'net_salary', 'gross_salary',
        'over_time', 'sss', 'philhealth', 'pagibig', 'medical', 'dental', 'insurance', 'tax'
    ];
    public function Employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function CutoffAttendance()
    {
        return $this->belongsTo(CutoffAttendance::class);
    }
}
