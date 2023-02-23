<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'vacancy_id', 'name', 'gender', 'birthdate', 'resume', 'age', 'email', 'status', 'phone', 'address'
    ];

    public function Vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
