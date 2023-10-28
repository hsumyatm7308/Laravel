<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusCreateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Status;

class StatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::all();
        return view('statuses.index',compact('statuses'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StatusCreateRequest $request)
    {
        // $this->validate($request,[
        //     'name'=> 'required|unique:statuses,name'

        // ]);

        $user = Auth::user();
        $student = new Status();
        $student->name = $request['name'];
        $student->slug = Str::slug($request['firstname']);
        $student->remark = $request['remark'];
        $student->user_id = $user->id;

        $student->save();
        return redirect(route('students.index'));


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
