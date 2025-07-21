<?php

use App\Livewire\Auth\ForgetPage;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\Cancel;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\Success;
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

Route::get('/', HomePage::class);
Route::get('/categories', CategoriesPage::class);
Route::get('/products',ProductsPage::class)->name('products.index');
Route::get('/cart', CartPage::class);
Route::get('/products/{slug}', ProductDetailPage::class)->name('products.show');
Route::get('/checkout', CheckoutPage::class);
Route::get('/my-orders', MyOrdersPage::class);
Route::get('/my-orders/{order}', MyOrderDetailPage::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);
Route::get('/forgot', ForgetPage::class);
Route::get('/resetpassword', ResetPasswordPage::class);
Route::get('/success', Success::class);
Route::get('/cancel', Cancel::class);
