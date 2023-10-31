<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
        style="   background: #3789C8 url(/imagenes/inicio/wasteTreatment.jpg) center center no-repeat;
   background-size: cover;
   padding: 150px 70px 70px;
   margin: auto;
   font-size: 2.5rem;
   font-weight: 800;">
    </div>
    <div class="container-fluid">
        <div>
            {{-- Logo --}}
            <div class="text-center">
                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/barmesa/logo.png') }}" class="figure-img img-fluid rounded"
                        alt="...">
                </figure>
            </div>
            {{-- Layout barmesa --}}
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4  g-4 ">
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary btn-lg mb-3" href="{{ route('autocebantes') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES TRAGASÓLIDOS</h5>
                            <a class="btn btn-primary btn-lg mb-3" href="{{ route('tragasolidos') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS DE ALTA PRESIÓN</h5>
                            <a class="btn btn-primary btn-lg mb-3" href="{{ route('centrifugadasAlta') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS DE MEDIANA PRESIÓN</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('centrifugadasMedia') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS EN ACERO INOX.</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('centrifugadasInox') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS CASERAS Y POZO SOMERO</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('centrifugadasCaseras') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS DE PROCESO ANSI</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('centrifugadasAnsi') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>SUMERGIBLES DE ACHIQUE</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('sumergiblesAchique') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>SUMERGIBLES INOXIDABLES PARA DESAGÜE</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('sumergiblesInox') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>SUMERGIBLES AGUAS SUCIAS</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('sumergibleAguaSucia') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>SUMERGIBLES AGUAS LIMPIA</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('sumergibleAguaLimpia') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>MOTORES SUMERGIBLES</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('sumergibleMotores') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>VERTICALES EN LÍNEA</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('verticalesLinea') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>MULTIETAPAS HORIZONTALES</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('multiHorizontales') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>MULTIETAPAS VERTICALES</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('multiVerticales') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>BIPARTIDAS</h5>
                            <a class="btn btn-primary lift mb-3" href="{{ route('bipartidas') }}">Entrar</a>
                        </div>
                    </div>
                </div>               
            </div>   
        </div>
               <!-- Boton hacia arriba -->
<img class='ir-arriba' javascript:void(0) title="Volver arriba"
src="{{ asset('imagenes/icons/up.svg') }}" style="width: 48px; height: 48px;">
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

<livewire:footer />

</body>
</html>
