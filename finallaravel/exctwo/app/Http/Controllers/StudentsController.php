<?php

namespace App\Http\Controllers;

use App\Models\Student;
<<<<<<< HEAD
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

>>>>>>> origin/main
use Illuminate\Http\Request;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
<<<<<<< HEAD
        return view('students.index', compact('students'));
=======
        return view('students.index',compact('students'));
>>>>>>> origin/main
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $this->validate($request, [
=======
        $this -> validate($request,[
>>>>>>> origin/main
            'regnumber' => 'required|unique:students,regnumber',
            'firstname' => 'required',
            'lastname' => 'required',
            'remark' => 'max:1000'
        ]);

        $user = Auth::user();
<<<<<<< HEAD
        $user_id = $user->id;
        $student = new Student();
        $student->regnumber = $request['regnumber'];
        $student->firstname = $request['firstname'];
        $student->lastname = $request['lastname'];
        $student->slug = Str::slug($request['firstname']);
        $student->remark = $request['remark'];
        $student->user_id = $user_id;

        $student->save();
        return redirect(route('students.index'));

=======
        $user_id = $user -> id;
        $student = new Student();
        $student -> regnumber = $request['regnumber'];
        $student -> firstname = $request['firstname'];
        $student -> lastname = $request['lastname'];
        $student -> slug = Str::slug($request['firstname']);
        $student -> remark = $request['remark'];
        $student -> user_id = $user_id;
        
        $student -> save();
        return redirect(route('students.index'));
        
>>>>>>> origin/main
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
<<<<<<< HEAD
        $status = $student->status();
        $enrolls = $student->enrolls();
        return view('students.show', ['student' => $student, "enrolls" => $enrolls, 'status' => $status]);
=======
        return view('students.show',['student'=>$student]);
>>>>>>> origin/main
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
<<<<<<< HEAD
        return view('students.edit')->with('student', $student);
=======
        return view('students.edit')->with('student',$student);
>>>>>>> origin/main
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< HEAD
        $this->validate($request, [
            'regnumber' => 'required|unique:students,regnumber,' . $id,
=======
        $this -> validate($request,[
            'regnumber' => 'required|unique:students,regnumber,'.$id,
>>>>>>> origin/main
            'firstname' => 'required',
            'lastname' => 'required',
            'remark' => 'max:1000'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $student = Student::findOrFail($id);
<<<<<<< HEAD
        $student->regnumber = $request['regnumber'];
        $student->firstname = $request['firstname'];
        $student->lastname = $request['lastname'];
        $student->slug = Str::slug($request['firstname']);
        $student->remark = $request['remark'];
        $student->user_id = $user_id;

        $student->save();
        return redirect(route('students.index'));

=======
        $student -> regnumber = $request['regnumber'];
        $student -> firstname = $request['firstname'];
        $student -> lastname = $request['lastname'];
        $student -> slug = Str::slug($request['firstname']);
        $student -> remark = $request['remark'];
        $student -> user_id = $user_id;
        
        $student -> save();
        return redirect(route('students.index'));
        
>>>>>>> origin/main
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
<<<<<<< HEAD
        $student->delete();
=======
        $student -> delete();
>>>>>>> origin/main
        return redirect()->back();
    }
}
