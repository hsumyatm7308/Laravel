<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = "photos";
    protected $primaryKey = 'id';

    // public function imageable()
    // {
    //     return $this->morphTo();
    // }


    public function photoable()
    {
        return $this->morphTo('imageable');
    }
}