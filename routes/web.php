<?php
    use Illuminate\Support\Facades\Route;
    use Jenssegers\Agent\Agent;

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

    $agent = new Agent();

    Route::get('', function () {
        return view('index');
    });

    if ($agent->isDesktop())
    {
        Route::get('app', function () {
            return view('app');
        });
    }
    else
    {
        Route::get('app', function () {
            return redirect()->route('rooms');
        });
    }


    Route::get('rooms', [App\Http\Controllers\RoomsController::class, 'findRooms'])->name('rooms');

    Route::get('workspace/{id}', [App\Http\Controllers\RoomsController::class, 'findRoom']);
?>
