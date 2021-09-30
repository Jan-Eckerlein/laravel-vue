<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//getContacts
Route::get('getContacts', [App\Http\Controllers\ContactController::class, 'getContacts']);

// Get Contact Detail
Route::get('get_contact/{id}', [App\Http\Controllers\ContactController::class, 'get_contact']);

// Save Contacts
Route::post('save_contact', [App\Http\Controllers\ContactController::class, 'save_contact']);


// Update Contact
Route::post('update_contact/{id}', [App\Http\Controllers\ContactController::class, 'update_contact']);

//delete Contact
Route::delete('deleteContact/{id}', [App\Http\Controllers\ContactController::class, 'deleteContact']);