<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomUserProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Livewire\Producto\EditarProducto;
use App\Http\Livewire\Ingreso\IngresoAuto;
use App\Http\Livewire\Producto\CrearProducto;
use App\Http\Livewire\Producto\Productos;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Http;


 
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $user = DB::table('users')
        ->where('email',$request->email)
        ->first();

    if($user->status == 0 || !$user) {
        return back()->withErrors(['email' => "Correo no encontrado en nuestros registros"]);
    }
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/', function () {

    // Credenciales para la API
    $endpoint = 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43717/datos/oportuno';
    
    // Ojo el token tiene vigencia o si se usa mas de 50 veces en un lapso de 5 min se bloquea
    $token = '8b340de89c0ec3971ae83dff7fa9f08821b997adf64cd7891ae721195e4a7bbe';

    //Mandamos los headers
    $response = Http::get($endpoint, [
        'token' => $token,
    ]);

    // Validamos la petición 
    if ($response->ok()) {
        $data = $response->json();

        // Obtén el valor del campo "dato" & "fecha"
         $fecha = $data['bmx']['series'][0]['datos'][0]['fecha'];
        $dato = $data['bmx']['series'][0]['datos'][0]['dato'];

        return view('welcome', ['fecha' => $fecha, 'dato' => $dato]);
    } else {
        // Manejar el error si la solicitud falla.
        return view('welcome', ['dato' => 0]);
    }
});

//Rutas de Bombas
Route::view('/bombas/altamira', 'bombas.altamira')->name('altamira');
Route::view('/bombas/armstrong', 'bombas.armstrong')->name('armstrong');
Route::view('/bombas/aurora', 'bombas.aurora')->name('aurora');
Route::view('/bombas/barmesa', 'bombas.barmesa')->name('barmesa');
Route::view('/bombas/barmesa/autocebantes','bombas.barmesa.autocebantes')->name('autocebantes');
Route::view('/bombas/barmesa/tragasolidos','bombas.barmesa.tragasolidos')->name('tragasolidos');
Route::view('/bombas/barmesa/centrifugadas/alta','bombas.barmesa.altaPresion')->name('centrifugadasAlta');
Route::view('/bombas/barmesa/centrifugadas/media','bombas.barmesa.mediaPresion')->name('centrifugadasMedia');
Route::view('/bombas/barmesa/centrifugadas/inox','bombas.barmesa.inox')->name('centrifugadasInox');
Route::view('/bombas/barmesa/centrifugadas/caseras','bombas.barmesa.caseras')->name('centrifugadasCaseras');
Route::view('/bombas/barmesa/centrifugadas/ansi','bombas.barmesa.ansi')->name('centrifugadasAnsi');
Route::view('/bombas/barmesa/sumergilbles/achique','bombas.barmesa.sumergibleAchique')->name('sumergiblesAchique');
Route::view('/bombas/barmesa/sumergilbles/inox','bombas.barmesa.sumergibleInox')->name('sumergiblesInox');
Route::view('/bombas/franklin', 'bombas.franklin')->name('franklin');
Route::view('/bombas/grundfos', 'bombas.grundfos')->name('grundfos');
Route::view('/bombas/impel', 'bombas.impel')->name('impel');
Route::view('/bombas/jandy', 'bombas.jandy')->name('jandy');
Route::view('/bombas/mann', 'bombas.mann')->name('mann');
Route::view('/bombas/netzsch', 'bombas.netzsch')->name('netzsch');
Route::view('/bombas/pentar', 'bombas.pentar')->name('pentar');
Route::view('/bombas/scott', 'bombas.scott')->name('scott');
Route::view('/bombas/tsurumi', 'bombas.tsurumi')->name('tsurumi');
Route::view('/bombas/wdm', 'bombas.wdm')->name('wdm');
Route::view('/bombas/wilo', 'bombas.wilo')->name('wilo');
Route::view('/bombas/yamada', 'bombas.yamada')->name('yamada');
Route::view('/bombas/zoeller', 'bombas.zoeller')->name('zoeller');

//Rutas de Otras lineas de Productos
Route::view('/contraincendios','otros.contraincendios')->name('contraincendios');
Route::view('/hidroneumaticos','otros.hidroneumaticos')->name('hidroneumaticos');
Route::view('/motores','otros.motores')->name('motores');

//Ruta de Blog
Route::view('/blog','blog.index')->name('blog');

//Ruta de Contacto
Route::view('/contacto','contacto.index')->name('contacto');

//Ruta de Tienda
Route::view('/tienda','tienda.index')->name('tienda');

//Ruta de Servicios
Route::view('/servicios','servicios.index')->name('servicios');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    
    $user_google = Socialite::driver('google')->stateless()->user();


    $user = User::updateOrCreate([
        'google_id'=> $user_google->id,
    ],[ 
        'name'=>$user_google->name,
        'email'=>$user_google->email,
        'status'=>1,
        'phone'=>NULL,
    ]);

    $user->syncRoles(3);

    Auth::login($user);

    return redirect('/');
    
});

Route::middleware([
    'auth:sanctum',
    // 'verified',
    config('jetstream.auth_session')
])->group(function () {
    Route::get('/user/profile/security', [CustomUserProfileController::class, 'show'])->name('profile.security'); 
    return view('welcome');
    
});

Route::middleware([
    'can:modificacion',
    'auth:sanctum',
    config('jetstream.auth_session')
])->group(function () {
    Route::resource('users', UsersController::class);
    Route::get('/dashboard', function () {
   
        return view('dashboard');
    })->name('dashboard');

    Route::get('/productos', Productos::class)->name('productos.index');
    Route::get('/productos/create',CrearProducto::class)->name('productos.create');
    Route::get('/productos/edit/{id}',EditarProducto::class)->name('productos.edit');
    Route::get('/productos/delete/{id}',[Productos::class,'delete'])->name('productos.delete');
    
});
