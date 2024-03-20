<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LocaleMiddleware;

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
Route::middleware(LocaleMiddleware::class)->group(function() {
    Route::get('locale/{locale}', function($locale){
        return redirect()->back()->withCookie('locale', $locale);
    });

    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/nosotros', function() {
        return view('nosotros');
    });
    
    Route::get('/afiliaciones', function() {
        return view('afiliaciones');
    });
    
    Route::get('/afiliaciones', function() {
        return view('afiliaciones');
    });
    
    Route::get('/fidi-faim', function() {
        return view('fidi-faim');
    });
    
    Route::get('/servicios', function() {
        return view('servicios');
    });
    
    Route::get('/contacto', function() {
        if(app()->getLocale() == 'en'){
            return view('contact-us');
        }else{
            return view('contacto');
        }
    });
    
    Route::get('/almacenes', function() {
        return view('almacenes');
    });
    
    Route::get('/responsabilidad', function() {
        return view('responsabilidad');
    });

    Route::post('contact-form', [App\Http\Controllers\MailController::class, 'submit']);

});
