<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthTip extends Model
{
    protected $table = 'health_tips';
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
