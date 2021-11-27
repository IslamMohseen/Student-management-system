<?php

use Illuminate\Support\Facades\Route;

use App\admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
                // Admin Section 
            Route::get('/', 'adminloginController@admin');
            Route::post('islogin', 'adminloginController@adminloged');


            
            // Student Section 
            Route::get('addstudent','studentController@create');
            Route::post('studentstore','studentController@store');
            Route::get('studentdetails','studentController@show');
            Route::get('/student_edit/{id}',['as'=>'student.edit','uses'=> 'studentController@edit']);
            Route::post('/student_update/{id}',['as'=>'student.update','uses'=> 'studentController@update']);
            Route::get('/student_delete/{id}',['as'=>'student.delete','uses'=> 'studentController@destroy']);

            // Branch Section 
            Route::post('/student/courses','studentController@courses');
            Route::get('addbranch','branchsController@create');
            Route::post('branchstore','branchsController@store');
            Route::get('branchesdetails','branchsController@show');
            Route::get('/branch_edit/{id}',['as'=>'branch.edit','uses'=> 'branchsController@edit']);
            Route::post('/branch_update/{id}',['as'=>'branch.update','uses'=> 'branchsController@update']);
            Route::get('/branch_delete/{id}',['as'=>'branch.delete','uses'=> 'branchsController@destroy']);

            // Cources Section 
            Route::get('addcourse','coursesController@create');
            Route::post('coursestore','coursesController@store');
            Route::get('coursesdetails','coursesController@show');
            Route::get('/course_delete/{id}',['as'=>'course.delete','uses'=> 'coursesController@destroy']);


                
    });



