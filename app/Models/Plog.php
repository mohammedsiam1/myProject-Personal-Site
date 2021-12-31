<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plog extends Model
{
    protected $table ='plogs';
    protected $fillable =['id','name','descraption','who','Phote','created_at','updated_at'];
    protected $hidden=[];
}
