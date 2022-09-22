<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        

        $posts = Order::all();
       
        return view('admin.order.main',compact('posts'));
    }

   
    public function storeorder(Request $request)
    {
        

        $request->validate([
            'uid' => 'required',
            'uname' => 'required',
            'pid' => 'required',
            'pname' => 'required',
            'pp' => 'required',
            'quantity'=>'required'
        ]);

        $posts = new Order();

        $posts->uid = $request->uid;
        $posts->uname = $request->uname;
        $posts->pid = $request->pid;
        $posts->pname = $request->pname;
        $posts->pp = $request->pp;
        $posts->quantity = $request->quantity;
        $posts ->pimage = $request->pimage;
        
        $posts->save();

      

            return redirect('/order')->with('status', 'Menu edited Successfully!');
        
       
        
        
    }

    public function destroy($id)
    {
        //Delete
        $posts = Order::find($id);
        if($posts->delete()){
            return redirect('/admin/order')->with('status', 'Category was deleted successfully');
        }
        else return redirect('/admin/order')->with('status', 'There was an error');

        
    }

    
    public function destroyorder($id)
    {
        //Delete
        $posts = Order::find($id);
        if($posts->delete()){
            return redirect('/order')->with('status', 'Category was deleted successfully');
        }
        else return redirect('/order')->with('status', 'There was an error');

        
    }

}


