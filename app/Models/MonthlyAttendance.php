<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyAttendance extends Model
{
    use HasFactory;

    protected $fillable = ['month'];

    public function Cutoff()
    {
        return $this->hasMany(CutoffAttendance::class);
    }
}
