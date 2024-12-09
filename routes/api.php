<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfferController;


Route::get('/offers',[OfferController::class,'index'])->name('apihome');
Route::post('/offers', [OfferController::class, 'store'])->name('apistore');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('apishow');
Route::put('/offers/{id}', [OfferController::class, 'update'])->name('apiupdate');
Route::delete('/offers/{id}', [OfferController::class, 'destroy'])->name('apidestroy');
