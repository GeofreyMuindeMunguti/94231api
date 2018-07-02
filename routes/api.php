<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

Route::namespace('Auth')->prefix('user')->group(function () {
     Route::post('/create','RegisterController@create');
     Route::post('/login','LoginController@login');
    // Route::post('/create', function(Request $request) {
    // 	return $request;
    // });
    
});

Auth::routes();

Route::post('save/gym','GymController@save');//save a gym..check
//Route::post('register','Auth/RegisterController@create');// register a gymuser..check
Route::post('save/instructor','InstructorController@save');//register instructor..check
Route::post('save/workout','WorkoutController@save');//create and save workout plan..check
Route::post('save/session','SessionController@save');//create and save session..check
Route::post('/loginuser','UserController@loginuser');//login the existing user
 Route::post('/register','UserController@save');//login the existing user


Route::get('/gymshow','GymController@gymshow');//view all gyms..check
Route::get('/showgymusers','UserController@showgymusers');//show gymusers..admin
Route::get('/myprofile','UserController@myprofile');//view user profile...check
Route::get('/showInstructor','InstructorController@showInstructor');//show all instructors...check
Route::get('/showWorkout','WorkoutController@showWorkout');//shows all work out plans...check
Route::get('/showWorkoutall','WorkoutController@showWorkoutall');
Route::get('/showSessions','SessionController@showSession');//user view all their sessions ...check
Route::get('/sessionprogress','SessionController@sessionProgress');//check date of start and current date in sessions amongsth other data of the session

Route::get('/gyminlocation','WorkoutController@showGyminlocation');//show gyms close to user location...check
Route::get('/gymnear','GymController@gymnear');//...check
Route::get('/showgyminstructor','InstructorController@showgyminstructor');//show instructors in a certain gym...check
