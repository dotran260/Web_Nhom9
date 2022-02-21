<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;


/*|--------------------------------------------------------------------------|*/



// Back-end
Route::get('/dashboard', [AdminController::class, 'show']);
// DANH MỤC
/*|----------------------------Strart category------------------------------------|*/

Route::get('admin/getCategory/{category_id}', [CategoryController::class, 'api_category_id']); //API
Route::get('admin/getCategory', [CategoryController::class, 'api_category_all']); //API

Route::get('admin/add-category', [CategoryController::class, 'add_category']);
Route::get('admin/list-category', [CategoryController::class, 'list_category']);
Route::get('admin/edit-category/{category_id}', [CategoryController::class, 'edit_category']);
Route::get('/delete-category/{category_id}', [CategoryController::class, 'delete_category']);
Route::post('/save-category', [CategoryController::class, 'save_category']);
Route::post('/update-category/{category_id}', [CategoryController::class, 'update_category']);
Route::get('/hidden-category/{category_id}', [CategoryController::class, 'hidden_category']);
Route::get('/active-category/{category_id}', [CategoryController::class, 'active_category']);
/*|----------------------------End category------------------------------------|*/

// // THƯƠNG HIỆU
// /*|----------------------------Strart brand------------------------------------|*/

Route::get('admin/getBrand/{brand_id}', [BrandController::class, 'api_brand_id']); //API
Route::get('admin/getBrand', [BrandController::class, 'api_brand_all']); //API

Route::get('admin/add-brand', [BrandController::class, 'add_brand']);
Route::get('admin/list-brand', [BrandController::class, 'list_brand']);
Route::get('admin/edit-brand/{brand_id}', [BrandController::class, 'edit_brand']);
Route::get('/delete-brand/{brand_id}', [BrandController::class, 'delete_brand']);
Route::post('/save-brand', [BrandController::class, 'save_brand']);
Route::post('/update-brand/{brand_id}', [BrandController::class, 'update_brand']);
Route::get('/hidden-brand/{brand_id}', [BrandController::class, 'hidden_brand']);
Route::get('/active-brand/{brand_id}', [BrandController::class, 'active_brand']);
// /*|----------------------------End brand------------------------------------|*/
