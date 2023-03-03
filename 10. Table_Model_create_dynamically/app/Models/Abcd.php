<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abcd extends Model
{
    protected $table = 'abcd';
    protected $fillable = ['name', 'address'];
    public $timestamps=false;
}