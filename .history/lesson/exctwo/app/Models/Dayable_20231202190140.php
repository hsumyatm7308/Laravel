<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dayable extends Model
{
    use HasFactory;
        
    protected $table = 'dayables';
    protected $timestamps = false;
    protected $fillable = [
        'day_id',
        'dayable_id',
        'dayable_type'
    ];

   
}
