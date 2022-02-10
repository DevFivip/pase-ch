<?php

use App\Http\Controllers\MakePdfController;
use App\Http\Controllers\PersonaController;
use App\Models\Persona;
use Illuminate\Http\Request;
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

Route::get('test', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('scan');
});

Route::get('scan', function () {
    return view('scan');
});

Route::get('resultado', function (Request $request) {
    try {
        $data = $request->all();
        $persona = Persona::where('qr', $data['tk'])->first();
        if (!!$persona) {
            return response()->json($persona, 200);
        } else {
            return response()->json(['errors' => ['Not Fund']], 404);
        }
    } catch (\Throwable $th) {
        return response()->json(['errors' => ['Not Fund']], 404);
    }
});

Route::get('/get/{id}', [MakePdfController::class, 'make'])->middleware('auth');

Route::resource('persona', PersonaController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
