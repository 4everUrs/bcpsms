<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'position', 'quantity', 'status', 'benefits', 'shifts', 'salary_min', 'salary_max'
    ];
    public function Qualification()
    {
        return $this->hasMany(Qualification::class);
    }
    public function Benefit()
    {
        return $this->hasMany(benefit::class);
    }
    public function Shift()
    {
        return $this->hasMany(shift::class);
    }
}
