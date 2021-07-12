<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmittedStudentsEducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nameOfExamination',
        'nameOfUniversityOrBoard',
        'tradeOrSubject',
        'yearOfPassing',
        'certificateNumber',
        'duration',
        'percentageOfMarks',
        'technicalOrAcademic',


    ];

    function getAdmittedUsers(){
        return $this->hasMany('App\Models\AdmittedStudentsDetail');
    }
}
