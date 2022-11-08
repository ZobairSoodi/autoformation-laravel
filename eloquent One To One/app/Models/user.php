<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    // use HasFactory;
    public function profile(){
        return $this->hasOne(phone::class, 'id_profile', 'id_user');
    }
}
