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

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

    @include('navbar')
    <div
        style="  background: url(../imagenes/bombas/altamira/portada.jpg) center center no-repeat;
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
                    <img src="{{ asset('imagenes/bombas/flygt/logo2.png') }}" width="26%"
                        class="figure-img img-fluid rounded" alt="...">
                </figure>
            </div>

            {{-- Imagenes al seleccionar --}}
            <div>
                {{-- Fila para las imágenes --}}
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-4 ">
                    {{-- Imagen 1: Bombas Bibo Serie 2800 --}}
                    <div class="col mt-2">
                        <figure class="figure">
                            <a href="#VB"><img src="{{ asset('imagenes/bombas/flygt/colo bibo 2840.png') }}"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption">
                                <h6 class="h6">Bombas Bibo Serie 2800</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen 2: Bombas N de Flygt --}}
                    <div class="col  mt-2">
                        <figure class="figure">
                            <a href="#SVPS"><img src="{{ asset('imagenes/bombas/flygt/Flygt N 3356.png') }}"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption">
                                <h6 class="h6">Bombas N de Flygt</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen 3: Trituradoras Inatascables Flygt M --}}
                    <div class="col  mt-2">
                        <figure class="figure">
                            <a href="#M"><img src="{{ asset('imagenes/bombas/flygt/trituradora.png') }}"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption">
                                <h6 class="h6">Trituradoras Inatascables Flygt M</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen 4: Bomba de doble Etapa Flygt Serie 2400.402 --}}
                    <div class="col  mt-2">
                        <figure class="figure">
                            <a href="#SCK"><img src="{{ asset('imagenes/bombas/flygt/Bombas Doble Etapa.jpg') }}"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption">
                                <h6 class="h6">Bomba de doble Etapa Flygt serie 2400.402</h6>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                {{-- Cierre de la fila --}}
            </div>
            {{-- Fin de Menu --}}
        </div>

        {{-- Contenido Bombas Bibo Serie 2800 Flygt la Nueva generación de bombas de Achique --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="VB" class="h4">Bombas Bibo Serie 2800</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/flygt/colo bibo 2840.jpg ') }}" width="60%"
                            class="figure-img img-fluid rounded" alt=""></figure>

                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1vDv6vjABAwmv_zaKjv9OLmke8Rl2lyWN/view"
                            class="btn btn-primary">Bombas BIBO 2800</a>
                    </div>
                </div>
                <div class="col-md-6">
              
                        <iframe  width="100%" height="200" src="https://www.youtube.com/embed/KJgGhcwqmDM"
                            title="Flygt BIBOα  - Xylem Latam." frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    
                    <p>
                        Con más de 60 años de experiencia en el diseño de bombas de achique para algunas de las
                        aplicaciones más exigentes de todo el mundo, la serie BIBO de Flygt se ha diseñado para
                        resistir las condiciones más duras.
                        <br>
                        El diseño de las bombas Flygt BIBO no tiene comparación con ninguna otra bomba del
                        mercado.
                    </p>
         
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 m-1">
                <div class="col-md-6">
                    <h4>Aplicaciones</h4>
                    <ul>
                        <li>Drenaje de minas a cielo abierto</li>
                        <li>Drenaje de emergencia de inundaciones</li>
                        <li>Transferencia general de agua</li>
                    </ul>
                </div>
                <div class="col-md-6 " style="overflow-x:auto;">
                    <h4>Características Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">2830</th>
                                <th scope="col" class="border-bottom border-dark">2840</th>
                                <th scope="col" class="border-bottom border-dark">2860</th>
                                <th scope="col" class="border-bottom border-dark">2860 SH</th>
                                <th scope="col" class="border-bottom border-dark">2870</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">Potencia [kW]</td>
                                <td scope="col">3.2 / 3.7</td>
                                <td scope="col">5.6</td>
                                <td scope="col">10</td>
                                <td scope="col">10</td>
                                <td scope="col">18</td>
                            </tr>
                            <tr>
                                <td scope="col">Voltaje [V/fase]</td>
                                <td scope="col">220-1000/3~</td>
                                <td scope="col">220-1000/3~</td>
                                <td scope="col">220-1000/3~</td>
                                <td scope="col">220-1000/3~</td>
                                <td scope="col">220-1000/3~</td>
                            </tr>
                            <tr>
                                <td scope="col">Descarga Ø [pulg.]</td>
                                <td scope="col">3” / 4”</td>
                                <td scope="col">3” / 4”</td>
                                <td scope="col">4” / 6”</td>
                                <td scope="col">3”</td>
                                <td scope="col">4” / 6”</td>
                            </tr>
                            <tr>
                                <td scope="col">Pasaje de sólido Ø [mm]</td>
                                <td scope="col">10</td>
                                <td scope="col">10</td>
                                <td scope="col">10</td>
                                <td scope="col">10</td>
                                <td scope="col">12</td>
                            </tr>
                            <tr>
                                <td scope="col">Líquido caliente 70 oC</td>
                                <td scope="col">si</td>
                                <td scope="col">si</td>
                                <td scope="col">si</td>
                                <td scope="col">si</td>
                                <td scope="col">si</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="SVPS" class="h4">Bombas N de Flygt</h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 mt-3">
                        <figure class="d-flex justify-content-center"><img
                                src="{{ asset('imagenes/bombas/flygt/Flygt N 3356.jpg') }}" width="68%"
                                class="figure-img img-fluid rounded" alt="">
                        </figure>

                        {{-- direccion de catalogo --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://www.xylem.com/siteassets/brand/flygt/resources/brochure/flygt-n-technology_lar.pdf"
                                class="btn btn-primary">Serie N</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-justify">
                        <p class="m-2">
                            Mantienen la alta eficiencia de bombeo a lo largo del tiempo gracias a un exclusivo
                            impulsor autolimpiante tipo abierto patentado. Estas bombas tienen potencias que van
                            desde 17 HP hasta 415 HP, con caudales de hasta 1.000 l/sy alturas de elevación de hasta
                            100 m.
                        </p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 m-1">
                        <div class="col-md-6 ">
                            <h4>Aplicaciones</h4>
                            <ul>
                                <li>Aguas residuales</li>
                                <li>Agua bruta</li>
                                <li>Agua de refrigeración</li>
                                <li>Fangos</li>
                                <li>Aguas pluviales</li>
                                <li>Efluentes industriales</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="M">Trituradoras inatascables Flygt M</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/flygt/trituradora.jpg') }}" width="60%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>

                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://asset.productmarketingcloud.com/api/assetstorage/3096_f98b9a57-bcf2-4493-8afb-7ac0a88fa657"
                            class="btn btn-primary">Flygt Serie M</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">

                    <iframe   width="100%" height="200" 
                        src="https://www.youtube.com/embed/zWZJllqikas?si=aBKMVn2B2DrL1S-m"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                    <p>
                        Las <b>bombas trituradoras inatascables Flygt M </b> Son bombas muy potentes con cuchillas de
                        uso pesado. Estas bombas reducen atascos gracias a las navajas, teniendo una capacidad superior
                        de triturado; También pueden manejar sólidos como rocas. Están disponibles en tamaños que van
                        desde 2 HP hasta 15 HP de potencia, con opciones de motores monofásicos y trifásicos.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 m-1">
                <div class="col-md-6 ">
                    <h4>Aplicaciones</h4>
                    <ul>
                        <li>Instalaciones de bombas trituradoras</li>
                        <li>Bombeo de estiércol</li>
                        <li>Triturado de alto rendimiento</li>
                        <li>Sumideros de aguas residuales</li>
                        <li>Transporte de aguas residuales</li>
                    </ul>
                </div>
            </div>
        </div>

 {{-- Contenido Bomba de doble Etapa Flygt serie 2400.402 --}}
 <div>
    <div class="col m-2 mt-3 pb-3">
        <h4 id="SCK">Bomba
            de doble Etapa Flygt
            serie 2400.402</h4>
    </div>
    <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
        <div class="col-md-6 mt-3">
            <figure class="d-flex justify-content-center">
                <img src="{{ asset('imagenes/bombas/flygt/Bombas Doble Etapa.jpg') }}" width="50%"
                    class="figure-img img-fluid rounded" alt="">
            </figure>
            <figcaption>
            </figcaption>
            {{-- direccion de catalogo --}}
            <div class="d-flex justify-content-center">
                <a href="https://drive.google.com/file/d/1Ig3AFGZ3_C6ZUpmYfXef-cdKHzAHq7sx/view?usp=sharing"
                    class="btn btn-primary">serie
                    2400.402</a>
            </div>
        </div>
        <div class="col-md-6 mt-lg-5 text-justify">
            <p>
                Esta <b>Bomba de achique sumergible de 2 etapas</b> se puede sumergir hasta 50 metros y está
                construida en hierro fundido. Con geometrías
                optimizadas y fabricadas en materiales para ofrecer una excelente resistencia al desgaste, su
                diseño resistente soporta prácticamente todos los materiales que los usuarios más exigentes
                deseen tratar.
            </p>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 m-1">
        <div class="col-md-6 mt-lg-5 text-justify">
            <h4>
                Aplicaciones</h4>
            <ul>
                <li>Desague de aguas
                    lodosas</li>
                <li>Bomba de achique
                    para mina</li>
                <li>Las bombas son
                    ideales para
                    aplicaciones en
                    las cuales el
                    agua o líquido
                    contiene
                    altas cantidades
                    de arcilla,
                    piedras, finos
                    de perforación,
                    etc., o para
                    bombear
                    sedimentos
                    pesados de
                    tanques,
                    sumideros y
                    contenedores
                </li>
            </ul>
        </div>
        <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
            <h4 class="h4">
                Características
                Técnicas</h4>
            <table class="table table-striped">
                <thead>
                    <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">
                            Modelo
                        </th>
                        <th scope="col" class="border-bottom border-dark">
                            Voltaje
                        </th>
                        <th scope="col" class="border-bottom border-dark">
                            Fases
                        </th>
                        <th scope="col" class="border-bottom border-dark">
                            Descarga
                        </th>
                        <th scope="col" class="border-bottom border-dark">
                            Temp
                            Máx.
                        </th>
                        <th scope="col" class="border-bottom border-dark">
                            Altura
                            Max.
                        </th>
                        <th scope="col" class="border-bottom border-dark">
                            Flujo
                            Max.
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">
                            233 HT
                        </td>
                        <td scope="col">
                            440</td>
                        <td scope="col">
                            3</td>
                        <td scope="col">
                            6”</td>
                        <td scope="col">
                            40°C
                        </td>
                        <td scope="col">
                            205m
                        </td>
                        <td scope="col">
                            950lps
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            243 HT
                        </td>
                        <td scope="col">
                            440</td>
                        <td scope="col">
                            3</td>
                        <td scope="col">
                            6”</td>
                        <td scope="col">
                            40°C
                        </td>
                        <td scope="col">
                            195m
                        </td>
                        <td scope="col">
                            900lps
                        </td>
                    </tr>
                    <td scope="col">
                        243 HT</td>
                    <td scope="col">
                        440</td>
                    <td scope="col">
                        3</td>
                    <td scope="col">
                        6”</td>
                    <td scope="col">
                        40°C</td>
                    <td scope="col">
                        160m</td>
                    <td scope="col">
                        800lps</td>
                    </tr>
                    <td scope="col">231 HT</td>
                    <td scope="col">440</td>
                    <td scope="col">3</td>
                    <td scope="col">6”</td>
                    <td scope="col">40°C</td>
                    <td scope="col">91m</td>
                    <td scope="col">2400lps</td>
                    </tr>
                    <td scope="col">232 HT</td>
                    <td scope="col">440</td>
                    <td scope="col">3</td>
                    <td scope="col">6”</td>
                    <td scope="col">40°C</td>
                    <td scope="col">75m</td>
                    <td scope="col">2200lps</td>
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
    <livewire:floating-whats />
</body>

</html>