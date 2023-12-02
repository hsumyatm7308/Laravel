<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Status;
use Illuminate\Support\Facades\Auth;


class AttendancesController extends Controller
{
    
    public function index()
    {
        $attendances = Attendance::all();
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('attendances.index',compact('attendances','statuses'));
    }

   
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required|max:50|unique:attendances',
            
            'status_id' => 'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $attendance = new Attendance();

        $attendance -> name = $request['name'];   
        $attendance -> slug = Str::slug($request['name']);    
        $attendance -> status_id = $request['status_id'];
        $attendance -> user_id = $user_id;

        
        $attendance -> save();
        return redirect(route('attendances.index'));
    }

   
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'name' => ['required','max:50','unique:attendances,name,'.$id],
            'status_id' => ['required','in:3,4']
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $attendance = Attendance::findOrFail($id);

        $attendance -> name = $request['name'];   
        $attendance -> slug = Str::slug($request['name']);    
        $attendance -> status_id = $request['status_id'];
        $attendance -> user_id = $user_id;
  
        $attendance -> save();
        return redirect(route('attendances.index'));
    }


 
    public function destroy(string $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance -> delete();
        return redirect()->back();
    }
}
