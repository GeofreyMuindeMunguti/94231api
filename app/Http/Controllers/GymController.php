<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Gym_location_94231;


class GymController extends Controller
{
	function save(Request $req)
	{
		$name = $req->input('name');
		$location_Lat=$req->input('location_lat');
    $location_Long=$req->input('location_long');
		$activities=$req->input('activities');
		$data = array('name'=>$name,'location_lat'=>$location_lat,'location_long'=>$location_long,'activities'=>$activities);

		DB::table('gym_location_94231s')->insert($data);
 
		return response()->json('success');
	}

   public function gymshow()
   {

   	$data = Gym_location_94231::all();

   	return response()->json($data); 
   }

   public function gymnear(Request $req)
   {
    $location->$req->input('location');

    $data = Gym_location_94231::where('location',$location)->get();

    return response()->json($data);
   }

    
    
   
    //
}
