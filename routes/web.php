<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Backend\CategoryTypeController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
    // web.php
});

//Admin User All Route
Route::controller(AdminController::class)->group(function(){

Route::get('/all/admin', 'AllAdmin')->name('all.admin');
Route::get('/add/admin', 'AddAdmin')->name('add.admin');
Route::post('/store/admin', 'StoreAdmin')->name('store.admin');
Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
});





//End Group Admin Middleware


Route::middleware(['auth', 'role:seller'])->group(function () {
    Route::get('/seller/dashboard', [SellerController::class, 'SellerDashboard'])->name('seller.dashboard');
    Route::get('/seller/logout', [SellerController::class, 'SellerLogout'])->name('seller.logout');
    Route::get('/seller/profile', [SellerController::class, 'SellerProfile'])->name('seller.profile');
    Route::post('/seller/profile/store', [SellerController::class, 'SellerProfileStore'])->name('seller.profile.store');
    Route::get('/seller/change/password', [SellerController::class, 'SellerChangePassword'])->name('seller.change.password');
    Route::post('/seller/update/password', [SellerController::class, 'SellerUpdatePassword'])->name('seller.update.password');
});
//End Group Seller Middleware

//Seller User All Route
Route::controller(sellerController::class)->group(function(){

    Route::get('/all/seller', 'AllSeller')->name('all.seller');
    Route::get('/add/seller', 'AddSeller')->name('add.seller');
    Route::post('/store/seller', 'StoreSeller')->name('store.seller');
    Route::get('/edit/seller/{id}', 'EditSeller')->name('edit.seller');
    });




//End Group Seller Middleware








Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'ClientDashboard'])->name('client.dashboard');
    Route::get('/client/logout', [ClientController::class, 'ClientLogout'])->name('client.logout');
    Route::get('/client/profile', [ClientController::class, 'ClientProfile'])->name('client.profile');
    Route::post('/client/profile/store', [ClientController::class, 'ClientProfileStore'])->name('client.profile.store');
    Route::get('/client/change/password', [ClientController::class, 'ClientChangePassword'])->name('client.change.password');
    Route::post('/client/update/password', [ClientController::class, 'ClientUpdatePassword'])->name('client.update.password');
    Route::view('/checkout', 'checkout')->name('checkout');
    Route::view('/cart', 'cart')->name('cart');
});
//End Group Client Middleware

Route::controller(ClientController::class)->group(function(){

    Route::get('/all/client', 'AllClient')->name('all.client');
    Route::get('/add/client', 'AddClient')->name('add.client');
    Route::post('/store/client', 'StoreClient')->name('store.client');
    Route::get('/edit/client/{id}', 'EditClient')->name('edit.client');
    });
//Admin User All Route
Route::controller(ClientController::class)->group(function(){

    Route::get('/all/client', 'AllClient')->name('all.client');
    Route::get('/add/client', 'AddClient')->name('add.client');
    Route::post('/store/client', 'StoreClient')->name('store.client');
    Route::get('/edit/client/{id}', 'EditClient')->name('edit.client');
    });





Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(CategoryTypeController::class)->group(function () {
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');


    });
});
Route::middleware(['auth', 'role:seller'])->group(function () {

    Route::controller(CategoryTypeController::class)->group(function () {
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');


    });
});


Route::middleware(['auth', 'role:client'])->group(function () {

    Route::controller(CategoryTypeController::class)->group(function () {
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');


    });
});







Route::view('/shop', 'shop')->name('shop');



