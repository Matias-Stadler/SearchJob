<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\FollowController;


Route::get('/offers',[OfferController::class,'index'])->name('apihome');
Route::delete('/offers/{id}', [OfferController::class, 'destroy'])->name('apidestroy');
Route::post('/offers', [OfferController::class, 'store'])->name('apistore');
Route::put('/offers/{id}', [OfferController::class, 'update'])->name('apiupdate');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('apishow');

Route::post('/offers/{offerId}/follows',[FollowController::class, 'store'])->name('apistoreFollow');
Route::get('/offers/{offerId}/follows', [FollowController::class, 'index'])->name('apiindexNews');
Route::get('/offers/{offerId}/follows/{followID}', [FollowController::class, 'show'])->name('apishowNews');
Route::put('/offers/{offerId}/follows/{followID}', [FollowController::class, 'update'])->name('apiupdateNews');
Route::delete('/offers/{offerId}/follows/{followId}', [FollowController::class, 'destroy'])->name('apidestroyNews');