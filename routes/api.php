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
Route::namespace('api/Auth')->middleware('auth:api')->get('/user', function (Request $request) {
    Route::post('/create/user','Auth/RegisterController@create');
    
});
Route::post('save/gym','GymController@save');//save a gym
Route::post('save/user','UserController@save');// register a gymuser
Route::post('save/instructor','InstructorController@save');//register instructor
Route::post('save/workout','WorkoutController@save');//create and save workout plan
Route::post('save/session','SessionController@save');//create and save session
Route::post('loginuser','UserController@loginuser');//login the existing user
 

Route::get('/gymshow','GymController@gymshow');//view all gyms
Route::get('/showgymusers','UserController@showgymusers');//show gymusers
Route::get('/myprofile','UserController@myprofile');//view user profile
Route::get('/showInstructor','InstructorController@showInstructor');//show all instructors
Route::get('/showWorkout','WorkoutController@showWorkout');//shows all work out plans

Route::get('/showSessions','SessionController@showSession');//user view all their sessions 
Route::get('/sessionprogress','SessionController@sessionProgress');//check date of start and current date in sessions amongsth other data of the session
Route::get('/gyminlocation','WorkoutController@showGyminlocation');//show gyms close to user location
Route::get('/gymnear','GymController@gymnear');
Route::get('/showgyminstructor','InstructorController@showgyminstructor');//show instructors in a certain gym
