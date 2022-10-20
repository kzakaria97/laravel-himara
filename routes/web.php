<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TopBarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GallerieController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Foundation\Console\AboutCommand;
use App\Http\Controllers\CategallerieController;
use App\Http\Controllers\ServiceheaderController;
use App\Http\Controllers\CategallerieMainController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/Room', function () {
    return view('pages.roomList.index');
})->name('roomList');
Route::get('/booking', function () {
    return view('pages.booking.index');
})->name('booking');
Route::get('/Contact', function () {
    return view('pages.contact.index');
})->name('contact');
Route::get('/RoomList', function () {
    return view('pages.roomList.index');
})->name('roomList');
Route::get('/Blog', function () {
    return view('pages.blog.index');
})->name('blog');
Route::get('/Team', function () {
    return view('pages.team.index');
})->name('team');

//TOPBAR
Route::get('/TopBar',[TopBarController::class,'index']);
Route::post('/storeTopBar',[TopBarController::class,'store']);
Route::get('/{id}/editTopBar',[TopBarController::class,'edit'])->name('editTopBar');
Route::put('/{id}/updateTopBar',[TopBarController::class,'update'])->name('updateTopBar');

// About
Route::get('/About',[AboutController::class,'index']);
Route::post('/storeAbout',[AboutController::class,'store']);
Route::get('/{id}/editAbout',[AboutController::class,'edit'])->name('editAbout');
Route::put('/{id}/updateAbout',[AboutController::class,'update'])->name('updateAbout');

//Restaurant
Route::get('/Restaurant',[RestaurantController::class,'index'])->name('restau');
Route::post('/storeRestaurant',[RestaurantController::class,'store']);
Route::get('/{id}/editRestaurant',[RestaurantController::class,'edit'])->name('editRestaurant');
Route::put('.{id}/updateRestaurant',[RestaurantController::class,'update'])->name('updateRestaurant');
Route::delete('/{id}/deleteRestaurant',[RestaurantController::class,'destroy']);

//video
Route::get('/video',[VideoController::class,'index'])->name('video');
Route::post('/storeVideo',[VideoController::class,'store']);
Route::get('/{id}/editVideo',[VideoController::class,'edit'])->name('editVideo');
Route::put('/{id}/updateVideo',[VideoController::class,'update'])->name('updateVideo');
// Route::delete('/{id}/deleteVideo',[VideoController::class,'destroy']);

//categorieGallerie
Route::get('/CategorieGallerie',[CategallerieController::class,'index'])->name('categorieGallerie');
Route::post('/storeCategorieGallerie',[CategallerieController::class,'store']);
Route::get('/{id}/editCategorieGallerie',[CategallerieController::class,'edit'])->name('editCategorieGallerie');
Route::put('/{id}/updateCategorieGallerie',[CategallerieController::class,'update'])->name('updateCategorieGallerie');
Route::delete('/{id}/deleteCategorieGallerie',[CategallerieController::class,'destroy']);

//gallerie CategallerieController
Route::get('/Gallery',[CategallerieMainController::class,'index'])->name('gallerie');
//gallerie GallerieController
Route::get('/GalleryForm',[GallerieController::class,'index'])->name('gallerieForm');
Route::post('/storeGallerie',[GallerieController::class,'store']);
Route::get('/{id}/editGallerie',[GallerieController::class,'edit'])->name('editGallerie');
Route::put('/{id}/updateGallerie',[GallerieController::class,'update'])->name('updateGallerie');
Route::delete('/{id}/deleteGallerie',[GallerieController::class,'destroy']);

//Slider
Route::get('/Slider',[SliderController::class,'index'])->name('slider');
Route::post('/storeSlider',[SliderController::class,'store']);
Route::get('/{id}/editSlider',[SliderController::class,'edit'])->name('editSlider');
Route::put('/{id}/updateSlider',[SliderController::class,'update'])->name('updateSlider');
Route::delete('/{id}/deleteSlider',[SliderController::class,'destroy']);

//Service header
Route::get('/Service',[ServiceheaderController::class,'index'])->name('serviceheader');
Route::post('/storeServiceheader',[ServiceheaderController::class,'store']);
Route::get('/{id}/editServiceheader',[ServiceheaderController::class,'edit'])->name('editServiceheader');
Route::put('/{id}/updateServiceheader',[ServiceheaderController::class,'update'])->name('updateServiceheader');
Route::delete('/{id}/deleteServiceheader',[ServiceheaderController::class,'destroy']);

//Service
Route::get('/Service',[ServiceController::class,'index'])->name('service');
Route::post('/storeService',[ServiceController::class,'store']);
Route::get('/{id}/editService',[ServiceController::class,'edit'])->name('editService');
Route::put('/{id}/updateService',[ServiceController::class,'update'])->name('updateService');
Route::delete('/{id}/deleteService',[ServiceController::class,'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
