<!-- resources/views/livewire/visitor-counter.blade.php -->

<div class="card">
    <div class="card-body">
        <h1 class="card-title  text-center my-4">Número de Visitantes </h1>
    
     
        
        <!-- Indicators -->
        <div class="row g-0 align-items-center justify-content-center">
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <div class="display-2 mb-0">{{ $daylyVisits }}</div>
                    <div class="h6 text-uppercase text-body-secondary mb-0">{{ $dia }}</div>
                </div>
            
            </div>
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <div class="display-2 mb-0">{{ $monthlyVisits }}</div>
                    <div class="h6 text-uppercase text-body-secondary mb-0">{{ $mes }}</div>
                </div>
              
            </div>
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <div class="display-2 mb-0">{{ $monthlyVisits }}</div>
                    <div class="h6 text-uppercase text-body-secondary mb-0">{{ $año }}</div>
                </div>
              
            </div>
        </div> <!-- / .row -->

        <h6 class="text-uppercase text-center text-body-secondary ">
            dia  /  mes  /  año 
        </h6>
    

    </div>
</div>
