<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path','imageable_id','imagebale_type'];
    function imageable(){
        return $this->morphTo();
    }
}
