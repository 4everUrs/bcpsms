<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInformartion extends Model
{
    use HasFactory;

    protected $fillable = [
        'general_id', 'general_key'
    ];
}
