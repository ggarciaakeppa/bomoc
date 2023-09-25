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
    return view('inicio2.index');
});

Route::view('/inicio2','inicio2.index')->name('inicio');

//Rutas de Bombas
Route::view('/bombas/altamira', 'bombas/altamira.index')->name('altamira');
Route::view('/bombas/armstrong', 'bombas/armstrong.index')->name('armstrong');
Route::view('/bombas/aurora', 'bombas/aurora.index')->name('aurora');
Route::view('/bombas/barmesa', 'bombas/barmesa.index')->name('barmesa');
Route::view('/bombas/franklin', 'bombas/franklin.index')->name('franklin');
Route::view('/bombas/grundfos', 'bombas/grundfos.index')->name('grundfos');
Route::view('/bombas/impel', 'bombas/impel.index')->name('impel');
Route::view('/bombas/jandy', 'bombas/jandy.index')->name('jandy');
Route::view('/bombas/mann', 'bombas/mann.index')->name('mann');
Route::view('/bombas/netzsch', 'bombas/netzsch.index')->name('netzsch');
Route::view('/bombas/pentar', 'bombas/pentar.index')->name('pentar');
Route::view('/bombas/scott', 'bombas/scott.index')->name('scott');
Route::view('/bombas/tsurumi', 'bombas/tsurumi.index')->name('tsurumi');
Route::view('/bombas/wdm', 'bombas/wdm.index')->name('wdm');
Route::view('/bombas/wilo', 'bombas/wilo.index')->name('wilo');
Route::view('/bombas/yamada', 'bombas/yamada.index')->name('yamada');
Route::view('/bombas/zoeller', 'bombas/zoeller.index')->name('zoeller');

//Rutas de Otras lineas de Productos
Route::view('/contraincendios','contraincendios.index')->name('contraincendios');
Route::view('/hidroneumaticos','hidroneumaticos.index')->name('hidroneumaticos');
Route::view('/motores','motores.index')->name('motores');

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


Route::middleware([
    'can:ingresos',
    'auth:sanctum',
    config('jetstream.auth_session')
])->group(function () {
    Route::get('/ingreso/auto', IngresoAuto::class)->name('ingreso.auto.index');
    Route::get('/ingreso/auto/create', [IngresoAuto::class, 'create'])->name('ingreso-auto.create');
    Route::get('/ingreso/auto/edit/{id}', [IngresoAuto::class, 'edit'])->name('ingreso-auto.edit');
});