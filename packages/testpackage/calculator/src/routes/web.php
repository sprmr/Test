<?php

Route::get('/laravel/calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('/laravel/multiply/{a}/{b}', 'Testpackage\Calculator\CalculatorController@multiply');

Route::get('/laravel/send-mail/{email}/{sub}/{msg}', 'Testpackage\Calculator\EmailController@sendMail1');
