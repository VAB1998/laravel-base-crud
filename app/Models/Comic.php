<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description', 'thumb', 'writer'];
}
