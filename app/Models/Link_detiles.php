<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link_detiles extends Model
{
    use HasFactory;


    public function links(){
        return $this->belongsTo('App\Models\link','Link_id','id');
    }
}
