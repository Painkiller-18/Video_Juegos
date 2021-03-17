<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Juegos_ofert_Controller;




Route::get('Juegos', function () {
    return view('Juego_ofert');
});


Route::get('modal', function () {
    return view('Modal');
});

route::get('Juego_ofert',[Juegos_ofert_Controller::class,'Juego_ofert'])->name('Juego_ofert');
route::post('guarda_juego_of',[Juegos_ofert_Controller::class,'guarda_juego_of'])->name('guarda_juego_of');
route::post('modal',[Juegos_ofert_Controller::class,'modal'])->name('modal');

route::get('eloquent',[Juegos_ofert_Controller::class,'eloquent'])->name('eloquent');

route::get('reportejuegosof',[Juegos_ofert_Controller::class,'reportejuegosof'])->name('reportejuegosof');

route::get('desactivaoferta/{id_of}',[Juegos_ofert_Controller::class,'desactivaoferta'])->name('desactivaoferta');
route::get('activaoferta/{id_of}',[Juegos_ofert_Controller::class,'activaoferta'])->name('activaoferta');
route::get('borraoferta/{id_of}',[Juegos_ofert_Controller::class,'borraoferta'])->name('borraoferta');

route::get('editaroferta/{id_of}',[Juegos_ofert_Controller::class,'editaroferta'])->name('editaroferta');
route::post('guardacambios',[Juegos_ofert_Controller::class,'guardacambios'])->name('guardacambios');