<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'regnumber',
        'firstname',
        'lastname',
        'slug',
        'remark',
        'status_id',
        'user_id'
    ];

<<<<<<< HEAD
    public function user()
    {
        return $this->belongsTo('App\Models\User');  //send all columns
    }

    public function status()
    {
        // return $this->belongsTo(Status::class);  //send all columns  
        // return $this -> belongsTo(Status::class)->select('name'); // send single column 
        // return $this->belongsTo(Status::class)->select(['id', 'name']); // send multi columns
        return Status::where('user_id', $this->user_id)->first();

    }

    public function enrolls()
    {
        return Enroll::where('user_id', $this->user_id)->get();

    }


=======
    public function user(){
        return $this->belongsTo('App\Models\User');  //send all columns
    }

    public function status(){
        // return $this->belongsTo(Status::class);  //send all columns  
        // return $this -> belongsTo(Status::class)->select('name'); // send single column 
        return $this->belongsTo(Status::class)->select(['id','name']); // send multi columns
    }

>>>>>>> origin/main
}
