<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    // use HasFactory;
    protected $fillable =[];

    public function user(){
        return $this->belongsTo(friends::class,'id_user', 'id_user');
    }
}
