<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', [WebController::class, 'index']);
Route::get('/index', [WebController::class, 'index'])->name('index');
Route::get('/gallery', [WebController::class, 'gallery'])->name('gallery');
Route::get('/services', [WebController::class, 'services'])->name('services');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::get('/terms', [WebController::class, 'terms'])->name('terms');
Route::post('/contact', [AdminUserController::class, 'store_contacts'])->name('store_contacts');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/register', [CustomerController::class, 'create'])->name('register');
Route::get('/login', [CustomerController::class, 'login'])->name('login');
Route::post('/login', [CustomerController::class, 'login_auth'])->name('login_auth');
Route::get('/logout', [CustomerController::class, 'logout'])->name('logout');
Route::post('/register', [CustomerController::class, 'store'])->name('register_store');

// User can't see other user's profile without login
Route::get('/show-user/{id}', [CustomerController::class, 'show_user'])->name('show_user');

// Edit user
Route::get('/user/edit/{id}', [CustomerController::class, 'edit_user'])->name('edit_user');
Route::post('/user/edit/{id}', [CustomerController::class, 'update'])->name('update_user');

// Edit family
Route::get('/family/edit/{id}', [CustomerController::class, 'edit_family'])->name('edit_family');
Route::post('/family/edit/{id}', [CustomerController::class, 'update_family'])->name('update_family');

Route::get('/profile', [CustomerController::class, 'profile'])->name('profile');

Route::post('/send-otp', [CustomerController::class, 'sendOtp'])->name('send_otp');


Route::get('/search', [CustomerController::class, 'searchdata'])->name('search');


// Admin Login routes (login/logout ke liye middleware mat lagao warna login page khud block ho jayega)
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin_login');
Route::post('/admin/login', [AdminController::class, 'admin_auth'])->name('admin_auth');

// Protected routes (sirf logged-in admin ke liye)
Route::middleware(['admin_auth'])->prefix('admin')->group(function () {

    Route::get('/index', [AdminController::class, 'index'])->name('admin_index');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');

    // Manage Contacts
    Route::get('/contact', [AdminUserController::class, 'contacts'])->name('contacts');
    Route::get('/delete/{id}', [AdminUserController::class, 'delete_contacts'])->name('delete_contacts');

    // Manage Team
    Route::get('/team/add', [TeamController::class, 'create'])->name('add_team');
    Route::post('/team/add', [TeamController::class, 'store'])->name('add_team');
    Route::get('/team/manage', [TeamController::class, 'index'])->name('manage_team');
    Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('admin_edit_team');
    Route::post('/team/edit/{id}', [TeamController::class, 'update'])->name('admin_update_team');
    Route::get('/team/delete/{id}', [TeamController::class, 'destroy'])->name('admin_delete_team');

    // Manage Users
    Route::get('/manage-user', [AdminUserController::class, 'index'])->name('list_user');
    Route::get('/user/edit/{id}', [AdminUserController::class, 'edit'])->name('admin_edit_user');
    Route::post('/user/edit/{id}', [AdminUserController::class, 'update'])->name('admin_update_user');
    Route::get('/user/delete/{id}', [AdminUserController::class, 'destroy'])->name('admin_delete_user');

    // payment proof
    Route::get('/send-proof', [PaymentController::class, 'proofinsert'])->name('payment_proof');
    Route::post('/send-proof', [PaymentController::class, 'proofinsert'])->name('payment_proof');
});
