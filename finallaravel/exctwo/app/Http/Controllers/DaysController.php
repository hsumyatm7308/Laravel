<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Day;
use App\Models\Status;

class DaysController extends Controller
{
    public function index(){
        $days = Day::all();
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('days.index',compact('days','statuses'));
    }

    public function store(Request $request){
        $this -> validate($request,[
            'name' => 'required|max:50|unique:days,name',
            'status_id' => 'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $day = new Day();
        $day -> name = $request['name'];
        $day -> slug = Str::slug($request['name']);
        $day -> status_id = $request['status_id'];
        $day -> user_id = $user_id;
        $day -> save();
        return redirect(route('days.index'));
    }

    public function update(Request $request, string $id){
        $this -> validate($request,[
            'name' => 'required|max:50|unique:days,name,'.$id,
            'status_id' => 'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $day = Day::findOrFail($id);
        $day -> name = $request['name'];
        $day -> slug = Str::slug($request['name']);
        $day -> status_id = $request['status_id'];
        $day -> user_id = $user_id;
        $day -> save();
        return redirect(route('days.index'));
    }

    public function destroy(string $id){
        $day = Day::findOrFail($id);
        $day -> delete();
        return redirect()->back();
    }

}
