<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard',[\App\Http\Controllers\ChartController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('users')->group(function(){
Route::get('/index',[\App\Http\Controllers\UserController::class,'index'])->name('Admin.users.index');
Route::get('/create',[\App\Http\Controllers\UserController::class,'create'])->name('Admin.users.create');
Route::post('/store',[\App\Http\Controllers\UserController::class,'store'])->name('Admin.users.store');
Route::get('/edit/{id}',[\App\Http\Controllers\UserController::class,'edit'])->name('Admin.users.edit');
Route::post('/update/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('Admin.users.update');
Route::get('/purge/{id}',[\App\Http\Controllers\UserController::class,'purge'])->name('Admin.users.purge');


});
Route::prefix('grupos')->group(function(){
Route::get('/index',[\App\Http\Controllers\GrupoController::class,'index'])->name('Admin.grupos.index');
Route::get('/create',[\App\Http\Controllers\GrupoController::class,'create'])->name('Admin.grupos.create');
Route::post('/store',[\App\Http\Controllers\GrupoController::class,'store'])->name('Admin.grupos.store');
Route::get('/edit/{id}',[\App\Http\Controllers\GrupoController::class,'edit'])->name('Admin.grupos.edit');


});

Route::prefix('enderecos')->group(function(){
    Route::get('/index',[\App\Http\Controllers\EnderecoController::class,'index'])->name('Admin.enderecos.index');
    Route::get('/create',[\App\Http\Controllers\EnderecoController::class,'create'])->name('Admin.enderecos.create');
    Route::post('/store',[\App\Http\Controllers\EnderecoController::class,'store'])->name('Admin.enderecos.store');
    Route::post('/update/{id}',[\App\Http\Controllers\EnderecoController::class,'update'])->name('Admin.enderecos.update');
    Route::get('/edit/{id}',[\App\Http\Controllers\EnderecoController::class,'edit'])->name('Admin.enderecos.edit');
    Route::get('/purge/{id}',[\App\Http\Controllers\EnderecoController::class,'purge'])->name('Admin.enderecos.purge');
    
    
    });
    

    Route::prefix('contentores')->group(function(){
        Route::get('/index',[\App\Http\Controllers\ContentorController::class,'index'])->name('Admin.contentores.index');
        Route::get('/create',[\App\Http\Controllers\ContentorController::class,'create'])->name('Admin.contentores.create');
        Route::post('/store',[\App\Http\Controllers\ContentorController::class,'store'])->name('Admin.contentores.store');
        Route::post('/update/{id}',[\App\Http\Controllers\ContentorController::class,'update'])->name('Admin.contentores.update');
        Route::get('/edit/{id}',[\App\Http\Controllers\ContentorController::class,'edit'])->name('Admin.contentores.edit');
        Route::get('/purge/{id}',[\App\Http\Controllers\ContentorController::class,'purge'])->name('Admin.contentores.purge');
        
        
        });
    


require __DIR__.'/auth.php';
