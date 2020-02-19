<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student';
    public $primaryKey = 'id';
public $timestamps = true;
}
