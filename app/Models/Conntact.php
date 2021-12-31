<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conntact extends Model
{
    protected $table='conntacts';
    protected $fillable =['id','Email','Phone','Adress','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
}
