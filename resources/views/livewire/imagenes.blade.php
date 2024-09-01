<div>
    <div class="header">
		<div class="header-body">
			<div class="row align-items-center">
				<div class="col">
					<!-- Pretitle -->
					<h6 class="header-pretitle">
						Administrar
					</h6>
					<!-- Title -->
					<h1 class="header-title">
						Imagenes Galería
					</h1>
				</div>
				<div class="col-auto">
					<a class="btn btn-primary lift" href="{{ route('dashboard') }}">
					    Agregar Imagen
                    </a>	
				</div>
			</div>
		</div>
	</div>
	<!-- / .row -->
	   
    <div class="col-12">
		<div class="card">
			<div class="card-body">
				<livewire:imagenes-table/>
			</div>
		</div>
	</div>	
</div>
@push('js')
	<script>
		   Livewire.on('listenerDelete', function(value) {
                mostrarConfirmacion("¿Estás seguro?", "¡No podrás revertir esto!.",
                    () => { 
                        Livewire.emit('eliminarImagen', value);
                        mostrarAlerta("¡Realizado!", "La imagen fue eliminada.", "success");
                    });
            });
			 // Función para mostrar una alerta de SweetAlert2
			 function mostrarAlerta(titulo, mensaje, icono) {
                Swal.fire({
                    title: titulo,
                    text: mensaje,
                    icon: icono,
                    confirmButtonText: 'Ok'
                });
            }

            // Función para mostrar una confirmación de SweetAlert2
            function mostrarConfirmacion(titulo, mensaje, callback) {
                Swal.fire({
                    title: titulo,
                    text: mensaje,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: "#1A73E8",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, continuar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        callback();
                    }
                });
            }
	</script>
@endpush
