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
</head>

<body>
    
    @include('navbar')
   <div style=" background:  url(/imagenes/bombas/franklin/portada.jpg) center center no-repeat;
    background-position: 50%;
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
                    <img src="{{ asset('imagenes/bombas/franklin/logo.png') }}" width="100%"
                        style="background: lightskyblue" class="figure-img img-fluid rounded" alt="...">
                </figure>
            </div>

            {{-- Imagenes al seleccionar --}}
            <div>
                {{-- Esto es la Fila --}}
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-6 g-2 g-lg-3">

                    {{-- Imagen de Series STS --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#sts"><img src="{{ asset('imagenes/bombas/franklin/sts.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bombas Serie STS 5" 6" 8" 9"</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series Tri-Seal High Capacity  --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#tri"><img src="{{ asset('imagenes/bombas/franklin/tri.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bombas Serie Tri-Seal High Capacity 4" y 6"</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series Enca --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#enca"><img src="{{ asset('imagenes/bombas/franklin/enca.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Motores Sumergibles Rebobinables y Encapsulados Franklin</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series VFD --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#VFD"><img src="{{ asset('imagenes/bombas/franklin/VFD.jpeg') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Series VFD</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series XS --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#xs"><img src="{{ asset('imagenes/bombas/franklin/xs.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Serie XS</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series SubDrive --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#SubDrive"><img src="{{ asset('imagenes/bombas/franklin/SubDrive.png') }}"
                                    width="100%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Serie SubDrive QuickPAK Connect</h6>
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

        {{-- Contenido Series STS --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="sts" class="h4">Bombas de Turbina Sumergibles</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/franklin/sts.png') }}" width="80%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie STS 5" 6" 8" 9"</h6>
                    </figcaption>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        La Serie STS 5" 6" 8" 9" están hechas de tazones en fundición de hierro dúctil de primera
                        calidad con el fin de proporcionar una vida más larga y obtener una presión más alta. Impulsores
                        en fundiciones de acero inoxidable. Tamaños de 5 a 200 HP.
                        Además de esto tienen configuraciones personalizadas disponibles para bujes y eje.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Irrigación</li>
                        <li>Agricultura</li>
                        <li>Industrial</li>
                        <li>Municipal</li>
                        <li>Comercial</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Rendimiento Hidráulico de 5", 6", 8", 9"</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Serie</th>
                                <th scope="col" class="border-bottom border-dark">Rangos GPM</th>
                                <th scope="col" class="border-bottom border-dark"></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">5"</td>
                                <td scope="col">90, 120, 150, 180, 220 y 270</td>
                                <td scope="col"><a
                                        href="https://drive.google.com/file/d/1VpWXnhN1FHJn3zkkOCIKMm3HKx32Fk3W/view"
                                        class="btn btn-primary ms-4">Ver</a></td>
                            </tr>
                            <tr>
                                <td scope="col">6"</td>
                                <td scope="col">100, 150, 175, 200, 225, 275, 325 y 500</td>
                                <td scope="col"><a
                                        href="https://drive.google.com/file/d/1M9spxDB-bgC0A_taJKNh9DXPHvbplKcX/view?usp=sharing"
                                        class="btn btn-primary ms-4">Ver</a></td>
                            </tr>
                            <tr>
                                <td scope="col">8"</td>
                                <td scope="col">225, 275, 350, 450, 550, 700 y 1000</td>
                                <td scope="col"><a
                                        href="https://drive.google.com/file/d/1dvyi5keytGSXJXL5JqO9AHu2yn1kx065/view?usp=sharing"
                                        class="btn btn-primary ms-4">Ver</a></td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">9"</td>
                                <td scope="col">600, 1050 y 1200</td>
                                <td scope="col"><a
                                        href="https://drive.google.com/file/d/12xXwWlEdjSyMyqdrEM1ZddZiHGgvMusY/view?usp=sharing"
                                        class="btn btn-primary ms-4">Ver</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series Tri-Seal High Capacity --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="tri" class="h4">Serie Tri-Seal High Capacity 4" y 6"</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/franklin/tri.png') }}" width="70%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie Tri-Seal High Capacity 4" y 6"</h6>
                    </figcaption>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Las bombas de alta capacidad cuentan con diámetros de 4 pulgadas y son accionadas por motores
                        sumergibles Franklin de 4” resistentes a la corrosión.
                        Estas bombas proporcionan un alto rendimiento y eficiencia utilizadas en sistemas comerciales
                        ligeros.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-4 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Cisterna</li>
                        <li>Pozo profundo</li>
                        <li>Llenado de tanques elevados</li>
                        <li>Edificios de oficinas o residenciales</li>
                        <li>Pequeñas municipalidades o juntas de agua</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-8 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Rendimiento Hidráulico</h4>
                    <table class="table table-striped">
                        <thead>

                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">GPM</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Etapas</th>
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">No. de Parte</th>
                                <th scope="col" class="border-bottom border-dark">Valvula Check incluida</th>
                                <th scope="col" class="border-bottom border-dark">Modelo Básico</th>
                                <th scope="col" class="border-bottom border-dark">Número PEI<sub>cl</sub></th>
                            <tr scope="col">
                                <th colspan="8" class="text-center">High Capacity 4” - Solo Bomba</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">1</td>
                                <td scope="col">5</td>
                                <td scope="col">35FH1S4-PECV</td>
                                <td scope="col">93663505</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>
                            </tr>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">1.5</td>
                                <td scope="col">7</td>
                                <td scope="col">35FH15S4-PECV</td>
                                <td scope="col">93663507</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>
                            </tr>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">2</td>
                                <td scope="col">9</td>
                                <td scope="col">35FH2S4-PECV</td>
                                <td scope="col">93663509</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>
                            </tr>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">3</td>
                                <td scope="col">12</td>
                                <td scope="col">35FH3S4-PECV</td>
                                <td scope="col">93663512</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>
                            </tr>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">5</td>
                                <td scope="col">20</td>
                                <td scope="col">35FH5S4-PECV</td>
                                <td scope="col">93663520</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>
                            </tr>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">7.5</td>
                                <td scope="col">29</td>
                                <td scope="col">35FH7S4-PECV</td>
                                <td scope="col">93663529</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>
                            </tr>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">10</td>
                                <td scope="col">38</td>
                                <td scope="col">35FH10S4-PECV</td>
                                <td scope="col">93663538</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>
                            </tr>
                            <tr>
                                <td scope="col">45</td>
                                <td scope="col">1.5</td>
                                <td scope="col">5</td>
                                <td scope="col">45FH15S4-PECV</td>
                                <td scope="col">93664505</td>
                                <td scope="col">Sí</td>
                                <td scope="col">45S4</td>
                                <td scope="col">0.89</td>
                            </tr>
                            <tr>
                                <td scope="col">45</td>
                                <td scope="col">2</td>
                                <td scope="col">7</td>
                                <td scope="col">45FH2S4-PECV</td>
                                <td scope="col">93664507</td>
                                <td scope="col">Sí</td>
                                <td scope="col">45S4</td>
                                <td scope="col">0.89</td>
                            </tr>
                            <tr>
                                <td scope="col">45</td>
                                <td scope="col">3</td>
                                <td scope="col">10</td>
                                <td scope="col">45FH3S4-PECV</td>
                                <td scope="col">93664510</td>
                                <td scope="col">Sí</td>
                                <td scope="col">45S4</td>
                                <td scope="col">0.89</td>
                            </tr>
                            <tr>
                                <td scope="col">45</td>
                                <td scope="col">5</td>
                                <td scope="col">16</td>
                                <td scope="col">45FH5S4-PECV</td>
                                <td scope="col">93664516</td>
                                <td scope="col">Sí</td>
                                <td scope="col">45S4</td>
                                <td scope="col">0.89</td>
                            </tr>
                            <tr>
                                <td scope="col">45</td>
                                <td scope="col">7.5</td>
                                <td scope="col">23</td>
                                <td scope="col">45FH7S4-PECV</td>
                                <td scope="col">93664523</td>
                                <td scope="col">Sí</td>
                                <td scope="col">45S4</td>
                                <td scope="col">0.89</td>
                            </tr>
                            <tr>
                                <td scope="col">45</td>
                                <td scope="col">10</td>
                                <td scope="col">3</td>
                                <td scope="col">45FH10S4-PECV</td>
                                <td scope="col">93664531</td>
                                <td scope="col">Sí</td>
                                <td scope="col">45S4</td>
                                <td scope="col">0.89</td>
                            </tr>
                            <tr>
                                <td scope="col">60</td>
                                <td scope="col">2</td>
                                <td scope="col">7</td>
                                <td scope="col">60FH2S4-PECV</td>
                                <td scope="col">93666007</td>
                                <td scope="col">Sí</td>
                                <td scope="col">60S4</td>
                                <td scope="col">0.94</td>
                            </tr>
                            <tr>
                                <td scope="col">60</td>
                                <td scope="col">3</td>
                                <td scope="col">10</td>
                                <td scope="col">60FH3S4-PECV</td>
                                <td scope="col">93666010</td>
                                <td scope="col">Sí</td>
                                <td scope="col">60S4</td>
                                <td scope="col">0.94</td>
                            </tr>
                            <tr>
                                <td scope="col">60</td>
                                <td scope="col">5</td>
                                <td scope="col">16</td>
                                <td scope="col">60FH5S4-PECV</td>
                                <td scope="col">93666016</td>
                                <td scope="col">Sí</td>
                                <td scope="col">60S4</td>
                                <td scope="col">0.94</td>
                            </tr>
                            <tr>
                                <td scope="col">60</td>
                                <td scope="col">7.5</td>
                                <td scope="col">23</td>
                                <td scope="col">60FH7S4-PECV</td>
                                <td scope="col">93666023</td>
                                <td scope="col">Sí</td>
                                <td scope="col">60S4</td>
                                <td scope="col">0.94</td>
                            </tr>
                            <tr>
                                <td scope="col">60</td>
                                <td scope="col">10</td>
                                <td scope="col">30</td>
                                <td scope="col">60FH10S4-PECV</td>
                                <td scope="col">93666030</td>
                                <td scope="col">Sí</td>
                                <td scope="col">60S4</td>
                                <td scope="col">0.94</td>
                            </tr>
                            <tr>
                                <td scope="col">90</td>
                                <td scope="col">2</td>
                                <td scope="col">6</td>
                                <td scope="col">90FH2S4-PECV</td>
                                <td scope="col">93669006</td>
                                <td scope="col">Sí</td>
                                <td scope="col">90S4</td>
                                <td scope="col">0.92</td>
                            </tr>
                            <tr>
                                <td scope="col">90</td>
                                <td scope="col">3</td>
                                <td scope="col">8</td>
                                <td scope="col">90FH3S4-PECV</td>
                                <td scope="col">93669008</td>
                                <td scope="col">Sí</td>
                                <td scope="col">90S4</td>
                                <td scope="col">0.92</td>
                            </tr>
                            <tr>
                                <td scope="col">90</td>
                                <td scope="col">5</td>
                                <td scope="col">13</td>
                                <td scope="col">90FH5S4-PECV</td>
                                <td scope="col">93669013</td>
                                <td scope="col">Sí</td>
                                <td scope="col">90S4</td>
                                <td scope="col">0.92</td>
                            </tr>
                            <tr>
                                <td scope="col">90</td>
                                <td scope="col">7.5</td>
                                <td scope="col">19</td>
                                <td scope="col">90FH7S4-PECV</td>
                                <td scope="col">93669019</td>
                                <td scope="col">Sí</td>
                                <td scope="col">90S4</td>
                                <td scope="col">0.92</td>
                            </tr>

                            <tr class="border-bottom border-dark">
                                <td scope="col">90</td>
                                <td scope="col">10</td>
                                <td scope="col">25</td>
                                <td scope="col">90FH10S4-PECV</td>
                                <td scope="col">93669025</td>
                                <td scope="col">Sí</td>
                                <td scope="col">90S4</td>
                                <td scope="col">0.92</td>
                            </tr>
                        </tbody>
                    </table>
                    <span>NOTA: El diámetro máximo incluyendo el cable es de 3.90” en todos los modelos.</span>
                    <br><br>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger text-center">
                                <th scope="col" class="border-bottom border-dark">GPM</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Etapas</th>
                                <th scope="col" class="border-bottom border-dark">Volts</th>
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">No. de Parte</th>
                                <th scope="col" class="border-bottom border-dark">Válvula Check Incluida</th>
                                <th scope="col" class="border-bottom border-dark">Modelo Básico</th>
                                <th scope="col" class="border-bottom border-dark">Número PEI<sub>cl</sub></th>

                            <tr scope="col">
                                <th colspan="9" class="text-center">High Capacity 4” - PMA 2 Hilos</th>
                            </tr>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">1</td>
                                <td scope="col">5</td>
                                <td scope="col">230</td>
                                <td scope="col">35FH1S4-2W230-CV</td>
                                <td scope="col">93693505</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>

                            </tr>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">1.5</td>
                                <td scope="col">7</td>
                                <td scope="col">230</td>
                                <td scope="col">35FH15S4-2W230-CV</td>
                                <td scope="col">93693507</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>

                            </tr>
                            <tr>
                                <td scope="col">45</td>
                                <td scope="col">1.5</td>
                                <td scope="col">5</td>
                                <td scope="col">230</td>
                                <td scope="col">45FH15S4-2W230-CV</td>
                                <td scope="col">93694505</td>
                                <td scope="col">Sí</td>
                                <td scope="col">45S4</td>
                                <td scope="col">0.89</td>

                            </tr>

                            <tr scope="col">
                                <th colspan="9" class="text-center">High Capacity 4” - PMA 3 Hilos</th>
                            </tr>


                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">1</td>
                                <td scope="col">5</td>
                                <td scope="col">230</td>
                                <td scope="col">35FH1S4-3W230-CV</td>
                                <td scope="col">93713505</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>

                            </tr>
                            <tr>
                                <td scope="col">35</td>
                                <td scope="col">1.5</td>
                                <td scope="col">7</td>
                                <td scope="col">230</td>
                                <td scope="col">35FH15S4-3W230-CV</td>
                                <td scope="col">93713507</td>
                                <td scope="col">Sí</td>
                                <td scope="col">35S4</td>
                                <td scope="col">0.83</td>

                            </tr>

                            <tr class="border-bottom border-dark">
                                <td scope="col">45</td>
                                <td scope="col">1.5</td>
                                <td scope="col">5</td>
                                <td scope="col">230</td>
                                <td scope="col">45FH15S4-3W230-CV</td>
                                <td scope="col">93714505</td>
                                <td scope="col">Sí</td>
                                <td scope="col">45S4</td>
                                <td scope="col">0.89</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series Enca --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="enca" class="h4">Motores Sumergibles Rebobinables y Encapsulados Franklin</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/franklin/enca.png') }}" width="80%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Motores Sumergibles Rebobinables y Encapsulados Franklin</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a
                            href="https://franklinagua.com/media/62938/M1479sp-Cat%C3%A1logo-Motores-Sumergibles.pdf"class="btn btn-primary ms-4">Ficha
                            Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Descubre la excelencia en motores sumergibles con Franklin Electric, el líder mundial en su
                        fabricación. Nuestra gama de Motores Sumergibles es esencial en los sistemas de bombeo de
                        Franklin y en numerosas marcas líderes en la industria de las bombas.
                    </p>
                    <p>
                        Confía en la calidad, durabilidad y rendimiento de los Motores Sumergibles Franklin Electric
                        para satisfacer tus necesidades de bombeo. Descubre por qué somos la elección preferida de
                        profesionales en todo el mundo.

                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Agricultura</li>
                        <li>Municipal</li>
                        <li>Industria</li>
                        <li>Minería</li>
                        <li>Aumento de presión</li>
                        <li>Osmosis inversa</li>
                        <li>Aceite y Gasolina</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas de los Motores Sumergibles</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Serie</th>
                                <th scope="col" class="border-bottom border-dark">Rango de Potencia</th>
                                <th scope="col" class="border-bottom border-dark">Polos</th>
                                <th scope="col" class="border-bottom border-dark">Temperatura Ambiente Máxima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">Acero Inoxidable 4”</td>
                                <td scope="col">1/3 a 3 HP</td>
                                <td scope="col">2</td>
                                <td scope="col">30°C</td>
                            </tr>
                            <tr>
                                <td scope="col">Alto Empuje 4”</td>
                                <td scope="col">1.5 a 10 HP</td>
                                <td scope="col">2</td>
                                <td scope="col">30°C</td>
                            </tr>
                            <tr>
                                <td scope="col">Estándar 6”</td>
                                <td scope="col">5 a 60 HP</td>
                                <td scope="col">2</td>
                                <td scope="col">30°C</td>
                            </tr>
                            <tr>
                                <td scope="col">Alta Temperatura 90°C 6”</td>
                                <td scope="col">5 a 40 HP</td>
                                <td scope="col">2</td>
                                <td scope="col">90°C</td>
                            </tr>
                            <tr>
                                <td scope="col">Estándar 8”</td>
                                <td scope="col">40 a 200 HP</td>
                                <td scope="col">2</td>
                                <td scope="col">30°C</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">Alta Temperatura 75°C 8”</td>
                                <td scope="col">40 a 150 HP</td>
                                <td scope="col">2</td>
                                <td scope="col">75°C</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series VFD --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="VFD" class="h4">Variador de Frecuencia Sub Drive Connect Plus</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/franklin/VFD.png') }}" width="60%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie VFD</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/14dZsuzwbpbXN_UojdnGuQvKuC3QFxwqf/view?usp=drive_link"
                            class="btn btn-primary">Ficha
                            Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        El variador de frecuencia (VFD) SubDrive Connect Plus™ de Franklin Electric está diseñado
                        para proporcionar soluciones de presión constante simples y poderosas para sistemas de
                        bombeo de agua en una variedad de aplicaciones sumergibles que utilicen motores
                        trifásicos de hasta 30 HP.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Irrigación</li>
                        <li>Agricultura y ganadería</li>
                        <li>Pozo profundo</li>
                        <li>Sistemas de aumento de presión</li>
                        <li>Industrial</li>
                        <li>Municipalidades</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Variador de Frecuencia - SubDrive Connect Plus</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                            <tr scope="col">
                                <th colspan="4" class="text-center">Entrada Monofásica
                                </th>
                            </tr>
                            <th scope="col" class="border-bottom border-dark">Voltaje Nominal</th>
                            <th scope="col" class="border-bottom border-dark">Salida Nominal (HP)</th>
                            <th scope="col" class="border-bottom border-dark">Salida Nominal (Amps)</th>
                            <th scope="col" class="border-bottom border-dark">No. de Parte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">230</td>
                                <td scope="col">3</td>
                                <td scope="col">11</td>
                                <td scope="col">SDCP-SUB0723</td>
                            </tr>
                            <tr>
                                <td scope="col">230</td>
                                <td scope="col">5</td>
                                <td scope="col">18</td>
                                <td scope="col">SDCP-SUB1023</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">230</td>
                                <td scope="col">7.5</td>
                                <td scope="col">27</td>
                                <td scope="col">SDCP-SUB1523</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                            <tr scope="col">
                                <th colspan="4" class="text-center">Entrada Trifásica</th>
                            </tr>
                            <th scope="col" class="border-bottom border-dark">Voltaje Nominal</th>
                            <th scope="col" class="border-bottom border-dark">Salida Nominal (HP)</th>
                            <th scope="col" class="border-bottom border-dark">Salida Nominal (Amps)</th>
                            <th scope="col" class="border-bottom border-dark">No. de Parte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">230</td>
                                <td scope="col">7.5</td>
                                <td scope="col">27</td>
                                <td scope="col">SDCP-SUB0723</td>
                            </tr>
                            <tr>
                                <td scope="col">230</td>
                                <td scope="col">10</td>
                                <td scope="col">37</td>
                                <td scope="col">SDCP-SUB1023</td>
                            </tr>
                            <tr>
                                <td scope="col">230</td>
                                <td scope="col">15</td>
                                <td scope="col">48</td>
                                <td scope="col">SDCP-SUB1523</td>
                            </tr>
                            <tr>
                                <td scope="col">460</td>
                                <td scope="col">10</td>
                                <td scope="col">18</td>
                                <td scope="col">SDCP-SUB1043</td>
                            </tr>
                            <tr>
                                <td scope="col">460</td>
                                <td scope="col">15</td>
                                <td scope="col">26</td>
                                <td scope="col">SDCP-SUB1543</td>
                            </tr>
                            <tr>
                                <td scope="col">460</td>
                                <td scope="col">20</td>
                                <td scope="col">31</td>
                                <td scope="col">SDCP-SUB2043</td>
                            </tr>
                            <tr>
                                <td scope="col">460</td>
                                <td scope="col">25</td>
                                <td scope="col">39.5</td>
                                <td scope="col">SDCP-SUB2543</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">460</td>
                                <td scope="col">30</td>
                                <td scope="col">47.5</td>
                                <td scope="col">SDCP-SUB3043</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series Xs --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="xs" class="h4">Bomba Serie XS</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/franklin/xs.png') }}" width="55%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie XS</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a
                            href="https://drive.google.com/file/d/1Pw9bsVcFZOTmSj3LFSn1FVJjO3moxK8I/view?usp=sharing"class="btn btn-primary">Ficha
                            Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        La Serie XS es una bomba centrifuga que puede ser acoplada de forma horizontal o vertical en la
                        descarga, esta bomba se convierte en su mejor opción de bombeo para aplicaciones agrícolas e
                        industriales de superficie.
                    </p>
                    <p>
                        Sus materiales en hierro vaciado reforzado incrementan su durabilidad por lo que tambien es una
                        bomba de trabajo continuo. Tiene la capacidad de acoplarse a motores estándares JP por ultimo la
                        linea XS va de tamanos desde 7.5 Hp hasta 150Hp
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Irrigacion</li>
                        <li>Servicios generals </li>
                        <li>Industrial ligero</li>
                        <li>Municipal</li>
                        <li>Comercial</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas de Serie XS:</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo (GPM)</th>
                                <th scope="col" class="border-bottom border-dark">Carga Máxima (Pies)</th>
                                <th scope="col" class="border-bottom border-dark">Motores (HP)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">XS-3×2.5-13</td>
                                <td scope="col">500</td>
                                <td scope="col">190</td>
                                <td scope="col">10 a 20 HP</td>
                            </tr>
                            <tr>
                                <td scope="col">XS-4×3-13</td>
                                <td scope="col">850</td>
                                <td scope="col">180</td>
                                <td scope="col">7.5 a 40 HP</td>
                            </tr>
                            <tr>
                                <td scope="col">XS-6×4-13</td>
                                <td scope="col">1400</td>
                                <td scope="col">180</td>
                                <td scope="col">20 a 50 HP</td>
                            </tr>
                            <tr>
                                <td scope="col">XS-8×6-13</td>
                                <td scope="col">2100</td>
                                <td scope="col">175</td>
                                <td scope="col">25 a 75 HP</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">XS-10×8-13</td>
                                <td scope="col">4500</td>
                                <td scope="col">165</td>
                                <td scope="col">60 a 150 HP</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series SubDrive --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="SubDrive" class="h4">Serie SubDrive QuickPAK Connect de Franklin </h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/franklin/SubDrive.png') }}" width="55%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie SubDrive QuickPAK Connect</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a
                            href="https://drive.google.com/file/d/1V8iaUR_2_K2M_rRizPhEWfRI7S25ihSu/view?usp=sharing"class="btn btn-primary">Ficha
                            Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Este sistema de presurización constante de Franklin Electric incluye bomba, motor de alta
                        eficiencia Magforce de 4” y variador además de que viene con un tablero tipo NEMA 3R que agrega
                        seguridad y durabilidad al equipo.
                    </p>
                    <p>
                        El diseño compacto de la unidad es ideal para montaje en pared; funciona con tanques de presión
                        pequeños o tanques más grandes existentes (Se ordenan por separado) Equipos desde 7- 90 GPM y
                        0.75hp- 5hp.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Sistemas de Agua Residenciales</li>
                        <li>Sistemas de Irrigación de Jardines</li>
                        <li>Sistemas de Tratamiento de Agua</li>
                        <li>Sistemas Geotérmicos</li>
                        <li>Presurización Constante</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th colspan="3" class="border-bottom border-dark text-center">Quickpak</th>

                            </tr>
                            <tr>
                                <th scope="col" class="border-bottom border-dark">No. Parte</th>
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">GPM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">93806224C</td>
                                <td scope="col">7PMQP-1.5HP-3RC</td>
                                <td scope="col">7</td>
                            </tr>
                            <tr>
                                <td scope="col">93806425C</td>
                                <td scope="col">7PMQP-2.0HP-3RC</td>
                                <td scope="col">7</td>
                            </tr>
                            <tr>
                                <td scope="col">93806526C</td>
                                <td scope="col">7PMQP-3.0HP-3RC</td>
                                <td scope="col">7</td>
                            </tr>
                            <tr>
                                <td scope="col">93806234C</td>
                                <td scope="col">10PMQP-1.5HP-3RC</td>
                                <td scope="col">10</td>
                            </tr>
                            <tr>
                                <td scope="col">93806435C</td>
                                <td scope="col">10PMQP-2.0HP-3RC</td>
                                <td scope="col">10</td>
                            </tr>
                            <tr>
                                <td scope="col">93806536C</td>
                                <td scope="col">10PMQP-3.0HP-3RC</td>
                                <td scope="col">10</td>
                            </tr>
                            <tr>
                                <td scope="col">93806244C</td>
                                <td scope="col">15PMQP-1.5HP-3RC</td>
                                <td scope="col">15</td>
                            </tr>
                            <tr>
                                <td scope="col">93806445C</td>
                                <td scope="col">15PMQP-2.0HP-3RC</td>
                                <td scope="col">15</td>
                            </tr>
                            <tr>
                                <td scope="col">93806546C</td>
                                <td scope="col">15PMQP-3.0HP-3RC</td>
                                <td scope="col">15</td>
                            </tr>
                            <tr>
                                <td scope="col">93806254C</td>
                                <td scope="col">20PMQP-1.5HP-3RC</td>
                                <td scope="col">20</td>
                            </tr>
                            <tr>
                                <td scope="col">93806455C</td>
                                <td scope="col">20PMQP-2.0HP-3RC</td>
                                <td scope="col">20</td>
                            </tr>
                            <tr>
                                <td scope="col">93806556C</td>
                                <td scope="col">20PMQP-3.0HP-3RC</td>
                                <td scope="col">20</td>
                            </tr>
                            <tr>
                                <td scope="col">93806264C</td>
                                <td scope="col">25PMQP-1.5HP-3RC</td>
                                <td scope="col">25</td>
                            </tr>
                            <tr>
                                <td scope="col">93806465C</td>
                                <td scope="col">25PMQP-2.0HP-3RC</td>
                                <td scope="col">25</td>
                            </tr>
                            <tr>
                                <td scope="col">93806566C</td>
                                <td scope="col">25PMQP-3.0HP-3RC</td>
                                <td scope="col">25</td>
                            </tr>
                            <tr>
                                <td scope="col">93806274C</td>
                                <td scope="col">35PMQP-1.5HP-3RC</td>
                                <td scope="col">35</td>
                            </tr>
                            <tr>
                                <td scope="col">93806475C</td>
                                <td scope="col">35PMQP-2.0HP-3RC</td>
                                <td scope="col">35</td>
                            </tr>
                            <tr>
                                <td scope="col">93806576C</td>
                                <td scope="col">35PMQP-3.0HP-3RC</td>
                                <td scope="col">35</td>
                            </tr>
                            <tr>
                                <td scope="col">93806586C</td>
                                <td scope="col">60PMQP-3.0HP-3RC</td>
                                <td scope="col">60</td>
                            </tr>
                            <tr>
                                <td scope="col">93806596C</td>
                                <td scope="col">90PMQP-3.0HP-3RC</td>
                                <td scope="col">90</td>
                            </tr>
                            <tr>
                                <td scope="col">93806600C</td>
                                <td scope="col">35PMQP-5.0HP-3RC</td>
                                <td scope="col">35</td>
                            </tr>
                            <tr>
                                <td scope="col">93806601C</td>
                                <td scope="col">45PMQP-5.0HP-3RC</td>
                                <td scope="col">45</td>
                            </tr>
                            <tr>
                                <td scope="col">93806602C</td>
                                <td scope="col">60PMQP-5.0HP-3RC</td>
                                <td scope="col">60</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">93806603C</td>
                                <td scope="col">90PMQP-5.0HP-3RC</td>
                                <td scope="col">90</td>
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
