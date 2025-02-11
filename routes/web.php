<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    "middleware" =>["guest"]
], function() {
    Route::get("register", [AuthController::class, "register"])->name("register");
    Route::post("register", [AuthController::class, "register"])->name("register");
    Route::get("login", [AuthController::class, "login"])->name("login");
    Route::post("login", [AuthController::class, "login"])->name("login");
});

Route::group([
    "middleware" =>["auth"]
], function() {
    Route::get("dashboard", [AuthController::class, "dashboard"])->name("dashboard");
    Route::get("profile", [AuthController::class, "profile"])->name("profile");
    Route::post("profile", [AuthController::class, "profile"])->name("profile");
    Route::get("logout", [AuthController::class, "logout"])->name("logout");
});
