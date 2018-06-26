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
		$location =$req->input('location');
		$activities=$req->input('activities');
		$data = array('name'=>$name,'location'=>$location,'activities'=>$activities);

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

    
   public function filtergym(Request $req)
   {
      
     $activities->$req->input('activities');

    $data = Gym_location_94231::where('activities',$activities)->get();

    return response()->json($data);
   }
    
   
    //
}
