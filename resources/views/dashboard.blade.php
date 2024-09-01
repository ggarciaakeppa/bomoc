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

                          <h1 class="text-center mb-4">Subir Imagen</h1>
                          <livewire:upload-image-form />
                      </div>
                    </div>
                    
                </div>
       
            </div>
        </div>
      
    </x-slot>
     
</x-app-layout>
