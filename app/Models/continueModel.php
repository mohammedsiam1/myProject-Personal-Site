<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class continueModel extends Model
{

    protected $table ='continue_models';
    protected $fillable =['id','Name','Email','Subject','Message','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];





}
