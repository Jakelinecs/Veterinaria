<?php

use Illuminate\Support\Facades\Route;


//
//agregamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CarnetServicioController;
use App\Http\Controllers\ContratoController;



use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ActivoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\TipoServicioController;
use App\Http\Controllers\ServicioController;



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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware'=> ['auth']], function(){




    Route:: resource( 'roles', RolController::class);
    Route:: resource( 'usuarios', UsuarioController::class);
    Route:: resource( 'blogs', BlogController::class);
    Route:: resource( 'contratos', ContratoController::class);
    Route:: resource( 'personas', PersonaController::class);
    Route:: resource( 'pacientes', PacienteController::class);
    Route:: resource( 'carnet_servicios', CarnetServicioController::class);



    Route:: resource( 'categorias', CategoriaController::class);
    Route:: resource( 'productos', ProductoController::class);
    Route:: resource( 'activos', ActivoController::class);
    Route:: resource( 'ingresos', IngresoController::class);
    Route:: resource( 'inventarios', InventarioController::class);



    Route:: resource( 'tipo_servicios', TipoServicioController::class);
    Route:: resource( 'servicios', ServicioController::class);



    Route::get('carnet/ver',  [UsuarioController::class, 'ver'])->name('ver');



    Route::get('estilo/light', [UsuarioController::class, 'light'])->name('estilo.light');
    Route::get('estilo/normal', [UsuarioController::class, 'normal'])->name('estilo.normal');
    Route::get('estilo/dark', [UsuarioController::class, 'dark'])->name('estilo.dark');

    Route::post('usuarios/editProfileForm', [UsuarioController::class, 'editProfileForm'])->name('usuarios.editProfileForm');
    Route::post('usuarios/changePasswordForm', [UsuarioController::class, 'changePasswordForm'])->name('usuarios.changePasswordForm');

});


