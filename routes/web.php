<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// MOVED TO api.php: 

// Route::prefix('api')->group(function() {
//     //getContacts
//     Route::get('getContacts', [App\Http\Controllers\ContactController::class, 'getContacts']);

//     // Save Contacts
//     Route::post('save_contact', [App\Http\Controllers\ContactController::class, 'save_contact']);
// });