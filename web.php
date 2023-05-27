<?php

use Illuminate\Support\Facades\Route;

Route::get('/Main', function () {
    return view('private');
});

Route::get('/Information', function () {
    return view('Bear_Dream_Information');
});

Route::get('/Conteiner', function () {
    return view('Bear_Dream_Conteiner');
});

Route::get('/Gratitude', function () {
    return view('Bear_Dream_Gratitude');
});

Route::name('user.')->group(function(){
    Route::view('/private', 'private')->middleware('auth')->name('private');

    Route::get('login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::get('registration', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\register_controller::class, 'save']);

    Route::post('/login', [\App\Http\Controllers\login_controller::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/login');
    })->name('logout');

});
