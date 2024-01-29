<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/logo/cropped-logitoBO02-32x32.png') }}">
    <title>Bombas y Motores de Occidente</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    @include('navbar')
    <div
    style="background: #ffffff;
    padding: 70px 70px;
    font-size: 2.5rem;
    font-weight: 100;">
    </div>

    <div class="container-fluid">
        <div>
            {{-- Logo --}}
            <div class="text-center">

                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/barmesa/logo.png') }}" class="figure-img img-fluid rounded"
                        alt="logo barmesa">
                </figure>
            </div>


            <div>
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-2 g-2 g-lg-2">
                    {{-- Imagen BCS --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#casera"><img src="{{ asset('imagenes/bombas/barmesa/caserasSomero/casera.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="Casera"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Caseras</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen BCSF --}}
                    <div class="col">
                        <figure class="figure">
                        <a href="#somero"><img src="{{ asset('imagenes/bombas/barmesa/caserasSomero/JB (1).png') }}"
                        height="15%" class="figure-img img-fluid rounded" alt="Somero"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Pozo somero</h3>
                            </figcaption>
                        </figure>
                    </div>      
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Caseras y Pozo Somero</h1>
        </div>
        <div class="mb-3">
            <div class="card">
                {{-- Contenido Serie NB | NBT --}}
                <div class="card-body">
                    <h5 class="card-title">Serie NB | Serie NBT</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:casera-nb-table />
                            <div class=" justify-content-center">
                                <h5>Serie NB</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_nb.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <livewire:casera-nbt-table />
                            <div class=" justify-content-center">
                                <h5>Serie NBT</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_nbt.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Pozo Somero</h1>
        </div>
        <div class="mb-3">
            <div class="card">
                {{-- Contenido Serie JB  --}}
                <div class="card-body">
                    <h5 class="card-title">Serie JB</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-12">
                            <livewire:somero-jb-table />
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Boton hacia arriba -->
<img class='ir-arriba' javascript:void(0) title="Volver arriba"
src="{{ asset('imagenes/icons/up.svg') }}" style="width: 48px; height: 48px;" alt="flecha">
<style>
.ir-arriba {
    display: none;
    background-repeat: no-repeat;
    font-size: 20px;
    color: black;
    cursor: pointer;
    position: fixed;
    bottom: 10px;
    right: 10px;
    z-index: 2;
}
</style>
<script>
$(document).ready(function() {
    irArriba();
}); //Hacia arriba
function irArriba() {
    $('.ir-arriba').click(function() {
        $('body,html').animate({
            scrollTop: '0px'
        }, 1000);
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('.ir-arriba').slideDown(600);
        } else {
            $('.ir-arriba').slideUp(600);
        }
    });
    $('.ir-abajo').click(function() {
        $('body,html').animate({
            scrollTop: '1000px'
        }, 1000);
    });
}
</script>
<livewire:footer/>
<livewire:floating-whats/>
</body>

</html>
