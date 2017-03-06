<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	use SoftDeletes;

    protected $fillable=[
    	'First_Name',
    	'Middle_Name',
    	'Last_Name',
    	'Course',
    	'Contact',
    	'Guardian_Name'
    ];
}
