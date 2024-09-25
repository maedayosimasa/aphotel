<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Reserv_detailController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Room_type_masterController;
use App\Models\Reserv_detail;
use App\Models\Reservation;
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
Route::get('reservation',[ReservationController::class, 'index']);


Route::get('Guest/create', [GuestController::class, 'create']);
Route::post('Guest', [GuestController::class, 'store'])->name('guest.store');

Route::get('Reservation/create', [ReservationController::class, 'create']);
Route::post('Reservation', [ReservationController::class, 'store'])->name('Reservation.store');

Route::get('Reserv_detail/create', [Reserv_detailController::class, 'create']);
Route::post('Reserv_detail', [Reserv_detailController::class, 'store'])->name('reserv_detail.store');

Route::get('Room/create', [RoomController::class, 'create']);
Route::post('Room',[RoomController::class, 'store'])->name('room.store');

Route::get('Room_type_master/create', [Room_type_masterController::class, 'create']);
Route::post('Room_type_master', [Room_type_masterController::class, 'store'])->name('room_type_master.store');

Route::get('/', function () {
    return view('welcome');
});
