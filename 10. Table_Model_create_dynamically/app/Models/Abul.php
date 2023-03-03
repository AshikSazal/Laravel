<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abul extends Model
{
    protected $table = 'abul';
    protected $fillable = ['name', 'address'];
    public $timestamps=false;
}