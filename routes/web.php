<?php

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

Route::get('/', function () {
    $course_des = App\Course::get();
    return view('index',['course_des'=>$course_des]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login_page','FrontController@login_page');

Route::resource('save_student','StudentController' );
Route::resource('save_admin','AdminController');

Route::get('create_courses_page','CourseController@create_courses_view');//view course create page
Route::get('edit_profile_page/{id}','StudentController@edit_profile_view');//edit profile page admin
Route::get('edit_profile_page','StudentController@edit_profile_view_student');//edit profile page stduent
Route::get('view_profiles_page','StudentController@view_profiles_page');//view students list and delete 
Route::post('student_delete','StudentController@destroy1');//student delete
Route::post('student_update/{id}','StudentController@update');//modifications of stduent details
Route::get('student_create','StudentController@new_student_add_page');//enroll new student

//question forum-thashi
Route::get('post_question_page','QuestionController@post_question_page');//post new question page navigate
Route::resource('save_question','QuestionController'); // post quetions to databse
Route::get('top_question_page','QuestionController@top_question_page');//navigate to search question page
Route::get('question_page/{id}/{sid}','QuestionController@view_question_page');//navigate to question page using qid
Route::post('save_comments','QuestionController@save_comments');//save comment in db
Route::post('save_answers','QuestionController@save_answers');//save answers in db
Route::get('my_question_page','QuestionController@my_question_page');//view my questions
Route::post('search_question','QuestionController@search_question');


Route::get('add_courses','CourseController@details');//
Route::resource('save_couses','CourseController');
Route::post('course_delete','CourseController@destroy1');//course delete


Route::get('course_resource/{id}', 'CourseController@course_resource');
Route::post('save_moduleName','CourseController@course_materials');
Route::post('module_material/{type}','CourseController@course_materials_save');
//Krishan
Route::get('course_page/{id}','FrontController@course_page');
Route::post('search_course','FrontController@search_course');
