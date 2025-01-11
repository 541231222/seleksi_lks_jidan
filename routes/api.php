<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/users', [UserController::class, 'register']);

Route::get( '/users/{id}', [UserController::class, 'getData']);

Route::delete('/users/{id}/delete', [UserController::class, 'destroy']);

Route::put('/users/{id}/update', [UserController::class, 'update']);

Route::post( '/cars', [CarController::class, 'store']);

Route::get('/cars', [CarController::class, 'getAllData']);

Route::delete('/cars/{id}/delete', [CarController::class, 'destroy']);

Route::put('/cars/{id}/update', [CarController::class, 'update']);

Route::post( '/reservations', [ReservationController::class, 'reserves']);

Route::get('/reservations/{id}', [ReservationController::class, 'getReservation']);

Route::put('/reservations/{id}/update-status', [ReservationController::class, 'update']);

Route::delete('/reservations/{id}/delete', [ReservationController::class, 'destroy']);

