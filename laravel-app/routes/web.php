<?php

use App\Http\Controllers\DepartmentController;
use App\Livewire\Student\Student;
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

Route::get('/test',Student::class);
// Route::controller(Department::class);
Route::prefix('/department')->group(function(){
    Route::get('/index',[DepartmentController::class,'index'])->name('department.index');
    Route::get('/create',[DepartmentController::class,'create'])->name('department.create');
    Route::post('/store',[DepartmentController::class,'store'])->name('department.store');
    Route::get('/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit');
    Route::post('/update/{id}',[DepartmentController::class,'update'])->name('department.update');
    Route::get('/delete/{id}',[DepartmentController::class,'destroy'])->name('department.delete');
});
// department.store
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
