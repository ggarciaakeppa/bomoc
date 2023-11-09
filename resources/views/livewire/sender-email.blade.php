<div class="container rounded-xl shadow p-2">
    <!-- Success is as dangerous as failure. -->
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex justify-content-center">
                <h1>Contacto</h1>
            </div>
            <div class="p-2">
                <form wire:submit.prevent="submitForm" action="/contact" method="POST" >
                    @csrf
                    <div>
                        <label for="name" class="form-label">Tu nombre</label>
                        <input wire:model="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Ingresa tu nombre" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="phone" class="form-label">Teléfono</label>
                        <input wire:model="phone" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                            placeholder="Ingresa tu teléfono" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input wire:model="email" type="text" name="email"
                            class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Ingresa tu correo"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="contactMessage" class="form-label">Mensaje</label>
                        <textarea wire:model="contactMessage" name="contactMessage"
                            class="form-control @error('contactMessage') is-invalid @enderror" id="contactMessage" rows="3"
                            >{{ old('contactMessage') }}</textarea>
                        @error('contactMessage')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center mt-2" >
                        <button class="btn btn-secondary btn-md" wire:target="submitForm" wire:loading.attr="disabled">
                            <span wire:loading wire:target="submitForm" aria-hidden="true"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
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
