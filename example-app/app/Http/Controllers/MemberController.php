<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Member;


class MemberController extends Controller
{
    function memberAdd(Request $req)
    {

        $member=new Member;
        $member->members_name=$req->name;
        $member->email=$req->email;
        $member->Address=$req->add;
       $member->save();
        return redirect('mem');

    }
    function fetdata()
    {
        
        return Check::all();
    }

   function lis(){
        $users=Member::all();
        return view('list',['users'=>$users]);
        }

       function del($id)
       { 
           
          
           $users=Member::find($id);
           $users->delete();

          
       }

       function edit($id)
    {

        $users=Member::find($id);
        
        return view('update',['user'=>$users]);

    }
    function edit_view(Request $req)
    {

        $m=Member::find($req->id);
        $m->members_name=$req->name;
        $m->email=$req->email;
        $m->Address=$req->add;
        $m->save();
       return redirect('list'); 

    }
     


}
