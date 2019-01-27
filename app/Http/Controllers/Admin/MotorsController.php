<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Motor;
use Auth;
use Illuminate\Support\Facades\Input;

class MotorsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rent= Input::get('rent', -1);
        if($rent==0)
            $motors=Motor::where('rent','No')->get();
        else if($rent==1)
            $motors=Motor::where('rent','Yes')->get();
        else $motors=Motor::all();
        return view('Motors.index')->with('motors', $motors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::user()->admin) return view('message')->with('message', 'You are not allowed to do that');
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
        if(!Auth::user()->admin) return view('message')->with('message', 'You are not allowed to do that');
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
        if(!Auth::user()->admin) return view('message')->with('message', 'You are not allowed to do that');
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
        if(!Auth::user()->admin) return view('message')->with('message', 'You are not allowed to do that');
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
        if(!Auth::user()->admin) return view('message')->with('message', 'You are not allowed to do that');
        $motor = Motor::find($id)->delete();

        return redirect('/motor');    
    }
}
