<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SessionController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\TemplateController;
use App\Http\Controllers\Api\PhotoController;
use App\Http\Controllers\Api\PrintJobController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Templates
Route::get('/templates', [TemplateController::class, 'index']);


//Sessions
Route::post('/sessions', [SessionController::class, 'store']);
Route::get('/sessions/{id}', [SessionController::class, 'show']);
Route::patch('sessions/{id}/start', [SessionController::class, 'start']);
Route::patch('/sessions/{id}/template', [SessionController::class, 'updateTemplate']);
Route::patch('/sessions/{id}/filter', [SessionController::class, 'updateFilter']);




//Payments
Route::post('/payments', [PaymentController::class, 'store']);
Route::patch('payments/{id}/confirm', [PaymentController::class, 'confirm']);

//Photos
Route::post('/photos', [PhotoController::class, 'store']);
Route::get('/photos/{sessionId}', [PhotoController::class, 'index']);

//PrintJobs
Route::post('/print-jobs', [PrintJobController::class, 'store']);
Route::patch('/print-jobs/{id}/finish', [PrintJobController::class, 'finish']);
