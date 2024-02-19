<?php

use Illuminate\Support\Facades\Route;
use Sunwarul\LaravelDx\Controllers\RouteListController;

Route::get('r:l', [RouteListController::class, 'index']);
