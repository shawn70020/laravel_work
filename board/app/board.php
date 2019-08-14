<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    protected $table = "message";
    protected $primaryKey = 'id';
    public $timestamps = false;
}
