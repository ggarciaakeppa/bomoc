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


                <div class="col">
                    <figure class="figure">
                        <a href="#205vu"><img src="{{ asset('imagenes/controles/01 - dlc-g2-205vu.jpg') }}"
                                width="50%" class="figure-img img-fluid rounded" alt="dlc-g2-205vu"></a>
                        <figcaption class="figure-caption ">
                            <h6>DLC G2-105VU Y DLC G2-205VU</h6>
                        </figcaption>
                    </figure>
                </div>


                <div class="col">
                    <figure class="figure">
                        <a href="#406"><img src="{{ asset('imagenes/controles/02 - dlc-g2-406.jpg') }}"
                                width="50%" class="figure-img img-fluid rounded" alt="dlc-g2-406"></a>
                        <figcaption class="figure-caption ">
                            <h6>DLC G2-406</h6>
                        </figcaption>
                    </figure>
                </div>


                <div class="col">
                    <figure class="figure">
                        <a href="#608"><img src="{{ asset('imagenes/controles/03 - dlc-g3-608.jpg') }}"
                                width="50%" class="figure-img img-fluid rounded" alt="dlc-g3-608"></a>
                        <figcaption class="figure-caption ">
                            <h6>DLC G3-608</h6>
                        </figcaption>
                    </figure>
                </div>


                <div class="col">
                    <figure class="figure">
                        <a href="#d610"><img src="{{ asset('imagenes/controles/04 - dlc-g2-d610.jpg') }}"
                                width="50%" class="figure-img img-fluid rounded" alt="dlc-g2-d610"></a>
                        <figcaption class="figure-caption ">
                            <h6>DLC G2-D610</h6>
                        </figcaption>
                    </figure>
                </div>


                <div class="col">
                    <figure class="figure">
                        <a href="#CBST"><img src="{{ asset('imagenes/controles/05- CBST.jpg') }}" width="50%"
                                class="figure-img img-fluid rounded" alt="CBST"></a>
                        <figcaption class="figure-caption ">
                            <h6>CBST</h6>
                        </figcaption>
                    </figure>
                </div>


                <div class="col">
                    <figure class="figure">
                        <a href="#CBDT-AS"><img src="{{ asset('imagenes/controles/06 - CBDT-AS.jpg') }}" width="50%"
                                class="figure-img img-fluid rounded" alt="CBDT-AS"></a>
                        <figcaption class="figure-caption ">
                            <h6>CBDT-AS
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

        <div id="205vu">
            {{-- Contenido DLC G2-105VU Y DLC G2-205VU --}}
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h2>DLC G2-105VU</h2>
                    <h2>DLC G2-205VU</h2>
                    <figure class="figure d-flex justify-content-center mt-5"><img
                            src="{{ asset('imagenes/controles/01 - dlc-g2-205vu.jpg') }}" width="60%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                </div>
                <div class="col-md-6 mt-lg-5 mt-lg-5 text-justify">
                    <p>
                        Esta plataforma se utiliza para el control de 1 o 2 bombas y se puede encontrar en diversas
                        aplicaciones como son:
                    </p>
                    <ul>
                        <li>
                            <strong>Sistema Hidroneumático:</strong>
                            <p>Gestiona el control de presión de la línea hidroneumática. Depende de los interruptores
                                de presión en la red hidráulica; las bombas se activan alternadamente para mantener la
                                presión. En caso de una disminución continua de la presión, ambas bombas operan
                                simultáneamente, garantizando una respuesta rápida y eficiente.</p>
                        </li>
                        <li>
                            <strong>Vaciado de Cárcamo:</strong>
                            <p>Gestiona eficientemente el nivel de agua dentro del cárcamo, activando las bombas cuando
                                se alcanza el nivel de agua específico. Los electrodos para aguas pluviales o peras para
                                aguas negras se pueden utilizar para adaptarse a diferentes entornos, asegurando una
                                operación precisa y confiable.</p>
                        </li>
                        <li>
                            <strong>Cisterna – Tinaco:</strong>
                            <p>Controla automáticamente 2 bombas para mantener los niveles de agua deseados. Se activa
                                según los niveles de agua en el tinaco y la cisterna, garantizando un suministro
                                constante. Las bombas se alternan y simultanean para maximizar la eficiencia y prolongar
                                la vida útil. La operación se detiene cuando los niveles de agua alcanzan el punto
                                máximo, asegurando un uso energético eficiente.</p>
                        </li>
                        <li>
                            <strong>Alarma por Humedad:</strong>
                            <p>Este control es también aplicable en sistemas de detección de humedad, ideal para
                                monitorear ductos y áreas críticas, garantizando la seguridad y la integridad de los
                                espacios monitoreados.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 mt-lg-5 mt-lg-5 text-justify">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Modelo</th>
                                <th>Descripción</th>
                                <th>Especificaciones Técnicas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DLC G2-105VU CBST-T</td>
                                <td>Control de bombeo simple tinaco con terminales.</td>
                                <td rowspan="7">
                                    <ul>
                                        <li>Voltaje de alimentación: 110/220 Vca.</li>
                                        <li>Frecuencia: 50 - 60 Hz.</li>
                                        <li>Entradas: 5 digitales.</li>
                                        <li>Salidas de contactos: 1 y 2 salidas. 1 HP en 127 V y 1.5 HP en 220 V.</li>
                                        <li>Medidas: 11.5 x 9.0 x 4.0 cm.</li>
                                        <li>Indicadores: 6 leds.</li>
                                        <li>Terminal de conexión: Tipo tornillo desenchufable.</li>
                                        <li>Tipo de gabinete: Plástico para montaje en riel DIN o con tornillos
                                            externos.</li>
                                    </ul>
                                </td>
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

        <div id="406">
            {{-- Contenido DLC G2-406 --}}
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-md-5  text-justify">
                    <h2>DLC G2-406</h2>
                    <figure class="figure d-flex justify-content-center mt-5"><img
                            src="{{ asset('imagenes/controles/02 - dlc-g2-406.jpg') }}" width="60%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>

                </div>
                <div class="col-md-6 mt-lg-5 mt-lg-5 text-justify">
                    <p>
                        Este control automatiza hasta cuatro bombas de agua con alternancia y simultaneidad a través de
                        un dip switch
                        en la parte inferior derecha. Con comunicación ModBUS y capacidad para señales de 4-20mA, estos
                        controles son
                        ideales para sistemas hidroneumáticos, permitiendo la selección fácil de 1 a 4 bombas mediante
                        el dip switch
                        ubicado estratégicamente.
                    </p>
                    <ul>
                        <li>
                            <strong>Trasvase (Cisterna a Tinaco):</strong>
                            <p>El DLC G2-406 es capaz de manejar de manera eficiente los niveles de agua, asegurando un
                                suministro constante y confiable. La alternancia y simultaneidad en la operación de las
                                bombas destacan la eficiencia energética y la optimización del rendimiento.</p>
                        </li>

                        <li>
                            <strong>Hidroneumático con Compresor:</strong>
                            <p>Adaptado para manejar hasta 4 bombas y un compresor, este dispositivo es un recurso
                                invaluable en la gestión de la presión de agua. Su capacidad para mantener la presión
                                constante se complementa con una integración sin fisuras en aplicaciones industriales
                                complejas.</p>
                        </li>

                        <li>
                            <strong>Varios Tinacos:</strong>
                            <p>En entornos con múltiples tinacos, el DLC G2-406 emerge como una solución definitiva,
                                garantizando niveles de agua óptimos, reduciendo la necesidad de intervención manual y
                                asegurando un suministro de agua ininterrumpido.</p>
                        </li>

                        <li>
                            <strong>Hidroneumático:</strong>
                            <p>El DLC G2-406 es esencial para sistemas hidroneumáticos, donde se requiere una
                                supervisión y control precisos de la presión del agua. Con capacidad para controlar
                                hasta 4 bombas, se adapta a una variedad de configuraciones y demandas operacionales.
                            </p>
                        </li>

                        <li>
                            <strong>Cárcamo:</strong>
                            <p>El DLC G2-406 es un valioso recurso para el control automático del nivel de agua dentro
                                del cárcamo. Asegura que las bombas se activen y desactiven según los niveles de agua
                                específicos, ofreciendo un manejo eficiente del agua y previniendo el desbordamiento o
                                la operación en seco.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="mt-lg-5 mt-lg-5 text-justify">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Modelo</th>
                                <th>Descripción</th>
                                <th>Especificaciones Técnicas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DLC G2-406 CBT</td>
                                <td>Control de bombeo para cisterna a tinaco de 1 hasta 4 bombas.</td>
                                <td rowspan="7">
                                    <ul>
                                        <li>
                                            Voltaje de alimentación: 127 / 220 Vca ± 10%.
                                        </li>

                                        <li>
                                            Frecuencia de operación: 60 Hz.
                                        </li>

                                        <li>
                                            Salidas de contacto seco: 1 común, 3 salidas, 1 contacto aislado NA/NC.
                                        </li>

                                        <li>
                                            Corriente máxima de salida: 5A.
                                        </li>

                                        <li>
                                            Indicadores visuales: 6 lámparas tipo led.
                                        </li>

                                        <li>
                                            Terminal de conexión: Terminales de conexión de tornillo desenchufables.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>DLC G2-406 CBC</td>
                                <td>Control de bombeo para cárcamo de 1 hasta 4 bombas.</td>
                            </tr>
                            <tr>
                                <td rowspan="2" class="align-middle text-center">DLC G2-406 CBH</td>
                                <td>Control de bombeo para hidroneumático de 1 hasta 4 bombas.</td>
                            </tr>
                            <tr>
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

        <div id="608">
            {{-- Contenido DLC G3-608 --}}
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h2>DLC G3-608</h2>
                    <figure class="figure d-flex justify-content-center mt-5"><img
                            src="{{ asset('imagenes/controles/03 - dlc-g3-608.jpg') }}" width="70%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>

                </div>
                <div class="col-md-6 mt-lg-5 mt-md-5 g-2 g-lg-3">
                    <p>
                        La plataforma DLC G3-608 es un equipo para aplicaciones industriales el cual cuenta con 8
                        entradas digitales y 6
                        salidas de relevador, su versatilidad permite que se pueda utilizar en diferentes aplicaciones.
                    </p>
                    <p>
                        Esta plataforma se utiliza para el control de múltiples bombas y se puede encontrar en
                        diferentes aplicaciones como son:
                    </p>
                    <ul>
                        <li>
                            <strong>Hidroneumático</strong>
                            <p>Sistema para control de presión de línea hidroneumática, se acciona por interruptor de
                                presión instalado en la línea.</p>
                        </li>
                        <li>
                            <strong>Vaciado de Cárcamo</strong>
                            <p>Vaciado de tanque ya sea de aguas negras o agua limpia por medio de peras de nivel o
                                electrodos según sea el caso.</p>
                        </li>
                        <li>
                            <strong>Cisterna – Tinaco</strong>
                            <p>Llenado de tinaco y protección de bomba además de aplicación de bombeo trasvase.</p>
                        </li>
                        <li>
                            <strong>Planta de Tratamiento</strong>
                            <p>Control de todo el proceso de rebombeo y procesos que involucren mediciones de parámetros
                                por medio de sensores 4-20 mA y contactos. Por la particularidad de cada planta se
                                realiza un diseño específico para cada proyecto.</p>
                        </li>
                        <li>
                            <strong>Arranque de Bombas Eléctricas contra Incendio Jockey y Principal</strong>
                            <p>Arranque y paro de bomba Jockey o principal, se acciona por medio de interruptor de
                                presión en la línea contra incendio. Adicional se podrían controlar las dos bombas con
                                un solo control (Indicar en el pedido que se requiere el modelo para control de las dos
                                bombas).</p>
                        </li>
                        <li>
                            <strong>Alberca</strong>
                            <p>Control de temperatura en la alberca por medio de sensor de temperatura 4-20 mA,
                                iluminación, así como la recirculación de agua. Por la particularidad de cada alberca se
                                podrían realizar modificaciones al diseño que se tiene de línea.</p>
                        </li>
                        <li>
                            <strong>Desarrollo de Sistemas Especiales</strong>
                            <p>Se consideran desarrollos especiales aquellos que involucran secuencias de operación o
                                aplicaciones diferentes a las que ya se tienen de línea, consulte con su agente de
                                ventas para más información.</p>
                        </li>
                    </ul>

                </div>
            </div>
            <diV class="row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="mt-lg-5 mt-lg-5 text-justify">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Modelo</th>
                                <th scope="col">Descripción</th>
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

        <div id="d610">
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h2>DLC G2-D610</h2>
                    <figure class="figure d-flex justify-content-center mt-5"><img
                            src="{{ asset('imagenes/controles/04 - dlc-g2-d610.jpg') }}" width="70%"
                            class="figure-img img-fluid rounded" alt="610">
                    </figure>

                </div>
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <p>
                        La plataforma DLC G2-D610 es un equipo para aplicaciones industriales el cual cuenta con 10
                        entradas digitales y 6 salidas de relevador, su versatilidad permite que se pueda utilizar en
                        diferentes aplicaciones.
                    </p>
                    <p>
                        Esta plataforma se utiliza para el control de hasta 6 bombas y se puede encontrar en diferentes
                        aplicaciones como son:
                    </p>
                    <ul>
                        <li>
                            <strong>Hidroneumático</strong>
                            <p>Sistema para control de presión de línea hidroneumática, se acciona por sensor de presión
                                instalado en la línea. En este sistema, el equipo tiene la posibilidad de operar de 1
                                hasta 6 bombas y la operación puede con variadores de frecuencia. El control opera la
                                secuencia de arranque, paro, alternado y simultáneo.</p>
                        </li>
                        <li>
                            <strong>Recirculador de Agua Helada</strong>
                            <p>Este sistema opera por medio de variadores de frecuencia y se encarga de recibir una
                                señal de sensor de diferencia o de flujo para realizar el control de las bombas. El
                                control opera la secuencia de arranque, alternado y simultáneo.</p>
                        </li>
                        <li>
                            <strong>Vaciado de Cárcamo</strong>
                            <p>Vaciado de tanque ya sea de aguas negras o agua limpia por medio de peras de nivel o
                                electrodos según sea el caso.</p>
                        </li>
                        <li>
                            <strong>Cisterna – Tinaco</strong>
                            <p>Llenado de tinaco y protección de bomba además de aplicación de bombeo trasvase.</p>
                        </li>
                        <li>
                            <strong>Operación y Configuración en Español mediante Display</strong>
                            <p>En este equipo, dependiendo de la aplicación, se pueden configurar la cantidad de bombas
                                a operar, selección de tiempo de retardos en arranque y paro, tipos de contacto en
                                interruptores de presión y diversas funciones gracias al teclado y display con el que
                                cuenta. Todos los parámetros de configuración se encuentran en español.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Modelo</th>
                                <th scope="col">Descripción</th>
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

        <div id="CBST">
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h2>CBST</h2>
                    <h3>Control de Bombeo Simplex Tinaco</h3>
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/controles/05- CBST.jpg') }}" width="60%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>

                </div>
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <p>
                        Este es un dispositivo diseñado para monitorear y gestionar los niveles de agua en tinacos y
                        cisterna.
                        En el tinaco, asegura que la red de agua esté siempre abastecida, mientras que en las cisternas,
                        previene
                        el funcionamiento en seco de la bomba, una medida crítica para preservar la integridad del sello
                        mecánico de la bomba.
                    </p>
                    <p>
                        Utiliza electrodos que al detectar la disminución de los niveles de agua, activan
                        automáticamente la bomba para llenar
                        el tinaco y la detienen una vez alcanzado el nivel óptimo, asegurando así un suministro
                        constante y eficiente de agua en todo momento.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Modelo</th>
                                <th scope="col">Especificaciones Técnicas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CBST</td>
                                <td>
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
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div id="CBDT-AS">
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <h2>CBDT-AS</h2>
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/controles/06 - CBDT-AS.jpg') }}" width="60%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                </div>
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                    <p>
                        El CBDT-AS es un control de bombeo dúplex, específicamente diseñado para la gestión eficiente de
                        cisternas y tinacos.
                        Equipado con electrodos, este dispositivo detecta con precisión la falta de agua, activando
                        automáticamente las bombas para garantizar niveles óptimos y continuos de agua.
                        Además, ofrece funciones de arranque, paro, alternado y simultáneo, adaptándose dinámicamente a
                        las necesidades específicas de cada sistema de agua.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
                <div class="col-md-6 mt-lg-5 mt-md-5 text-justify">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Modelo</th>
                            <th scope="col">Especificaciones Técnicas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CBDT-AS</td>
                            <td>
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
                            </td>
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

    <livewire:footer />
    <livewire:floating-whats />
</body>

</html>
