<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function userprofiles(){
        return $this->hasMany(UserProfile::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

}
