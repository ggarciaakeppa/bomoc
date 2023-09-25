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
                        Crear producto
                    </h1>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary lift" wire:click="createProducto">
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
                        <input type="text" id="modelo" class="form-control" wire:model.defer="modelo"
                            value="{{ $this->modelo }}">
                        <x-jet-input-error for="modelo" class="mt-2" />
                    </div>
                    <div class="col">
                        <label for="tipo">Tipo</label>
                        <input type="text" id="tipo" class="form-control" wire:model.defer="tipo"
                            value="{{ $this->tipo }}">
                    </div>
                    <div class="col">
                        <label for="marca">Marca</label>
                        <input type="text" id="marca" class="form-control" wire:model.defer="marca"
                            value="{{ $this->marca }}">
                    </div>
                    <div class="col">
                        <label for="serie">Serie</label>
                        <input type="text" id="serie" class="form-control" wire:model.defer="serie"
                            value="{{ $this->serie }}">
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <label for="codigo">Codigo</label>
                        <input type="text" id="codigo" class="form-control" wire:model.defer="codigo"
                            value="{{ $this->codigo }}">
                    </div>
                    <div class="col">
                        <label for="hp">HP</label>
                        <select class="form-select form-select-lg mb-3" id="hp" aria-label=".form-select-md"
                            wire:model.defer="hp">
                            <option selected>Selección</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                    </div>
                    <div class="col">
                        <label for="fases">Fases</label>
                        <input type="text" id="fases" class="form-control" wire:model.defer="fases">
                    </div>
                    <div class="col">
                        <label for="volts">Volts</label>
                        <input type="text" id="volts" class="form-control" wire:model.defer="volts">
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <label for="tamano">Tamaño</label>
                        <input type="text" id="tamano" class="form-control" wire:model.defer="tamano">
                    </div>
                    <div class="col">
                        <label for="rpm">RPM</label>
                        <input type="text" id="rpm" class="form-control" wire:model.defer="rpm">
                    </div>
                    <div class="col">
                        <label for="paso">Paso</label>
                        <input type="text" id="paso" class="form-control" wire:model.defer="paso">
                    </div>
                    <div class="col">
                        <label for="descarga">Descarga</label>
                        <input type="text" id="descarga" class="form-control" wire:model.defer="descarga">
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <label for="btus">BTUS</label>
                        <input type="text" id="btus" class="form-control" wire:model.defer="btus">
                    </div>
                    <div class="col">
                        <label for="diametro">Diametro</label>
                        <input type="text" id="diametro" class="form-control" wire:model.defer="diametro">
                    </div>
                    <div class="col">
                        <label for="pda">PDA</label>
                        <input type="text" id="pda" class="form-control" wire:model.defer="pda">
                    </div>
                    <div class="col">
                        <label for="base">Base</label>
                        <input type="text" id="base" class="form-control" wire:model.defer="base">
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <label for="nota">Nota</label>
                        <input type="text" id="nota" class="form-control" wire:model.defer="nota">
                    </div>

                    <div class="col">
                        <label for="material">Material</label>
                        <input type="text" id="material" class="form-control" wire:model.defer="material">
                    </div>

                    <div class="col">
                        <label for="pasos">Pasos</label>
                        <input type="text" id="pasos" class="form-control" wire:model.defer="pasos">
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col form-switch m-2">


                        <input class="form-check-input" type="checkbox" id="ruedasN" wire:model.defer="ruedasN">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Ruedas N</label>
                    </div>
                    <div class="col form-switch m-2">


                        <input class="form-check-input" type="checkbox" id="ruedasF" wire:model.defer="ruedasF">

                        <label class="form-check-label" for="flexSwitchCheckDefault">Ruedas F</label>
                    </div>
                </div>

                <div class="row align-items-start">
                    <div class="col">
                        <label for="photo">Foto</label>
                        <input type="file" class="form-control"  id="photo" name="photo" wire:model="photo">
                    </div>
                </div>
                
                @if($photo)
                    <div class="mt-3">
                        <p>Imagen seleccionada:</p>
                        <img src="{{ asset($photo->temporaryUrl()) }}" alt="Imagen seleccionada" width="200">
                    </div>
                @endif
                

            </div>
        </div>
    </div>
</div>
