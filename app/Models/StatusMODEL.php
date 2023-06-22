<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMODEL extends Model
{
    use HasFactory;
    protected $table = 'statustbl';
    protected $fillable = [
        'value',
        'availability',
    ];
}
