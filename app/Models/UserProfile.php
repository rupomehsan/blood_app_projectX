<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;


class UserProfile extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function user(){
        return $this->belongsTo(User::class);
    }
      public function role(){
        return $this->belongsTo(Role::class);
    }
    public function bloodgp(){
        return $this->belongsTo(BloodGroup::class);
    }

    public function division(){
        return $this->belongsTo(Division::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function station(){
        return $this->belongsTo(Station::class);
    }
    
}
