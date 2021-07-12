<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmittedStudentsDetail extends Model
{
    use HasFactory;

protected $fillable = [
        'user_id',
        'username',
        'name',
        'email',
        'phonenumber',

        'tradeName',
        'itiPassed',
        'isDiplomaHolder',
        'dob',

        'fatherGuardianName',
        'motherName',
        'gender',
        'category',
        'physicallyHandicapped',
        'traineeType',
        'employeeCodePEN',
        'aadharNumber',
        'maritalStatus',
        'address',


    ];

}
