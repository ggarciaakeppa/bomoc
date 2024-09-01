<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-758Q24T3P5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-758Q24T3P5');
</script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/logo/cropped-logitoBO02-32x32.png') }}">
    <title>Bombas y Motores de Occidente</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

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
   <div style=" background:  url(../imagenes/bombas/impel/portada.png) no-repeat;
   background-position:center 50%;
   background-size: cover;
   padding: 250px 70px 70px;
   margin: auto;
   font-size: 2.5rem;
   font-weight: 800;">
   </div>
        
   <div class="container-fluid">
    {{-- Menu --}}
    <div>
        {{-- Logo --}}
        <div class="text-center">

            <figure class="figure">
                <img src="{{ asset('imagenes/bombas/impel/logo.png') }}" width="60%"
                    class="figure-img img-fluid rounded" alt="...">
            </figure>

        </div>

        {{-- Imagenes al seleccionar --}}
        <div>

            {{-- Esto es la Fila --}}
            <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                {{-- Imagen de Series AI --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#AI"><img src="{{ asset('imagenes/bombas/impel/AI.png') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie AI</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series E --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#E"><img src="{{ asset('imagenes/bombas/impel/E.png') }}" width="82%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6>Serie E</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series C --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#C"><img src="{{ asset('imagenes/bombas/impel/C.png') }}" width="82%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie C</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series L --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#L"><img src="{{ asset('imagenes/bombas/impel/L.png') }}" width="85%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie L</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series G --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#G"><img src="{{ asset('imagenes/bombas/impel/G.png') }}" width="84%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie G</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series H --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#H"><img src="{{ asset('imagenes/bombas/impel/H.png') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie H</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series AC --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#AC"><img src="{{ asset('imagenes/bombas/impel/AC.png') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie AC</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series Aereadores Sumergibles --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#sumergibles"><img src="{{ asset('imagenes/bombas/impel/sumergibles.png') }}"
                                width="80%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Aereadores sumergibles</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Aereadores Mecanicos Flotantes --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#mecanicos"><img src="{{ asset('imagenes/bombas/impel/mecanicos.png') }}"
                                width="75%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Aereadores Mecanicos Flotantes</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Aereadores de Baja Velocidad --}}
                <div class="col">
    <figure class="figure">
        <a href="#baja">
            <img src="{{ asset('imagenes/bombas/impel/baja.png') }}" 
                 class="figure-img img-fluid rounded d-block mx-auto" 
                 alt=""
                 style="max-width: 40%; height: auto;">
        </a>
        <figcaption class="figure-caption">
            <h6 class="h6">Aereadores de Baja Velocidad</h6>
        </figcaption>
    </figure>
</div>


                {{-- Cierre de Fila --}}
            </div>

            {{-- Cierre de imagenes --}}
        </div>

        {{-- Fin de Menu --}}
    </div>

    {{-- Inicio de Contenidos --}}

    {{-- Contenido Series AI --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="AI" class="h4">Bomba sumergible de Achique</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/impel/AI.png') }}" width="95%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6>Series AI</h6>
                </figcaption>
            </div>
            <div class="col-md-8">
                <!-- Texto -->
                <p>
                    Esta bomba es de achique, son bombas portátiles utilizadas en construcción y minería ideales
                    en el manejo de agua limpia y/o con abrasivos en potencias de 0.5 a 15 Hp.
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->
        <div class="col-md-12 " style="overflow-x:auto;">
            <h4>Especificaciones Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">RPM</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                        <th scope="col" class="border-bottom border-dark">Diametro desc.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">AI-M2-51-M</td>
                        <td scope="col">0.5</td>
                        <td scope="col">3450</td>
                        <td scope="col">110</td>
                        <td scope="col">56 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">AI-M2-51-MA</td>
                        <td scope="col">0.5</td>
                        <td scope="col">3450</td>
                        <td scope="col">110</td>
                        <td scope="col">56 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">AI-12-51-M</td>
                        <td scope="col">1</td>
                        <td scope="col">3450</td>
                        <td scope="col">110</td>
                        <td scope="col">56 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">AI-12-51-MA</td>
                        <td scope="col">1</td>
                        <td scope="col">3450</td>
                        <td scope="col">110</td>
                        <td scope="col">56 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">AI-22-76</td>
                        <td scope="col">2</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">AI-32-76</td>
                        <td scope="col">3</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Contenido Series E --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="E" class="h4">Bomba sumergible de aguas residuales</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/impel/E.png') }}" width="100%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6>Series E</h6>
                </figcaption>
            </div>
            <div class="col-md-8 ">
                <!-- Texto -->
                <p>
                    Bombas sumergibles portátiles o para instalación fija para manejo de aguas residuales domésticas
                    y municipales. En potencias de 1Hp hasta 3Hp y diámetros de de descarga de 2” y 3” con paso de
                    esfera de 32mm (1 1/4”)
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->
        <div class="col-lg-12 " style="overflow-x:auto;">
            <h4 class="h4">Especificaciones Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">Fases</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                        <th scope="col" class="border-bottom border-dark">Diametro desc.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">E-12-51-M</td>
                        <td scope="col">1</td>
                        <td scope="col">1</td>
                        <td scope="col">110</td>
                        <td scope="col">56 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">E-12-51-MA</td>
                        <td scope="col">1</td>
                        <td scope="col">1</td>
                        <td scope="col">110</td>
                        <td scope="col">56 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">EV-22-76-T</td>
                        <td scope="col">2</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr>
                        <td scope="col">EV-22-76-M</td>
                        <td scope="col">2</td>
                        <td scope="col">1</td>
                        <td scope="col">220</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr>
                        <td scope="col">EV-32-76-T</td>
                        <td scope="col">3</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr>
                        <td scope="col">EV-32-76-M</td>
                        <td scope="col">3</td>
                        <td scope="col">1</td>
                        <td scope="col">220</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">EV-52-76</td>
                        <td scope="col">5</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Contenido Series C --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="C" class="h4">Bomba sumergible de aguas residuales</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4 ">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/impel/C.png') }}" width="100%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 >Series C</h6>
                </figcaption>
            </div>
            <div class="col-md-8">
                <!-- Texto -->
                <p>
                    Bombas portátiles y/o estacionarias para menejo de aguas residuales domésticas y municipales con
                    alto contenido de sólidos de hasta 64mm (2 1/2”) de paso de esfera fabricadas en hierro gris de
                    alta resistencia.
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->
        <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
            <h4 class="h4">Especificaciones Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">RPM</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                        <th scope="col" class="border-bottom border-dark">Diametro desc.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">CI-14-76</td>
                        <td scope="col">3</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr>
                        <td scope="col">CI-24-76</td>
                        <td scope="col">4.5</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr>
                        <td scope="col">CV-M2-51-M</td>
                        <td scope="col">0.5</td>
                        <td scope="col">3450</td>
                        <td scope="col">110</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">CV-M2-51-MA</td>
                        <td scope="col">0.5</td>
                        <td scope="col">1750</td>
                        <td scope="col">110</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">CV-14-51-M</td>
                        <td scope="col">1</td>
                        <td scope="col">1750</td>
                        <td scope="col">110</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">CV-14-51-MA</td>
                        <td scope="col">1</td>
                        <td scope="col">1750</td>
                        <td scope="col">110</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">CV-14-51-T</td>
                        <td scope="col">1</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Contenido Series L --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="L" class="h4">Bomba sumergible de aguas residuales</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4 ">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/impel/L.png') }}" width="90%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">Series L</h6>
                </figcaption>
            </div>
            <div class="col-md-8 ">
                <!-- Texto -->
                <p>
                    Bombas con alto paso de sólidos en suspensión para manejo de aguas residuales domésticas
                    municipales e industriales de 3 a 300HP. En versiones fija, portátil o cárcamo seco.
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->
        <div class="col-lg-12 " style="overflow-x:auto;">
            <h4 class="h4">Especificaciones Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">RPM</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                        <th scope="col" class="border-bottom border-dark">Diametro desc.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">LU-076-024-176-D</td>
                        <td scope="col">2.5</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr>
                        <td scope="col">LU-076-034-160-W</td>
                        <td scope="col">3</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr>
                        <td scope="col">LU-076-054-190-W</td>
                        <td scope="col">5</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr>
                        <td scope="col">LU-076-074-205-W</td>
                        <td scope="col">7.5</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm (3")</td>
                    </tr>
                    <tr>
                        <td scope="col">LU-100-036-220-W</td>
                        <td scope="col">3</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LU-100-104-220-W</td>
                        <td scope="col">10</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LU-100-154-250-W</td>
                        <td scope="col">15</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LU-100-204-270-W</td>
                        <td scope="col">20</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-104-195-W</td>
                        <td scope="col">10</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-154-215-W</td>
                        <td scope="col">15</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-204-235-W</td>
                        <td scope="col">20</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-074-178-WC</td>
                        <td scope="col">7.5</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-104-190-WC</td>
                        <td scope="col">10</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-154-216-WC</td>
                        <td scope="col">15</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-204-241-WC</td>
                        <td scope="col">20</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-254-248-WC</td>
                        <td scope="col">25</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-254-271-WAP</td>
                        <td scope="col">25</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-304-300-WAP</td>
                        <td scope="col">30</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-404-335-WAP</td>
                        <td scope="col">40</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-504-355-WAP</td>
                        <td scope="col">50</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-100-604-366-WAP</td>
                        <td scope="col">60</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-151-104-191-W</td>
                        <td scope="col">10</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-151-154-210-W</td>
                        <td scope="col">15</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-151-204-228-W</td>
                        <td scope="col">20</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-151-304-245-W</td>
                        <td scope="col">30</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-151-404-250-WG</td>
                        <td scope="col">40</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-151-504-268-WG</td>
                        <td scope="col">50</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-151-604-285-WG</td>
                        <td scope="col">60</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-200-304-247-W</td>
                        <td scope="col">30</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">200 mm (8")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-200-404-269-W</td>
                        <td scope="col">40</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">200 mm (8")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-200-504-283-W</td>
                        <td scope="col">50</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">200 mm (8")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-200-604-294-W</td>
                        <td scope="col">60</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">200 mm (8")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-200-754-307-WG</td>
                        <td scope="col">75</td>
                        <td scope="col">1750</td>
                        <td scope="col">440</td>
                        <td scope="col">200 mm (8")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-200-1004-327-WG</td>
                        <td scope="col">100</td>
                        <td scope="col">1750</td>
                        <td scope="col">440</td>
                        <td scope="col">200 mm (8")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-200-1254-340-WG</td>
                        <td scope="col">125</td>
                        <td scope="col">1750</td>
                        <td scope="col">440</td>
                        <td scope="col">200 mm (8")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-151-156-255-WG</td>
                        <td scope="col">15</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-151-206-279-WG</td>
                        <td scope="col">20</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-300-506-302-WF</td>
                        <td scope="col">50</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">300 mm (12")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-300-606-310-WF</td>
                        <td scope="col">60</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">300 mm (12")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-300-756-330-WF</td>
                        <td scope="col">75</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">300 mm (12")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-300-1006-345-WF</td>
                        <td scope="col">100</td>
                        <td scope="col">1160</td>
                        <td scope="col">440</td>
                        <td scope="col">300 mm (12")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-300-756-400-D</td>
                        <td scope="col">75</td>
                        <td scope="col">1160</td>
                        <td scope="col">440</td>
                        <td scope="col">300 mm (12")</td>
                    </tr>
                    <tr>
                        <td scope="col">LD-300-1006-430-W</td>
                        <td scope="col">100</td>
                        <td scope="col">1160</td>
                        <td scope="col">440</td>
                        <td scope="col">300 mm (12")</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">LT-300-2506-470-D</td>
                        <td scope="col">250</td>
                        <td scope="col">1160</td>
                        <td scope="col">440</td>
                        <td scope="col">300 mm (12")</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Contenido Series G --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="G" class="h4">Bomba Trituradoras</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4 ">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/impel/G.png') }}" width="90%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">Series G</h6>
                </figcaption>
            </div>
            <div class="col-md-8 ">
                <!-- Texto -->
                <p>
                    Bombas Trituradoras para manejo de sólidos suaves domésticos en gastos moderados y altas cargas
                    en potencias de 2 a 10 Hp
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->

        <div class="col-md-12" style="overflow-x:auto;">
            <h4 class="h4">Unidad basica o "portatil</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">Fases</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                        <th scope="col" class="border-bottom border-dark">Diametro desc.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">GM-22-32-T</td>
                        <td scope="col">2.5</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">32 mm (1 1/4")</td>
                    </tr>
                    <tr>
                        <td scope="col">GM-52-51</td>
                        <td scope="col">5</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">GM-72-51</td>
                        <td scope="col">7.5</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">GM-102-51</td>
                        <td scope="col">10</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                </tbody>
            </table>
            <h4 class="h4">Unidad fija con codo de descarga y adaptador</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">Fases</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                        <th scope="col" class="border-bottom border-dark">Diametro desc.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">GM-22-32-T</td>
                        <td scope="col">2.5</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">32 mm (1 1/4")</td>
                    </tr>
                    <tr>
                        <td scope="col">GM-52-51 F</td>
                        <td scope="col">5</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                    <tr>
                        <td scope="col">GM-72-51 F</td>
                        <td scope="col">7.5</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">GM-102-51 F</td>
                        <td scope="col">10</td>
                        <td scope="col">3</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">51 mm (2")</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Contenido Series H --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="H" class="h4">Bombas de flujo Axial</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4 ">
                <div class="m-1">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/impel/H.png') }}" width="95%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
            </div>
                
                <figcaption class="d-flex justify-content-center">
                    <h6>Series H</h6>
                </figcaption>
        
            </div>
            <div class="col-md-8 mt-5 mb-3">
                <!-- Texto -->
                <p>
                    Bombas de flujo axial, de baja velocidad, con alto paso de sólidos en suspensión para manejo de
                    aguas residuales municipales con grandes caudales de 300 a 1500lps.
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->
        <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
            <h4 class="h4">Especificaciones Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">RPM</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                        <th scope="col" class="border-bottom border-dark">Diametro columna</th>
                        <th scope="col" class="border-bottom border-dark">Diametro desc.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">H-20-125</td>
                        <td scope="col">125</td>
                        <td scope="col">880</td>
                        <td scope="col">440</td>
                        <td scope="col">36"</td>
                        <td scope="col">20"</td>
                    </tr>

                    <tr class="border-bottom border-dark">
                        <td scope="col">H-20-150</td>
                        <td scope="col">150</td>
                        <td scope="col">880</td>
                        <td scope="col">440</td>
                        <td scope="col">36"</td>
                        <td scope="col">20"</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Contenido Series AC --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="AC" class="h4">Bomba sumergible para aguas lodosas</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4 ">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/impel/AC.png') }}" width="90%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6>Series AC</h6>
                </figcaption>
            </div>
            <div class="col-md-8 mt-5 mb-3">
                <!-- Texto -->
                <p>
                    Esta bomba es de achique, son bombas portátiles utilizadas en construcción y minería ideales
                    en el manejo de agua limpia y/o con abrasivos en potencias de 0.5 a 15 Hp.
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->
        <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
            <h4 class="h4">Especificaciones Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">RPM</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                        <th scope="col" class="border-bottom border-dark">Diametro desc.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">AC-22-80</td>
                        <td scope="col">2</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">76 mm(3")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-32-80</td>
                        <td scope="col">3</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">77 mm(3")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-52-80</td>
                        <td scope="col">5</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">78 mm(3")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-102-72 E</td>
                        <td scope="col">10</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-102-72 S</td>
                        <td scope="col">10</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-102-100 E</td>
                        <td scope="col">10</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-102-100 S</td>
                        <td scope="col">10</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-102-101 E</td>
                        <td scope="col">10</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-102-101 S</td>
                        <td scope="col">10</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-152-101 E</td>
                        <td scope="col">15</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-152-101 S</td>
                        <td scope="col">15</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">100 mm (4")</td>
                    </tr>
                    <tr>
                        <td scope="col">AC-152-150 E</td>
                        <td scope="col">15</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">AC-152-150 S</td>
                        <td scope="col">15</td>
                        <td scope="col">3450</td>
                        <td scope="col">220 o 440</td>
                        <td scope="col">151 mm (6")</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Contenido Aereador sumergible serie AMS --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="sumergibles" class="h4">Aereador sumergible serie AMS</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4 ">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/impel/sumergibles.png') }}"
                        width="90%" class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">Serie AMS</h6>
                </figcaption>
            </div>
            <div class="col-md-8 ">
                <!-- Texto -->
                <p>
                    Aereadores eléctricos sumergibles en potencias desde 0.5 HP hasta 60 HP y capacidad de
                    transferencia de hasta 57 KG de O2/hr. Su diseño permite una operación completamente
                    silenciosa y eficiente.
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->
        <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
            <h4 class="h4">Especificaciones Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">AMS-10-0.5</td>
                        <td scope="col">0.5</td>
                        <td scope="col">127</td>
                    </tr>
                    <tr>
                        <td scope="col">AMS-20-1.0</td>
                        <td scope="col">1</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMS-30-2.0</td>
                        <td scope="col">2</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMS-40-7.5</td>
                        <td scope="col">7.5</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMS-50-15.0</td>
                        <td scope="col">15</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMS-60-30.0</td>
                        <td scope="col">30</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">AMS-70-60.0</td>
                        <td scope="col">60</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Contenido Aereadores Mecánicos Flotantes --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="mecanicos" class="h4">Aereadores Mecánicos Flotantes</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4 ">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/impel/mecanicos.png') }}"
                        width="100%" class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6>Aereadores Mecánicos Flotantes</h6>
                </figcaption>
            </div>
            <div class="col-md-8 ">
                <!-- Texto -->
                <p>

                    Aereadores mecánicos flotantes de alta velocidad; diseñados para crear una interfase aire/agua
                    continua y suficiente para la transferencia de oxígeno del aire líquido y mezclar el contenido.
                    En potencias desde 2 HP hasta 60 HP y transferencia de oxígeno 1.27 KG de O2/hr en condiciones
                    estándar ideales para lagunas de oxidación.
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->
        <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
            <h4 class="h4">Especificaciones Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">RPM</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">AMF- 3-4</td>
                        <td scope="col">3</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMF- 5-4</td>
                        <td scope="col">5</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMF-7.5-4</td>
                        <td scope="col">7.5</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMF- 15-4</td>
                        <td scope="col">15</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMF- 20-4</td>
                        <td scope="col">20</td>
                        <td scope="col">1750</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMF- 5-6</td>
                        <td scope="col">5</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMF- 10-6</td>
                        <td scope="col">10</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMF- 30-6</td>
                        <td scope="col">30</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMF- 40-6</td>
                        <td scope="col">40</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">AMF- 50-6</td>
                        <td scope="col">50</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">AMF- 60-6</td>
                        <td scope="col">60</td>
                        <td scope="col">1160</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Contenido Aereadores Sumergibles ABV --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="baja" class="h4">Aereadores Sumergibles ABV</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-5">
                <figure class="figure d-flex justify-content-center" ><img src="{{ asset('imagenes/bombas/impel/baja.png') }}" width="30%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 >Aereadores Sumergibles ABV</h6>
                </figcaption>
            </div>
            <div class="col-md-7">
                <!-- Texto -->
                <p>
                    Aereadores mecánicos superficiales de baja velocidad. Soportan sobrecargas momentáneas de hasta
                    500%. Transferencia de oxígeno garantizada en condiciones estándar 1.6 KG de O2/hr.
                    Disponibles en capacidades de hasta 100 HP.
                </p>
                    <!-- Aplicaciones -->
                    <h4 >Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                        <li>Aguas residuales</li>
                    </ul>
            </div>
        </div>
        <!-- Tabla -->
        <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
            <h4 class="h4">Especificaciones Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">Modelo</th>
                        <th scope="col" class="border-bottom border-dark">HP</th>
                        <th scope="col" class="border-bottom border-dark">RPM</th>
                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">ABV- 7.5</td>
                        <td scope="col">7.5</td>
                        <td scope="col">Consultar</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">ABV- 10</td>
                        <td scope="col">10</td>
                        <td scope="col">Consultar</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">ABV- 15</td>
                        <td scope="col">15</td>
                        <td scope="col">Consultar</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">ABV- 20</td>
                        <td scope="col">20</td>
                        <td scope="col">Consultar</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">ABV- 30</td>
                        <td scope="col">30</td>
                        <td scope="col">Consultar</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">ABV- 40</td>
                        <td scope="col">40</td>
                        <td scope="col">Consultar</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr>
                        <td scope="col">ABV- 50</td>
                        <td scope="col">50</td>
                        <td scope="col">Consultar</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                    <tr class="border-bottom border-dark">
                        <td scope="col">ABV- 100</td>
                        <td scope="col">100</td>
                        <td scope="col">Consultar</td>
                        <td scope="col">220 o 440</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Fin de container --}}
          <!-- Boton hacia arriba -->
          <img class='ir-arriba' javascript:void(0) title="Volver arriba" src="{{ asset('imagenes/icons/up2.svg') }}"
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
        <livewire:floating-whats/>
</div>

</body>

</html>
