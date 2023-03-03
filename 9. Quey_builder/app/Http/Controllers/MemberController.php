<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    function show(){
        $data = DB::table('members')->where('id',1)->exists();
        if($data)
        {
            return "Found";
        }
        return "Not found";
    }
}
