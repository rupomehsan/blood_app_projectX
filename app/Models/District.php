<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function userprofiles(){
        return $this->hasMany(UserProfile::class);
    }

    public function division(){
        return $this->belongsTo(Division::class);
    }

    public function stations(){
        return $this->hasMany(Station::class);
    }

}
