<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        

        $posts = Menu::all();
       
        return view('admin.menu.main',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.menu.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //CREATE
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'category' => 'required',
            
        ]);


        

        if ($file = $request->file('image')) {
            $request->validate([
                'image' =>'mimes:jpg,jpeg,png,bmp'
            ]);
            $image = $request->file('image');
            $imgExt = $image->getClientOriginalExtension();
            $fullname = time().".".$imgExt;
            $result = $image->storeAs('images/menu',$fullname);
            }

            else{
                $fullname = 'image.png';
            }

            $posts = new Menu();
            $posts->name = $request->name;
            $posts->desc = $request->desc;
            $posts->price = $request->price;
            $posts-> category = $request->category;

            $posts->image = $fullname;
            $posts->save();



        if($posts->save()){
            //Redirect with Flash message
            return redirect('/admin/menu')->with('status', 'Menu added Successfully!');
        }
        else{
            return redirect('/admin/menu/create')->with('status', 'There was an error!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Read individual
        // $posts = Post::find(3)->get();
        $posts = Menu::findOrFail($id);
        return view('admin.menu.show',compact('posts'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Update View
        $posts = Menu::where('id',$id)->first();
        return view('admin.menu.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update
        $posts = Menu::find($id);

        $posts->name = $request->name;
        $posts->desc = $request->desc;
        $posts->price = $request->price;
        $posts->category = $request->category;
        
      

        if($posts->save()){
            return redirect('/admin/menu')->with('status', 'Menu edited Successfully!');
        }
        else{
            return redirect('admin/menu/$id/edit')->with('status', 'There was an error');

        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete
        $posts = Menu::find($id);
        if($posts->delete()){
            return redirect('/admin/menu')->with('status', 'Category was deleted successfully');
        }
        else return redirect('/admin/menu')->with('status', 'There was an error');

        
    }
   
}
