@push('css')
@endpush
<x-app-layout>
    <x-slot name="header">
        <!-- Header -->
        <div class="header">
            <div class="header-body">
                <div class="row align-items-center">
                    <div class="col">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle">
                            Bienvenido
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title">
                            Pantalla de Inicio
                        </h1>

                    </div>
                    
                </div>
       
            </div>
        </div>
    </x-slot>
    
    <div class=" row justify-content-center">
        <div class="col-sm-6">
            <div class="card border-primary mb-3">
              <div class="card-body">
                <h1 class="card-title ">Usuarios</h1>
                <div class="card-text  text-end mb-2 ">
                <a href="{{ route('users.index') }}" class="btn btn-md btn-primary w-50  mt-6 lift">Entrar</a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card border-primary mb-3">
              <div class="card-body">
                <h1 class="card-title ">Productos</h1>
                <div class="card-text  text-end mb-2 ">
                <a href="{{ route('users.index') }}" class="btn btn-md btn-primary w-50  mt-6 lift">Entrar</a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card border-primary mb-3">
              <div class="card-body">
                <h1 class="card-title ">Catalogos</h1>
                <div class="card-text  text-end mb-2 ">
                <a href="{{ route('users.index') }}" class="btn btn-md btn-primary w-50  mt-6 lift">Entrar</a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card border-primary mb-3">
              <div class="card-body">
                <h1 class="card-title">Pedidos</h1>
                <div class="card-text  text-end mb-2 ">
                <a href="{{ route('users.index') }}" class="btn btn-md btn-primary w-50  mt-6 lift">Entrar</a>
              </div>
              </div>
            </div>
          </div>    
      </div>   
</x-app-layout>
