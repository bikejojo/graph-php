<?php

use Illuminate\Support\Facades\Route;
use Nuwave\Lighthouse\Support\Http\Controllers\GraphQLController;

Route::get('/', function () {
    return view('welcome');
});
//Route::middleware('auth:sanctum')->post('/graphql', [GraphQLController::class, 'query']);
