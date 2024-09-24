<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Reserv_detailController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Room_type_masterController;
use App\Models\Room_type_master;

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

Route::get('Guest/create', [GuestController::class, 'create']);
Route::post('Guest', [GuestController::class, 'store'])->name('Guest.store');

Route::get('Reservation/create', [ReservationController::class, 'create']);
Route::get('Reserv_detail/create', [Reserv_detailController::class, 'create']);
Route::get('Room/create', [RoomController::class, 'create']);
Route::get('Room_type_master/create', [Room_type_masterController::class, 'create']);

Route::get('/', function () {
    return view('welcome');
});
