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
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    @include('navbar')
    <div
        style=" background: #3789C8 url(/imagenes/bombas/barmesa/backNav.jpg) center center no-repeat;
   background-size: cover;
   padding: 150px 70px 70px;
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
            <div>
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                    {{-- Imagen Diesel --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#diesel"><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/diesel.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor a diesel</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen Gasolina --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#gasolina"><img
                                    src="{{ asset('imagenes/bombas/barmesa/autocebantes/gasolina.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor a gasolina</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen Electrico --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#electrico"><img
                                    src="{{ asset('imagenes/bombas/barmesa/autocebantes/electrico.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor electrico</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen Transmision Universal --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#universal"><img
                                    src="{{ asset('imagenes/bombas/barmesa/autocebantes/transmision.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Transmisión Universal</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>AUTOCEBANTES</h1>
        </div>
        <div id="diesel" class="mb-3">
            <h1> Diesel</h1>
            <div class="card">
                {{-- Contenido JOHN DEERE --}}
                <div class="card-body">
                    <h5 class="card-title">John Deere</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-diesel-john-table />
                            <div class="d-flex justify-content-start">
                               <p>* Tanque de combustible opcional de 120 litros</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido KOHLER --}}
                <div class="card-body">
                    <h5 class="card-title">Kohler</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-diesel-kohler-table />
                            <div class="d-flex justify-content-start">
                               <p>* Tanque de combustible opcional de 80 litros.</p>
                               <p>* Motor enfriado por aire. No incluye acumulador.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido TEK-PRO --}}
                <div class="card-body">
                    <h5 class="card-title">Tek-Pro</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-diesel-tekpro-table />
                            <div class="d-flex justify-content-start">
                                <p>* El motor TPD192 es de arranque eléctrico y retráctil e incluye tanque de combustible de. 5.5 litros.</p>
                                 <p>* No incluye acumulador.</p>
                             </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel3.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido LOMBARDINI --}}
                <div class="card-body">
                    <h5 class="card-title">Lombardini</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-diesel-lombardini-table />
                            <div class="d-flex justify-content-start">
                               <p>Cuenta con tablero de control que incluye horimetro y llave de encendido.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel4.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido YANMAR --}}
                <div class="card-body">
                    <h5 class="card-title">Yanmar</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-diesel-yanmar-table />
                            <div class="d-flex justify-content-start">
                               <p>Tanque de combustible opcional de 80 litros</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel5.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="gasolina" class="mb-3">
            <h1>Gasolina</h1>
            <div class="card">
                {{-- Contenido TEK-PRO --}}
                <div class="card-body">
                    <h5 class="card-title">Tek-Pro</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-gasolina-tekpro-table />
                         
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalGasolina.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido KOHLER --}}
                <div class="card-body">
                    <h5 class="card-title">Kohler</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-gasolina-kohler-table />
                        
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalGasolina2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido HONDA --}}
                <div class="card-body">
                    <h5 class="card-title">Honda</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-gasolina-honda-table />
                           
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalGasolina3.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido BRIGGS & STRATTON --}}
                <div class="card-body">
                    <h5 class="card-title">Briggs & Stratton</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-gasolina-briggs-table />
                       
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalGasolina4.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="electrico" class="mb-3">
            <h1>Eléctrico</h1>
            <div class="card">
                {{-- Contenido ACOPLADAS DIRECTAMENTE --}}
                <div class="card-body">
                    <h5 class="card-title">Acopladas directamente</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-electrico-table />
                           
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido COPLE FLEXIBLE --}}
                <div class="card-body">
                    <h5 class="card-title">Cople flexible</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-electrico-flex-table />
                           
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico3.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico4.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="universal" class="mb-3">
            <h1>Transmisión Universal</h1>
            <div class="card">
                {{-- Contenido COPLE FLEXIBLE --}}
                <div class="card-body">
                    <h5 class="card-title">Transmisión Universal</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:autocebantes-transmision-universal-table />
                        
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/transmision.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            
                        </div>
                    </div>
                </div>
            </div>

        <a class='flotante' href='#' style="text-decoration: aliceblue"><img src="{{ asset('imagenes/icons/up.svg') }}">Arriba</a>
        <style>
           .flotante {
        display: none; 
        position: fixed;
        bottom: 20px;
        right: 20px;
    }
        </style>
        <script>
            window.addEventListener('scroll', function() {
                var enlaceFlotante = document.querySelector('.flotante');
              
                if (window.scrollY > 200) {
                    enlaceFlotante.style.display = 'block';
                } else {
                    enlaceFlotante.style.display = 'none';
                }
            });
        </script>
</body>

</html>
