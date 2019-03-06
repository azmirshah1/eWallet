<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fundaAPI;

class fundaAPIController extends Controller
{
    public function demoshowapi()
    {
    	$demodata =[
    		"id" => "1",
    		"name" => "Funda of WEB IT",
    		"mobile" => "78732738723",
    		"email" => "azmir@gmail.com",
    	];

    	return response()->json($demodata);
    }


        public function datadisplayapi()
    {
    	$funda = fundaAPI::all();
    	$data = [];
    	foreach ($funda as $key => $value) {
    		$data[] = ['id' => $value->id, 'name' =>$value->name, 'email' =>$value->email];
    	}
    	return response()->json($data);
    }

    	public function showdataapi($id)
    	{
    	$funda = fundaAPI::where('id',$id)->select('id', 'name', 'email')->first();
		return response()->json($funda);
    	}
}
