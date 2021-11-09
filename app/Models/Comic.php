<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    public $timestamps = false;
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'thumb', 'writer'];
}
