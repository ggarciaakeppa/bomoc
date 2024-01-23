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
    <style>
        @media (max-width: 767px) {
            iframe {
                width: 90%;
                /* Adjust the width as needed */
                height: auto;
            }
        }
    </style>

</head>

<body>
    @include('navbar')
    <div
        style=" background:  url(/imagenes/controles/portada.jpg) center center no-repeat;
    background-size: cover;
    padding: 220px 100px 100px;
    margin: auto;
    font-size: 2.5rem;
    font-weight: 800;">
    </div>
    <div class="container-fluid">
        {{-- Logo --}}
        <div class="text-center">

            <figure class="figure">
                <img src="{{ asset('imagenes/controles/logo-racom.jpg') }}" width="60%" ;
                    class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>
        {{-- Imagenes al seleccionar --}}
        <div>
            {{-- Esto es la Fila --}}
            <div class="text-center border-bottom border-top border-2 row row-cols-2 row-cols-lg-3 g-2 g-lg-3">

                {{-- Imagen de Tablero de control para llenado de depósitos (Tinaco-Cisterna) --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#cld"><img src="{{ asset('imagenes/controles/01 - dlc-g2-205vu.jpg') }}"
                                width="50%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">DLC G2-105VU Y DLC G2-205VU</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Tablero de Control para Sistemas Hidroneumáticos --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#CDH"><img src="{{ asset('imagenes/controles/02 - dlc-g2-406.jpg') }}"
                                width="50%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">DLC G2-406</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Tableros Para Vaciado De Cárcamos --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#VC"><img src="{{ asset('imagenes/controles/03 - dlc-g3-608.jpg') }}"
                                width="50%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">DLC G3-608</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Arrancador a Tensión Reducida Tipo Autotransformador ATRW --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#TRTAA"><img src="{{ asset('imagenes/controles/04 - dlc-g2-d610.jpg') }}"
                                width="50%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">DLC G2-D610</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Arrancador a Tensión Plena No Reversibles WEG ATPNRW --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#ATP"><img src="{{ asset('imagenes/controles/05- CBST.jpg') }}" width="50%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">CBST</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Arrancador Suave en Gabinete Modelos WEG (ASW05, ASW08, ASW07, ASW900) --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#ASG"><img src="{{ asset('imagenes/controles/06 - CBDT-AS.jpg') }}" width="50%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">CBDT-AS
                            </h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Cierre de Fila --}}
            </div>

            {{-- Cierre de imagenes --}}
        </div>
        {{-- Fin de Menu --}}

        {{-- Inicio --}}
        <div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">

                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h2>Controles de Bombeo RACOM</h2>
                    <p>
                        Los Controles Lógicos Dedicados (DLC) de la marca RACOM destacan por su avanzada tecnología de
                        microprocesadores SMT. Están meticulosamente diseñados para ofrecer soluciones eficientes que
                        promueven el ahorro tanto de agua como de energía. Con un enfoque en la facilidad de
                        instalación, estos controladores abarcan diversas aplicaciones, abordando tanto necesidades
                        residenciales como comerciales e industriales. Su versatilidad se refleja en la capacidad de
                        gestionar desde una única bomba hasta múltiples unidades (hasta "n" bombas), brindando así una
                        solución integral para diversos entornos y requerimientos.
                    </p>
                </div>
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h4>Aplicaciones:</h4>
                    <ul>
                        <li>Cisterna-Tinaco</li>
                        <li>Aguas negras</li>
                        <li>Sistemas contra incendio</li>
                        <li>Cárcamos</li>
                        <li>Recirculadores</li>
                        <li>Sistema Hidroneumático</li>
                        <li>Varios tinacos</li>
                        <li>Tratamientos de agua</li>
                        <li>Sistema de riego Aljibe</li>
                        <li>Bombeo a trasvase</li>
                        <li>Albercas</li>
                        <li>Proceso de clarificación</li>
                        <li>Pozos de agua</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-top border-bottom">
            {{-- Contenido DLC G2-105VU Y DLC G2-205VU --}}
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-lg-5 text-justify">
                    <h2>DLC G2-105VU Y DLC G2-205VU</h2>

                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/controles/01 - dlc-g2-205vu.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="figure-caption ">
                        <h6>La nueva generación de controles de uso comercial e industrial,
                            permite la automatización de una o dos bomba para controlar cualquier sistema hidráulico o
                            proceso de manufactura que implique el uso de agua.</h6>
                    </figcaption>
                </div>
                <div class="col-md-6 mt-lg-5 mt-lg-5 text-justify">
                    <h2>Especificaciones Técnicas:</h2>
                    <ul>
                        <li>Voltaje de alimentación: 110/220 Vca.</li>
                        <li>Frecuencia: 50 - 60 Hz.</li>
                        <li>Entradas: 5 digitales.</li>
                        <li>Salidas de contactos: 1 y 2 salidas. 1 HP en 127 V y 1.5 HP en 220 V.</li>
                        <li>Medidas: 11.5 x 9.0 x 4.0 cm.</li>
                        <li>Indicadores: 6 leds.</li>
                        <li>Terminal de conexión: Tipo tornillo desenchufable.</li>
                        <li>Tipo de gabinete: Plástico para montaje en riel DIN o con tornillos externos.</li>
                    </ul>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>MODELO</th>
                                <th>DESCRIPCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DLC G2-105VU CBST-T</td>
                                <td>Control de bombeo simple tinaco con terminales.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-105V CBSC</td>
                                <td>Control de bombeo simple cárcamo.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-105VU CHSI R</td>
                                <td>Control hidroneumático simple inyector.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-105VU CBSCI</td>
                                <td>Control de bombeo simple contra incendio.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-205VU CBDT-T</td>
                                <td>Control de bombeo dúplex tinaco con terminales.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-205VU CBDC</td>
                                <td>Control de bombeo dúplex cárcamo.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-205VU CHDI R</td>
                                <td>Control hidroneumático dúplex inyector.</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="border-top border-bottom">
            {{-- Contenido DLC G2-406 --}}
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-lg-5 text-justify">
                    <h2>DLC G2-406</h2>
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/controles/02 - dlc-g2-406.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="figure-caption ">
                        <h6>Los Controles DLC G2 406, de última generación para uso comercial e industrial, automatizan
                            hasta cuatro bombas de agua con alternancia y simultaneidad a través de un dip switch en la
                            parte inferior derecha. Con comunicación ModBUS y capacidad para señales de 4-20mA, estos
                            controles son ideales para sistemas hidroneumáticos, permitiendo la selección fácil de 1 a 4
                            bombas mediante el dip switch ubicado estratégicamente</h6>
                    </figcaption>
                </div>
                <div class="col-md-6 mt-lg-5 mt-lg-5 text-justify">
                    <h2>Especificaciones Técnicas:</h2>
                    <ul>
                        <li>Voltaje de alimentación: 127 / 220 Vca ± 10%</li>
                        <li>Frecuencia de operación: 60 Hz</li>
                        <li>Salidas de contacto seco: 1 común, 3 salidas, 1 contacto aislado NA/NC</li>
                        <li>Corriente máxima de salida: 5A</li>
                        <li>Indicadores visuales: 6 lámparas tipo led</li>
                        <li>Terminal de conexión: Terminales de conexión de tornillo desenchufables</li>
                    </ul>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>MODELO</th>
                                <th>DESCRIPCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DLC G2-406 CBT</td>
                                <td>Control de bombeo para cisterna a tinaco de 1 hasta 4 bombas.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-406 CBC</td>
                                <td>Control de bombeo para cárcamo de 1 hasta 4 bombas.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-406 CBH</td>
                                <td>Control de bombeo para hidroneumático de 1 hasta 4 bombas.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Control de bombeo simple contra incendio.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-406 CBHC</td>
                                <td>Control de bombeo para hidroneumático con compresor de 1 hasta 2 bombas.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-406 CBVT</td>
                                <td>Control de bombeo para llenado de varios tinacos para 1, 2 o 3 bombas.</td>
                            </tr>
                            <tr>
                                <td>DLC G2-406 CAMCI</td>
                                <td>Control de arranque para motor de combustión interna.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="border-top border-bottom">
            {{-- Contenido DLC G3-608 --}}
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-lg-5 text-justify">
                    <h2>DLC G3-608</h2>
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/controles/03 - dlc-g3-608.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption>
                        La plataforma DLC G3-608 es un equipo para aplicaciones industriales el cual cuenta con 8
                        entradas digitales y 6 salidas de relevador, su versatilidad permite que se pueda utilizar en
                        diferentes aplicaciones.
                    </figcaption>
                </div>
                <div class="col-md.6 mt-lg-5 mt-md-5 g-2 g-lg-3">
                    <h4>Aplicaciones:</h4>
                    <ul>
                        <li>Hidroneumático</li>
                        <li>Vaciado de cárcamo</li>
                        <li>Cisterna – Tinaco</li>
                        <li>Plantas de tratamiento</li>
                        <li>Arranque de bombas eléctricas contra incendio Jockey y principal</li>
                        <li>Albercas</li>
                        <li>Desarrollo de sistemas especiales</li>
                    </ul>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">MODELO</th>
                                <th scope="col">DESCRIPCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DLC G3-608</td>
                                <td>Control de bombeo generación 3.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="border-top border-bottom">
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h2>DLC G2-D610</h2>
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/controles/04 - dlc-g2-d610.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption>
                        La plataforma DLC G2-D610 es un equipo para aplicaciones industriales el cual 
                        cuenta con 10 entradas digitales y 6 salidas de relevador, su versatilidad 
                        permite que se pueda utilizar en diferentes aplicaciones.
                    </figcaption>
                </div>
                <div class="col-md.6 mt-lg-5 mt-md-5 g-2 g-lg-3">
                    <h4>Aplicaciones:</h4>
                    <ul>
                        <li>Hidroneumático</li>
                        <li>Vaciado de cárcamo</li>
                        <li>Cisterna – Tinaco</li>
                        <li>Hidroneumático velocidad variable</li>
                        <li>Recirculador de agua velocidad variable</li>
                        <li>Vaciado de cárcamo velocidad variable</li>
                        <li>Cisterna – Tinaco velocidad variable</li>
                        <li>Operación y configuración en español mediante display</li>
                    </ul>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">MODELO</th>
                                <th scope="col">DESCRIPCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center" rowspan="4">DLC G2-D610</td>
                                <td>CBT - Control de bombeo cisterna a tinaco.</td>
                            </tr>
                            <tr>
                                <td>CBC - Control de bombeo cárcamo.</td>
                            </tr>
                            <tr>
                                <td>CBC - Control de bombeo cárcamo.</td>
                            </tr>
                            <tr>
                                <td>CVV - Control hidroneumático con variadores.</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>    
            </div>
        </div>

        <div class="border-top border-bottom">
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h2>CBST</h2>
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/controles/05- CBST.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption>
                        El CBST es un dispositivo diseñado para monitorear y gestionar los niveles de agua en tinacos y cisternas.
                        Utiliza electrodos que al detectar la disminución de los niveles de agua, activan automáticamente la bomba para llenar el tinaco y la detienen una vez alcanzado el nivel óptimo, asegurando así un suministro constante y eficiente de agua en todo momento.                        
                    </figcaption>
                </div>
                <div class="col-md.6 mt-lg-5 mt-md-5 g-2 g-lg-3">
                    <h4>Especificaciones Técnicas:</h4>
                    <ul>
                        <li>Corriente Electrodos: 0.5 mACA</li>
                        <li>Corriente Máxima: 25 mACA</li>
                        <li>Corriente Máxima de Entradas: 0.5 mA</li>
                        <li>Corriente Máxima de Salidas: 25 Amp. CA</li>
                        <li>Entradas: 6</li>
                        <li>Indicadores Visuales: Lámparas tipo LED</li>
                        <li>Salidas de Contacto Seco: 1</li>
                        <li>Terminal de Conexión: Cables</li>
                        <li>Voltaje Electrodos: 12 Vca</li>
                        <li>Voltaje Máximo de Entradas: 12 Vcd</li>
                        <li>Voltaje Máximo de Salidas: 250 Vca</li>
                        <li>Voltaje de Alimentación: 127, 220, 440 Vca</li>
                    </ul>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">MODELO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >CBST</td>
                            </tr>
                            <tr>
                                <td>Control de bombeo
                                    simple tinaco
                                    con cables.
                                    </td>
                            </tr>
                            <tr>
                                <td>Hasta 1.5 hp en 127 v.</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>

        <div class="border-top border-bottom">
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h2>CBDT-AS</h2>
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/controles/06 - CBDT-AS.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption>
                        El CBDT-AS, es un sistema de control de bombeo duplex, diseñado para optimizar la eficiencia y 
                        la gestión del agua en entornos residenciales e industriales. Este dispositivo garantiza un control 
                        preciso y automatizado de las bombas, asegurando un suministro constante y regulado de agua en tinacos y cisternas.
                    </figcaption>
                </div>
                <div class="col-md.6 mt-lg-5 mt-md-5 g-2 g-lg-3">
                    <h4>Características Técnicas:</h4>
                    <ul>
                        <li>2 contactos de 1 polo 1 tiro</li>
                        <li>Capacidad máxima: 1,5 HP (1 119w) a 127 Vca o 25 A</li>
                        <li>Corriente de Electrodos: 0.5 mA</li>
                        <li>Corriente máxima: 45 mA</li>
                        <li>Peso con Electrodos: 0.55 Kg</li>
                        <li>Protección: Bajo voltaje</li>
                        <li>Voltaje de Alimentación: 127 Vca 60Hz</li>
                        <li>Voltaje en Electrodos: 12 Vca 60 Hz</li>
                    </ul>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">MODELO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >CBDT-AS</td>
                            </tr>
                            <tr>
                                <td>Control de bombeo
                                    dúplex tinaco
                                    con cables.                                    
                                    </td>
                            </tr>
                            <tr>
                                <td>Hasta 1.5 hp en 127 v.</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>

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
