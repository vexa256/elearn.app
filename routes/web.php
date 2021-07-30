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


Route::get('/cleard', 'ExamDataController@cleard')->name('cleard')->middleware('auth');
Route::post('/MarkExam', 'ExamDataController@MarkExam')->name('MarkExam')->middleware('auth');



Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');





Route::get('/DeleteAdmin/{id}', 'AdminController@DeleteAdmin')->name('DeleteAdmin')->middleware('auth');
Route::post('/AddAdmin', 'AdminController@AddAdmin')->name('AddAdmin')->middleware('auth');
Route::get('/ManageAdmins', 'AdminController@ManageAdmins')->name('ManageAdmins')->middleware('auth');

Route::get('/CourseRating', 'RatingController@CourseRating')->name('CourseRating')->middleware('auth');



Route::get('/Mycertifications', 'CertificationsController@Mycertifications')->name('Mycertifications')->middleware('auth');


Route::get('/CertifiedUsers', 'CertificationsController@CertifiedUsers')->name('CertifiedUsers')->middleware('auth');


Route::get('DeleteCourseNotes/{id}', 'CourseController@DeleteCourseNotes')->name('DeleteCourseNotes')->middleware('auth');

Route::get('Reattempt/{id}', 'ExamsController@Reattempt')->name('Reattempt')->middleware('auth');

Route::get('DeleteUser/{id}', 'UsersController@DeleteUser')->name('DeleteUser')->middleware('auth');
Route::get('ManageUsers', 'UsersController@ManageUsers')->name('ManageUsers')->middleware('auth');


Route::post('/UpdateExamLogic/{id}', 'ExamsController@UpdateExamLogic')->name('UpdateExamLogic')->middleware('auth');
Route::get('/UpdateExam/{id}', 'ExamsController@UpdateExam')->name('UpdateExam')->middleware('auth');
Route::get('/DeleteExam/{id}', 'ExamsController@DeleteExam')->name('DeleteExam')->middleware('auth');



Route::post('/UpdateAccount', 'Auth\RegisterController@UpdateAccount')->name('UpdateAccount')->middleware('auth');

Route::get('/UpdateAccountForm', 'Auth\RegisterController@UpdateAccountForm')->name('UpdateAccountForm')->middleware('auth');

Route::get('/SelectNotes/{id}', 'NotesController@SelectNotes')->name('SelectNotes')->middleware('auth');

Route::get('/SelectExams/{id}', 'ExamsController@SelectExams')->name('SelectExams')->middleware('auth');


Route::get('/SelectCourse', 'CourseController@SelectCourse')->name('SelectCourse')->middleware('auth');

Route::get('/DeleteCourse/{id}', 'CourseController@DeleteCourse')->name('DeleteCourse')->middleware('auth');

Route::get('/UpdateCourse/{id}', 'CourseController@UpdateCourse')->name('UpdateCourse')->middleware('auth');

Route::post('/UpdateCourseLogic/{id}', 'CourseController@UpdateCourseLogic')->name('UpdateCourseLogic')->middleware('auth');
















Route::get('/certification', 'CertificationsController@certification')->name('certification')->middleware('auth');
Route::get('/PrintCertificate/{id}', 'CertificationsController@PrintCertificate')->name('PrintCertificate')->middleware('auth');

Route::get('/scoreboard', 'ScoreboardController@scoreboard')->name('scoreboard')->middleware('auth');
















Route::get('/AttemptExamForm/{id}', 'ExamsController@AttemptExamForm')->name('AttemptExamForm')->middleware('auth');
Route::get('/ManageExams', 'ExamsController@ManageExams')->name('ManageExams')->middleware('auth');
Route::post('/CreateExam', 'ExamsController@CreateExam')->name('CreateExam')->middleware('auth');
Route::get('/CreateExamForm/{id}', 'ExamsController@CreateExamForm')->name('CreateExamForm')->middleware('auth');
Route::get('/MsViewer/{id}', 'NotesController@MsViewer')->name('MsViewer')->middleware('auth');
Route::get('/GoogleViewer/{id}', 'NotesController@GoogleViewer')->name('GoogleViewer')->middleware('auth');
Route::get('/ManageNotes', 'NotesController@ManageNotes')->name('ManageNotes')->middleware('auth');
Route::post('/UploadCourseNotes', 'CourseController@UploadCourseNotes')->name('UploadCourseNotes')->middleware('auth');
Route::get('/AddCourseNotesForm/{id}', 'CourseController@AddCourseNotesForm')->name('AddCourseNotesForm')->middleware('auth');
Route::get('/CreateCourseForm', 'CourseController@CreateCourseForm')->name('CreateCourseForm')->middleware('auth');
Route::get('/ManageCourse', 'CourseController@ManageCourse')->name('ManageCourse')->middleware('auth');
Route::post('/CreateCourse', 'CourseController@CreateCourse')->name('CreateCourse')->middleware('auth');



// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register')->name('register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');



