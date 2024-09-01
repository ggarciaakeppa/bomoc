<div class="container py-4">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" wire:model="titulo">
            @error('titulo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" wire:model="descripcion" rows="5"></textarea>
            @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-4">
            <label for="imagen" class="form-label">Imagen</label>
            <input class="form-control" type="file" id="imagen" wire:model="imagen">
            @error('imagen') <span class="text-danger">{{ $message }}</span> @enderror
            @if ($imagen)
                <img src="{{ $imagen->temporaryUrl() }}" class="img-thumbnail mt-2" width="400">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Subir Imagen</button>
    </form>
   
</div>