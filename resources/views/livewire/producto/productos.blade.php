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
						Productos
					</h1>
				</div>
				{{-- <div class="col-auto">
					<a class="btn btn-primary lift" href="{{ route('productos.create') }}">
					    Nuevo producto
                    </a>	
				</div> --}}
			</div>
		</div>
	</div>
	<!-- / .row -->
	   
    <div class="col-12">
		<div class="card">
			<div class="card-body">
                <livewire:producto.producto-table />
			</div>
		</div>
	</div>	
</div>

