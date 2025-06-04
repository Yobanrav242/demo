<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

// viewing form
Route::get('/form',function(){
    return view('form');
})->name('form.new');
// storing form data
Route::post('/store',[FormController::class,'store'])->name('form.store');
// retrieve data view
Route::get('/viewForm',[FormController::class,'view'])->name('form.view');  
// edit data from viewForm
Route::get('/edit/{id}',[FormController::class,'edit'])->name('form.edit');
// update data from editForm
Route::put('update/{id}',[FormController::class,'update'])->name('form.update');
// delete data from viewForm
Route::get('/delete/{id}',[FormController::class,'delete'])->name('formdata.delete');