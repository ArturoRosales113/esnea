<?php
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

Route::namespace('Frontend')->group(function () {

    // Home
    Route::get('/', 'FrontController@index')->name('front.index');
    // Nosotros
    Route::get('/nosotros', ['uses' => 'FrontController@nosotros' ,'as' => 'front.nosotros']);
    // Plan de estudios
    Route::get('/plan_de_estudios', ['uses' => 'FrontController@planDeEstudios' ,'as' => 'front.plan_de_estudios']);
    // Isncripciones y costos
    Route::get('/inscripciones_y_costos', ['uses' => 'FrontController@inscripciones' ,'as' => 'front.inscripciones']);
    // Campo Laboral
    Route::get('/campo_laboral', ['uses' => 'FrontController@campoLaboral' ,'as' => 'front.campo_laboral']);
    // Diplomados
    Route::get('/diplomados', ['uses' => 'FrontController@diplomados' ,'as' => 'front.campo_laboral']);
    // Becas
    Route::get('/becas', ['uses' => 'FrontController@becas' ,'as' => 'front.becas']);
    // Noticias
    Route::get('/noticias', ['uses' => 'FrontController@noticias' ,'as' => 'front.noticias']);
    // Galería
    Route::get('/galeria', ['uses' => 'FrontController@galeria' ,'as' => 'front.galeria']);
    // Contacto
    Route::get('/contacto', ['uses' => 'FrontController@contacto' ,'as' => 'front.contacto']);
    // Contacto enviar formulario
    Route::post('/contacto', ['uses' => 'FrontController@contactoFormulario' ,'as' => 'front.contacto.formulario']);

});

Route::namespace('Backend')->group(function () {

    // Controllers Within The "App\Http\Controllers\Backend" Namespace
    Route::prefix('admin')->group(function () {
        Route::middleware(['auth'])->group(function () {

            // Dashboard
            Route::get('/', 'DashboardController@index')->name('admin.index');
            // Resource Controllers

      });
     });
});

Auth::routes();
