<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentRequestList extends Model
{
    use HasFactory;

    protected $fillable = [
        'position', 'slot', 'salary_min', 'salary_max', 'status'
    ];
}
