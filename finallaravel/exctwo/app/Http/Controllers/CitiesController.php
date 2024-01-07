<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\City;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $cities = City::where(function ($query) {
            if ($getname = request('filtername')) {
                $query->where('city', 'LIKE', '%' . $getname . '%');

            }
        })->get();
        return view('cities.index')->with('cities', $cities);
=======
        $cities = City::all();
        return view('cities.index')->with('cities',$cities);
>>>>>>> origin/main
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cities.create');
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
            'regnumber' => 'required|unique:cities,regnumber',
            'remark' => "max:1000"
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $city = new City();
<<<<<<< HEAD

        $city->city = $request['city'];
        $city->regnumber = $request['regnumber'];

        $city->slug = Str::slug($request['regnumber']);
        $city->remark = $request['remark'];
        $city->user_id = $user_id;

        $city->save();
=======
      
        $city -> city = $request['city'];
        $city -> regnumber = $request['regnumber'];
       
        $city -> slug = Str::slug($request['regnumber']);
        $city -> remark = $request['remark'];
        $city -> user_id = $user_id;
        
        $city -> save();
>>>>>>> origin/main
        return redirect(route('cities.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $city = City::findOrFail($id);
<<<<<<< HEAD
        return view("cities.show")->with('city', $city);
=======
        return view("cities.show")->with('city',$city);
>>>>>>> origin/main
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = City::findOrFail($id);
<<<<<<< HEAD
        return view('cities.edit')->with('city', $city);
=======
        return view('cities.edit')->with('city',$city);
>>>>>>> origin/main
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< HEAD
        $this->validate($request, [
            'regnumber' => 'required|unique:cities,regnumber,' . $id,
=======
        $this -> validate($request,[
            'regnumber' => 'required|unique:cities,regnumber,'.$id,
>>>>>>> origin/main
            'remark' => 'max:1000'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $city = City::findOrFail($id);
<<<<<<< HEAD

        $city->city = $request['city'];
        $city->regnumber = $request['regnumber'];

        $city->slug = Str::slug($request['regnumber']);
        $city->remark = $request['remark'];
        $city->user_id = $user_id;

        $city->save();
=======
      
        $city -> city = $request['city'];
        $city -> regnumber = $request['regnumber'];
       
        $city -> slug = Str::slug($request['regnumber']);
        $city -> remark = $request['remark'];
        $city -> user_id = $user_id;
        
        $city -> save();
>>>>>>> origin/main
        return redirect(route('cities.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::findOrFail($id);
<<<<<<< HEAD
        $city->delete();
=======
        $city -> delete();
>>>>>>> origin/main
        return redirect()->back();
    }
}
