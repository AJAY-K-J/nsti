<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'doc_title',
        'document',

    ];


    function getUsers(){
        return $this->hasMany('App\Models\User','user_id','id');
    }

}
