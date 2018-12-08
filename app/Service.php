<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;


    protected $fillable = ['name', 'key', 'service_kind_id'];
    protected $dates = ['deleted_at'];
}
