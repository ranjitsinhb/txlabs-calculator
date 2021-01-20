<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('calculator/add/{a}/{b}', 'Txlabs\Calculator\CalculatorController@add');
Route::get('calculator/subtract/{a}/{b}', 'Txlabs\Calculator\CalculatorController@subtract');