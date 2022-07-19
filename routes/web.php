<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\SlotController ;
use App\Models\Admin;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\myvechicle;
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





Route::middleware('admin:admin')->group(function(){ 
    Route::get('admin/login',[AdminController::class ,'loginForm']);
    Route::post('admin/login',[AdminController::class ,'store'])->name('admin.login');
});


Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');
});

Route::get('/admin/profile',[AdminProfileController::class,'AdminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit',[AdminProfileController::class,'AdminProfileEdit'])->name('admin.profile.edit');
Route::get('/admin/logout',[AdminController::class,'destroy'])->name('admin.logout');
Route::post('/admin/profile/store',[AdminProfileController::class,'AdminProfileStore'])->name('admin.profile.store');
Route::get('/add',[SlotController::class,'AddSlotPlace'])->name('add-slot');
Route::get('/admin/view',[SlotController::class,'SlotPlace'])->name('all.slotplace');
Route::post('/admin/store',[SlotController::class,'BrandStore'])->name('brand.store');
Route::get('/admin/edit/{id}',[SlotController::class,'BrandEdit'])->name('brand.edit');
Route::post('/admin/update',[SlotController::class,'BrandUpdate'])->name('brand.update');
Route::get('/admin/delete/{id}',[SlotController::class,'BrandDelete'])->name('brand.delete');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('frontend.slot_brand');
    })->name('slot_brand');
});

Route::get('/Booking/booking', function () {
    return view('slot_brand');
});
Route::get('/',[IndexController::class,'index']);
Route::get('/user/logout',[IndexController::class,'UserLogout'])->name('user.logout');
Route::get('/user/BookNow',[IndexController::class,'UserSlotBrand'])->name('user.slotbrand');
Route::get('/user/slots/{id}',[IndexController::class,'Slots'])->name('user.slotbrand');
Route::get('/user/vehicle',[myvechicle::class,'Vechicle'])->name('user.addvechicle');
Route::get('/user/store',[myvechicle::class,'vechicleSave'])->name('user.save');
Route::get('/user/store/{id}',[myvechicle::class,'vechicleDelete'])->name('vehicle.delete');