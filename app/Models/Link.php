<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;




    public function linkdetiles(){
        return $this->hasMany('App\Models\linkdetiles','Link_id','id');
        //الموديل الي رايح عليه والمفتاح الاجنمبي الموجود بالموديل الي رايح عليه والبرايمري كي الي ماسكو حاليا من هاد المودل
          // this is reletion from basic linke(big)to detiles linke(smoll linke)

        }
}
