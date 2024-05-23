<?php

use App\Http\Controllers\admin\TexController;
use App\Http\Controllers\website\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\website\CustomerController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\admin\PolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductPriceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ThemeInfoController;

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

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/template', [WebsiteController::class, 'template'])->name('template');
Route::get('/template/single-template/{title}', [WebsiteController::class, 'singleTemplate'])->name('single.template');
Route::get('/template/category-wise-template/{id}', [WebsiteController::class, 'categoryWiseTemplate'])->name('category.wise.template');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/team', [WebsiteController::class, 'team'])->name('team');
Route::get('/price', [WebsiteController::class, 'price'])->name('price');
Route::get('/policy/first policy', [WebsiteController::class, 'policyOne'])->name('policyOne');
Route::get('/policy/second policy', [WebsiteController::class, 'policyTwo'])->name('policyTwo');
Route::get('/policy/third policy', [WebsiteController::class, 'policyThree'])->name('policyThree');
Route::get('/policy/fourth policy', [WebsiteController::class, 'policyFour'])->name('policyFour');


Route::resources([
    'carts' => CartController::class,
    'texInfo'=>TexController::class,
]);

Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('checkout');

// start customer
// start customer login and Register
Route::get('/customer/register', [CustomerController::class, 'index'])->name('customer.register');
Route::post('/customer/register', [CustomerController::class, 'saveCustomerInfo'])->name('customer.register');
Route::get('/customer/login', [CustomerController::class, 'loginFrom'])->name('customer.login');
Route::post('/customer/login', [CustomerController::class, 'customerLoginCheck'])->name('customer.login');
Route::get('/customer/logout',[CustomerController::class,'logout'])->name('customer.logout');
// End customer login and Register
Route::get('/customer/profile',[CustomerController::class,'customerProfile'])->name('customer.profile');
Route::post('/customer/update-profile/{id}',[CustomerController::class,'customerUpdateProfile'])->name('customer.update-profile');
Route::get('/customer/order',[CustomerController::class,'customerOrder'])->name('customer.order');

// End customer



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resources([
        'categories' => CategoryController::class,
        'product-type' => ProductTypeController::class, // for  Product type
        'post' => PostController::class, // for  Post
        'skill' => SkillController::class, // for   Skills
        'products' => ProductController::class, // for  Product Theme
        'theme-price' => ProductPriceController::class, // for  Product price
        'testimonial' => TestimonialController::class, // for Testimonial
        'theme-info' => ThemeInfoController::class, // for ThemeInfo
        'privacy-policy' => PolicyController::class, // for ThemeInfo

]);

    // Start Product
    Route::get('/product/status/{id}', [ProductController::class, 'info'])->name('products.status');
    // Template Auth price (basic, pro,pre)
    Route::get('/get-product-info-by-title', [ProductPriceController::class, 'getProductInfoByTitle'])->name('get-product-info-by-title');
    // Product Category wise details and  Product details wise Delete(product & price)
    Route::get('/product/detail/full-Delete/{id}',[ProductController::class,'fullDetailDelete'])->name('delete.product-and-price');
    Route::get('/product/category/{categoryId}', [ProductController::class, 'categoryWiseProduct'])->name('category.wise.product');
    // End Product


});
