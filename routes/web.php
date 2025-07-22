<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->prefix(config('filament-developer-gate.route_prefix'))->group(function (){
    Route::post('/{tenent}/developer-gate', [Afsdarif\FilamentDeveloperGate\Http\Controllers\DeveloperGateController::class, 'login'])->name('developer-gate.login.tenent');
    Route::post('/developer-gate', [Afsdarif\FilamentDeveloperGate\Http\Controllers\DeveloperGateController::class, 'login'])->name('developer-gate.login');
});
