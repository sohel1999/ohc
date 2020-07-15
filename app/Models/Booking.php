<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];


    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id','id');
    }

    public static function getStatus()
    {
        return [
            'pending'=>'bg-warning',
            'confirmd'=>'badge-info',
            'completed'=>'badge-success'
        ];
    }

}
