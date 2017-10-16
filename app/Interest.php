<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public function scopeUnchecked($query) 
    //Interest::unchecked()
    {
    	return $query->where('checked', 0);
    }
}
