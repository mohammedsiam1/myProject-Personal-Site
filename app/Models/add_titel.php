<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_titel extends Model
{
    protected $table='add_titels';
    protected $fillable =['id','titel','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
}
