<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookApiController;

Route::apiResource('books', BookApiController::class)->names('api.books');