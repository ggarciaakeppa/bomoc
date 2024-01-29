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
                <div class="text-center border-top border-bottom border-2 row row-cols-3 row-cols-lg-3 g-2 g-lg-3">
                    {{-- Imagen Diesel --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#diesel"><img src="{{ asset('imagenes/bombas/barmesa/tragasolidos/diesel.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="diesel"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor a diesel</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen Gasolina --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#gasolina"><img
                                    src="{{ asset('imagenes/bombas/barmesa/tragasolidos/gasolina.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="gasolina"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor a gasolina</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen Transmision Universal --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#universal"><img
                                    src="{{ asset('imagenes/bombas/barmesa/tragasolidos/universal.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="universal"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Transmisión Universal</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Autocebantes Tragasólidos</h1>
        </div>
        <div id="diesel" class="mb-3">
            <h1> Diesel</h1>
            <div class="card">
                {{-- Contenido YANMAR/JOHN DEERE --}}
                <div class="card-body">
                    <h5 class="card-title">Yanmar / John Deere</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-diesel-yanmar-table />
                            <div class="d-flex justify-content-center">
                                <h5>Serie SH4-4TNV88C</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_sh4-rn-4tnv88c.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <livewire:tragasolidos-diesel-john-table />
                            <div class="d-flex justify-content-center">
                                <h5>Serie SH6-4TNV98C</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_sh6-rn-4tnv98c.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="gasolina" class="mb-3">
            <h1> Gasolina</h1>
            <div class="card">
                {{-- Contenido BRIGGS & STRATTON/TEK-PRO/KOHLER/HONDA --}}
                <div class="card-body">
                    <h5 class="card-title">Briggs & Stratton / Tek-Pro / Kohler / Honda</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-gasolina-btk-table />
                            
                        </div>
                        <div class="col-md-6">
                            <livewire:tragasolidos-gasolina-honda-table />
                            <div class="d-flex justify-content-center">
                                <h5>Serie 4ATS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4ats.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido MOTORES --}}
                <div class="card-body">
                    <h5 class="card-title">Motores</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-gasolina-barmesa-table />
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/tragasolidos/gasolina.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="gasolina">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 4ATS</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4ats.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_4ats.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="universal" class="mb-3">
            <h1>Transmisión Universal</h1>    
            <div class="card">
                {{-- Contenido SERIE ET6-U --}}
                <div class="card-body">
                    <h5 class="card-title">Serie ET6-U (sin motor)</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-universal-et6-table />
                            <div class="d-flex justify-content-center">
                                <h5>Serie ET6-U</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_et6-u.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/tragasolidos/universalGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="universalGeneral">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido SERIE SH-U --}}
                <div class="card-body">
                    <h5 class="card-title">Serie SH-U (sin motor)</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-universal-s-h-table />
                            <div class="d-flex justify-content-center">
                                <h5>Serie SH</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_sh3-u.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_sh3-u.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>    
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/tragasolidos/universalGeneral2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="universalGeneral2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido COPLE FLEXIBLE --}}
                <div class="card-body">
                    <h5 class="card-title">Cople flexible (motor TCCVE)</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-12">
                            <livewire:tragasolidos-universal-cople-table />
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col">
                                        <h5>Serie SH3</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_sh3-u.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_sh3-u.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                    <div class="col">
                                        <h5>Serie SH4</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_sh4-u.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_sh4-u.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                    <div class="col">
                                        <h5>Serie SH6</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_sh6-u.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_sh6-u.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                    <div class="col">
                                        <h5>Serie SH8</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_sh8-u.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_sh8-u.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                </div>
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
    <livewire:floating-whats/>
</body>

</html>
