<?php

use App\Task;

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');


// Route::get('/tasks/{task}', function ($id) {
// 	//dd($id);
// 	//$task = DB::table('tasks')->find($id);
// 	$task = Task::find($id);
//    return view('tasks.show', compact('task'));
// });

Route::get('posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');



// Route::get('about', function () {
//     return view('about');
// });
