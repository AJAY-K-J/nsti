<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmittedStudentsExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nameOfEmployer',
        'natureOfJob',
        'fromDate',
        'toDate',
        'designation',
        'currentEmployerStatus',

    ];


    function getUsersExp(){
        return $this->hasMany('App\Models\AdmittedStudentsDetail');
    }
}
