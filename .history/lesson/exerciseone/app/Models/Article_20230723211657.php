<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "articles";

    protected $primaryKey = 'id';

    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';

    
}






