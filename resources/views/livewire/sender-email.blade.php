<div class="container rounded-xl shadow p-2">
    <!-- Success is as dangerous as failure. -->
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex justify-content-center">
                <h1>Contacto</h1>
            </div>
            @if (session()->has('success_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success_message') }}  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="p-2">
                <form wire:submit.prevent="submitForm" action="/contact" method="POST">
                    @csrf
                    <div>
                        <label for="nombre" class="form-label"></label>
                        <input wire:model="nombre" type="text" name="nombre"
                            class="form-control @error('nombre') is-invalid @enderror" id="nombre"
                            placeholder="Ingresa tu nombre" value="{{ old('nombre') }}">
                        @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="teléfono" class="form-label"></label>
                        <input wire:model="teléfono" type="text" name="teléfono"
                            class="form-control" id="teléfono"
                            placeholder="Teléfono" value="{{ old('teléfono') }}">
                       
                    </div>
                    <div>
                        <label for="correo" class="form-label"></label>
                        <input wire:model="correo" type="text" name="correo"
                            class="form-control @error('correo') is-invalid @enderror" id="correo"
                            placeholder="E-mail" value="{{ old('correo') }}">
                        @error('correo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="mensaje" class="form-label"></label>
                        <textarea wire:model="mensaje" name="mensaje" class="form-control @error('mensaje') is-invalid @enderror" id="mensaje"
                            rows="3" placeholder="Mensaje">{{ old('mensaje') }}</textarea>
                        @error('mensaje')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <button class="btn btn-primary btn-md" wire:target="submitForm" wire:loading.attr="disabled">
                            <span wire:loading wire:target="submitForm" aria-hidden="true"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-send" viewBox="0 0 16 16">
                                <path
                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                            </svg>Mandar mensaje
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/imagenes/inicio/us.jpg" class="img-fluid">
        </div>
    </div>
</div>
