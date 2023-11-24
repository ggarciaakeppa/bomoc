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
   <div style=" background:  url(/imagenes/incendios/portada2.jpg) center center no-repeat;
    background-size: cover;
    padding: 220px 100px 100px;
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
                    <img src="{{ asset('imagenes/incendios/logo.jpg') }}" width="30%"
                        class="figure-img img-fluid rounded" alt="...">
                </figure>
            </div> 

            {{-- Imagenes al seleccionar --}}
            <div>
                {{-- Esto es la Fila --}}
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    {{-- Imagen de ECI-IA (Bomba centrífuga de alta presión). --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#IA"><img src="{{ asset('imagenes/incendios/ECI-IA.jpg') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">ECI-IA</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de ECI-HMV (Con Cabezal Engranado). --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#HMV"><img src="{{ asset('imagenes/incendios/ECI-HMV.jpg') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">ECI-HMV</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de ECI-BTVD (Bomba tipo Turbina Vertical). --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#BTVD"><img src="{{ asset('imagenes/incendios/ECI-BTVD.jpg') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">ECI-BTVD</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de ECI-BTVE (Bomba tipo Turbina Vertical). --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#BTVE"><img src="{{ asset('imagenes/incendios/ECI-BTVE.jpg') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">ECI-BTVE</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de FPS (Equipo integrado Fire Pump System). --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#FPS"><img src="{{ asset('imagenes/incendios/FPS.jpg') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">FPS</h6>
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
        {{-- Bomba ECI-IA (bomba centrífuga de alta presión). --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <div class="row m-1">
                    <h4 id="IA" class="h4">Bomba ECI-IA (bomba centrífuga de alta presión).</h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 ">
                        <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/incendios/ECI-IA.jpg') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></figure>
                        {{-- direccion de catalogo --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/1LqVuSg_3hpyHmdt8ouRRtK6POW0Thnpo/view"
                                class="btn btn-primary ">ECI-IA</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-lg-5 text-justify">
                        <ul>
                            <li>Diseño bajo la norma NFPA 20 para sistemas contraincendio</li>
                            <li>Motores calculados sobre la curva de operación</li>
                            <li>Bomba centrífuga de alta presión serie IA</li>
                            <li>Automatización completa</li>
                            <li>Fácil operación</li>
                            <li>Silencioso</li>
                            <li>Con base estructural</li>
                        </ul>
                    </div>
                    <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                        <h4 class="h4">Características Técnicas</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="border-top border-danger">
                                        <th scope="col" class="border-bottom border-dark">Potencia</th>
                                        <th scope="col" class="border-bottom border-dark">RPM</th>
                                        <th scope="col" class="border-bottom border-dark">Voltaje</th>
                                        <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                        <th scope="col" class="border-bottom border-dark">Tanque para
                                            combustible</th>
                                        <th scope="col" class="border-bottom border-dark">Aspiración</th>
                                        <th scope="col" class="border-bottom border-dark">Tablero</th>
                                        <th scope="col" class="border-bottom border-dark">Motores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>19 HP - 170 HP</td>
                                        <td>2500 - 3600</td>
                                        <td>220 - 460</td>
                                        <td>2”x1½”x9 -  8”x6”x13</td>
                                        <td>100 L - 750 L</td>
                                        <td>Natural ó Turbo cargado.</td>
                                        <td>1 o 2 baterías</td>
                                        <td>Yanmar, John Deere, Yanzung, Lombardini</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bomba ECI-HMV (Con Cabezal Engranado). --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <div class="row m-1">
                    <h4 id="HMV" class="h4">ECI-HMV (Con Cabezal Engranado).</h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 ">
                        <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/incendios/ECI-HMV.jpg') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></figure>
                        {{-- direccion de catalogo --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/1J7lMjFXQrx9Db-Jc6N5Lcr1cuWdGAx5c/view"
                                class="btn btn-primary ">ECI-HMV</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-lg-5 text-justify">
                        <p>
                            <li>Motor montado en base de acero estructural con revestimiento de lámina
                                antiderrapante,
                                que incluye un contenedor para la batería del equipo (batería no incluida) y
                                está
                                diseñada con preparación para montacargas.</li>
                            <li>Bomba centrífuga vertical multietapas serie HMV acoplada al motor mediante
                                cabezal
                                engranado.</li>
                            <li>Probado hidrostáticamente en fábrica por un lapso de 2 horas continuas y
                                calibrado
                                al punto de operación especificado.</li>
                            <li>Incluye tablero de control principal de 1 ó 2 baterías y tablero de arranque
                                manual.
                            </li>
                            <li>Incluye precalentador con control de temperatura (termostato).</li>
                            <li>Garantía de 3 años por defecto de fábrica. </li>
                        </p>
                    </div>
                    <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                        <h4>Características Técnicas</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="border-top border-danger">
                                        <th scope="col" class="border-bottom border-dark">
                                            Potencia</th>
                                        <th scope="col" class="border-bottom border-dark">RPM
                                        </th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Voltaje</th>
                                        <th scope="col" class="border-bottom border-dark">Flujo
                                        </th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Presión</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Tamaño</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Tanque para
                                            combustible</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Aspiración
                                        </th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Motores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>32 HP - 80 HP</td>
                                        <td>3500</td>
                                        <td>220 - 460</td>
                                        <td>100 GPM - 250 GPM</td>
                                        <td>150 PSI - 250 PSI</td>
                                        <td>3”x3” - 4”x4”</td>
                                        <td>200 L - 350 L</td>
                                        <td>Natural ó turbo cargado.</td>
                                        <td>Yanmar, John Deere, Yanzung.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bomba ECI-BTVD (Bomba tipo Turbina Vertical). --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <div class="row m-1">
                    <h4 id="BTVD" class="h4">ECI-BTVD (Bomba tipo Turbina Vertical).</h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 mt-3">
                        <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/incendios/ECI-BTVD.jpg') }}"
                                width="80%" class="figure-img img-fluid rounded" alt="">
                        </figure>
                        {{-- direccion de catalogo --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/1bh4NiInY9z3zTd4jbmf_kdBkPZNzM-Gb/view"
                                class="btn btn-primary ">ECI-BTVD</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-lg-5 text-justify">
                        <p>
                            <li>Las bombas de turbina están seleccionadas para trabajar en los dos
                                puntos de
                                operación como menciona la norma NFPA 20, al 100% y 150% del flujo, sin
                                bajar del
                                65% de la presión nominal.</li>
                            <li>Equipo integrado en una sola base, acoplado directamente a cabezal
                                engranado para
                                transmisión de movimiento a 90°</li>
                            <li>Motor a diésel marca Yanmar ó John Deere de 4 tiempos, aspiración
                                natural o
                                turbocargado y totalmente automatizado.</li>
                            <li>Cabezal de descarga bridado lubricado a base de agua, cuenta con flecha
                                y tuerca de
                                ajuste, cuña, estopero y todos sus accesorios para su correcta
                                operación.</li>
                            <li>Columna de tubo de acero cédula 40 de largo estándar de 3 metros, ASTM
                                A-36.</li>
                            <li>Cuerpo de tazones y colador dimensionados de acuerdo al flujo y presión
                                requeridos.
                                ó Incluye tanque de combustible horizontal con capacidad de acuerdo a la
                                potencia
                                del motor.</li>
                        </p>
                    </div>
                    <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                        <h4 class="h4">Características Técnicas</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="border-top border-danger">
                                        <th scope="col" class="border-bottom border-dark">
                                            Potencia</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            RPM</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Voltaje</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Flujo</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Presión</th>
                                        <th scope="col" class="border-bottom border-dark">Ø
                                            Cabezal
                                        </th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Tanque para
                                            combustible</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Motores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20 HP - 170 HP</td>
                                        <td>1800 - 3500</td>
                                        <td>220 - 460</td>
                                        <td>100 GPM - 1000 GPM</td>
                                        <td>100 PSI - 250 PSI</td>
                                        <td>4” - 8”</td>
                                        <td>100 L - 750 L</td>
                                        <td>Yanmar, John Deere, Yanzung, Lombardini.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bomba ECI-BTVE (Bomba tipo Turbina Vertical). --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <div class="row m-1">
                    <h4 id="BTVE" class="h4">Bomba ECI-BTVE (Bomba tipo Turbina Vertical).
                    </h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 mt-3">
                        <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/incendios/ECI-BTVE.jpg') }}"
                                width="80%" class="figure-img img-fluid rounded" alt="">
                        </figure>
                        {{-- direccion de catalogo --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/1G-b8t-F1xwGsHPeuiKraBV1ScSYrp5lt/view"
                                class="btn btn-primary ">ECI-BTVE</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-lg-5 text-justify">
                        <p>
                            <li>Cabezal de descarga sobre superficie lubricado por agua y fabricado en
                                placa de
                                acero ASTM A36 tipo ligero. Está compuesto de flecha de ajuste, cuña,
                                tornillos
                                prisioneros, estopero y todos sus accesorios.</li>
                            <li>Columna roscada de acero al carbón ASTM A36, con flecha de transmisión
                                en acero al
                                carbón SAE 1045 lubricada por agua.</li>
                            <li>Cuerpos de tazones tipo turbina fabricados en fierro fundido ASTM A48,
                                con
                                impulsores fabricados en bronce SAE 40.</li>
                            <li>Flecha de la bomba en acero inoxidable AISI 416.</li>
                            <li>Colador para la bomba tipo canasta.</li>
                            <li>Motor eléctrico vertical de eficiencia premium marca US Motors, de
                                inducción tipo
                                jaula de ardilla, abierto a prueba de goteo, trifásico 230/460 VCA de 2
                                y 4 polos
                                (según sea el caso), aislamiento clase axial. Cuenta con flecha hueca e
                                incluye
                                tuerca de ajuste y opresores.</li>
                            <li>Interruptor de presión KPI 36 ó KPI 38 según la presión a manejar;
                                incluye base tipo
                                “L” para su instalación.</li>
                        </p>
                    </div>
                    <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                        <h4 class="h4">Características Técnicas</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="border-top border-danger">
                                        <th scope="col" class="border-bottom border-dark">
                                            Potencia</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            RPM</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Voltaje</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Flujo</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Presión</th>
                                        <th scope="col" class="border-bottom border-dark">Ø
                                            Cabezal
                                        </th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Motores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>15 HP - 250 HP</td>
                                        <td>1800 - 3500</td>
                                        <td>230 - 460</td>
                                        <td>100 GPM - 1000 GPM</td>
                                        <td>100 PSI - 250 PSI</td>
                                        <td>4” - 8”</td>
                                        <td>Yanmar, John Deere, Yanzung, Lombardini.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bomba FPS (Equipo integrado Fire Pump System). --}}
        <div>
            <div class="col m-2  pb-3">
                <div class="row m-1">
                    <h4 id="FPS" class="h4">FPS (Equipo integrado Fire Pump System).</h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 mt-3">
                        <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/incendios/FPS.jpg') }}" width="80%"
                                class="figure-img img-fluid rounded" alt="">
                        </figure>
                        {{-- direccion de catalogo --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/1sPyxl7Dk6Szc24AnSzeaHMEfbIeybNjR/view"
                                class="btn btn-primary">FPS</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-lg-5 text-justify">
                        <p>
                            Equipo integrado por <b>motobomba diesel,</b> motobomba eléctrica ó con
                            cabezal de
                            engranado y motobomba jockey, armado de acuerdo a las necesidades que se
                            requieran.
                        </p>
                    </div>
                    <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                        <h4 class="h4">Características Técnicas</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="border-top border-danger">
                                        <th scope="col" class="border-bottom border-dark">
                                            Potencia</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            RPM</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Voltaje</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Flujo</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Presión</th>
                                        <th scope="col" class="border-bottom border-dark">Ø
                                            Cabezal
                                        </th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Tanque para
                                            combustible</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Aspiración
                                        </th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Tablero</th>
                                        <th scope="col" class="border-bottom border-dark">
                                            Motores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>19 HP - 170 HP</td>
                                        <td>2500 - 3600</td>
                                        <td>220 - 460</td>
                                        <td>100 GPM - 1500 GPM</td>
                                        <td>90 PSI - 150 PSI </td>
                                        <td>3” - 10”</td>
                                        <td>100 L - 750 L.</td>
                                        <td>Natural ó turbo cargado.</td>
                                        <td>1 o 2 baterías</td>
                                        <td>Yanmar, John Deere, Yanzung, Lombardini.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
   <livewire:footer/> 
  
</body>

</html>
