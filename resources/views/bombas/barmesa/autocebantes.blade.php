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
        style=" background: #3789C8 url(../imagenes/bombas/altamira/portada.jpg) center center no-repeat;
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
                                <h3 style="color: blue">Motor a diesel</h3>
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
                                <h3 style="color: blue">Motor a gasolina</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen de Series Flux --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#headingOne"><img
                                    src="{{ asset('imagenes/bombas/barmesa/autocebantes/electrico.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Motor electrico</h3>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col">
                        <figure class="figure">
                            <a href="#tx"><img
                                    src="{{ asset('imagenes/bombas/barmesa/autocebantes/transmision.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Transmisión Universal</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div id="diesel" class="mb-3">
            Diesel
            <div class="accordion" id="diesel" >
                {{-- Contenido JOHN DEERE --}}
                <div class="accordion-item">
                    <h2 class="accordion-header " id="headingOne" >
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            John Deere
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#1">
                        <div class="accordion-body row">
                            <div class="col md-6 w-50">
                                <livewire:autocebantes-diesel-john-table />  
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success w-25" data-bs-target="#john"
                                        data-bs-toggle="modal">nota</button>
                                </div>
                            </div>
                            <div class="modal fade" id="john" tabindex="-1" aria-labelledby="johnLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="johnLabel">Notas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Tanque de combustible opcional de 120 litros
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- lh-base --}}
                            <div class="col-md-6 order-last order-md-first order-sm-first">
                                <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Contenido KOHLER --}}
                <div class="accordion-item">
                    <h2 class="accordion-header " id="headingTwo" >
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Kohler
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#1">
                        <div class="accordion-body row">
                            <div class="col md-6 w-50">
                                <livewire:autocebantes-diesel-kohler-table />  
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success w-25" data-bs-target="#exampleModal"
                                        data-bs-toggle="modal">nota</button>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Notas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Motor enfriado por aire<br>
                                            No incluye acumulador ni cables
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- lh-base --}}
                            <div class="col-md-6 order-last order-md-first">
                                <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel2.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 {{-- Contenido TEK-PRO --}}
                 <div class="accordion-item">
                    <h2 class="accordion-header " id="headingThree" >
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Tek-pro
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#1">
                        <div class="accordion-body row">
                            <div class="col md-6 mt-5">
                                <livewire:autocebantes-diesel-tekpro-table />
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success w-25" data-bs-target="#exampleModal2"
                                        data-bs-toggle="modal">nota</button>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Notas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           Es de arranque electrico y retractil e incluye tanque de combustible de 5.5 lt<br>
                                            No incluye acumulador ni cables
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- lh-base --}}
                            <div class="col-md-6 order-last order-md-first">
                                <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel3.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Contenido LOMBARDINI--}}
                <div class="accordion-item">
                    <h2 class="accordion-header " id="headingFour" >
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Lombardini
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#1">
                        <div class="accordion-body row">
                            <div class="col md-6 mt-5">
                                <livewire:autocebantes-diesel-lombardini-table />
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success w-25" data-bs-target="#exampleModal2"
                                        data-bs-toggle="modal">nota</button>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Notas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           Es de arranque electrico y retractil e incluye tanque de combustible de 5.5 lt<br>
                                            No incluye acumulador ni cables
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- lh-base --}}
                            <div class="col-md-6 order-last order-md-first">
                                <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel4.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Contenido YANMAR--}}
            <div class="accordion-item">
                <h2 class="accordion-header " id="headingFive" >
                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                       Yanmar
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#1">
                    <div class="accordion-body row">
                        <div class="col md-6 mt-5">
                            <livewire:autocebantes-diesel-yanmar-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success w-25" data-bs-target="#exampleModal2"
                                    data-bs-toggle="modal">nota</button>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Notas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       Es de arranque electrico y retractil e incluye tanque de combustible de 5.5 lt<br>
                                        No incluye acumulador ni cables
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- lh-base --}}
                        <div class="col-md-6 order-last order-md-first">
                            <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel5.jpg') }}"
                                    style="vertical-align: middle" class="figure-img img-fluid rounded">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="gasolina" class="mb-3">
            {{-- Motor a gasolina --}}
            Gasolina
            <div class="accordion" id="diesel" >
                {{-- Contenido JOHN DEERE --}}
                <div class="accordion-item">
                    <h2 class="accordion-header " id="headingOne" >
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            John Deere
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#1">
                        <div class="accordion-body row">
                            <div class="col md-6 w-50">
                                <livewire:autocebantes-gasolina-tekpro-table />  
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success w-25" data-bs-target="#john"
                                        data-bs-toggle="modal">nota</button>
                                </div>
                            </div>
                            <div class="modal fade" id="john" tabindex="-1" aria-labelledby="johnLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="johnLabel">Notas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Tanque de combustible opcional de 120 litros
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- lh-base --}}
                            <div class="col-md-6 order-last order-md-first order-sm-first">
                                <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalGasolina.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Contenido KOHLER --}}
                <div class="accordion-item">
                    <h2 class="accordion-header " id="headingTwo" >
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Kohler
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#1">
                        <div class="accordion-body row">
                            <div class="col md-6 w-50">
                                <livewire:autocebantes-gasolina-kohler-table />  
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success w-25" data-bs-target="#exampleModal"
                                        data-bs-toggle="modal">nota</button>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Notas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Motor enfriado por aire<br>
                                            No incluye acumulador ni cables
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- lh-base --}}
                            <div class="col-md-6 order-last order-md-first">
                                <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalGasolina2.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 {{-- Contenido HONDA --}}
                 <div class="accordion-item">
                    <h2 class="accordion-header " id="headingThree" >
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Tek-pro
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#1">
                        <div class="accordion-body row">
                            <div class="col md-6 mt-5">
                                <livewire:autocebantes-gasolina-honda-table />
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success w-25" data-bs-target="#exampleModal2"
                                        data-bs-toggle="modal">nota</button>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Notas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           Es de arranque electrico y retractil e incluye tanque de combustible de 5.5 lt<br>
                                            No incluye acumulador ni cables
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- lh-base --}}
                            <div class="col-md-6 order-last order-md-first">
                                <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalGasolina3.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Contenido BRIGGS--}}
                <div class="accordion-item">
                    <h2 class="accordion-header " id="headingFour" >
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Lombardini
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#1">
                        <div class="accordion-body row">
                            <div class="col md-6 mt-5">
                                <livewire:autocebantes-gasolina-briggs-table />
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success w-25" data-bs-target="#exampleModal2"
                                        data-bs-toggle="modal">nota</button>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Notas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           Es de arranque electrico y retractil e incluye tanque de combustible de 5.5 lt<br>
                                            No incluye acumulador ni cables
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- lh-base --}}
                            <div class="col-md-6 order-last order-md-first">
                                <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalGasolina4.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="electrico" class="mb-3">
                Eléctrico
                <div class="accordion" id="electrico" >
                    {{-- Contenido Electrico --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header " id="headingOne" >
                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Acompladas directamente
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#1">
                            <div class="accordion-body row">
                                <div class="col md-6 w-50">
                                    <livewire:autocebantes-electrico-table />  
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success w-25" data-bs-target="#john"
                                            data-bs-toggle="modal">nota</button>
                                    </div>
                                </div>
                                <div class="modal fade" id="john" tabindex="-1" aria-labelledby="johnLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="johnLabel">Notas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tanque de combustible opcional de 120 litros
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                {{-- lh-base --}}
                                <div class="col-md-6 order-last order-md-first order-sm-first">
                                    <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico.jpg') }}"
                                            style="vertical-align: middle" class="figure-img img-fluid rounded">
                                    </a>
                                    <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico2.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header " id="headingOne" >
                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Acompladas directamente
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#1">
                            <div class="accordion-body row">
                                <div class="col md-6 w-50">
                                    <livewire:autocebantes-electrico-flex-table />  
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success w-25" data-bs-target="#john"
                                            data-bs-toggle="modal">nota</button>
                                    </div>
                                </div>
                                <div class="modal fade" id="john" tabindex="-1" aria-labelledby="johnLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="johnLabel">Notas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tanque de combustible opcional de 120 litros
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                {{-- lh-base --}}
                                <div class="col-md-6 order-last order-md-first order-sm-first">
                                    <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico.jpg') }}"
                                            style="vertical-align: middle" class="figure-img img-fluid rounded">
                                    </a>
                                    <a><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico2.jpg') }}"
                                        style="vertical-align: middle" class="figure-img img-fluid rounded">
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>    
    </div>
</body>

</html>
