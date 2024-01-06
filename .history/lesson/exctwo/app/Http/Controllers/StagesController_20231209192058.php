<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagesController extends Controller
{
    
    public function index()
    {
        $stages = Category::all();
        $stages = Status::whereIn('id',[3,4])->get();
        return view('categories.index',compact('categories','statuses'));
    }

   
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required|max:50|unique:categories',
            
            'status_id' => 'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $category = new Category();

        $category -> name = $request['name'];   
        $category -> slug = Str::slug($request['name']);    
        $category -> status_id = $request['status_id'];
        $category -> user_id = $user_id;

        
        $category -> save();
        return redirect(route('categories.index'));
    }
   
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'name' => ['required','max:50','unique:categories,name,'.$id],
            'status_id' => ['required','in:3,4']
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $category = Category::findOrFail($id);

        $category -> name = $request['name'];   
        $category -> slug = Str::slug($request['name']);    
        $category -> status_id = $request['status_id'];
        $category -> user_id = $user_id;
  
        $category -> save();
        return redirect(route('categories.index'));
    }


 
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category -> delete();
        return redirect()->back();
    }
}
