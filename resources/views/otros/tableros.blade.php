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
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
       <style>
    @media (max-width: 767px) {
        iframe {
            width: 90%; /* Adjust the width as needed */
            height: auto;
        }
    }
</style>

</head>
<body>
@include('navbar')
   <div style=" background:  url(/imagenes/tableros/portada.jpg) center center no-repeat;
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
                {{-- <img src="{{ asset('imagenes/bombas/jandy/logo.png') }}" width="70%"
                        class="figure-img img-fluid rounded" alt="..."> --}}
            </figure>

        </div>

        {{-- Imagenes al seleccionar --}}
        <div>
            {{-- Esto es la Fila --}}
            <div class="text-center border-bottom border-2 row row-cols-2 row-cols-lg-3 g-2 g-lg-3">

                {{-- Imagen de Tablero de control para llenado de depósitos (Tinaco-Cisterna) --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#cld"><img src="{{ asset('imagenes/tableros/tablero-llenado depositos.jpg') }}"
                                width="90%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Tablero de Control Tinaco-Cisterna</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Tablero de Control para Sistemas Hidroneumáticos --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#CDH"><img src="{{ asset('imagenes/tableros/tablero-hidro.jpg') }}" width="90%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Tablero de Control para Sistemas Hidroneumáticos</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Tableros Para Vaciado De Cárcamos --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#VC"><img src="{{ asset('imagenes/tableros/tablero-vaciado carcamos.jpg') }}"
                                width="90%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Tableros Para Vaciado De Cárcamos</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Arrancador a Tensión Reducida Tipo Autotransformador ATRW --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#TRTAA"><img src="{{ asset('imagenes/tableros/ATRW A TENSION REDUCIDA.jpg') }}"
                                width="60%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Arrancador a Tensión Reducida Tipo Autotransformador ATRW</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Arrancador a Tensión Plena No Reversibles WEG ATPNRW --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#ATP"><img src="{{ asset('imagenes/tableros/ARRANCADOR A TENSION PLENA.jpg') }}"
                                width="65%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Arrancador a Tensión Plena No Reversibles WEG ATPNRW</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Arrancador Suave en Gabinete Modelos WEG (ASW05, ASW08, ASW07, ASW900) --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#ASG"><img src="{{ asset('imagenes/tableros/ARRANCADOR SUAVE.jpg') }}"
                                width="60%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Arrancador Suave en Gabinete Modelos WEG (ASW05, ASW08, ASW07, ASW900)
                            </h6>
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
    {{-- Contenido Tablero de control para llenado de depósitos (Tinaco-Cisterna) --}}
    <div>
        <div class="col m-2 mt-3 pb-3">
            <h4 id="cld" class="h4">Tablero De Control Para llenado de Depósitos (Tinaco-Cisterna)</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/tableros/tablero-llenado depositos.jpg') }}"
                        width="100%" class="figure-img img-fluid rounded" alt="">
                </figure>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_tab-depositos.pdf "
                        class="btn btn-primary mt-4">Tinaco-Cisterna</a>
                </div>
            </div>
            <div class="col-md-6 mt-lg-5 text-justify">
                <p>
                    Estos <b>tableros controlan la operación automática de 1 a 4 bombas. </b> alternándolas y
                    simultaneándolas por medio de un control inteligente para mantener el nivel de agua en el tinaco
                    dentro del rango deseado, ajustado por el nivel de las peras de nivel.
                </p>
             
                    <b>Protecciones y Equipos incluidos</b>
                    
                    <ul>
                    <li>Sobrecarga</li>
                    <li>Cortocircuito</li>
                    <li>Ciclo corto</li>
                    <li>Bajo nivel de agua en la cisterna </li>
                    <li>Electrodos</li>
                    <li>Guardamotores tripolares como seccionadores en potencias de 1-10 HP @ 220V y 1-20 HP @ 440V. 4
                    </li>
                    <li>Mini-interruptores monopolares termomagnéticos para protección del cableado de control.</li>
                    <li>Interruptores termomagnéticos tripolares como seccionadores de 15 HP en adelante 10 kA</li>
                    <li>PLC para control de alternador/simultaneado de 1 hasta 4 bombas (con indicadores led) </li>
                    <li>Gabinete metálico IP55 y acabado en pintura horneada azul.</li>
                    </ul>
                
                    <b>Equipo Opcional </b>
                
                    <ul>
                    <li>Protección por falla de fase </li>
                    <li>Arrancador suave </li>
                </ul>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-lg-5 text-justify">
                <h4 class="h4">Aplicaciones</h4>
                <ul>
                    <li>Sistemas para mantener el nivel de agua en una o varias cisternas.</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- Contenido Tablero de Control para Sistemas Hidroneumáticos --}}
    <div>
        <div class="col m-2 mt-3 pb-3">
            <h4 id="CDH" class="h4">Tablero de Control para Sistemas Hidroneumáticos</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/tableros/tablero-hidro.jpg') }}" width="100%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_tab-hidroneumatico.pdf "
                        class="btn btn-primary ">Sistemas Hidroneumáticos</a>
                </div>
            </div>
            <div class="col-md-6 mt-lg-5 text-justify">
                <p>
                Los <b>Tablero de Control para Sistemas Hidroneumáticos </b> se utiliza para mantener presurizada una
                    red hidráulica en un rango de presión predeterminada, y opera en conjunto con el tanque precargado e
                    interruptores de presión, mismos que deberán estar previamente conectados en la red hidráulica.
                    Existen tableros para 2, 3, y 4 bombas.
                    Además, cuentan con la función de alternar y simultanear bombas por medio del control inteligente
                    PLC de última tecnología, con la finalidad de que tengan un desgaste uniforme y prolonguen así el
                    tiempo de vida útil de los equipos.

                <p>
                    
                <b>Protecciones y Equipos incluidos:</b>
                    <ul>
                    <li>Sobrecarga</li>
                    <li>Cortocircuito</li>
                    <li>Ciclo corto </li>
                    <li>Bajo nivel de agua </li>
                    <li>PLC para control de alternador/simultaneado de 1 hasta 4 bombas (con indicadores led).</li>
                    <li>Guardamotores tripolares como seccionadores en potencias de 1-10 HP @ 220V y 1-20 HP @ 440V</li>
                    <li>Contactores tripolares del tipo magnético (arranque a tensión plena).</li>
                    <li>Mini-interruptores monopolares termomagnéticos para protección del cableado de control.</li>
                    <li>Gabinete metálico IP55 y acabado en pintura horneada azul.</li>
                    <li>Bloqueo automático de bomba cuando el selector se coloca en Fuera (no requiere volver a
                        configurar). </li>
                    <li>Indicadores piloto tipo led para bomba en operación (uno por bomba), para equipo energizado y
                        otro para cárcamo lleno.</li>
                        </ul>

                    <b>Equipo Opcional </b>
                    <ul>
                    <li>Arrancadores suave </li>
                    <li>Protección contra bajo voltaje y falla de fase</li>
                    </ul>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-lg-5 text-justify">
                <h4 >Aplicaciones</h4>
                <ul>
                    <li>Sistemas para mantener el nivel de agua en una o varias cisternas.</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- Contenido Tableros Para Vaciado De Cárcamos --}}
    <div>
        <div class="col m-2 mt-3 pb-3">
            <h4 id="VC" class="h4">Tableros Para Vaciado De Cárcamos</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/tableros/tablero-vaciado carcamos.jpg') }}"
                        width="100%" class="figure-img img-fluid rounded" alt="">
                </figure>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_tab-carcamos.pdf "
                        class="btn btn-primary ">Vaciado De Cárcamos</a>
                </div>
            </div>
            <div class="col-md-6 mt-lg-5 text-justify">
                <p>
                Los <b>Tableros para vaciado de Cárcamos </b> se utiliza en sistemas donde se requiere mantener vacío
                    un depósito de aguas negras. Este tablero trabaja en conjunto con las bombas sumergibles y peras de
                    nivel, las cuales se colocan dentro del cárcamo de manera escalonada para garantizar un buen nivel
                    del líquido. Estos tableros controlan la operación automática de 1 a 4 bombas.

                <p>
                   <b>Protecciones y Equipos incluidos:</b>
                   <ul>
                    <li>Sobrecarga</li>
                    <li>Cortocircuito</li>
                    <li>Contactores tripolares del tipo magnético (arranque a tensión plena).</li>
                    <li>Interruptores termomagnéticos tripolares como seccionadores de 15 HP en adelante 10 k .</li>
                    <li>Mini-interruptores monopolares termomagnéticos para protección del cableado de control.</li>
                    <li>Guardamotores tripolares como seccionadores en potencias de 1-10 HP @ 220V y 1-20 HP @ 440V.
                    </li>
                    <li>Cuenta además con la función de alternar y simultanear las bombas por medio del control
                        inteligente PLC de última tecnología, con la finalidad de que tengan un desgaste uniforme y
                        prolonguen así el tiempo de vida útil de los equipos.</li>
                    <li>Gabinete metálico IP55 y acabado en pintura horneada azul.</li>
                    <li>Indicadores piloto tipo led para bomba en operación (uno por bomba), para equipo energizado y
                        para cisterna vacía.</li>
                        </ul>
                    <b>Equipo Opcional </b>
                    <ul>
                    <li>Protección contra falla de fase</li>
                    <li>Arrancador suave</li>
                    <li>Detector de fuga en el sello y alta temperatura </li>
                    <li>Alarma visual y sonora de alto nivel en el cárcamo </li>
                    </ul>
                <p>
                </p>
                </p>
            </div>
        </div>
    </div>



    {{-- Contenido Arrancador a Tensión Reducida Tipo Autotransformador ATRW --}}
    <div>
        <div class="col m-2 mt-3 pb-3">
            <h4 id="TRTAA" class="h4">Arrancador a Tensión Reducida Tipo Autotransformador ATRW</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/tableros/ATRW A TENSION REDUCIDA.jpg') }}"
                        width="65%" class="figure-img img-fluid rounded" alt="">
                </figure>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1hj7ODo1mHMXCVeOt5yz2JmXBLrqls-0Q/view"
                        class="btn btn-primary ">Autotransformador ATRW</a>
                </div>
            </div>
            <div class="col-md-6 mt-lg-5 text-justify">
                <p>
                    Estos <b>arrancadores a tensión reducida por autotransformador </b> están diseñados para reducir la
                    tensión del motor, en consecuencia, reducen la corriente de arranque y el torque de arranque, al
                    limitar la tensión se evitarán fluctuaciones perjudiciales para el motor. El ajuste de fabrica el
                    auto transformador es de 65%. Modelos en 480 o 240 V c.a.
                <p>
                   <b>Protecciones y Equipos incluidos:</b>
                   <ul>
                    <li>Cortocircuito</li>
                    <li>Sobrecarga del motor</li>
                    <li>Subtension y sobretensión </li>
                    <li>Falta de fase</li>
                    <li>Desbalance entre fases </li>
                    <li>Robusto gabinete NEMA 1, con soportes para fijación en pared que no requieren perforación para
                        montaje</li>
                    <li>Interruptor termomagnético principal</li>
                    <li>Contactor principal para tensión plena.</li>
                    <li>Relevador de sobrecarga bimetálico</li>
                    <li>Temporalizador (1-10 segundos)</li>
                    <li>Relevador de monitoreo de sub y sobretensión trifásica</li>
                    <li>Protección térmica por termistor para el Autotransformador.</li>
                    <li>Botón iluminado (Inactivo / Arranque)</li>
                    <li>Botón iluminado (Activo / Paro)</li>
                    <li>Botón iluminado (Falla / Reset)</li>
                    <li>Manopla rotativa</li>
                    <li>Voltímetro digital</li>
                    </ul>
            </div>
        </div>
    </div>


    {{-- Contenido  Arrancador a Tensión Plena No Reversibles WEG ATPNRW  --}}
    <div>
        <div class="col m-2 mt-3 pb-3">
            <h4 id="ATP" class="h4"> Arrancador a Tensión Plena No Reversibles WEG ATPNRW</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/tableros/ARRANCADOR A TENSION PLENA.jpg') }}"
                        width="65%" class="figure-img img-fluid rounded" alt="">
                </figure>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1KeIhb8VzGjLjsTzvpT9iHV-AL--MYAM1/view"
                        class="btn btn-primary ">WEG ATPNRW</a>
                </div>
            </div>
            <div class="col-md-6 mt-lg-5 text-justify">
                <p>
                    Los <b>arrancadores a tensión plena son una solución económica </b> que permite que su motor este
                    protegido durante el arranque y la operación. Esta línea está equipada, con componentes
                    sobredimensionados para atender corrientes superiores a las de los motores convencionales. Modelos
                    en 440 o 220 V c.a.

                <p>
                  <b> Protecciones y Equipos incluidos:</b>
                  <ul>
                    <li>Cortocircuito</li>
                    <li>Sobrecarga en el motor</li>
                    <li>Gabinete metálico, robusto, NEMA 1</li>
                    </ul>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-lg-5 text-justify">
                <h4 class="h4">Aplicaciones</h4>
                <ul>
                    <li>Bombeo en general</li>
                    <li>Tortilladoras</li>
                    <li>Compresores</li>
                    <li>Ventiladores</li>
                    <li>Extractores</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- Contenido  Arrancador Suave en Gabinete Modelos WEG (ASW05, ASW08, ASW07, ASW900)   --}}
    <div>
        <div class="col m-2 mt-3 pb-3">
            <h4 id="ASG" class="h4"> Arrancador Suave en Gabinete Modelos WEG (ASW05, ASW08, ASW07, ASW900)
            </h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/tableros/ARRANCADOR SUAVE.jpg') }}"
                        width="58%" class="figure-img img-fluid rounded" alt="">
                </figure>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1NnHWTfMY9IjbesqglJK6RAJ2UCEbVV-z/view"
                        class="btn btn-primary ">Modelos WEG</a>
                </div>
            </div>
            <div class="col-md-6 mt-lg-5 text-justify">
                <p>
                    Los <b>arrancadores suaves están diseñados para suministrar excelente </b> performance en el
                    arranque y parada de motores, con una excelente relación costo-calidad-beneficio. Tiene control
                    sobre dos fases del motor, bypass incorporado y todas las protecciones para el motor eléctrico.
                    Posee control DSP (Digital Signal Processor) para rápido procesamiento de señales en tiempo real,
                    así como un relé térmico electrónico de fácil ajuste, permitiendo simplificar las actividades
                    cotidianas de puesta en marcha y operación.

                <p>
                   <b> Protecciones y Equipos incluidos:</b>
                   <ul>
                    <li>Gabinete robusto NEMA 1, montaje en pared</li>
                    <li>Interruptor termomagnético principal</li>
                    <li>Arrancador suave modelo SSW08 con bypass incorporado</li>
                    <li>Contactor de fuerza para aumentar seguridad</li>
                    <li>Transformador de control </li>
                    <li>Falta de fase, tanto en la alimentación como en el motor</li>
                    <li>Rotor bloqueado</li>
                    <li>Sobrecarga en el motor</li>
                    <li>Sobre y subcorriente en el motor</li>
                    <li>Secuencia de fases</li>
                    <li>Desbalance de tensión y corriente</li>
                    <li>Falla interna, etc.</li>
                    <li>Botón iluminado (Inactivo / Arranque)</li>
                    <li>Botón iluminado (Activo / Paro)</li>
                    <li>Botón iluminado (Falla / Reset)</li>
                    <li>Manopla rotativa</li>
                    <li>Voltímetro digital</li>
                    </ul>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-lg-5 text-justify">
                <h4 class="h4">Aplicaciones</h4>
                <ul>
                    <li>Bombas centrifugas</li>
                    <li>Ventiladores de inercia moderada</li>
                    <li>Compresores de tornillo</li>
                    <li>Compresores de aire</li>
                    <li>Sierras para corte de madera</li>
                    <li>Extractores</li>
                    <li>Pequeños molinos</li>
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