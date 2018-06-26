<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User_94231;
use Illuminate\Support\Carbon;
use App\Sessions_94231;

class SessionController extends Controller
{
	function save(Request $req)
	{
		$userId = $req->input('userId');
		$date =$req->input('date');
		$email= $req->input('email');
		$excercise_type=$req->input('excercise_type');
		$location = $req->input('location');
		$number_of_sets = $req->input('number_of_sets');
		$weight_after =$req->input('weight_after');
		$timeframe = $req->input('timeframe');
		$data = array('userId'=>$userId,'date'=>$date,'email'=>$email,'excercise_type'=>$excercise_type,'location'=>$location,'number_of_sets'=>$number_of_sets,'weight_after'=>$weight_after,'timeframe'=>$timeframe);

		DB::table('sessions_94231s')->insert($data);
 
		return response()->json('success');
	}

	function showSession(Request $req)
	{
		$email =$req->input('email');

		$data = Sessions_94231::where('email',$email)->get();

		return response()->json($data);

	}

	function sessionProgress(Request $req)
	{
    $email = $req->input('email');

    
    $today = Carbon::now()->toDateString();
   
    $from = DB::table('sessions_94231s')->select()->where('email',$email)->get();

    //return response()->json($today);
    return response()->json($from);
    return response()->json($today);
	}

    //
}
