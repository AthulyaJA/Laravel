<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;

class ProductController extends Controller
{
    //

    function pro_add(Request $req)
    {

        $member=new Product;
        $member->product_name=$req->p_name;
        $member->price=$req->price;
        $member->qua=$req->qua;
       $member->save();
        return redirect('product');

    }
    
   function lis_pro(){
        $users=Product::all();
        return view('pro_list',['users'=>$users]);
        }

       function delete($id)
       { 
           
          
           $users=Product::find($id);
           $users->delete();
           return redirect('product');

          
       }

       function edit_pro($id)
    {

        $users=Product::find($id);
        
        return view('upd_pro',['user'=>$users]);

    }
    function edit_view_pro(Request $req)
    {

        $q=Product::find($req->id);
        $q->product_name=$req->p_name;
        $q->price=$req->price;
        $q->qua=$req->qua;
        $q->save();
        return redirect('product'); 

    }
     
}
