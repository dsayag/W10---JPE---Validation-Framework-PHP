<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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
/*
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/listcharacters', function () {
    return view('listCharacters');
});

Route::get('/addcharacter', function () {
    return view('addCharacter');
});

*/

/* Route of Characters */
Route::get('/', [NavController::class, 'home']);
Route::get('/home', [NavController::class, 'home']);
Route::get('/listCharacters', [NavController::class, 'listCharacters']);
Route::get('/character/{id}', [NavController::class, 'character']);
Route::get('/addCharacter', [NavController::class, 'addCharacter']);
Route::post('/addCharacter', [ActionController::class, 'addCharacter']);
Route::post('/deleteCharacter', [ActionController::class, 'deleteCharacter']);
Route::get('/editCharacter/{id}', [NavController::class, 'editCharacter']);
Route::post('/editCharacter', [ActionController::class, 'editCharacter']);

/* Route of Designers */
Route::get('/listDesigners', [NavController::class, 'listDesigners']);
Route::get('/designer/{id}', [NavController::class, 'designer']);
Route::get('/addDesigner', [NavController::class, 'addDesigner']);
Route::post('/addDesigner', [ActionController::class, 'addDesigner']);
Route::post('/deleteDesigner', [ActionController::class, 'deleteDesigner']);
Route::get('/editDesigner/{id}', [NavController::class, 'editDesigner']);
Route::post('/editDesigner', [ActionController::class, 'editDesigner']);