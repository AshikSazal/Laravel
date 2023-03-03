<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function addMember(Request $req){
        $member = new Member;
        $member->name=$req->username;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        return redirect('show');
    }

    function showMember(){
        $data = Member::all();
        return view('list',['members'=>$data]);
    }

    function deleteMember($id){
        $data = Member::find($id);
        $data->delete();
        echo $data;
        return redirect('show');
    }
}
