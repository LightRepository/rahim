<?php
use App\Http\Controllers\authController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\cabinetController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\registrationController;
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
Route::get('/logout', [logoutController::class, "store"])->name("logout");

Route::post('/reg', [registrationController::class, "store"])->name("registration.store");
Route::get('/reg', [registrationController::class, "index"])->name("registration");

Route::post('/auth', [authController::class, "store"])->name("auth.store");
Route::get('/auth', [authController::class, "index"])->name("auth");


Route::post('/cart/add', [cartController::class, "store"])->name("cart.store");
Route::get('/cart', [cartController::class, "index"])->name("cart");

Route::post('/product/add', [cabinetController::class, "store"])->name("product.store");
Route::get('/cabinet', [cabinetController::class, "index"])->name("cabinet");
Route::get('/about', [aboutController::class, "index"])->name("about");
Route::get('/menu', [menuController::class, "index"])->name("menu");
Route::get('/', [homeController::class, "index"])->name("home");
