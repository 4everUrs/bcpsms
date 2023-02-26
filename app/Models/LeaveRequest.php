<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'employee_id', 'reason', 'type', 'from', 'to', 'status'
    ];

    public function Employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
