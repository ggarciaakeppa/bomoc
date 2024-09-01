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
    <style>
        
        @media (max-width: 576px){
            iframe{
                width: 100%;
                height: 100%;
            }
        }
        @media (max-width: 768){
            iframe{
                width: 50%;
                height: 50%;
            }
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
            <div class="text-center row row-cols-1 row-cols-lg-3 g-2 g-lg-3">
                <div class="col">
                    <figure class="figure">
                        <img src="{{ asset('imagenes/bombas/wilo-scot/logo-wilo.png') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="...">
                    </figure>
                </div>
                <div class="col">
                    <figure class="figure">
                        <img src="{{ asset('imagenes/bombas/wilo-scot/logo2.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="...">
                    </figure>
                </div>
                <div class="col">
                    <figure class="figure">
                        <img src="{{ asset('imagenes/bombas/wilo-scot/logo3.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="...">
                    </figure>
                </div>
            </div>
            {{-- Imagenes al seleccionar --}}
            <div>
                {{-- Esto es la Fila --}}
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                    {{-- Imagen de Bombas de turbina Vertical American-Marsh --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#TVC"><img
                                    src="{{ asset('imagenes/bombas/wilo-scot/bombas de turbina verticales2.jpg') }}"
                                    width="100%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bombas de turbina Vertical American-Marsh</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bombas sumergibles de doble sello Weil  --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#SVSF"><img src="{{ asset('imagenes/bombas/wilo-scot/WEIL-PUMP.jpg') }}"
                                    width="100%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bombas sumergibles de doble sello Weil</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Wilo-Star/Star-S --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#WSSS"><img src="{{ asset('imagenes/bombas/wilo-scot/star-s.jpg') }}"
                                    width="72%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Wilo-Star/Star-S</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba Wilo-Helix V --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#EB"><img src="{{ asset('imagenes/bombas/wilo-scot/centrifuga.jpg') }}"
                                    width="100%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Wilo-Helix V</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Scot Pump - Motorpump Elite Bronce --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#BSEB"><img
                                    src="{{ asset('imagenes/bombas/wilo-scot/Bombas Acoplamiento.jpg') }}"
                                    width="74%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Scot Pump - Motorpump Elite Bronce</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bombas MotorPump Elite Cast Iron (3500 RPM) --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#MECI"><img
                                    src="{{ asset('imagenes/bombas/wilo-scot/Bombas de Acoplamiento.jpg') }}"
                                    width="74%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bombas MotorPump Elite Cast Iron (3500 RPM)
                                </h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bombas MotorPump LFE (1150 RPM) --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#SVVE"><img src="{{ asset('imagenes/bombas/wilo-scot/Bombas LFE.jpg') }}"
                                    width="68%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bombas MotorPump LFE (1150 RPM)</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bombas MotorPump (3500 RPM) --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#BSMP"><img
                                    src="{{ asset('imagenes/bombas/wilo-scot/Bombas Acoplamiento Directo.jpg') }}"
                                    width="68%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bombas MotorPump (3500 RPM)</h6>
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
        {{-- Contenido Bombas de turbina Vertical American-Marsh --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="TVC" class="h4">Bombas de turbina Vertical American-Marsh</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/wilo-scot/bombas de turbina verticales2.jpg') }}"
                            width="50%" class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1OZo_0n3Y3LRcuJywFs83hb484Pskf55n/view?usp=sharing"
                            class="btn btn-primary ">Serie 480</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <p>
                        Las <b>Bombas de turbina vertical American-Marsh </b> están disponibles en tamaños de cuerpo
                        corto, conjunto profundo, sumergible, flujo mixto y axial. Estas turbinas verticales cuentan con
                        conjuntos de tazones esmaltados, carcasas extra resistentes, impulsores cerrados o semiabiertos
                        de alta eficiencia. Se fabrican en una amplia gama de materiales para satisfacer los requisitos,
                        como fundición de hierro, montaje en bronce o acero inoxidable, u otros materiales opcionales.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 m-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4>Aplicaciones</h4>
                    <ul>
                        <li>Pozo de agua potable</li>
                        <li>Riego Municipal</li>
                        <li>Central electrica</li>
                        <li>Protección contraincendios</li>
                    </ul>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                    <h4 >Características y beneficios</h4>
                    <div style="overflow-x:auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr class="border-top border-danger">
                                    <th scope="col" class="border-bottom border-dark">Serie</th>
                                    <th scope="col" class="border-bottom border-dark">Altura Máx</th>
                                    <th scope="col" class="border-bottom border-dark">Flujo Máx</th>
                                    <th scope="col" class="border-bottom border-dark">Temperatura</th>
                                    <th scope="col" class="border-bottom border-dark">Certificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="col">480 Turbina vertical</td>
                                    <td scope="col">304 mts</td>
                                    <td scope="col">1892 lps</td>
                                    <td scope="col">23ºC</td>
                                    <td scope="col">-</td>
                                </tr>
                                <tr>
                                    <td scope="col">480 Turbina vertical</td>
                                    <td scope="col">304 mts</td>
                                    <td scope="col">1892 lps</td>
                                    <td scope="col">Arriba de 48 º C</td>
                                    <td scope="col">NSF/ANSI/CAN</td>
                                </tr>
                                <tr>
                                    <td scope="col">480 Turbina vertical</td>
                                    <td scope="col">256 mts</td>
                                    <td scope="col">283 lps</td>
                                    <td scope="col">Arriba de 48 º C</td>
                                    <td scope="col">UL listada/Aprobada FM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contenido Bombas sumergibles de doble sello Weil --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="SVSF" class="h4">Bombas sumergibles de doble sello Weil</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/wilo-scot/WEIL-PUMP.jpg') }}"
                            width="70%" class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        {{-- direccion de catalogo --}}
                        <div class="btn-container me-2">
                            <a href="https://drive.google.com/file/d/1J8SQgP3-O4YQcyu-XYTNXGoBYlWrVVD-/view"
                                class="btn btn-primary">Doble Sello</a>
                        </div>
                        <div class="whatsapp-container">
                            <a href="https://wa.me/523329437092?text=Hola,%20te%20invito%20a%20ver%20la%20turbina%20vertical:%20"
                                class="btn btn-primary" target="_blank">Cotizar</a>
                        </div>
                    </figcaption>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <p>
                        Las <b>Bombas sumergibles Weil de doble sello </b> se pueden utilizar para bombear aguas
                        residuales, sólidos no filtrados, agua que contiene sedimentos y una amplia gama de
                        contaminantes.
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-2 m-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Bombeo de aguas pluviales desde drenajes de paso subterráneo</li>
                        <li>Áreas inundadas por ríos y arroyos desbordados</li>
                        <li>Muelles de carga de camiones</li>
                        <li>Estacionamientos inundados</li>
                        <li>Pozos de aguas residuales</li>
                        <li>Bóvedas subterráneas</li>
                    </ul>
                </div>

                <div class="col-md-6 mt-lg-6 text-justify " style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas:</h4>
                    <div style="overflow-x:auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr class="border-top border-danger">
                                    <th scope="col" class="border-bottom border-dark">Manejo de solidos</th>
                                    <th scope="col" class="border-bottom border-dark">Voltaje</th>
                                    <th scope="col" class="border-bottom border-dark">Carcasa</th>
                                    <th scope="col" class="border-bottom border-dark">Descarga</th>
                                    <th scope="col" class="border-bottom border-dark">Potencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="col">1/4" - 6"</td>
                                    <td scope="col">Voltajes monofásicos 115 o 208-230V </p> Voltajes trifásicos
                                        208-230 ó 460V</td>
                                    <td scope="col">Hierro fundido pesado con aletas de refrigeración integrales
                                        especiales</td>
                                    <td scope="col">1 1/4" - 6"</td>
                                    <td scope="col">
                                        <p>1150 rpm - 1/2 - 30Hp</p>
                                        <p>1750 rpm - 1/2 - 50Hp</p>
                                        <p>3500 rpm - 1 1/2 - 6Hp</p>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contenido Wilo-Star/Star-S --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="WSSS" class="h4">Wilo-Star/Star-S</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center" id="wilo"><img
                            src="{{ asset('imagenes/bombas/wilo-scot/star-s.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1G_pT-WZcot6kFXKLHG-iNX_LgF9PS54d/view?usp=sharing"
                            class="btn btn-primary">Star-S</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <p>
                        La <b>Bomba recirculadora Star con conexión bridada </b> (Brida perpendicular al eje). Tiene 3
                        etapas de velocidad preseleccionables para el ajuste de la carga (Solo tipo "S"). La carcasa de
                        la bomba es de hierro fundido gris o bronce. Temperaturas de 10°C a +110°C.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 m-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Sistemas de circulación industrial.</li>
                        <li>Sistemas de agua fría.</li>
                        <li>Sistemas de aire acondicionado.</li>
                    </ul>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                    <h4 class="h4">Características Técnicas</h4>
                    {{-- <ul>
                        <li>Cuenta con bridas de dos pernos</li>
                    </ul> --}}
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">Fases/ Volts</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx de trabajo</th>
                                <th scope="col" class="border-bottom border-dark">Potencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">Star 17FX 1-115V</td>
                                <td scope="col">1,5"</td>
                                <td scope="col">1-115 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">⅒ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star 30F 1-115V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1-115 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">⅒ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star 32F 1-115V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1~115 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col"> ¹⁄₂₀ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star S 21 RFC 1-115V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1~115 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">¹⁄₂₅ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star S 21 ZFX 1-115V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1~115 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">¹⁄₂₅ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star S 21F 1-115V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1~115 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">¹⁄₂₅ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star S 21FX 1-115V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1~115 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">¹⁄₂₅ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star S 33 FC+ 1-115V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1~115 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">¹⁄₂₅ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star S 33 FC 1-115V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1~115 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">⅙ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star S 33 FC 1-230V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1~230 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">⅙ HP</td>
                            </tr>
                            <tr>
                                <td scope="col">Star S 33 ZF 1-115V</td>
                                <td scope="col">3/4"-1.5"</td>
                                <td scope="col">1~230 V, 60 Hz</td>
                                <td scope="col">140 psi</td>
                                <td scope="col">⅙ HP</td>
                            </tr>
                        </tbody>
                    </table>
                    <ul>
                        <li>Cuentan con bridas de dos pernos</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Contenido Bomba Wilo-Helix V --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="EB" class="h4">Bomba Wilo-Helix V</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center m-1"><img src="{{ asset('imagenes/bombas/wilo-scot/centrifuga.jpg') }}"
                            width="100%" class="figure-img img-fluid rounded" alt="">
                    </figure>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1sJuzX8X2MCqbNgQOK9cr5SWFaTyi2a3N/view?usp=sharing"
                            class="btn btn-primary">Wilo-Helix V</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <p>
                        Las <b>bombas Wilo-Helix V</b> son bombas verticales multietapas en línea fabricadas en acero
                        inoxidable y motores eficiencia premium IE3.
                        Esta línea es muy amplia y va de tamaños de descarga desde 1.25” - 3”, presiones de 232- 363 Psi
                        potencias de 1 Hp-20 Hp, flujo máx 1728 lpm y hasta alturas de 244 metros. También resiste
                        temperaturas de hasta -20°C a 121°C.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 m-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4 >Aplicaciones</h4>
                    <ul>
                        <li>Abastecimiento de agua y aumento de presión</li>
                        <li>Sistemas industriales de circulación</li>
                        <li>Agua de proceso</li>
                        <li>Circuitos cerrados de refrigeración</li>
                        <li>Equipos contra incendios</li>
                        <li>Sistemas de lavado</li>
                        <li>Riego</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Contenido Scot Pump - Motorpump Elite Bronce --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="BSEB" >Scot Pump - Motorpump Elite Bronce</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/wilo-scot/Bombas Acoplamiento.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1Ub8fR-riu9WCD994G3WtK0RzEOLLL0Ft/view?usp=sharing"
                            class="btn btn-primary">Motorpump Elite Bronce</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <p>
                        Las <b>Bombas Scot Pump - Motorpump Elite Bronce </b> son ideales para el eficiente manejo del
                        agua. Diseñadas para gastos de hasta 500 GPM y carga máxima de 95 pies, destacan por su
                        construcción robusta en bronce. Equipadas con motores ODP, TEFC y a prueba de explosiones,
                        ofrecen potencias de hasta 20 HP y tamaños de descarga de hasta 4” NPT, garantizando rendimiento
                        y durabilidad en diversas aplicaciones de bombeo.
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-2 m-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4 >Aplicaciones</h4>
                    <ul>
                        <li>Agua de enfriamiento para calentamiento por inducción</li>
                        <li>Intercambiadores de calor</li>
                        <li>Sistemas de recirculación de agua</li>
                        <li>Suministro de agua no potable</li>
                    </ul>
                </div>

                <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                    <h4>Especificaciones Técnicas:</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo (GPM)</th>
                                <th scope="col" class="border-bottom border-dark">Carga Máxima (Pies)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">5½” C56, JM</td>
                                <td scope="col">75</td>
                                <td scope="col">150</td>
                            </tr>
                            <tr>
                                <td scope="col">5½” C56, JM</td>
                                <td scope="col">100</td>
                                <td scope="col">165</td>
                            </tr>
                            <tr>
                                <td scope="col">6½” JM</td>
                                <td scope="col">180</td>
                                <td scope="col">165</td>
                            </tr>
                            <tr>
                                <td scope="col">9” JP</td>
                                <td scope="col">100</td>
                                <td scope="col">120</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Bombas MotorPump Elite Cast Iron (3500 RPM) --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="MECI" class="h4">Bombas MotorPump Elite Cast Iron (3500 RPM)</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/wilo-scot/Bombas de Acoplamiento.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
             
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://mortonpumps.com/nuevo-sitio/wp-content/uploads/2023/04/Ficha-Tecnica-SCOT-PUMP.pdf"
                            class="btn btn-primary">Elite Cast Iron</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <p>
                        Las <b>Bombas MotorPump Elite Cast Iron </b>son la elección ideal para el manejo eficiente del
                        agua. Diseñadas para gastos de hasta 450 GPM y carga máxima de 175 pies, estas bombas cuentan
                        con una construcción robusta en hierro fundido. Su versatilidad se destaca con un cuerpo
                        resistente y opciones de impulsor en acero inoxidable o plástico, según la serie. Equipadas con
                        motores ODP, TEFC y certificación a prueba de explosiones, ofrecen potencias de hasta 15 HP y
                        tamaños de descarga de hasta 3” NPT. Garantizan rendimiento y durabilidad en diversas
                        aplicaciones de bombeo.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 m-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4>Aplicaciones</h4>
                    <ul>
                        <li>Torres de enfriamiento</li>
                        <li>Enfriadores</li>
                        <li>Inyección de plástico</li>
                        <li>Filtración y circulación de agua de proceso</li>
                        <li>Retorno de condensados</li>
                        <li>Tratamiento térmico</li>
                    </ul>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas:</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo (GPM)</th>
                                <th scope="col" class="border-bottom border-dark">Carga Máxima (Pies)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">471</td>
                                <td scope="col">110</td>
                                <td scope="col">80</td>
                            </tr>
                            <tr>
                                <td scope="col">480</td>
                                <td scope="col">250</td>
                                <td scope="col">95</td>
                            </tr>
                            <tr>
                                <td scope="col">501</td>
                                <td scope="col">75</td>
                                <td scope="col">125</td>
                            </tr>
                            <tr>
                                <td scope="col">503</td>
                                <td scope="col">120</td>
                                <td scope="col">125</td>
                            </tr>
                            <tr>
                                <td scope="col">602</td>
                                <td scope="col">190</td>
                                <td scope="col">125</td>
                            </tr>
                            <tr>
                                <td scope="col">603</td>
                                <td scope="col">315</td>
                                <td scope="col">130</td>
                            </tr>
                            <tr>
                                <td scope="col">604</td>
                                <td scope="col">405</td>
                                <td scope="col">150</td>
                            </tr>
                            <tr>
                                <td scope="col">605</td>
                                <td scope="col">450</td>
                                <td scope="col">150</td>
                            </tr>
                            <tr>
                                <td scope="col">701</td>
                                <td scope="col">150</td>
                                <td scope="col">165</td>
                            </tr>
                            <tr>
                                <td scope="col">702</td>
                                <td scope="col">190</td>
                                <td scope="col">175</td>
                            </tr>
                            <tr>
                                <td scope="col">704</td>
                                <td scope="col">360</td>
                                <td scope="col">175</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Bombas MotorPump LFE (1150 RPM) --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="SVVE" class="h4">Bombas MotorPump LFE (1150 RPM)</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/wilo-scot/Bombas LFE.jpg') }}"
                            width="50%" class="figure-img img-fluid rounded" alt="">
                    </figure>
     
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://mortonpumps.com/nuevo-sitio/wp-content/uploads/2023/04/Ficha-Tecnica-SCOT-PUMP.pdf"
                            class="btn btn-primary">MotorPump LFE</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <p>
                        Las <b>Bombas MotorPump LFE, de succión final y acoplamiento directo,</b> son ideales para un
                        eficiente manejo de agua. Con capacidad para gastos de hasta 4500 GPM y carga máxima de 60 pies,
                        estas bombas destacan por su robusta construcción en hierro fundido (opcionalmente en bronce).
                        Equipadas con motores ODP, TEFC y a prueba de explosiones, ofrecen potencias de hasta 50 HP y
                        tamaños de descarga de hasta 10” con brida ANSI. Solución confiable y potente para diversas
                        aplicaciones de bombeo.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 m-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4 >Aplicaciones</h4>
                    <ul>
                        <li>Parques acuáticos</li>
                        <li>Elementos acuáticos</li>
                    </ul>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas:</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo (GPM)</th>
                                <th scope="col" class="border-bottom border-dark">Carga Máxima (Pies)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">57</td>
                                <td scope="col">500</td>
                                <td scope="col">20</td>
                            </tr>
                            <tr>
                                <td scope="col">59</td>
                                <td scope="col">700</td>
                                <td scope="col">20</td>
                            </tr>
                            <tr>
                                <td scope="col">96</td>
                                <td scope="col">1100</td>
                                <td scope="col">40</td>
                            </tr>
                            <tr>
                                <td scope="col">97</td>
                                <td scope="col">2000</td>
                                <td scope="col">40</td>
                            </tr>
                            <tr>
                                <td scope="col">267</td>
                                <td scope="col">2000</td>
                                <td scope="col">22</td>
                            </tr>
                            <tr>
                                <td scope="col">268</td>
                                <td scope="col">4500</td>
                                <td scope="col">60</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Bombas MotorPump (3500 RPM) --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="BSMP" class="h4">Bombas MotorPump (3500 RPM)</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center">
                        <img src="{{ asset('imagenes/bombas/wilo-scot/Bombas Acoplamiento Directo.jpg') }}"
                            width="50%" class="figure-img img-fluid rounded" alt="">
                    </figure>
        
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://mortonpumps.com/nuevo-sitio/wp-content/uploads/2023/04/Ficha-Tecnica-SCOT-PUMP.pdf"
                            class="btn btn-primary">MotorPump (3500 RPM)</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <p>
                        Las <b>Bombas MotorPump de succión final</b> son la elección ideal para el eficiente manejo de
                        agua. Diseñadas para gastos de hasta 400 GPM y carga máxima de 275 pies, estas bombas destacan
                        por su construcción robusta en acero inoxidable 304 para cuerpo, impulsor y plato de sello, con
                        adaptador en hierro fundido. Equipadas con motores ODP, TEFC y a prueba de explosiones, operan a
                        3500 RPM. Ofrecen potencias de hasta 25 HP y tamaños de descarga de hasta 2” NPT o brida ANSI,
                        garantizando rendimiento y durabilidad en diversas aplicaciones de bombeo.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 m-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Sistemas de aumento de presión</li>
                        <li>Enfriadores</li>
                        <li>Inyección de plástico</li>
                        <li>Agua de refrigeración de proceso</li>
                        <li>Equipos lava trastes</li>
                        <li>Agua de enfriamiento para calentamiento por inducción</li>
                        <li>Agua potable</li>
                    </ul>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas:</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo (GPM)</th>
                                <th scope="col" class="border-bottom border-dark">Carga Máxima (Pies)</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">230, 231</td>
                                <td scope="col">75</td>
                                <td scope="col">150</td>
                            </tr>
                            <tr>
                                <td scope="col">232</td>
                                <td scope="col">125</td>
                                <td scope="col">165</td>
                            </tr>
                            <tr>
                                <td scope="col">236</td>
                                <td scope="col">175</td>
                                <td scope="col">140</td>
                            </tr>
                            <tr>
                                <td scope="col">320</td>
                                <td scope="col">150</td>
                                <td scope="col">125</td>
                            </tr>
                            <tr>
                                <td scope="col">321</td>
                                <td scope="col">150</td>
                                <td scope="col">175</td>
                            </tr>
                            <tr>
                                <td scope="col">322</td>
                                <td scope="col">150</td>
                                <td scope="col">260</td>
                            </tr>
                            <tr>
                                <td scope="col">323</td>
                                <td scope="col">275</td>
                                <td scope="col">120</td>
                            </tr>
                            <tr>
                                <td scope="col">324</td>
                                <td scope="col">275</td>
                                <td scope="col">210</td>
                            </tr>
                            <tr>
                                <td scope="col">325</td>
                                <td scope="col">255</td>
                                <td scope="col">260</td>
                            </tr>
                            <tr>
                                <td scope="col">326</td>
                                <td scope="col">410</td>
                                <td scope="col">140</td>
                            </tr>
                            <tr>
                                <td scope="col">327</td>
                                <td scope="col">370</td>
                                <td scope="col">230</td>
                            </tr>
                            <tr>
                                <td scope="col">328</td>
                                <td scope="col">370</td>
                                <td scope="col">275</td>
                            </tr>
                        </tbody>
                    </table>
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
