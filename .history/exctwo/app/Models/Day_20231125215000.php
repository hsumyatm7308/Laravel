<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    
    protected $table = 'days';
    protected $primary = 'id';
    protected $fillable = [
        'name',
        'slug',
        'status_id',
        'user_id',
    ];


    public function status(){
        return $this -> belongsTo(Status::class);
    }

    public function student(){
        return $this -> belongsTo(Student::class);
    }
}
