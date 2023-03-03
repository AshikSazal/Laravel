<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req){
        $data = $req->input('username');
        $req->session()->put('user',$data);
        return redirect('profile');
    }
}
