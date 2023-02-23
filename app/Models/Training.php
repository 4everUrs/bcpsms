<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id', 'exam', 'training', 'remarks'
    ];

    public function Candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
