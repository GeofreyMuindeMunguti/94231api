<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Auth;
use App\User_94231;
use app\User;
//use Illuminate\Support\Facades\Crypt;
//use Crypt;

class UserController extends Controller
{

	function save(Request $req)
	{
		// return User_94231::create([
  //           'first_name' => $data['first_name'],
  //           'last_name' => $data['last_name'],
  //           'email' => $data['email'],
  //           'password' => Hash::make($data['password']),
  //       ]);

		$first_name = $req->input('first_name');
		$last_name = $req->input('last_name');
		$email = $req->input('email');
        $password=$req->input('password');
		//$password_string = mysqli_real_escape_string($_POST["password"]);
              // The value of $password_hash
              // should similar to the following:
                
        //$password_hash = Crypt::encryptString($password);
		//$password=$req->input('password');
  
        $password_hash= Hash::make('password');
		$data = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password_hash);

		DB::table('user_94231s')->insert($data);
 
		//return response()->json('sucess');
	}


	public function showgymusers()
	{
		$data = User_94231::all();

		return response()->json($data);

	}


	public function loginuser(Request $req)
	{
	  $email=$req->input('email');
      $password=$req->input('password');


       //return response()->json($email);
		//$user = User_94231::where('email',$email)->where('password',$password)->get();

        if(Auth::attempt(['email'=>$email, 'password'=>$password]))
        {
          return response()->json('success');
          //echo "success"
        }
        else
        {
        	  //return response()->json($email);
        	//return response()->json($user);
          //return response()->json('error ');
        }
    }

		 // $data = json_decode($user, true);
   //          if (!empty($data))
   //          {
   //             return response()->json('successful login');
   //              //return response()->json('successful login');


   //             }
   //            else 
   //            {
   //               return response()->json('invalid login');
   //             }

		 

     

	
	public function myprofile(Request $req)
	{
		$email = $req->input('email');

		$data = User_94231::where('email',$email)->get();

		return response()->json($data);

	}

    //
}
