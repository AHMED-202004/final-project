<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $name = 'ahmed';
    $departments =[
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];
    
    //return view('about')->with(key: 'name', value: $name);
    return view('about', compact('name', 'departments'));

});
Route::post('/about', function(){
    $name = $_POST['name'];
    $departments =[
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];

    return view('about', compact(var_name: 'name'));
});
