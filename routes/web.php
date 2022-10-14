<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;

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
Route::get("/utama", function () {
    return view("utama");
})->name("ut");

Route::get("/opini", function () {
    return view("opini");
})->name("op");
Route::get("/tegnologi", function () {
    return view("tegnologi");
})->name("tg");
Route::get("/islami", function () {
    return view("islami");
})->name("ii");
Route::get("/olahraga", function () {
    return view("olahraga");
})->name("og");
Route::get("/politik", function () {
    return view("politik");
})->name("pl");
Route::get("/travel", function () {
    return view("travel");
})->name("tr");
Route::get("/contact", function () {
    return view("contact");
})->name("ct");
Route::get("/login", function () {
    return view("login");
})->name("lg");



// Route::get("/admin", function () {
//     return view("admin");
// })->name("ad");
// Route::get("/index", function () {
//     return view("index");
// })->name("idx");

Route::get("/hii/{nama}", [BelajarController::class,"hii"])->name("hii");

