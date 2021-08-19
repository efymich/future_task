<?php

use core\Router\Route;

Route::Get("/", app\Controllers\BasicController::class, 'index');

Route::Post("/", app\Controllers\BasicController::class, 'postComment');

Route::Post('/delete',app\Controllers\BasicController::class,'deleteAll');

