<?php

namespace App\Http\Controllers;
use App\Models\contact_us;
use App\Models\group;
use App\Models\leader;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function home(){
        return view('home');
    }

    public function login(){
        return view('login');
    }

    public function profile(){
        $leader = leader::all();
        return view('profile',compact('leader'));
    }

    public function notification(){
        $groups = group::all();
        return view('notification',compact('groups'));
    }


    public function adminpanel(){
        $groups = group::all();
        return view('adminpanel', compact('groups'));
    }

    // public function detail2(){
    //     $groups1 = group::all();
    //     return view('detail', compact('groups1'));
    // }

    public function detail(){
        $detail = leader::all();
        return view('detail', compact('detail'));
    }

    public function edit(Request $request, $id){
        $edits = leader::findOrfail($id);
        $edits::update([
            'name' =>$request-> name,
            'email' => $request-> email,
            'birth_place' =>$request-> birth_place,
            'birth_month' => $request-> birth_month,
            'birth_date' => $request-> birth_date,
            'birth_year' => $request-> birth_year,
        ]);
        return view('edits', compact('edits'));
    }

    public function delete($id){
        group::destroy($id);
        return redirect(route('adminpanel'));
    }

    public function contactus(Request $request){
        contact_us::create([
            'name'=> $request->name,
            'emailaddress' => $request-> emailaddress,
            'subject'=> $request->subject,
            'message'=> $request->message
        ]);
        return view('home');
    }

}
