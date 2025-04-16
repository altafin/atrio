<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    Route::get('/clients', \App\Livewire\Clients\Index::class)->name('clients.index');
    Route::get('/clients/create', \App\Livewire\Clients\Create::class)->name('clients.create');
    Route::get('/clients/show/{client}', \App\Livewire\Clients\Show::class)->name('clients.show');
    Route::get('/clients/edit/{client}', \App\Livewire\Clients\Edit::class)->name('clients.edit');

});

require __DIR__.'/auth.php';
