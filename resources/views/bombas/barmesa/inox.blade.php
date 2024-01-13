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
                <div class="text-center  border-bottom border-2 row row-cols-2 row-cols-lg-5 g-5 g-lg-5">
                    {{-- Imagen BCS --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#bcs"><img src="{{ asset('imagenes/bombas/barmesa/inox316/BCS.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="Serie BCS"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color:  #f68221">Serie BCS</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen BCSF --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#bcsf"><img src="{{ asset('imagenes/bombas/barmesa/inox316/BCSF.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="Serie BCSF"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color:  #f68221">Serie BCSF</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen CD --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#cd"><img src="{{ asset('imagenes/bombas/barmesa/inox316/CD.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="Serie CD"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color:  #f68221">Serie CD</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen PS --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#ps"><img src="{{ asset('imagenes/bombas/barmesa/inox316/PS.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="Serie PS"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color:  #f68221">Serie PS</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen SOX --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#sox"><img src="{{ asset('imagenes/bombas/barmesa/inox316/SOX.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="Serie SOX"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color:  #f68221">Serie SOX</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Centrífugas en Acero Inoxidable .316</h1>
        </div>
        <div class="mb-3">
            <h1>Serie BCS | Serie BCSF</h1>
            <div class="card">
                {{-- Contenido BCS - BCSF --}}
                <div class="card-body">
                    <h5 class="card-title">APDG | TCCVE</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6" id="bcs">
                            <livewire:inox316-bcs-table />
                            <div class=" justify-content-center">
                                <h5>Serie BCS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_bcs.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_bcs-bcsf.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Serie BCSF</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_bcsf.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_bcs-bcsf.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>  
                        </div>
                        <div class="col-md-6" id="bcsf">
                            <livewire:inox316-bcsf-table />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Centrífugas en Acero Inoxidable .304</h1>
        </div>
        <div class="mb-3">
            <h1>Serie CD | Serie PS</h1>
            <div class="card">
                {{-- Contenido CD - PS --}}
                <div class="card-body">
                    <h5 class="card-title">TCCVE</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6" id="cd">
                            <livewire:inox304-cd-table />
                            <div class=" justify-content-center">
                                <h5>Serie CD</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-cd.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-cd.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Serie PS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-ps.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ps.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>  
                        </div>
                        <div class="col-md-6" id="ps">
                            <livewire:inox304-ps-table />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <h1>Serie SOX</h1>
            <div class="card" id="sox">
                {{-- Contenido CD - PS --}}
                <div class="card-body">
                    <h5 class="card-title">TCCVE</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-12">
                            <livewire:inox304-sox-table />
                            <div class=" justify-content-center">
                                <h5>Serie SOX</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-sox.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-sox.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>
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
</body>

</html>
