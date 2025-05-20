<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Student_M extends Model
{
    use HasFactory;
    protected $table = 'studentstbl';
    protected $primaryKey ='id';
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'Stud_add',
        'Stud_dob'
    ];
}
