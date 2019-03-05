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
    	return response()->json([
        'data' => [
            'name' => $funda->name,
            'email' => $funda->email,

        ]
    ]
   );
    }

    	public function showdataapi($id)
    	{
    	$funda = fundaAPI::find($id);
    	return response()->json($funda);
    	}
}
