<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/email", function () {
    $recipientEmail = 'dzakynashshar@gmail.com';
    Mail::to($recipientEmail)->send(new \App\Mail\VerificationMail());

    return response()->json(['message' => 'Email sent successfully']);
});


Route::get("/", \App\Livewire\Home::class)->name("home");
Route::get("/login", \App\Livewire\Login::class)->name("login");
Route::get("/logout", [\App\Http\Controllers\AuthController::class, "logout"])->name("logout");
Route::get("/register", \App\Livewire\Register::class)->name("register");


Route::group(["middleware" => "auth"], function () {
    Route::get("verify-email", \App\Livewire\VerifyMail::class)->name("verification.notice");

    Route::get('verify-email/{id}/{hash}', [\App\Http\Controllers\AuthController::class, "verifyEmail"])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');
});
Route::group(["middleware" => ["auth", "verified"]], function () {
    Route::get("/form", \App\Livewire\Form::class)->name("form");
    Route::get("/results", \App\Livewire\ResultList::class)->name("results");
    Route::get("/results/{result}", \App\Livewire\ResultDetail::class)->name("results.detail");
});
