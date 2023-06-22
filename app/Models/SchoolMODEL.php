<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolMODEL extends Model
{
    use HasFactory;
    protected $table = 'schooltbl';
    protected $fillable = [
        'school',
        'level',
        'district_id',
        'status',
    ];

    public function District()
    {
          return $this->belongsTo(DistrictMODEL::class, 'district_id', 'id');
    }
}

