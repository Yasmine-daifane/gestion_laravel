<?php
use App\Http\Controllers\dashbordController;
use Illuminate\Support\Facades\Route;

Route::get('/dash',[dashbordController::class,'index']);
