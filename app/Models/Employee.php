<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id', 'vacancy_id', 'name', 'email', 'age', 'birthdate', 'gender', 'username', 'password',
        'sss', 'philhealth', 'pagibig', 'medical', 'dental', 'insurance', 'address', 'phone', 'salary', 'user_id',
        'shift', 'schedule'
    ];

    public function Vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
    public function Perfomance()
    {
        return $this->hasOne(Performance::class);
    }
}
