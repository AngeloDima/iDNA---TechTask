<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailController;

Route::get("/FormUtente", [MailController::class, "getEmail"]);
Route::post("/FormUtente", [MailController::class, "sendEmail"]);





Route::get('/', function () {
    return view('welcome');
});


