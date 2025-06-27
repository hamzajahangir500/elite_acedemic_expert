<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\ConsultancyController;
use App\Http\Controllers\ConsultancyRequestController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Models\User;

require __DIR__.'/auth.php';

Route::get('/storage-link', function() {
    $publicStorage = public_path('storage');

    // Remove existing symbolic link or directory
    if (file_exists($publicStorage)) {
        File::delete($publicStorage);
    }

    // Recreate the symbolic link
    Artisan::call('storage:link');

    return 'The [public/storage] directory has been re-linked successfully.';
});

Route::get('/', function () {
    $user = User::find(1); // Get the user
    if($user){
        $user->assignRole('admin'); // Assign 'admin' role
    }
    return view('home.pages.index');
})->name('home');

Route::get('about-us', function () {
    return view('home.pages.about_us');
})->name('about.us');

Route::get('our-services', function () {
    return view('home.pages.services');
})->name('our.services');

Route::get('our-writers', function () {
    return view('home.pages.our_writers');
})->name('our.writers');

Route::get('samples', function () {
    return view('home.pages.samples');
})->name('samples');

Route::get('sampsubserviceles', function () {
    return view('home.pages.subservice');
})->name('subservice');

Route::get('free-topics', function () {
    return view('home.pages.free_topics');
})->name('free.topics');

Route::get('blogs', function () {
    return view('home.pages.blogs.index');
})->name('free.topics');

Route::get('contact-us', function () {
    return view('home.pages.contact_us');
})->name('contact.us');

Route::resource('order', OrderController::class);

Route::post('consultancy/request', ConsultancyController::class)->name('request.consultancy');

Route::middleware('role:customer')->group(function () {
    Route::get('account', [AccountController::class, 'index'])->name('user.account');
    Route::put('account/update', [AccountController::class, 'update'])->name('user.account.update');
});


/***************** Blogs Routes *****************/
Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('blogs/{blog}', [HomeController::class, 'blog'])->name('blogs.show');
Route::get('auhor/{id?}', [HomeController::class, 'getBlogsByAuthor'])->name('auhor.show');

Route::get('get-blog/{tag?}/{theme_id?}', [HomeController::class, 'getBlogsByTag'])->name('get.blogsByTag');
Route::get('search-blog/', [HomeController::class, 'searchBlogs'])->name('search.blogs');


/***************** Admin Routes *****************/
Route::prefix('admin') // Set the prefix to 'admin'
    ->middleware('role:admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

    Route::resource('authors', AuthorController::class);
    Route::resource('themes', ThemeController::class);
    Route::resource('articles', ArticleController::class);
    Route::post('articles/file-upload',['as' => 'articles.file-upload','uses' => 'ArticleController@file_upload']);
    Route::resource('consultancy_requests', ConsultancyRequestController::class);
    Route::get('users', [UserController::class, 'index'])->name('users.get');
    Route::get('get/orders', [OrderController::class, 'getOrders'])->name('orders.get');

    Route::get('profile', [AccountController::class, 'profile'])->name('profile.get');
    Route::put('/admin/profile', [AccountController::class, 'updateProfile'])->name('profile.update');
    Route::post('/customers/store', [AccountController::class, 'storeCustomer'])->name('customers.store');
    Route::get('/customers/{customer}/edit', [AccountController::class, 'editCustomer'])->name('customers.edit');

});