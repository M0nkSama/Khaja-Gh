<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Menu;
use Auth;

class FeController extends Controller
{



    public function home()
    {
        
       $posts = Menu::all();


       
       
        return view('FE.home',compact('posts'));
    }

     //menu view
     public function menuv()
     {
        $posts = Menu::all();
        $user = Auth::user();
        if($user==NULL)
        {
            return redirect('/login');
        }
          else{
            return view('FE.menu',compact('posts'));
          }
        
              
        
         
     }
 
     public function userorder()
     {
         
        $user = Auth::id();

        
         $posts = Order::where('uid',$user)->get();
        $total = 0;
        foreach ($posts as $price ) {
            $total = $total + ($price->pp * $price->quantity);
        }
       
        
         return view('FE.order',compact('posts','total'));
     }

     public function porder($id)
     {
         
 
         $posts = Menu::find($id);
        
        
         return view('FE.product',compact('posts'));
     }

     public function corder($id)
     {
         
 
         $posts = Menu::find($id);
        
        
         return view('FE.confirmorder',compact('posts'));
     }

     
     public function momo()
     {
         
 
         $posts = Menu::where('category','=','Momo')->get();
        
        
        
         return view('FE.Cm.momo',compact('posts'));
     }

     
     public function chowmein()
     {
         
 
         $posts = Menu::where('category','Chowmein')->get();
         
        
         return view('FE.Cm.chowmein',compact('posts'));
     }

     
     public function pizza()
     {
         
 
         $posts = Menu::where('category','pizza')->get();
         
         return view('FE.Cm.pizza',compact('posts'));
     }

     
     public function drinks()
     {
         
 
         $posts = Menu::where('category','Drinks')->get();
         
        
         return view('FE.Cm.drinks',compact('posts'));
     }

     public function popular()
     {

        $posts = Order::where('pid','>',2)->count();
        dd($posts); 

     }
}
