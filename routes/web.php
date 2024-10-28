<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotepadController;


Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/notepads', [NotepadController::class, 'index'])->name('notepads.view');
Route::get('/notepads/create', [NotepadController::class, 'create'])->name('notepads.create');
Route::post('/notepads/store', [NotepadController::class, 'store'])->name('notepads.store');
Route::get('/notepads/{notepad}', [NotepadController::class, 'show'])->name('notepads.show');
Route::get('/notepads/{notepad}/edit', [NotepadController::class, 'edit'])->name('notepads.edit');
Route::put('/notepads/{notepad}/update', [NotepadController::class, 'update'])->name('notepads.update');
Route::delete('/notepads/delete/{notepad}', [NotepadController::class, 'destroy'])->name('notepads.destroy');