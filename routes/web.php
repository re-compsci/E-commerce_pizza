<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DashControl;

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

//user
Route::get('/', [ItemsController::class, 'Get'])->name('welcome');
Route::get('Cart/{id}', [ItemsController::class, 'AddtoCart'])->name('AddtoCart');
Route::get('/out',  [ItemsController::class, 'ShowBag'])->name('out')->middleware('auth');
Route::get('/delQty/{id}', [ItemsController::class, 'DelQty'])->name('delqty');

//dashboard
Route::get('/cpanel',[DashControl::class, 'Disply'])->name('cpanel');//->middleware('auth');

    //item
        Route::get('/items',[DashControl::class, 'GetItems'])->name('itGo');
        Route::post('/items',[DashControl::class, 'SaveItems'])->name('additem');
    //itemgroup
        Route::get('/groups',[DashControl::class, 'GetItemGroup'])->name('itemgroupH');
        Route::post('/groups', [DashControl::class, 'SaveGroupItems'])->name('saveH');
    //delete
        Route::get('/deleteg/{id}', [DashControl::class, 'delGroup'])->name('delg');
        Route::get('/deleteI/{id}', [DashControl::class, 'delItem'])->name('delI');
    //edit
        Route::get('/editI/{id}', [DashControl::class, 'editItem'])->name('editI');
        Route::get('/editg/{id}', [DashControl::class, 'editGroup'])->name('editg');
    //update
        Route::post('/updateg', [DashControl::class, 'updateGroup'])->name('updateg');
        Route::post('/updateI', [DashControl::class, 'updateItem'])->name('updateI');











//itemgroup
Route::get('/itemgroup',[ItemsController::class, 'GetItemGroup'])->name('itemgroup');
Route::post('/save', [ItemsController::class, 'SaveGroupItems'])->name('save');

//Route::get('/edit/{id}', [ItemsController::class, 'edit'])->name('edit');
Route::post('/updateG', [ItemsController::class, 'Gupdate'])->name('update1');

//item
Route::get('/items/{id}',[ItemsController::class, 'GetItems'])->name('Items');
Route::post('/saveItem', [ItemsController::class, 'SaveItems'])->name('saveItem');

Route::get('/edit1/{id}', [ItemsController::class, 'editItem'])->name('editItem');
Route::post('/updateI', [ItemsController::class, 'updateItem'])->name('update2');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
