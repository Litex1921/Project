<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motormodels;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $models=Motormodels::all();
        return view('Models.index')->with('models', $models);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Models.create')->with('models', new Motormodels());
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
            'name' => 'required'
        ]);
            $models = new Motormodels;
        $models->name = $valid['name'];
        $models->save();
        return redirect('/model');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $model = Motormodels::find($id);
        return view('Models.show')->with('model', $model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Motormodels::find($id);
        return view('Models.edit')->with('model', $model);
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
             ]);

        $model = Motormodels::find($id);
        $model->name = $valid['name'];
        $model->save();

        return redirect('/model');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $model = Motormodels::find($id)->delete();

        return redirect('/model');   
    }
}
