<?php

use App\Http\Controllers\SubmissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'middleware' => ['auth:sanctum', 'abilities:submit'],
    'prefix' => 'v1',
    'as' => 'api.',
], function () {
    Route::post('/forms', [SubmissionController::class, 'store'])->name('forms.store');
});
