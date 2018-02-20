<?php

Route::get('/index', function(){
    
    $tasks = [
        'Go to the store',
        'Finish my screencast',
        'Another task'
    ];

    return view('index', compact('tasks'));
});