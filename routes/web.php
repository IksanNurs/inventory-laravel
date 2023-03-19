<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TblBukuController;
use App\Http\Controllers\TblPengarangController;
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
Route::get('/Page1', [PagesController::class, 'page1']);
Route::get('/admin-dashboard', [PagesController::class, 'admin_db']);
Route::get('/', [PagesController::class, 'home']);
Route::get('/single-post', [PagesController::class, 'single_post']);
Route::get('/single-supp', [SupplierController::class, 'single_supp']);
Route::get('/all-post', [PagesController::class, 'all_blog']);
Route::get('/create-supplier', [SupplierController::class, 'create_page']);
Route::post('/edit-post', [PagesController::class, 'edit_page']);
Route::post('/edit-supplier', [SupplierController::class, 'edit_pagesupplier']);
Route::post('/store', [SupplierController::class, 'store']);
Route::post('/store_edited_supplier', [SupplierController::class, 'store_edited_supplier']);
Route::post('/delete', [SupplierController::class, 'delete']);
Route::get('/supplier-index', [SupplierController::class, 'supp_db']);
