<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // return "I am index page";
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // return $request->all();

        // labelname => $request['name from form ']

        // Country::create([
        //     'name'=>$request['name'],
        //     'capital'=>$request['capital'],
        //     'content'=>$request['content'],
        //     'currency'=>$request['currency'],
        //     'userid'=>$request['userid'],

        // ]);


        $product = new Product;
        $product->name = $request['name'];
        $product->capital = $request['capital'];
        $product->currency = $request['currency'];
        $product->content = $request['content'];
        $product->userid = $request['userid'];
        $product->save();





        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $countries = Product::findOrFail($id);
        return view('products.show', ['country' => $countries]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $country = Product::findOrFail($id);
        return view('products.edit')->with("country", $country);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        Product::findOrFail($id)->update([
            'name' => $request['name'],
            'capital' => $request['capital'],
            'content' => $request['content'],
            'currency' => $request['currency'],
            'userid' => $request['userid'],
        ]);

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $country = Product::findOrFail($id);
        $country->delete();
        return redirect(route('products.index'));
        // return redirect()->route('countries.index')->back();

        // return redirect()->back();
    }
}
