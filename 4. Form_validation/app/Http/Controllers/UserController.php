<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getData(Request $req){
        $req->validate([
            'username'=>'required',
            'password'=>'required | min:5'
        ]);
        return $req->input();
    }
}
