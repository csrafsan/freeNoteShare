<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
   public function index($user)
    {
        $user = User::findOrFail($user);
        return view('home',[
            'user'=> $user,
        ]);
    }

    public function changeMemberStatus(Request $request){

        $members = Member :: find($request->member_id);
        $members->status = $request->status;
        $members->save();
    }
}
