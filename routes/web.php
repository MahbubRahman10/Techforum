<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



/*
Home pages
*/
Route::get('sections/nav','Controllertechforum@Category');
Route::get('/techforum','Controllertechforum@Forumpost');
Route::get('about', function() { 
	return View('about'); 
});



/*
login & register 
*/
Route::get('login', function() { 
	return View('login'); 
});
Route::get('register', function() { 
	return View('register'); 
});
Route::post('auth/login','LoginController@Login');
Route::get('/log','Controllertechforum@log');
Route::post('register', 'RegisterController@register');
Route::get('register', 'RegistrationController@register');



Route::get('503', function()
{
		 abort(503);
});

/*
Forgot password 
*/
Route::post('password/email','Auth\ResetPasswordController@sendResetLinkEmail');
Route::post('password/reset','Auth\ResetPasswordController@reset');



/*
viewpost & reply
*/
Route::get('viewpost={id}','Controllertechforum@viewpost');
Route::get('profile={id}','Controllertechforum@users');
Route::get('category={id}','Controllertechforum@viewcategory');
Route::post('forumreply{id}','Controllertechforum@forumreply');


/*
ask question 
*/
Route::get('/question','Controllertechforum@question')->middleware('auth');;
Route::post('question','Controllertechforum@ask');


/*
ajax profile edit 
*/
Route::post( 'edit', 'Controllertechforum@edits');
Route::post( 'edit2', 'Controllertechforum@edits2');
Route::post( 'edit3', 'Controllertechforum@edits3');

/*
blogpost 
*/

Route::post( 'comments', 'BlogController@comments');
Route::get('blogpost={id}','BlogController@blogposts');





/*
auth 
*/
Auth::routes();
Auth::routes();



/*
Admin part
*/

Route::get('admin/index', function() { 
	return View('admin/index'); 
});

Route::post('admin/logadmin','AdminController@logadmin');

Route::get('admin/home','AdminController@home');
Route::get('admin/admin','AdminController@admin');
Route::get('admin/forum-post','AdminController@forum');
Route::get('admin/viewcomment','AdminController@comment');
Route::get('admin/category','AdminController@category');
Route::get('admin/blog_post','AdminController@blog_post');
Route::get('admin/viewpost','AdminController@viewpost');
Route::get('admin/viewuser','AdminController@users');
Route::post( 'admin/deleteItem', 'AdminController@deleteItem' );
Route::get('admin/edit-post={id}','AdminController@editpost');
Route::post('admin/Blogpost','BlogController@Blogpost');
















