<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\LandingPage\LandingController;
use App\Http\Controllers\admin\Advertisements\AdvertisemntController;
use App\Http\Controllers\admin\Advertisements\SidebarController;
use App\Http\Controllers\admin\category\CategoryControler;
use App\Http\Controllers\admin\category\Sub_CategoriesController;
use App\Http\Controllers\admin\Post\PostController;
use App\Http\Controllers\UserController;

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

// Admin Login Route
Route::controller(AdminController::class)->group(function(){
    Route::get('admin/login/','admin_login')->name('admin.up');
    Route::get('/logout/admin', 'admin_logout')->name('admin.logout');
});

//Admin Routes
Route::get('/admin', [AdminController::class, 'admin_auth'])->name('admin.show')->middleware('admin:admin');
Route::get('/profile', [AdminController::class, 'admin_profile'])->name('admin.profile')->middleware('admin:admin');
Route::get('/profile/edit', [AdminController::class, 'Editprofile'])->name('profile.edit')->middleware('admin:admin');
Route::post('/profile/update', [AdminController::class, 'StoreProfile'])->name('profile.update')->middleware('admin:admin');
Route::get('/password', [AdminController::class, 'ChangePassword'])->name('show.password')->middleware('admin:admin');
Route::post('/password/update', [AdminController::class, 'UpdatePassword'])->name('update.password')->middleware('admin:admin');
Route::get('/advertisement', [AdvertisemntController::class, 'home_ad'])->name('home.ad')->middleware('admin:admin');
Route::post('/advertisement/update', [AdvertisemntController::class, 'home_ad_update'])->name('ad.update')->middleware('admin:admin');

//Sidebar Advertisement Admin Route

Route::get('/sidebarAll', [SidebarController::class, 'all'])->name('sidebar.all')->middleware('admin');
Route::get('/sidebar/create', [SidebarController::class, 'create'])->name('sidebar.create')->middleware('admin');
Route::post('/sidebar/store', [SidebarController::class, 'sidebar_store'])->name('sidebar.store')->middleware('admin');
Route::put('/sidebar/update/{id}', [SidebarController::class, 'sidebar_update'])->name('sidebar.update')->middleware('admin');
Route::get('/sidebar/edit/{id}', [SidebarController::class, 'Sidebar_edit'])->name('sidebar.edit')->middleware('admin');
Route::get('/sidebar/delete/{id}', [SidebarController::class, 'Sidebar_delete'])->name('sidebar.delete')->middleware('admin');

// Category Admin Routes
Route::get('/categoryAll', [CategoryControler::class, 'show_category'])->name('category.all')->middleware('admin');
Route::get('/category/create', [CategoryControler::class, 'create_category'])->name('category.create')->middleware('admin');
Route::post('/category/store', [CategoryControler::class, 'category_store'])->name('category.store')->middleware('admin');
Route::put('/category/update/{id}', [CategoryControler::class, 'category_update'])->name('category.update')->middleware('admin');
Route::get('/category/edit/{id}', [CategoryControler::class, 'category_edit'])->name('category.edit')->middleware('admin');
Route::get('/category/delete/{id}', [CategoryControler::class, 'category_delete'])->name('category.delete')->middleware('admin');

// Sub Category Admin Routes
Route::get('/subcategoryAll', [Sub_CategoriesController::class, 'sub_show_category'])->name('sub_category.all')->middleware('admin');
Route::get('/subcategory/create', [Sub_CategoriesController::class, 'sub_create_category'])->name('sub_category.create')->middleware('admin');
Route::post('/subcategory/store', [Sub_CategoriesController::class, 'sub_category_store'])->name('sub_category.store')->middleware('admin');
Route::put('/subcategory/update/{id}', [Sub_CategoriesController::class, 'sub_category_update'])->name('sub_category.update')->middleware('admin');
Route::get('/subcategory/edit/{id}', [Sub_CategoriesController::class, 'sub_category_edit'])->name('sub_category.edit')->middleware('admin');
Route::get('/subcategory/delete/{id}', [Sub_CategoriesController::class, 'sub_category_delete'])->name('sub_category.delete')->middleware('admin');


// Posts Admin Route
Route::get('/post/all', [PostController::class, 'Post_show'])->name('Post.all')->middleware('admin');
Route::get('/post/create', [PostController::class, 'Post_create'])->name('Post.create')->middleware('admin');
Route::post('/post/store', [PostController::class, 'Post_store'])->name('Post.store')->middleware('admin');
Route::post('/post/update/{id}', [PostController::class, 'Post_update'])->name('Post.update')->middleware('admin');
Route::get('/post/edit/{id}', [PostController::class, 'Post_edit'])->name('Post.edit')->middleware('admin');
Route::get('/post/delete/{id}', [PostController::class, 'Post_delete'])->name('Post.delete')->middleware('admin');
Route::get('/post/tags/delete/{id}/{id1}',[PostController::class, 'delete_tag'])->name('tag.delete')->middleware('admin');

// Landing page Routes

route::view('/testing','Posts.testing');

Route::get('/home', [LandingController::class, 'landing_ad'])->name('landing.home');
Route::get('/post1', [LandingController::class, 'blog1'])->name('blog.post1')->middleware('auth');

//User login Route
Route::controller(UserController::class)->group(function(){
Route::get('/user/login', 'uslogin')->name('user.login');
Route::post('/user/submit', 'user_submit')->name('submit.user');
Route::get('/user/logout','userlogout')->name('userLogout');
});

require __DIR__.'/auth.php';
