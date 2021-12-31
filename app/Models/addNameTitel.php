<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addNameTitel extends Model
{
    protected $table='addNameTitels';
    protected $fillable =['id','name_titel','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
}
