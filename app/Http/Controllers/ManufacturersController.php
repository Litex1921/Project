<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;

class ManufacturersController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    public function index()
    {
         $manufacturers=Manufacturer::all();
        return view('manufacturers.index')->with('manufacturers', $manufacturers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('manufacturers.create')->with('manufacturers', new Manufacturer());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required',
            'date_of_create' => 'required|date'
        ]);
        $manufacturers = new Manufacturer;
        $manufacturers->name = $valid['name'];
        $manufacturers->date_of_create = $valid['date_of_create'];
        $manufacturers->save();
        return redirect('/manufacturer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $manufacturer = Manufacturer::find($id);
        return view('manufacturers.show')->with('manufacturer', $manufacturer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufacturer = Manufacturer::find($id);
        return view('manufacturers.edit')->with('manufacturer', $manufacturer);
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
        $valid = $request->validate([
            'name' => 'required',
            'date_of_create' => 'required|date'
        ]);

        $manufacturer = Manufacturer::find($id);
        $manufacturer->name = $valid['name'];
        $manufacturer->save();

        return redirect('/manufacturer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $model = Manufacturer::find($id)->delete();

        return redirect('/manufacturer');   
    }
}
