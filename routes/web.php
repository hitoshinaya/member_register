<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;

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

//会員情報登録画面表示
Route::get('member/entry',[MemberController::class, 'create'])->name('member.entry');

//会員情報保存
Route::post('member/entry',[MemberController::class,'store'])->name('member.store');

//会員情報一覧表示
Route::get('member/list',[MemberController::class, 'index'])->name('member.index');

//会員情報の編集と更新
//Route::get('member/show/{id}', [MemberController::class, 'show'])->name('member.show');

Route::get('member/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');
Route::patch('member/edit/{id}', [MemberController::class, 'update'])->name('member.update');
// Route::patch('member/edit/{id}', [MemberController::class, 'update'])->name('member.update');
// Route::post('member/update/{id}', [YourController::class, 'update'])->name('member.update');

//会員情報の削除
Route::delete('member/edit/{id}',[MemberController::class, 'destroy'])->name('member.destroy');