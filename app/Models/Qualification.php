<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'vacancy_id', 'qualification'
    ];

    public function Qualifications()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
