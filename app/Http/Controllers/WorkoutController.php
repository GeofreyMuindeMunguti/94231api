<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Gym_location_94231;
use App\User_profiles_94231;


class WorkoutController extends Controller
{
	function save(Request $req)
	{
		$email = $req->input('email');
		$age = $req->input('age');
		$weight =$req->input('weight');
		$location =$req->input('location');
		$weight_target = $req->input('weight_target');
		$timeframe=$req->input('timeframe');
		$data = array('email'=>$email,'age'=> $age,'weight'=>$weight,'location'=>$location,'weight_target'=>$weight_target,'timeframe'=>$timeframe);

		DB::table('user_profiles_94231s')->insert($data);
 
		return response()->json('success');

	}

   public function showWorkout(Request $req)
   {
     $email =$req->input('email');


   	$data = user_profiles_94231::where('email',$email)->get();

   	return response()->json($data); 
   }

   public function showGyminlocation(Request $req)
   {

   	$location = $req->input('location');

   	$data = Gym_location_94231::where('location',$location)->get();

   	return response()->json($data);


   }
    //
}
