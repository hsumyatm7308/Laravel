<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function customearticle()
    {
        // Method 1 
        // return $this->hasOne('APP\Models\Article');

        // Method 2 
        return $this->hasOne(Article::class);
    }

    public function customearticles()
    {
        return $this->hasMany(Article::class);
    }

    public function rolemanytomany()
    {
        // return $this->belongsToMany(Role::class); //obey by naming conversion

        // for Custom table name 
        // belongsToMany(primarytable,secondarytable,secondarytable_fk,primarytable_fk)
        // belongsToMany(related,table,foreignPivotkey,relativePivotKey)


        return $this->belongsToMany(Role::class, 'userroles', 'user_id', 'role_id');

    }


    //BelogntoMany with withPivot()
    public function rolecreatedata()
    {

        // return $this->belongsToMany(Role::class)->withPivot('created_at'); //Error cuse of   custom table name

        return $this->belongsToMany(Role::class, 'userroles', 'user_id', 'role_id')->withPivot('created_at');


    }


    public function photos()
    {
        //morphMany(relatedtable,name);
        return $this->morphMany(Photo::class, 'imageable');
    }


    public function phone(){
        return $this->hasOne(Phone::class);
    }


    public function countries(){
        return $this->hasMany(Country::class);
    }

}