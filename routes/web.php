<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Hiển thị danh sách công việc khi truy cập vào '/'
Route::get('/', [TaskController::class, 'index']);
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/tasks', [TaskController::class, 'index']); // Liên kết route '/tasks' với phương thức 'index'
 Route::resource('tasks', TaskController::class);