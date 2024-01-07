<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'title',
        'slug',
        'content',
        'fee',
        'startdate',
        'enddate',
        'starttime',
        'endtime',
        'type_id',
        'tag_id',
        'attshow',
        'status_id',
        'user_id'
    ];

    public function attstatus(){
                                    //related , foreignkey
        // return $this -> belongsTo(Status::class,'attshow');

                        //related , foreignkey , ownerkey=status> id
        return $this -> belongsTo(Status::class,'attshow','id');
    }

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function status(){
        return $this -> belongsTo(Status::class);
    }

    public function tag(){
        return $this -> belongsTo(Tag::class);
    }

    public function type(){
                                        //related = model
        // return $this -> belongsTo(Type::class);
                                        //related foreignkey
        // return $this -> belongsTo(Type::class,'type_id');
                                    //ownerkey = type > id
                                    //related,foreignkey,ownerkey
        return $this -> belongsTo(Type::class,'type_id','id');
    }


}
