<?php

use core\Router\Route;

Route::Get("/", app\Controllers\BasicController::class, 'index');

Route::Post("/", app\Controllers\BasicController::class, 'postComment');

