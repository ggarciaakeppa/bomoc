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
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                    {{-- Imagen Diesel --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#diesel"><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/diesel.jpg') }}"
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
                                    src="{{ asset('imagenes/bombas/barmesa/autocebantes/gasolina.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="gasolina"></a>
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
                                    height="25%" class="figure-img img-fluid rounded" alt="electrico"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor eléctrico</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen Transmision Universal --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#universal"><img
                                    src="{{ asset('imagenes/bombas/barmesa/autocebantes/transmision.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt="transmision"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Transmisión Universal</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Autobecantes</h1>
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 90MD">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 90MD</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_40md.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                </div>    
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 50MD">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 50MD</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_50md-250.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                </div>    
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
                                <p>* El motor TPD192 es de arranque eléctrico y retráctil e incluye tanque de
                                    combustible de. 5.5 litros.</p>
                                <p>* No incluye acumulador.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel3.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 12MD">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 12MD</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_12md.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                </div>
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 27MD">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 27MD</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_27m-29m-md.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_27-29-m-md.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>    
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 40MD">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 40MD</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_40md.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                </div>    
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 12MD">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 12MD</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_12m.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_12m.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>    
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 29MD">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 29MD</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_27m-29m-md.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_27-29-m-md.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie AL13M">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie AL13M</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_al13m.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                </div>
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 18-22MD">
                                <div class="d-flex justify-content-center">
                                    <h5>SerieS 18-22MD</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_18m-22m.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_18m-22m.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>    
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie SP">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 2N">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col">
                                                <h5>Serie SP</h5>
                                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-sp-autocebante.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                            </div>
                                            <div class="col">
                                                <h5>Serie 2N</h5>
                                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2n.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                            </div>
                                            <div class="col">
                                                <h5>Serie 3N</h5>
                                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3n.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                            </div>
                                            <div class="col">
                                                <h5>Serie BSP3-4-5CCE</h5>
                                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_bsp3cce.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col">
                                                <h5>Serie BSP10CCE</h5>
                                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="Serie BSP10CCE"> 
                                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_bsp10cce.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                            </div>
                                            <div class="col">
                                                <h5>Serie BSP15CCE</h5>
                                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="Serie BSP15CCE"> 
                                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_bsp15cce.pdf" style="text-decoration: none; color: #f68221;">Técnica</a>
                                            </div>
                                            <div class="col">
                                                <h5>Serie BSP20CCE</h5>
                                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="Serie BSP20CCE"> 
                                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_bsp20cce.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                            </div>
                                            <div class="col">
                                                <h5>Serie BSP25CCE</h5>
                                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="Serie BSP25CCE"> 
                                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_bsp25cce.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 10MU">
                            <img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalElectrico4.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 20MU">
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 10MU</h5>
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_10mu.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_10mu.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <h5>Serie 20MU</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="Serie 20MU.1"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_20mu.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="Serie 20MU.2">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_20mu.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>        
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
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Vertical">
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
   <livewire:footer/>         
</body>
</html>