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

    <title>Bombas y Motores de Occidente</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/logo/cropped-logitoBO02-32x32.png') }}">

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
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
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
        {{-- Menu --}}
        <div>
            {{-- Logo --}}
            <div class="text-center">

                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/pentair/logo.png') }}" width="20%"
                        class="figure-img img-fluid rounded" alt="...">
                </figure>

            </div>

            {{-- Imagenes al seleccionar --}}
            <div>
                {{-- Esto es la Fila --}}
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-6 g-2 g-lg-3">

                    {{-- Imagen de Series Ultra --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#ultra"><img src="{{ asset('imagenes/bombas/pentair/ultra.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Ultratemp</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series IntelliFlo --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#IntelliFlo"><img src="{{ asset('imagenes/bombas/pentair/IntelliFlo.png') }}"
                                    width="100%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">IntelliFlo</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series VTSH --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#vtsh"><img src="{{ asset('imagenes/bombas/pentair/vtsh.png') }}" width="60%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bombas VTSH</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series Well Mate --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#wm"><img src="{{ asset('imagenes/bombas/pentair/wm.png') }}" width="20%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Well Mate</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series Booster Sta-Rite --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#HP"><img src="{{ asset('imagenes/bombas/pentair/HP.png') }}" width="75%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Booster Sta-Rite</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Serie-B --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#B"><img src="{{ asset('imagenes/bombas/pentair/B.png') }}" width="80%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Berkeley</h6>
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

        {{-- Contenido Series Ultra --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="ultra" class="h4">Ultratemp Bomba de Calor</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/pentair/ultra.png') }}" width="80%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Ultratemp</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1H4zl-rZY46h4laEby2yW5biamGEljam6/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Opción de gran ahorro de energía para el calentamiento de las piscinas y spas. Su diseño brinda
                        una mejor circulacion de aire, eficiencia, salida de calor y bajo nivel de ruido al operar.
                        Cargadas con el gas refrigerane R410A, que es un gas seguro y ecologico porque no daña la capa
                        de ozono
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <!-- Tabla -->
                <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Moldelo</th>
                                <th scope="col" class="border-bottom border-dark">Parte N°</th>
                                <th scope="col" class="border-bottom border-dark">Color</th>
                                <th scope="col" class="border-bottom border-dark">80/80/80* BTU/COP</th>
                                <th scope="col" class="border-bottom border-dark">80/63/80* BTU/COP</th>
                                <th scope="col" class="border-bottom border-dark">50/63/80* BTU/COP</th>
                                <th scope="col" class="border-bottom border-dark">Frec. (Hz)</th>
                                <th scope="col" class="border-bottom border-dark">Tamaño del disyentor (A)</th>
                                <th scope="col" class="border-bottom border-dark">Fase</th>
                                <th scope="col" class="border-bottom border-dark">Voltios</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">70</td>
                                <td scope="col">460930</td>
                                <td scope="col">Almendra</td>
                                <td scope="col">75,000/5.9</td>
                                <td scope="col">70,000/5.7</td>
                                <td scope="col">50,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">40</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">90</td>
                                <td scope="col">460931</td>
                                <td scope="col">Almendra</td>
                                <td scope="col">90,000/5.8</td>
                                <td scope="col">85,000/5.6</td>
                                <td scope="col">60,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">110</td>
                                <td scope="col">460932</td>
                                <td scope="col">Almendra</td>
                                <td scope="col">110,000/6.1</td>
                                <td scope="col">101,000/5.8</td>
                                <td scope="col">70,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">120 Q</td>
                                <td scope="col">460833</td>
                                <td scope="col">Almendra</td>
                                <td scope="col">127,000/5.7</td>
                                <td scope="col">120,000/5.5</td>
                                <td scope="col">82,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">120 H/C</td>
                                <td scope="col">460935</td>
                                <td scope="col">Almendra</td>
                                <td scope="col">125,000 Heat/5.5
                                    71,000 Cool/4.1
                                </td>
                                <td scope="col">118,000/5.3</td>
                                <td scope="col">80,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">120 C</td>
                                <td scope="col">460937</td>
                                <td scope="col">Almendra</td>
                                <td scope="col">122,000/5.5</td>
                                <td scope="col">114,000/5.3</td>
                                <td scope="col">76,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">3</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">140</td>
                                <td scope="col">460934</td>
                                <td scope="col">Almendra</td>
                                <td scope="col">145,000/5.8</td>
                                <td scope="col">135,000/5.6</td>
                                <td scope="col">90,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">140 H/C</td>
                                <td scope="col">460958</td>
                                <td scope="col">Almendra</td>
                                <td scope="col">140,000 Heat/5.6
                                    71,000 Cool/4.1
                                </td>
                                <td scope="col">132,000/5.4</td>
                                <td scope="col">85,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">140C</td>
                                <td scope="col">460928</td>
                                <td scope="col">Almendra</td>
                                <td scope="col">140,000/5.7</td>
                                <td scope="col">130,000/5.5</td>
                                <td scope="col">85,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">3</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">70 BLK</td>
                                <td scope="col">460960</td>
                                <td scope="col">Negro</td>
                                <td scope="col">75,000/5.9</td>
                                <td scope="col">70,000/5.7</td>
                                <td scope="col">50,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">40</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">90 BLK</td>
                                <td scope="col">460961</td>
                                <td scope="col">Negro</td>
                                <td scope="col">90,000/5.8</td>
                                <td scope="col">85,000/5.6</td>
                                <td scope="col">60,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">110 BLK</td>
                                <td scope="col">460962</td>
                                <td scope="col">Negro</td>
                                <td scope="col">110,000/6.1</td>
                                <td scope="col">101,000/5.8</td>
                                <td scope="col">70,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">120 Q</td>
                                <td scope="col">460833</td>
                                <td scope="col">Negro</td>
                                <td scope="col">127,000/5.7</td>
                                <td scope="col">120,000/5.5</td>
                                <td scope="col">82,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">120 H/C BLK</td>
                                <td scope="col">460965</td>
                                <td scope="col">Negro</td>
                                <td scope="col">125,000 Heat/5.5
                                    71,000 Cool/4.1
                                </td>
                                <td scope="col">118,000/5.3</td>
                                <td scope="col">80,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">120 C BLK</td>
                                <td scope="col">460967</td>
                                <td scope="col">Negro</td>
                                <td scope="col">122,000/5.5</td>
                                <td scope="col">114,000/5.3</td>
                                <td scope="col">76,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">3</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">140</td>
                                <td scope="col">460964</td>
                                <td scope="col">Negro</td>
                                <td scope="col">145,000/5.8</td>
                                <td scope="col">135,000/5.6</td>
                                <td scope="col">90,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>
                            <tr>
                                <td scope="col">140 H/C</td>
                                <td scope="col">460959</td>
                                <td scope="col">Negro</td>
                                <td scope="col">140,000 Heat/5.6
                                    71,000 Cool/4.1
                                </td>
                                <td scope="col">132,000/5.4</td>
                                <td scope="col">85,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">1</td>
                                <td scope="col">230</td>

                            </tr>


                            <tr class="border-bottom border-dark">
                                <td scope="col">140C</td>
                                <td scope="col">460929</td>
                                <td scope="col">Negro</td>
                                <td scope="col">140,000/5.7</td>
                                <td scope="col">130,000/5.5</td>
                                <td scope="col">85,000/4.0</td>
                                <td scope="col">60</td>
                                <td scope="col">50</td>
                                <td scope="col">3</td>
                                <td scope="col">230</td>
                            </tr>
                        </tbody>
                    </table>
                    <span>*Calificación según el estándar de ARI 1160 (temp. del aire °F 1% de humedad relativa/temp.
                        del agua. °F</span>
                </div>
            </div>
        </div>

        {{-- Contenido Series IntelliFlo --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="IntelliFlo" class="h4">Intelliflo VSF de Pentair Bomba de Velocidad y Flujo Variable
                    </h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/pentair/IntelliFlo.png') }}" width="70%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">IntelliFlo</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/17b2j9OmcT11VuDqyjDiHVRyS9Dd2Q2Ny/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        La primera bomba de velocidad y flujo variable capaz de variar la velocidad con controles
                        digitales y un sofware propio que permite la programación personalizada de las velocidades de la
                        bomba para las tareas de filtrar, calentar, retrolavar, así como para uso en cascadas y el spa.
                        El resultado de esta innovacion es el ahorro de energía que se traduce en dinero ahorrado.
                        Además , las caracteristicas de contruccion de su motor la hacen sorprendetemente silenciosa.
                    </p>
                    <h4 class="h4">Configurela y Despreocupese </h4>
                    <p>Solo configure el flujo deseado y la Bomba IntelliFlo VSF se ajustará según sea necesario para
                        mantenerlo. Así de simple. Sin hacer suposiciones. Relájese y disfrute su piscina, mientras la
                        Bomba IntelliFlo VSF suministra un flujo uniforme para un máximo desempeño </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-5 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Recirculación de agua en piscinas</li>
                        <li>Recirculacion de agua en Spas </li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-7 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Código</th>
                                <th scope="col" class="border-bottom border-dark">Descripción</th>
                                <th scope="col" class="border-bottom border-dark">THP</th>
                                <th scope="col" class="border-bottom border-dark">WEF</th>
                                <th scope="col" class="border-bottom border-dark">HHP</th>
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">Voltaje</th>
                                <th scope="col" class="border-bottom border-dark">Frecuencia</th>
                                <th scope="col" class="border-bottom border-dark text-center">Factor de servicio
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr class="border-bottom border-dark">
                                <td scope="col">022056</td>
                                <td scope="col">IntelliFlo VSF</td>
                                <td scope="col">3.95</td>
                                <td scope="col">5.6</td>
                                <td scope="col">2.10</td>
                                <td scope="col">2”x 2”</td>
                                <td scope="col">230</td>
                                <td scope="col">50/60</td>
                                <td scope="col">1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series VTSH --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="vtsh" class="h4">Bombas Procesadoras de Sólidos con Turbina Vertical Fairbanks
                        Nijhuis </h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/pentair/vtsh.png') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Bombas VTSH</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1rNoQY6p-g44ECeMna9xWs0c-DKAjLQVC/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>

                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <b>Serie VTSH ó Tipo Propela de (Flujo axial ó Flujo mixto)</b>
                    <p>
                        Las Bombas procesadoras de sólidos con turbina vertical (VTSH) de Fairbanks Nijhuis son de
                        trabajo continuo los tamaños van desde 10” hasta 48” de descarga. Estas bombas llevan motores de
                        superficie flecha hueca, por lo tanto se elimina la necesidad de un accionamiento de motor
                        sumergible.
                    </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Estaciones de bombeo de aguas residuales</li>
                        <li>Plantas de tratamiento de agua </li>
                        <li>Procesamiento de sedimentos fibrosos y lodo</li>
                        <li>Procesamiento de pulpa</li>
                        <li>Procesamiento de sólidos industriales en genera</li>
                        <li>Control del agua de inundaciones y tormentas</li>
                        <li>Recolección y tratamiento de aguas residuale</li>
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <!-- Tabla -->
                <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th colspan="2" class="border-bottom border-dark text-center">Bombas VTSH</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">Tamaños de descarga – Pulgadas Tamaños de Descarga – mm</td>
                                <td scope="col">Hasta 48”
                                    Hasta 1220 mm
                                </td>

                            </tr>
                            <tr>
                                <td scope="col">Capacidad – GPM de Capacidad – m3/h</td>
                                <td scope="col">5,000-80,000 GPM
                                    1,135-18,160 m3/h
                                </td>

                            </tr>
                            <tr>
                                <td scope="col">Altura – Pies de Altura – metros</td>
                                <td scope="col">10’ a 110’
                                    3.05 a 33.5 m
                                </td>

                            </tr>
                            <tr>
                                <td scope="col">Diámetros nominales del cuenco – Pulgadas Diámetros nominales del
                                    cuenco – mm</td>
                                <td scope="col">10", 14", 16", 20", 24", 30", 36", 42", 48"
                                    254mm, 356mm, 406mm, 508mm, 610mm, 762mm, 914mm, 1070mm, 1220mm
                                </td>

                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">Capacidad de pasaje de sólidos - Pulgadas Capacidad de pasaje de
                                    sólidos- mm
                                </td>
                                <td scope="col">3" a 8"
                                    76 a 203 mm
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series Well Mate --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="wm" class="h4">Tanque de presurizado Fibra de Vidrio Well Mate WM- Series A
                        prueba
                        de corrosión</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/pentair/wm.png') }}" width="15%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Series Well Mate</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1oGm_rOyegwdO4pNUuISiNnVcb9H813eU/view?usp=drive_link"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Nuestra serie WM ofrece características y beneficios que los tanques de acero simplemente no
                        pueden igualar. Desde su construcción compuesta resistente a la corrosión, su menor peso,
                        facilidad de mantenimiento y una instalación economica. . Se instalan más rápido y a un menor
                        costo, generalmente requiriendo solo a una persona y pocas horas de trabajo. Un diferencial de
                        ajuste de presión más amplio proporciona una mayor flexibilidad.
                    </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Comerciales</li>
                        <li>Industriales</li>
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <!-- Tabla -->
                <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Capacidad</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx.</th>
                                <th scope="col" class="border-bottom border-dark">Diametro</th>
                                <th scope="col" class="border-bottom border-dark">Altura</th>
                                <th scope="col" class="border-bottom border-dark">Conexiones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">WM-4WM0060 QC</td>
                                <td scope="col">14.5 Gal/55lts</td>
                                <td scope="col">125psi</td>
                                <td scope="col">41cm</td>
                                <td scope="col">66cm</td>
                                <td scope="col">1” macho NPT </td>
                            </tr>
                            <tr>
                                <td scope="col">WM-6 WM0075 QC</td>
                                <td scope="col">19.6 Gal /75lts</td>
                                <td scope="col">125psi</td>
                                <td scope="col">41cm</td>
                                <td scope="col">81cm </td>
                                <td scope="col">1” macho NPT</td>
                            </tr>
                            <tr>
                                <td scope="col">WM-9 WM0120 QC</td>
                                <td scope="col">29.5 Gal/112lts</td>
                                <td scope="col">125psi</td>
                                <td scope="col">41cm</td>
                                <td scope="col">112cm</td>
                                <td scope="col">1” macho NPT</td>
                            </tr>
                            <tr>
                                <td scope="col">WM-12 WM0150 QC</td>
                                <td scope="col">40.3 Gal/</td>
                                <td scope="col">125psi</td>
                                <td scope="col">41cm</td>
                                <td scope="col">145cm</td>
                                <td scope="col">1” macho NPT</td>
                            </tr>
                            <tr>
                                <td scope="col">WM-14WB WM0180 QC</td>
                                <td scope="col">47.1 Gal /178lts</td>
                                <td scope="col">125psi</td>
                                <td scope="col">53cm</td>
                                <td scope="col">105cm</td>
                                <td scope="col">1 ¼” macho NPT</td>
                            </tr>
                            <tr>
                                <td scope="col">WM-25WB WM0330 QC</td>
                                <td scope="col">86.7 Gal/328lts</td>
                                <td scope="col">125psi</td>
                                <td scope="col">101.5cm</td>
                                <td scope="col">140cm</td>
                                <td scope="col">1 ¼” macho NPT</td>
                            </tr>

                            <tr class="border-bottom border-dark">
                                <td scope="col">WM-35WB WM0450 QC</td>
                                <td scope="col">119.7 Gal/ 453lts</td>
                                <td scope="col">125psi</td>
                                <td scope="col">289cm</td>
                                <td scope="col">189cm</td>
                                <td scope="col">1 ¼” macho NPT</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series Booster Sta-Rite --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="HP" class="h4">Bomba Booster Sta-Rite Serie HP y HPS</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/pentair/HP.png') }}" width="60%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie HP y HPS</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1902Y6fipZ_wg8FhVmdcJnthDpzqtx9iT/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Las bombas tipo Booster HP y HPS están diseñadas para tener una larga durabilidad. Su sistema
                        patentado de impulsores flotantes minimiza las cargas axiales permitiendo una operación continua
                        sin daño a los baleros, el sello mecánico y los componentes hidráulicos.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Lavado de autos</li>
                        <li>Filtración y osmosis inversa</li>
                        <li>Sistemas de alta presión</li>
                        <li>Lavado a presión</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Hp</th>
                                <th scope="col" class="border-bottom border-dark">Etapas</th>
                                <th scope="col" class="border-bottom border-dark">GPM</th>
                                <th scope="col" class="border-bottom border-dark">Volts/Fase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">HP7C</td>
                                <td scope="col">1/2</td>
                                <td scope="col">9</td>
                                <td scope="col">7</td>
                                <td scope="col">115-230/1</td>
                            </tr>
                            <tr>
                                <td scope="col">HP10E</td>
                                <td scope="col">1</td>
                                <td scope="col">10</td>
                                <td scope="col">10</td>
                                <td scope="col">115-230/1</td>
                            </tr>
                            <tr>
                                <td scope="col">HP20F</td>
                                <td scope="col">1.5</td>
                                <td scope="col">9</td>
                                <td scope="col">20</td>
                                <td scope="col">115-230/1</td>
                            </tr>
                            <tr>
                                <td scope="col">HPS10D</td>
                                <td scope="col">0.75</td>
                                <td scope="col">8</td>
                                <td scope="col">10</td>
                                <td scope="col">115-230/1</td>
                            </tr>
                            <tr>
                                <td scope="col">HPS10E</td>
                                <td scope="col">1</td>
                                <td scope="col">10</td>
                                <td scope="col">10</td>
                                <td scope="col">115-230/1</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">HPS20F</td>
                                <td scope="col">1.5</td>
                                <td scope="col">9</td>
                                <td scope="col">20</td>
                                <td scope="col">115-230/1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Serie-B --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="B" class="h4">Bombas Centrífugas Berkeley Serie-B acoplamiento directo</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/pentair/B.png') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie B</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1II3ut0Cs9GXEZSA3e29pxNLKN2FcFXL1/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Las bombas centrífugas Berkeley de acoplamiento directo son bombas de gran rendimiento e ideales
                        para aplicaciones de uso continuo.
                    </p>
                    <p>
                        La voluta está fabricada en materiales duraderos como hierro fundido, impulsores de hierro
                        fundido o bronce (opcional) y plato de desgaste en bronce.
                    </p>
                    <p>
                        Esta bomba es muy versátil ya que cuenta con 4 posiciones de descarga. Además, las cargas van
                        hasta los 120 metros y el flujo hasta los 4400 GPM o 1000 m3/h por lo que existen más de 100
                        modelos en los cuales Bombas de Occidente comercializa desde los 7.5h hasta los 150hp.
                    </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Riego</li>
                        <li>Agricultura</li>
                        <li>Trasvace</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Fin de container --}}
    </div>
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
</body>

</html>
