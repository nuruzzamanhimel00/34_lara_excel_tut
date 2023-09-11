<?php

use Illuminate\Support\Facades\Route;
use App\Exports\UsersExport;
use App\Http\Controllers\ExportController;
use Maatwebsite\Excel\Facades\Excel;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/export', function () {
    return Excel::download(new UsersExport, 'users.xlsx');
});

Route::get('users/export/', [ExportController::class, 'export']);
Route::get('orders/export/', [ExportController::class, 'orderExport']);
