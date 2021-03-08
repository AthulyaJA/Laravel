<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use  App\Models\Check;
use App\Models\Register;

class UserController extends Controller
{
function index($name)
{
    echo $name;
    echo "<br>";
    echo  "hello from controller ";
}
function about()
{
     $data=['anil','athulya'];
    return view('about',['user'=>$data]);
}

function login(Request $req)
{

    $req->validate(
      ['name'=>'required','pass'=>'required']);

    
return $req->input();


}
function fetdata()
{
    
    return Check::all();
}

function login_pa(Request $req)
{

$data= $req->input();
$req->session()->put('user',$data['name']);
$req->session()->put('users',$data['pass']);
return redirect('page');



}

function login_form_vali(Request $req)
{

    $req->validate([
       'name'=>'required',
      'email'=>'required|email|unique:registers',
      'pass'=>'required|min:5|max:12',
      ]);

      
      $m=new Register;
      $m->username=$req->name;
     $m->email=$req->email;
     $m->password=Hash::make($req->pass);
     $query=$m->save();
     if($query)
        {
            return back()->with('success','successfully registerd');
        }
        else{
            return back()->with('fail','something went wrong');
        }

}

function dashboard(Request $req)
{
    $data=$req->input();
$req->session()->put('user',$data['email']);
$req->session()->put('users',$data['password']);
return redirect('logform');
    
}
function check(Request $req)
{
    $req->validate([
        'email'=>'required',
        'pass'=>'required',
    ]);
    $userinfo=Register::where('email','=',$req->email)->first();
    
    if(!$userinfo)
    {
        return back()->with('fail','we can not access the user');
    }
    else {
        if($req->pass=$req->pass)
        {
            $req->Session()->put('loguser',$userinfo->id);
            return redirect('dash');
        }
        else {
            return back()->with('fail','invalid user');
        }
             }
    }

    
}

