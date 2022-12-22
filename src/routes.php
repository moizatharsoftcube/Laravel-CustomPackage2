<?php

use Illuminate\Support\Facades\Route;
use moizatharsoftcube\laravelcustompackage2\CustomPackageController;

Route::get('laravel-custom-package', function(){
   echo "hello from laravel custom package";
});
Route::get('add/{a}/{b}', [CustomPackageController::class,'add']);
Route::get('sub/{a}/{b}', [CustomPackageController::class,'sub']);
