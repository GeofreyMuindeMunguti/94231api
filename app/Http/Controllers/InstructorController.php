<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Instructor_94231;

class InstructorController extends Controller
{


	function save(Request $req)
	{
		$first_name = $req->input('first_name');
		$last_name = $req->input('last_name');
		$gym =$req->input('gym');
		$gender =$req->input('gender');
		$email =$req->input('email');
		$contacts =$req->input('contacts');
		$photo =$req->input('photo');
		
		$data = array('first_name'=>$first_name,'last_name'=>$last_name,'gym'=>$gym,'gender'=>$gender,'email'=>$email,'contacts'=>$contacts, 'photo'=>$photo);

		DB::table('instructor_94231s')->insert($data);
 
		return response()->json('success');
	}

	public function showInstructor()
	{
		$data = Instructor_94231::all();

		return response()->json($data);
	}

	public function showgyminstructor(Request $req)
	{
      $gym = $req->input('gym');
		$data = Instructor_94231::where('gym',$gym)->get();

		return response()->json($data);
	}
	 
    //
}
