<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded=[];

    public function catagory()
    {
        return $this->belongsTo(Catagory::class);
    }

    public function getRouteKeyName()
    {
        return 'title';
    }
}
