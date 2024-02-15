<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'index']);


Route::get('/sitemap.xml', [WebsiteController::class, 'sitemap']);
Route::get('/Sitemap.xml', [WebsiteController::class, 'sitemap']);