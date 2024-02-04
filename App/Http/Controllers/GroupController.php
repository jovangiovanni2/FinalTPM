<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\group;


class GroupController extends Controller
{
   
    public function signup(){
        return view('signup');
    }

    public function store(Request $request){
        group::create([
            'Group_name'=>$request-> Group_name,
            'password'=> $request-> password,
            'part'=> $request-> part
        ]);

        return redirect(route('signup2'));
    }


}
