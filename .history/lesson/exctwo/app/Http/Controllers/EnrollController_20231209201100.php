<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
  
    
    public function index()
    {
        $enroll = Role::all();
        return view('enroll.index',compact('enroll'));
    }

  
    public function create()
    {
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('enroll.create',compact('statuses'));
    }

   
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required|max:50|unique:enroll,name',
            'image' => 'image|mimes:jpg,jpeg,png|max:10024',
            'status_id' => 'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $role = new Role();

        $role -> name = $request['name'];   
        $role -> slug = Str::slug($request['name']);    
        $role -> status_id = $request['status_id'];
        $role -> user_id = $user_id;

         //Single Image Upload 
         if(file_exists($request['image'])){

            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$role['id'].$fname;
            $file -> move(public_path('assets/img/enroll/'),$imagenewname);

            $filepath = "assets/img/enroll/".$imagenewname;
            $role->image = $filepath;
        }
        
        $role -> save();
        return redirect(route('enroll.index'));
    }

    
    public function show(string $id)
    {
        $role = Role::findOrFail($id);
        return view('enroll.show',['role'=>$role]);
    }
  
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('enroll.edit')->with('role',$role)->with('statuses',$statuses);
    }

   
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'name' => ['required','max:50','unique:enroll,name,'.$id],
            'image' => ['image','mimes:jpg,jpeg,png','max:10024'],
            'status_id' => ['required','in:3,4']
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $role = Role::findOrFail($id);

        $role -> name = $request['name'];   
        $role -> slug = Str::slug($request['name']);    
        $role -> status_id = $request['status_id'];
        $role -> user_id = $user_id;

        // Remove old Image 
        if($request->hasFile('image')){
            $path = $role -> image;
            if(File::exists($path)){
                File::delete($path);
            }
        }


         //Single Image Update 
         if($request -> hasFile('image')){

            $file = $request -> file('image');
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$role['id'].$fname;
            $file -> move(public_path('assets/img/enroll/'),$imagenewname);

            $filepath = "assets/img/enroll/".$imagenewname;
            $role->image = $filepath;
        }
        
        $role -> save();
        return redirect(route('enroll.index'));
    }


 
    public function destroy(string $id)
    {

        

        $role = Role::findOrFail($id);
        //Remove Old Imge 
        $path = $role -> image;
            if(File::exists($path)){
                File::delete($path);
            }

        $role -> delete();
        return redirect()->back();
    }
}
