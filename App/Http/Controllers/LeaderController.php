<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leader;

class LeaderController extends Controller
{
    public function signup2(){
        return view('signup2');
}

public function store2(Request $request){
    leader::create([
        'name' =>$request-> name,
        'email' => $request-> email,
        'whatsapp' => $request-> whatsapp,
        'birth_place' =>$request-> birth_place,
        'birth_month' => $request-> birth_month,
        'birth_date' => $request-> birth_date,
        'birth_year' => $request-> birth_year,
        'line_ID' => $request-> line_ID,
        'github_ID' => $request-> github_ID
    ]);

    return redirect(route('upload'));
}
}
