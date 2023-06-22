<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicantMODEL extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'applicantstbl';
    protected $fillable = [
        'typeofappointment',
        'itemnumber',
        'firstname',
        'middlename',
        'lastname',
        'position',
        'department',
        'gender',
        'birthdate',
        'tinnumber',
        'DOA',
        'DLP',
        'eligibility',
        'school_id',
        'status'
    ];

    public function School()
    {
          return $this->belongsTo(SchoolMODEL::class, 'school_id', 'id');
    }  
}
