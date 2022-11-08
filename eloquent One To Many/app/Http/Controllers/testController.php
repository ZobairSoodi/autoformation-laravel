<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function show(){
        $data = user::where('id_user', 1)->first();
        $data->profile;
        return view('show', compact('data'));
    }
}
