<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'quality', 'achievement', 'productivity', 'initiative',
        'teamwork', 'adaptability', 'communication', 'performance', 'remarks', 'total'
    ];

    public function Employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
