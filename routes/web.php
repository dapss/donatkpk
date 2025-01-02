

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman beranda
// Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rute untuk menu
// Route::get('/menu', [MenuController::class, 'index'])->middleware(['auth', 'verified'])->name('menu');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
// Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
// Route::put('/menu/update/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/delete/{id_donut}', [MenuController::class, 'destroy'])->middleware(['auth', 'verified'])->name('delete');

// Donut Routes
// Route::get('/', [MenuController::class, 'index'])->name('index'); // Show all donuts, glazes, and toppings
Route::get('edit/{id_donut}', [MenuController::class, 'edit'])->middleware(['auth', 'verified'])->name('menu.edit'); // Edit a donut
Route::put('update/{id_donut}', [MenuController::class, 'update'])->middleware(['auth', 'verified'])->name('menu.update'); // Update a donut
Route::delete('delete/{id_donut}', [MenuController::class, 'destroy'])->middleware(['auth', 'verified'])->name('delete'); // Delete a donut

// Glaze Routes
Route::get('glaze/edit/{id_glaze}', [MenuController::class, 'editGlaze'])->middleware(['auth', 'verified'])->name('editGlaze'); // Edit a glaze
Route::put('glaze/update/{id_glaze}', [MenuController::class, 'updateGlaze'])->middleware(['auth', 'verified'])->name('updateGlaze'); // Update a glaze
Route::delete('glaze/delete/{id_glaze}', [MenuController::class, 'destroyGlaze'])->middleware(['auth', 'verified'])->name('destroyGlaze'); // Delete a glaze

// Topping Routes
Route::get('topping/edit/{id_topping}', [MenuController::class, 'editTopping'])->middleware(['auth', 'verified'])->name('editTopping'); // Edit a topping
Route::put('topping/update/{id_topping}', [MenuController::class, 'updateTopping'])->middleware(['auth', 'verified'])->name('updateTopping'); // Update a topping
Route::delete('topping/delete/{id_topping}', [MenuController::class, 'destroyTopping'])->middleware(['auth', 'verified'])->name('destroyTopping'); // Delete a topping

Route::get('/menu/create', [MenuController::class, 'create'])->middleware(['auth', 'verified'])->name('menu.create'); // Show the form
Route::post('/menu/store', [MenuController::class, 'store'])->middleware(['auth', 'verified'])->name('menu.store'); // Handle the form submission

Route::get('/menu/search', [MenuController::class, 'search'])->name('menu.search');

Route::get('/promotions', function () {
    return view('promotions');
})->name('promotions');




// Rute untuk keranjang
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Rute untuk Checkout
// Route::get('/checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout.form');
// Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
// Route::post('/checkout/confirmation', [CheckoutController::class, 'showConfirmation'])->name('checkout.confirmation');



// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::group(['middleware' => ['role:1']], function () {
//     Route::resource('menu', MenuController::class);
// });

require __DIR__.'/auth.php';
