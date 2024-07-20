<?php

use App\Http\Controllers\Api\V1\{
    AuthController,
    DashboardController,
    LocationController,
    UploadController,
};
use App\Http\Controllers\Api\V1\User\{UserCatalogueController, UserController, PermissionController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('v1')->group(function () {
    // AUTH ROUTE
    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('refreshToken', [AuthController::class, 'refreshToken']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'me']);
    });

    // LOCATION ROUTE
    Route::prefix('location')->group(function () {
        Route::get('provinces', [LocationController::class, 'getProvinces']);
        Route::get('getLocation', [LocationController::class, 'getLocation']);
    });



    // Routes with JWT Middleware
    Route::group(['middleware' => 'jwt.verify'], function () {

        // DASHBOARD ROUTE
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::put('changeStatus', [DashboardController::class, 'changeStatus'])->name('changeStatus');
            Route::put('changeStatusMultiple', [DashboardController::class, 'changeStatusMultiple'])->name('changeStatusMultiple');
            Route::delete('deleteMultiple', [DashboardController::class, 'deleteMultiple'])->name('deleteMultiple');
        });

        // USER ROUTE
        // * Neu dung resource de tao .../catalogues thi phai gan them name neu khong se bi loi
        Route::resource('users/catalogues', UserCatalogueController::class)->names([
            'index' => 'users.catalogues.index',
            'create' => 'users.catalogues.create',
            'store' => 'users.catalogues.store',
            'show' => 'users.catalogues.show',
            'edit' => 'users.catalogues.edit',
            'update' => 'users.catalogues.update',
            'destroy' => 'users.catalogues.destroy',
        ]);
        Route::put('users/catalogues/permissions/{id}', [UserCatalogueController::class, 'updatePermissions'])->name('users.catalogues.permissions');
        Route::apiResource('users', UserController::class);
        Route::apiResource('permissions', PermissionController::class);

        // Upload ROUTE
        Route::apiResource('uploads', UploadController::class);
    });
});
