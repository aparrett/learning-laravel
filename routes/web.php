<?php

Route::get('/index', function(){
    
    $tasks = DB::table('tasks')->get();

    return view('index', compact('tasks'));
});
