<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    
    protected $fillable = ['description', 'department_id'];
    
    public static function provinces($id){
        return Province::where('department_id','=',$id)
            ->get();
    }
}
