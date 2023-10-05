<div>
<div class="header">
    <div class="header-body">
        <div class="row align-items-center">
            <div class="col">
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                    Administración productos
                </h6>
                <!-- Title -->
                <h1 class="header-title">
                    Editar producto
                </h1>
            </div>
            <div class="col-auto" >
                <button class="btn btn-primary lift" wire:click="updateProducto">
                    Guardar
                </button>
                <a class="btn btn-danger lift" href="{{ route('productos.index') }}">
                    Regresar
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-start">
                <div class="col">
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo" class="form-control" wire:model.defer="modelo" >
                    <x-jet-input-error for="modelo" class="mt-2" />
                </div>
                <div class="col">
                    <label for="tipo">Tipo</label>
                    <input type="text" id="tipo" class="form-control" wire:model.defer="tipo" >
                </div>
                <div class="col">
                    <label for="marca">Marca</label>
                    <input type="text" id="marca" class="form-control" wire:model.defer="marca" >
                </div>
                <div class="col">
                    <label for="serie">Serie</label>
                    <input type="text" id="serie" class="form-control" wire:model.defer="serie" >
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <label for="hp">HP</label>
                    <input type="text" id="hp" class="form-control" wire:model.defer="hp" >
                </div>
                <div class="col">
                    <label for="fases">Fases</label>
                    <input type="text" id="fases" class="form-control" wire:model.defer="fases">
                </div>
                <div class="col">
                    <label for="volts">Volts</label>
                    <input type="text" id="volts" class="form-control" wire:model.defer="volts">
                </div>
                <div class="col">
                    <label for="tamaño_suc_y_desc">Tamaño</label>
                    <input type="text" id="tamaño_suc_y_desc" class="form-control" wire:model.defer="tamaño_suc_y_desc">
                </div>
            </div>
            <div class="row align-items-start">
                
                <div class="col">
                    <label for="rpm">RPM</label>
                    <input type="text" id="rpm" class="form-control" wire:model.defer="rpm">
                </div>
                <div class="col">
                    <label for="paso_de_esfera">Paso de Esfera</label>
                    <input type="text" id="paso_de_esfera" class="form-control" wire:model.defer="paso_de_esfera">
                </div>
                <div class="col">
                    <label for="descarga">Descarga</label>
                    <input type="text" id="descarga" class="form-control" wire:model.defer="descarga">
                </div>
                <div class="col">
                    <label for="pasos">Pasos</label>
                    <input type="text" id="pasos" class="form-control" wire:model.defer="pasos">
                </div>
            </div>
            <div class="row align-items-start">
             
                <div class="col">
                    <label for="diametro_de_pozo">Diametro de Pozo</label>
                    <input type="text" id="diametro_de_pozo" class="form-control" wire:model.defer="diametro_de_pozo">
                </div>
               
                <div class="col">
                    <label for="base_de_acero">Base de acero</label>
                    <input type="text" id="base_de_acero" class="form-control" wire:model.defer="base_de_acero">
                </div>
                <div class="col">
                    <label for="material">Material</label>
                    <input type="text" id="material" class="form-control" wire:model.defer="material">
                </div>

            </div>
            <div class="row align-items-start">
            
                <div class="col">
                    <label for="ruedas_neumaticas">Ruedas Nuematicas</label>
                    <input type="text" id="ruedas_neumaticas" class="form-control" wire:model.defer="ruedas_neumaticas">
                </div>
                <div class="col">
                    <label for="ruedas_de_fierro">Ruedas de Fierro</label>
                    <input type="text" id="ruedas_de_fierro" class="form-control" wire:model.defer="ruedas_de_fierro">
                </div>
               
               
            </div>
            <div class="row align-items-start">
             
                <div class="col">
                    <label for="ficha">Ficha Técnica</label>
                    <input type="text" id="ficha" class="form-control" wire:model.defer="ficha">
                </div>
                <div class="col">
                    <label for="nota">Nota</label>
                    <input type="text" id="nota" class="form-control" wire:model.defer="nota">
                </div>
            </div>

            
        </div>
    </div>
</div>
</div>