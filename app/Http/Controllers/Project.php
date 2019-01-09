<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project extends Controller
{
    public function render()
    {
    	return view("cookies");

    }
    public function myLuck()
    {
    	$cookiesList = fortune::all();

    	$cookiesList=[
    		"New Car",
    		"New House",
    		"New Girlfriend",
    		"More money"

    	];
    	$index=array_rand($cookiesList);
    	return view ("cookies",["message"=>$cookiesList[$index]]);

    }
}
