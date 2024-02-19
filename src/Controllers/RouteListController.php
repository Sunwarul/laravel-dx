<?php

namespace Sunwarul\LaravelDx\Controllers;

use Illuminate\Support\Facades\Artisan;

class RouteListController extends BaseController
{
    public function index()
    {
        Artisan::call('route:list');
        // echo '<pre>';
        $routeList = Artisan::output();
        // echo '</pre>';
        return view('laravel-dx::route-list', compact('routeList'));
    }
}
