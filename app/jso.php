<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jso extends Model
{
    protected $table = 'jsos';
    protected $fillable = ['jsontest','name'];
    public $timestamps = false;
    protected $cast = [
        'jsontest' => 'array'
    ];
}
