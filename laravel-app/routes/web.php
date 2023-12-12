<?php

use App\Livewire\Students\Students;
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

Auth::routes();
/**
 * to test the connection in the image of the Docker
 */
// Route::get('/test-db-connection', function () {
//     try {
//         DB::connection()->getPdo();
//         return 'Database connection successful!';
//     } catch (\Exception $e) {
//         return 'Database connection failed: ' . $e->getMessage();
//     }
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',Students::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
