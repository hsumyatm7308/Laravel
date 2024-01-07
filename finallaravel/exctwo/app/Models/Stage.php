<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $table = 'stages';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug',
        'status_id',
        'user_id'
    ];

<<<<<<< HEAD
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }


    public function enrolls()
    {
        return $this->hasMany(Enroll::class);
    }
=======
    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function status(){
        return $this -> belongsTo(Status::class);
    }

>>>>>>> origin/main
}
