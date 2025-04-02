<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


Route::resource("contacts", ContactController::class);


Route::get('/', function () {
    return view('welcome');
});
