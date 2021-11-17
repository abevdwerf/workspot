<?php
    use Illuminate\Support\Facades\Route;

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

    Route::get('', [App\Http\Controllers\IndexController::class, 'beforeIndex']);

    Route::post('rooms', [App\Http\Controllers\RoomsController::class, 'findRooms']);

    Route::get('workspace/{id}', [App\Http\Controllers\RoomsController::class, 'findRoom']);

    // For ajax request with Javascript
    Route::get('getrooms', [App\Http\Controllers\RoomsController::class, 'specifyRooms']);
?>
