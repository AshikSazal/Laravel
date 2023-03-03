<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Efg extends Model
{
    protected $table = 'efg';
    protected $fillable = ['name', 'address'];
    public $timestamps=false;
}