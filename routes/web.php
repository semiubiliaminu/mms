<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use Symfony\Component\Routing\Route as SymfonyRoute;

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
    return view('welcome');
});

// Route::get('/users', function(){
//     return response()->json([
//         'name' => 'semiu biliaminu',
//         "address" => "moloney street, yaba",
//         "client" => "ansurudeen"
//     ]);
// });


Route::get('/register/{id}/{name}',[RegisterController::class,'index'])->where([
    "id" => '[0-9]+',
    "name"=>'[a-zA-Z]+'
]);
