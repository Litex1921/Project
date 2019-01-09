<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;

class MotorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motors=Motor::all();
        return view('Motors.index')->with('motors', $motors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Motors.create')->with('motor', new Motor());
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
            'year_of_production' => 'required|date',
            'km' => 'required|numeric',
            'price_for_day'=>'required|numeric',
            'rent'=>'required'
        ]);

        $motor = new Motor;
        $motor->name = $valid['name'];
        $motor->year_of_production = $valid['year_of_production'];
        $motor->km = $valid['km'];
        $motor->price_for_day = $valid['price_for_day'];
        $motor->rent = $valid['rent'];
        $motor->save();
        return redirect('/motor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::find($id);
        return view('Motors.show')->with('motor', $motor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::find($id);
        return view('Motors.edit')->with('motor', $motor);
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
            'year_of_production' => 'required|date',
            'km' => 'required|numeric',
            'price_for_day'=>'required|numeric',
            'rent'=>'required'
        ]);

        $motor = Motor::find($id);
        $motor->name = $valid['name'];
        $motor->year_of_production = $valid['year_of_production'];
        $motor->km = $valid['km'];
         $motor->price_for_day = $valid['price_for_day'];
        $motor->rent = $valid['rent'];
        $motor->save();

        return redirect('/motor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motor = Motor::find($id)->delete();

        return redirect('/motor');    
    }
}
