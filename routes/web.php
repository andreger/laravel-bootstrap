<?php
use Illuminate\Support\Facades\Route;

$namespace = "LaravelBootstrap\Http\Controllers";

Route::group([
    'namespace' => $namespace,
    'prefix' => 'bootstrap',
], function () {
    Route::get('/', function () {
        return "Package test";
    });
});


