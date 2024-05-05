<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Backend\CategoryTypeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\InquiriesController;

use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

// Route::post('/contact', function (Request $request) {
//     // Process the form submission here
//     // For example, you can send an email, store data in the database, etc.

//     // After processing, you can redirect the user back to the contact page
//     return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
// })->name('contact.submit');

Route::get('/', [CategoryTypeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';

Route::get('shop', [ProductsController::class, 'index'])->name('shop');
// Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', [InquiriesController::class, 'AllInquiries'])->name('contact');
Route::post('/contact/form', [InquiriesController::class, 'InsertInquiries'])->name('contact.form');
// Route::post('/update/status', [InquiriesController::class, 'updateStatus'])->name('update.status');

Route::put('/inquiry/{id}/update-status', [InquiriesController::class, 'updateStatus'])->name('update.status');

Route::get('/product/{id}', [ProductsController::class, 'ProductsViews'])->name('product');

// Route::controller(ProductsController::class)->group(function () {

//     Route::get('/product-view', 'ProductViews')->name('product.view');


// });



Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    // web.php
}); //End Group Admin Middleware


Route::middleware(['auth', 'role:seller'])->group(function () {
    Route::get('/seller/dashboard', [SellerController::class, 'SellerDashboard'])->name('seller.dashboard');
    Route::get('/seller/logout', [SellerController::class, 'SellerLogout'])->name('seller.logout');
    Route::get('/seller/profile', [SellerController::class, 'SellerProfile'])->name('seller.profile');
    Route::post('/seller/profile/store', [SellerController::class, 'SellerProfileStore'])->name('seller.profile.store');
    Route::get('/seller/change/password', [SellerController::class, 'SellerChangePassword'])->name('seller.change.password');
    Route::post('/seller/update/password', [SellerController::class, 'SellerUpdatePassword'])->name('seller.update.password');
});


Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'ClientDashboard'])->name('client.dashboard');
    Route::get('/client/logout', [ClientController::class, 'ClientLogout'])->name('client.logout');
    Route::get('/client/profile', [ClientController::class, 'ClientProfile'])->name('client.profile');
    Route::post('/client/profile/store', [ClientController::class, 'ClientProfileStore'])->name('client.profile.store');
    Route::get('/client/change/password', [ClientController::class, 'ClientChangePassword'])->name('client.change.password');
    Route::post('/client/update/password', [ClientController::class, 'ClientUpdatePassword'])->name('client.update.password');
    // Route::view('/cart', 'cart')->name('cart');
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


    //Admin User All Route
    Route::controller(AdminController::class)->group(function () {

        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');
        Route::post('/store/admin', 'StoreAdmin')->name('store.admin');
        Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
        Route::post('/update/admin/{id}', 'UpdateAdmin')->name('update.admin');
        Route::get('/delete/admin/{id}', 'DeleteAdmin')->name('delete.admin');

        Route::get('/admin/inquiries', 'AdminInquiries')->name('admin.inquiries');

    });


    //Admin client All show
    Route::controller(AdminController::class)->group(function () {

        Route::get('/all/client', 'AllClient')->name('all.client');
        Route::get('/add/client', 'AddClient')->name('add.client');
        Route::post('/store/client', 'StoreClient')->name('store.client');
        Route::get('/edit/client/{id}', 'EditClient')->name('edit.client');
        Route::post('/update/client/{id}', 'UpdateClient')->name('update.client');
        Route::get('/delete/client/{id}', 'DeleteClient')->name('delete.client');
    });


    Route::controller(AdminController::class)->group(function () {

        Route::get('/all/seller', 'AllSeller')->name('all.seller');
        Route::get('/add/seller', 'AddSeller')->name('add.seller');
        Route::post('/store/seller', 'StoreSeller')->name('store.seller');
        Route::get('/edit/seller/{id}', 'EditSeller')->name('edit.seller');
        Route::post('/update/seller/{id}', 'UpdateSeller')->name('update.seller');
        Route::get('/delete/seller/{id}', 'DeleteSeller')->name('delete.seller');
    });

    Route::controller(ProductsController::class)->group(function () {
        Route::get('/admin/all/products', 'AdminAllProducts')->name('admin.all.products');
        Route::get('/admin/view/products/{id}', 'AdminViewProducts')->name('admin.view.products');
        Route::get('/admin/delete/products/{id}', 'AdminDeleteProducts')->name('admin.delete.products');
        Route::delete('/admin/products/{id}', 'destroy')->name('products.destroy');

    });

});
Route::middleware(['auth', 'role:seller'])->group(function () {

    Route::controller(ProductsController::class)->group(function () {
        Route::get('/all/products', 'AllProducts')->name('all.products');
        Route::get('/add/products', 'AddProducts')->name('add.products');
        Route::post('/store/products', 'StoreProducts')->name('store.products');
        Route::get('/edit/products/{id}', 'EditProducts')->name('edit.products');
        Route::get('/view/products/{id}', 'ViewProducts')->name('view.products');
        Route::post('/update/products', 'UpdateProducts')->name('update.products');
        Route::get('/delete/products/{id}', 'DeleteProducts')->name('delete.products');
    });

});


Route::middleware(['auth', 'role:client'])->group(function () {

    Route::controller(ClientController::class)->group(function () {



    });

    Route::controller(SalesController::class)->group(function () {
        Route::get('/cart', 'CartView')->name('cart');
        Route::post('/sale/add', 'CartAdd')->name('cart.add');
        Route::get('/delete/cart/{id}', 'DeleteCart')->name('delete.cart');

        Route::get('/checkout', 'CheckoutView')->name('checkout');

    });

});














