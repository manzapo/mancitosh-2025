<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('vlog', \App\Livewire\Vlog::class)->name('vlog');
Route::get('olimpiade-pai', \App\Livewire\Pai::class)->name('pai');
Route::get('tenis-meja', \App\Livewire\Tenismeja::class)->name('tenismeja');
Route::get('desain-poster', \App\Livewire\Poster::class)->name('poster');
Route::get('cerpen-digital', \App\Livewire\Cerpen::class)->name('cerpen');
