<?php

use App\Http\Controllers\TicketController;
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

Route::get('/', function () {
    return 'welcome';
});

Route::get('ticket',[TicketController::class, 'ticket'])->name('template');
Route::post('ticket/store',[TicketController::class, 'storeData'])->name('store');
Route::get('MyTicket',[TicketController::class, 'myTicket'])->name('myticket');
Route::post('user/reply/{id}',[TicketController::class,'userReply']);


//Admin

Route::get('admin/ticket', [TicketController::class, 'adminTicket'])->name('admin/ticket');
Route::get('edit/ticket/{id}',[TicketController::class, 'editTicket']);
Route::post('update/ticket/{id}',[TicketController::class, 'updateTicket']);
Route::get('delete/{id}',[TicketController::class, 'deleteTicket']);
Route::post('reply/{id}',[TicketController::class,'reply']);
Route::get('Reply/Blade/{id}', [TicketController::class, 'replyBlade']);
Route::get('admin/reply/{id}',[TicketController::class, 'adminReply']);



















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
