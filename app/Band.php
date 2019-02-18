<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = [ 'name', 'description' ];

    protected $dates = [ 'updated_at' ];
}
