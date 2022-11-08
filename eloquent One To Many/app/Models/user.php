<?php

namespace App\Models;

use App\Models\user as ModelsUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    function profiles(){
        return $this->hasMany(user::class, 'id_user', 'id_user');
    }

}
