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
    @livewireScripts
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
                            <a href="#diesel"></a>
                            <figcaption class="figure-caption">
                                <h3 style="color: #f68221">Motor a diesel</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen Gasolina --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#gasolina"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor a gasolina</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen Electrico --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#electrico"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor electrico</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen Transmision Universal --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#universal"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Transmisión Universal</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Centrifugadas de alta presión Serie IA</h1>
        </div>
        <div id="diesel" class="mb-3">
            <h1>Diesel</h1>
            <div class="card">
                {{-- Contenido LOMBARDINI --}}
                <div class="card-body">
                    <h5 class="card-title">Lombardini (acoplados directamente)</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-alta-lombardini-table />
                          
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title">Curvas de operación</h5>
                            <div class="scrollbox">
                                <ul>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia1.5.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA1½</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia1.5h.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA1½H</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia1.5xh.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA1½XH</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia2.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA2</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia2h.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA2H</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia2hh.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA2HH</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia2eh.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA2EH</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia2exh.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA2EXH</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia2.5.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA2½</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia2.5h.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA2½H</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia2.5bjm.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA2½BJM</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia3.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA3</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia3h.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA3H</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia3bjm.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA3BJM</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia4.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA4</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia4bjh.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA4BJH</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia4bu.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA4BU</a></li>
                                    <li><a href="https://www.barmesapumps.com/MX/productos/pdfs/curvas-ia/mx_curvas_ia6bjm.pdf" target="_blank"
                                            rel="noopener noreferrer" class="text-gray link-o">IA6BJM</a></li>
                                </ul>

                            </div>
                            <div class="d-flex justify-content-center">
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <h5>Serie IA</h5>
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_ia.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_ia.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
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
                        <div class="col-md-12">
                            <livewire:centri-alta-yanmar-table />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido JOHN DEERE --}}
                <div class="card-body">
                    <h5 class="card-title">John Deere</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-alta-john-table />

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="gasolina" class="mb-3">
            <h1>Gasolina</h1>
            <div class="card">
                {{-- Contenido TEK-PRO / BRIGGS & STRATTON --}}
                <div class="card-body">
                    <h5 class="card-title">Tek-Pro / Briggs & Stratton</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-alta-tekpro-table />
                         
                        </div>
                        <div class="col-md-6">
                            <livewire:centri-alta-briggs-table />
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido KOHLER / HONDA --}}
                <div class="card-body">
                    <h5 class="card-title">Kohler / Honda</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-alta-kohler-table />
                         
                        </div>
                        <div class="col-md-6">
                            <livewire:centri-alta-honda-table />
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Motores --}}
                <div class="card-body">
                    <h5 class="card-title">Motores</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-alta-barmesa-table />
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="electrico" class="mb-3">
            <h1>Motor electrico</h1>
            <div class="card">
                {{-- Contenido Motores --}}
                <div class="card-body">
                    <h5 class="card-title">Acopladas Directamente a motor eléctrico TCCVE</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-12">
                            <livewire:centri-alta-electrico-directa-table />
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Motores --}}
                <div class="card-body">
                    <h5 class="card-title">Acopladas Cope Flexible</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-12">
                            <livewire:centri-alta-electrico-flexible-table />
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="universal" class="mb-3">
            <h1>Transmisión Universal</h1>
            <div class="card">
                {{-- Contenido Motores --}}
                <div class="card-body">
                    <h5 class="card-title">Transmision Universal</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-12">
                            <livewire:centri-alta-electrico-universal-table />
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Boton hacia arriba -->
        <img class='ir-arriba' javascript:void(0) title="Volver arriba" src="{{ asset('imagenes/icons/up.svg') }}"
            style="width: 48px; height: 48px;">
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

            .scrollbox {
                overflow: auto;
                max-height: 200px;
                /* Altura máxima del scrollbox */
                border: 1px solid #ccc;
                /* Puedes personalizar el estilo del scrollbox */
                padding: 10px;
            }

            ul {
                list-style: none;
                /* Elimina los puntos de la lista */
                padding: 0;
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
