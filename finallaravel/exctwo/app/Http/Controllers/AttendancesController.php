<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use App\Models\Attendance;
use App\Models\Post;
<<<<<<< HEAD
use App\Models\Status;

class AttendancesController extends Controller
{

    public function index()
    {
        $attendances = Attendance::orderBy("updated_at", "desc")->get();

        $posts = DB::table('posts')->where('attshow', 3)->orderBy('title', 'asc')->get(); //beware::{{$post['id]}} array can't must be call by object in view file
        return view('attendances.index', compact('attendances', 'posts'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'classdate' => 'required|date',
            'post_id' => 'required',
            'attcode' => 'required'
=======

class AttendancesController extends Controller
{
  
    public function index()
    {
        $attendances = Attendance::all();
        // $posts = Post::where('attshow',3)->get();
        $posts = DB::table('posts')->where('attshow',3)->orderBy('title','asc')->get(); //beware::{{$post['id]}} array can't must be call by object in view file
        return view('attendances.index',compact('attendances','posts'));
    }

   
    public function store(Request $request)
    {
        $this -> validate($request,[
            'classdate' => 'required|date',
            'post_id' => 'required',
            'attcode'=>'required'
>>>>>>> origin/main
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $attendance = new Attendance();

<<<<<<< HEAD
        $attendance->classdate = $request['classdate'];
        $attendance->post_id = $request['post_id'];
        $attendance->attcode = $request['attcode'];
        $attendance->user_id = $user_id;


        $attendance->save();
        return redirect(route('attendances.index'));
    }


    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'post_id' => 'required',
            'attcode' => 'required'
=======
        $attendance -> classdate = $request['classdate'];   
        $attendance -> post_id = $request['post_id'];
        $attendance -> attcode = $request['attcode'];
        $attendance -> user_id = $user_id;

        
        $attendance -> save();
        return redirect(route('attendances.index'));
    }

   
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'post_id'=>'required',
            'attcode'=>'required'
>>>>>>> origin/main
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $attendance = Attendance::findOrFail($id);
<<<<<<< HEAD
        $attendance->post_id = $request['post_id'];
        $attendance->attcode = $request['attcode'];
        // $attendance->user_id = $user_id;


        $attendance->save();
=======
        $attendance -> post_id = $request['post_id'];
        $attendance -> attcode = $request['attcode'];
        $attendance -> user_id = $user_id;

        
        $attendance -> save();
>>>>>>> origin/main
        return redirect(route('attendances.index'));
    }

}
