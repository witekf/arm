<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;


    protected $fillable = ['name', 'key', 'service_kind_id'];
    protected $dates = ['deleted_at'];

    public function service_kind() //pole o takiej nazwie
    {
        return $this->belongsTo('App\ServiceKind', 'service_kind_id', 'id'); //zwroci obiekt z tabeli obslugiwanej przez model ServiceKind
    }

}
