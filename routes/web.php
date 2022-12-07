<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Colossians;

Route::get('/chapter/{chapter_number}', [Colossians::class, 'readByChapter']);
Route::get('/all-chapters', [Colossians::class, 'readAll']);
