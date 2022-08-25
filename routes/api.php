<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//api category
Route::get(
    'get-category',
    [CategoryController::class, 'index']
)->name('category.index');


//json sederhana
//route = rute = jalan jalur
Route::get('/belajarjson', function () {
    return response()->json(
        [
            'msg' => true,
            'belajar' => 'Hello World',
            'data' => [
                'nama' => 'nama kalian',
                'kelas' => 'kelas kalian'
            ],
            'alamat' => [
                'RT' => '01',
                'RW' => '010',
                'Kelurahan' => 'Bekasi',
                'Kecamatan' => 'Bekasi KOta',
                'kodepos' => [
                    'kode' => '12345',
                ]
            ],
            'orangtua' => [
                'ayah' => 'ayah kalian',
                'ibu' => 'ibu kalian'
            ],
            'pasphoto' => 'urlphoto'
        ]
    );
});
