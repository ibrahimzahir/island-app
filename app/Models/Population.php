<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'nationalID',
        'DOB',
        'pAddress',
        'cAddress',
        'maritalStatus',
        'email', 
        'mobile'
    ];  
}
