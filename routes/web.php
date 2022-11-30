<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ManufactureController;
use App\Http\Controllers\Admin\DeviceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RepairProductController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\HomeController;



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
Route::get('logout', function ()
{
    Auth::logout();
    return redirect('/');
});

Route::get('/', function ()
{
    return view('frontend.home');
});



Route::prefix('signin')->group(function ()
{

    Route::get('/', function ()
    {
        return view('admin.login');
    })->middleware(['guest']);
    Route::get('signup', function ()
        {
            return view('admin.register');
        })->middleware(['guest']);
    Route::get('/forgotPassword', function ()
    {
        return view('admin.forgotPassword');
    })->middleware(['guest']);
});
Route::prefix('admin')->group(function ()
{
Route::group(['middleware' => ['auth']], function () { 
   
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
       
        Route::resource('users', UserController::class);
        Route::resource('manufacture',ManufactureController::class);
        Route::resource('device',DeviceController::class);
        Route::resource('product',RepairProductController::class);
        Route::any('getRepair', [App\Http\Controllers\Admin\RepairProductController::class, 'getRepair'])->name('getRepair');
        Route::any('getDevice', [App\Http\Controllers\Admin\RepairProductController::class, 'getDevice'])->name('getDevice');
        Route::any('term', [App\Http\Controllers\Admin\PageController::class, 'getTerm'])->name('getTerm');
        Route::any('privacy', [App\Http\Controllers\Admin\PageController::class, 'getPrivacy'])->name('getPrivacy');
        Route::any('imprint', [App\Http\Controllers\Admin\PageController::class, 'getImprint'])->name('getImprint');
        Route::any('storeTerm', [App\Http\Controllers\Admin\PageController::class, 'storeTerm'])->name('storeTerm');
        Route::get('view-profile', [App\Http\Controllers\Admin\AdminController::class, 'viewProfile'])->name('viewProfile');
        Route::get('update-profile', [App\Http\Controllers\Admin\AdminController::class, 'updateProfile'])->name('updateProfile');
        Route::post('update-user-profile/{id}', [App\Http\Controllers\Admin\AdminController::class, 'updateUserProfile'])->name('updateUserProfile');
});
});

Auth::routes([
    'register' => true
]);



