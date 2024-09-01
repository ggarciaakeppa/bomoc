<div class="container py-4">
    <h1 class="text-center mb-4">Galería</h1>
    @if(count($imagenes) > 0)
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($imagenes as $imagen)
        <div class="col">
            <div class="card">
                <img src="{{ asset($imagen['ruta']) }}" class="card-img-top" alt="{{ $imagen['titulo'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $imagen['titulo'] }}</h5>
                    <p class="card-text">{{ $imagen['descripcion'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="alert alert-info text-center">
        No hay imágenes cargadas actualmente.
    </div>
    @endif
</div>
