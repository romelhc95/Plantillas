<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    
    protected $fillable = ['description', 'province_id'];
    
    
    public static function districts($id){
        return District::where('province_id','=',$id)
            ->get();
    }

}
