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
   <div style="background: url(../imagenes/bombas/wdm/portada.avif) no-repeat;
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
                <img src="{{ asset('imagenes/bombas/wdm/logo.png') }}" width="50%"
                    class="figure-img img-fluid rounded" alt="...">
            </figure>

        </div>

        {{-- Imagenes al seleccionar --}}
        <div>
            {{-- Esto es la Fila --}}
            <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-6 g-2 g-lg-3">

                {{-- Imagen de Series HE,QE,KE --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#HE,QE,KE"><img src="{{ asset('imagenes/bombas/wdm/HE,QE,KE.png') }}"
                                width="80%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Series HE, QE, KE</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series AG --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#AG"><img src="{{ asset('imagenes/bombas/wdm/AG.png') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Series AG</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series VSE --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#VSE"><img src="{{ asset('imagenes/bombas/wdm/VSE.png') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Series VSE</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series NE --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#NE"><img src="{{ asset('imagenes/bombas/wdm/NE.png') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Series NE</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series HIDRO --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#HIDRO"><img src="{{ asset('imagenes/bombas/wdm/HIDRO.png') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Series HIDRO</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series SCI --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#SCI"><img src="{{ asset('imagenes/bombas/wdm/SCI.png') }}" width="80%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Series SCI</h6>
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

    {{-- Contenido Series HE,QE,KE --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="HE,QE,KE" class="h4">Bombas Alta Presión Eléctricas HE, QE, KE</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/wdm/HE,QE,KE.png') }}" width="100%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                        <figcaption class="d-flex justify-content-center">
                            <h6>Series HE, QE, KE</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1ZnMnEW6-ilZK8x90UVPPQFbP92ncj-Yb/view?usp=sharing"
                        class="btn btn-primary">Ficha Técnica</a>
                </div>
            </div>
            <div class="col-md-8 ">
                <!-- Texto -->
                <p>
                    La serie HE, QE, KE son amplias ya que van de tamaños de succión y
                    descarga de 1 1/2” hasta los 6”. Altura Máx hasta los 175mca y Gasto de hasta 1750GPM.
                </p>
                <p>
                    Construcción tipo monobloque en hierro de alta resistencia por lo que están fabricadas para una
                    larga vida útil. Estas bombas también pueden estar acopladas a motores eléctricos monofásicos y
                    trifásicos ó incluso a motores a diesel ó gasolina en potencias desde 2hp hasta 75hp.
                </p>
                <!-- Aplicaciones -->
                <h4 class="h4">Aplicaciones</h4>
                <ul>
                    <li>Distribución de agua en unidades residenciales.</li>
                    <li>Equipos de trabajo pesado y continuo.</li>
                    <li>Extracción de agua de pozos llanos y profundos.</li>
                    <li>Industria Minera.</li>
                    <li>Industria Petroquímica.</li>
                    <li>Industria Química.</li>
                    <li>Lavado a presión de maquinaria.</li>
                    <li>Lavado de establos.</li>
                    <li>Llenado de tanques elevados.</li>
                    <li>Llenado tanque bajo-tanque alto.</li>
                    <li>Recirculación de agua en torres de enfriamiento.</li>
                    <li>Riego por aspersión.</li>
                    <li>Sistemas contraincendio.</li>
                    <li>Sistemas de presión.</li>
                </ul>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <!-- Tabla -->
            <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                <h4>Especificaciones Técnicas Serie QE</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Modelo</th>
                            <th scope="col" class="border-bottom border-dark">Ref.</th>
                            <th scope="col" class="border-bottom border-dark">Succión</th>
                            <th scope="col" class="border-bottom border-dark">Descarga</th>
                            <th scope="col" class="border-bottom border-dark">Potencia (hp)</th>
                            <th scope="col" class="border-bottom border-dark">Etapa</th>
                            <th scope="col" class="border-bottom border-dark">Fases</th>
                            <th scope="col" class="border-bottom border-dark">Voltaje</th>
                            <th scope="col" class="border-bottom border-dark">H máx (mca)*</th>
                            <th scope="col" class="border-bottom border-dark">Q max (gpm)**</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">QE 1.5 30</td>
                            <td scope="col">1E0510</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">50</td>
                            <td scope="col">75</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 1.5 50</td>
                            <td scope="col">1E0580</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">50</td>
                            <td scope="col">160</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 100</td>
                            <td scope="col">1E0584</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">10</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">67</td>
                            <td scope="col">175</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 150</td>
                            <td scope="col">1E0585P</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">15</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">51</td>
                            <td scope="col">354</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 150 (B)</td>
                            <td scope="col">1E0522P</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2” B</td>
                            <td scope="col">15</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">81</td>
                            <td scope="col">180</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 15-4</td>
                            <td scope="col">1E0607</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2” B</td>
                            <td scope="col">1.1</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">10</td>
                            <td scope="col">170</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 200</td>
                            <td scope="col">1E0588</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2” B</td>
                            <td scope="col">20</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">64</td>
                            <td scope="col">367</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 20-4</td>
                            <td scope="col">1E0608</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2” B</td>
                            <td scope="col">2</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">12</td>
                            <td scope="col">180</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 250</td>
                            <td scope="col">1E0523P</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2” B</td>
                            <td scope="col">25</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">76</td>
                            <td scope="col">380</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 30</td>
                            <td scope="col">1E0583</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">83</td>
                            <td scope="col">120</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 300</td>
                            <td scope="col">1E0524</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2” B</td>
                            <td scope="col">30</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">86</td>
                            <td scope="col">390</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 30-4</td>
                            <td scope="col">1E0609</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2” B</td>
                            <td scope="col">3</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">15</td>
                            <td scope="col">210</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 400</td>
                            <td scope="col">1E0589</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2” B</td>
                            <td scope="col">40</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">90</td>
                            <td scope="col">400</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 50</td>
                            <td scope="col">1E0515</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">41</td>
                            <td scope="col">150</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 50-4</td>
                            <td scope="col">1E0610</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2” B</td>
                            <td scope="col">5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">21</td>
                            <td scope="col">270</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2 75</td>
                            <td scope="col">1E0518P</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">7.5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">57</td>
                            <td scope="col">157</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 100-4</td>
                            <td scope="col">1E0613</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">10</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">40</td>
                            <td scope="col">360</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 150</td>
                            <td scope="col">1E0590P</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">15</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">48</td>
                            <td scope="col">360</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 150-4</td>
                            <td scope="col">1E0614</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">15</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">45</td>
                            <td scope="col">380</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 200</td>
                            <td scope="col">1E0591</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">20</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">59</td>
                            <td scope="col">365</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 250</td>
                            <td scope="col">1E0592P</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">25</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">70</td>
                            <td scope="col">370</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 300</td>
                            <td scope="col">1E0593</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">30</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">80</td>
                            <td scope="col">400</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 400</td>
                            <td scope="col">1E0594</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">40</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">95</td>
                            <td scope="col">400</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 500</td>
                            <td scope="col">1E0595</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">50</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">107</td>
                            <td scope="col">400</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 50-4</td>
                            <td scope="col">1E0611</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">28</td>
                            <td scope="col">310</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 2.5 75-4</td>
                            <td scope="col">1E0612</td>
                            <td scope="col">3” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">7.5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">34</td>
                            <td scope="col">350</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 100</td>
                            <td scope="col">1E0520</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">10</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">70</td>
                            <td scope="col">198</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 100-4</td>
                            <td scope="col">1E0616</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">10</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">24</td>
                            <td scope="col">500</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 150</td>
                            <td scope="col">1E0521P</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">15</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">82</td>
                            <td scope="col">198</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 150-4</td>
                            <td scope="col">1E0617</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">15</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">33</td>
                            <td scope="col">550</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 200</td>
                            <td scope="col">1E0596</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">20</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">48</td>
                            <td scope="col">440</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 200-4</td>
                            <td scope="col">1E0618</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">20</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">38</td>
                            <td scope="col">580</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 250</td>
                            <td scope="col">1E0597P</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">25</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">52</td>
                            <td scope="col">460</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 300</td>
                            <td scope="col">1E0598</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">30</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">60</td>
                            <td scope="col">510</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 400</td>
                            <td scope="col">1E0599</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">40</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">65</td>
                            <td scope="col">540</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 50</td>
                            <td scope="col">1E0586</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">35</td>
                            <td scope="col">160</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 500</td>
                            <td scope="col">1E0600</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">50</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">79</td>
                            <td scope="col">600</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 600</td>
                            <td scope="col">1E0601</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">60</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">91</td>
                            <td scope="col">610</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 75</td>
                            <td scope="col">1E0519P</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">7.5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">49</td>
                            <td scope="col">198</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 750</td>
                            <td scope="col">1E0602</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">75</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">105</td>
                            <td scope="col">620</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 3 75-4</td>
                            <td scope="col">1E0615</td>
                            <td scope="col">4” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">7.5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">17</td>
                            <td scope="col">470</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 4 150-4</td>
                            <td scope="col">1E0619</td>
                            <td scope="col">5” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">15</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">27</td>
                            <td scope="col">1000</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 4 200-4</td>
                            <td scope="col">1E0620</td>
                            <td scope="col">5” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">20</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">32</td>
                            <td scope="col">1020</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 4 250-4</td>
                            <td scope="col">1E0621</td>
                            <td scope="col">5” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">25</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">38</td>
                            <td scope="col">1180</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 4 300-4</td>
                            <td scope="col">1E0622</td>
                            <td scope="col">5” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">30</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">42</td>
                            <td scope="col">1200</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 4 400</td>
                            <td scope="col">1E0603</td>
                            <td scope="col">5” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">40</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">54</td>
                            <td scope="col">1000</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 4 500</td>
                            <td scope="col">1E0604</td>
                            <td scope="col">5” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">50</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">60</td>
                            <td scope="col">1200</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 4 600</td>
                            <td scope="col">1E0605</td>
                            <td scope="col">5” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">60</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">70</td>
                            <td scope="col">1250</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 4 750</td>
                            <td scope="col">1E0606</td>
                            <td scope="col">5” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">75</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">80</td>
                            <td scope="col">1300</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 6 200-4</td>
                            <td scope="col">1E0623</td>
                            <td scope="col">6” B</td>
                            <td scope="col">6” B</td>
                            <td scope="col">20</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">23</td>
                            <td scope="col">740</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 6 250-4</td>
                            <td scope="col">1E0624</td>
                            <td scope="col">6” B</td>
                            <td scope="col">6” B</td>
                            <td scope="col">25</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">30</td>
                            <td scope="col">1150</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 6 300-4</td>
                            <td scope="col">1E0625</td>
                            <td scope="col">6” B</td>
                            <td scope="col">6” B</td>
                            <td scope="col">30</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">30</td>
                            <td scope="col">1250</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 6 400-4</td>
                            <td scope="col">1E0626</td>
                            <td scope="col">6” B</td>
                            <td scope="col">6” B</td>
                            <td scope="col">40</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">39</td>
                            <td scope="col">1300</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 6 500-4</td>
                            <td scope="col">1E0627</td>
                            <td scope="col">6” B</td>
                            <td scope="col">6” B</td>
                            <td scope="col">50</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">48</td>
                            <td scope="col">1400</td>
                        </tr>
                        <tr>
                            <td scope="col">QE 6 600-4</td>
                            <td scope="col">1E0628</td>
                            <td scope="col">6” B</td>
                            <td scope="col">6” B</td>
                            <td scope="col">60</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">55</td>
                            <td scope="col">1540</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">QE 6 750-4</td>
                            <td scope="col">1E0629</td>
                            <td scope="col">6” B</td>
                            <td scope="col">6” B</td>
                            <td scope="col">75</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">67</td>
                            <td scope="col">1600</td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="h4">Especificaciones Técnicas Serie HE</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Modelo</th>
                            <th scope="col" class="border-bottom border-dark">Ref.</th>
                            <th scope="col" class="border-bottom border-dark">Succión</th>
                            <th scope="col" class="border-bottom border-dark">Descarga</th>
                            <th scope="col" class="border-bottom border-dark">Potencia (hp)</th>
                            <th scope="col" class="border-bottom border-dark">Etapa</th>
                            <th scope="col" class="border-bottom border-dark">Fases</th>
                            <th scope="col" class="border-bottom border-dark">Voltaje</th>
                            <th scope="col" class="border-bottom border-dark">H máx (mca)*</th>
                            <th scope="col" class="border-bottom border-dark">Q max (gpm)**</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">HE 1.5 100</td>
                            <td scope="col">1E0390</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">10</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">91</td>
                            <td scope="col">96</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 1.5 20</td>
                            <td scope="col">1E0508</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">2</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/240</td>
                            <td scope="col">42</td>
                            <td scope="col">60</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 1.5 20-1</td>
                            <td scope="col">1E0506</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">2</td>
                            <td scope="col">1</td>
                            <td scope="col">1</td>
                            <td scope="col">110/220</td>
                            <td scope="col">42</td>
                            <td scope="col">60</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 1.5 30</td>
                            <td scope="col">1E0509</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">55</td>
                            <td scope="col">60</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 1.5 30-1</td>
                            <td scope="col">1.00E+190</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">1</td>
                            <td scope="col">1</td>
                            <td scope="col">110/220</td>
                            <td scope="col">55</td>
                            <td scope="col">60</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 1.5 50</td>
                            <td scope="col">1E0511</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">61</td>
                            <td scope="col">83</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 1.5 50-1</td>
                            <td scope="col">1E0415</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">5</td>
                            <td scope="col">1</td>
                            <td scope="col">1</td>
                            <td scope="col">110/220</td>
                            <td scope="col">61</td>
                            <td scope="col">83</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 1.5 75</td>
                            <td scope="col">1E0514P</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">7.5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">80</td>
                            <td scope="col">92</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 2 100</td>
                            <td scope="col">1E0582</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">10</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">83</td>
                            <td scope="col">120</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 2 100-2</td>
                            <td scope="col">1E0546</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">10</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">124</td>
                            <td scope="col">130</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 2 150-2</td>
                            <td scope="col">1E0547P</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">15</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">150</td>
                            <td scope="col">140</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 2 30</td>
                            <td scope="col">1E0581</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">-</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">45</td>
                            <td scope="col">85</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 2 30-1</td>
                            <td scope="col">1.00E+218</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">1</td>
                            <td scope="col">1</td>
                            <td scope="col">110/220</td>
                            <td scope="col">45</td>
                            <td scope="col">85</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 2 50</td>
                            <td scope="col">1E0528</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">53</td>
                            <td scope="col">92</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 2 50-1 APG</td>
                            <td scope="col">1E0529</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">5</td>
                            <td scope="col">1</td>
                            <td scope="col">1</td>
                            <td scope="col">110/220</td>
                            <td scope="col">53</td>
                            <td scope="col">92</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 2 75</td>
                            <td scope="col">1E0531P</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">7.5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">68</td>
                            <td scope="col">118</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 3 100</td>
                            <td scope="col">1E0532</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">10</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">82</td>
                            <td scope="col">135</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 3 200-2</td>
                            <td scope="col">1E0567</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">20</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">163</td>
                            <td scope="col">150</td>
                        </tr>
                        <tr>
                            <td scope="col">HE 3 250-2</td>
                            <td scope="col">1E0568P</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">25</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">175</td>
                            <td scope="col">170</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">HE 3 75</td>
                            <td scope="col">1E0065P</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">7.5</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">70</td>
                            <td scope="col">120</td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="h4">Especificaciones Técnicas Serie KE</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Modelo</th>
                            <th scope="col" class="border-bottom border-dark">Ref.</th>
                            <th scope="col" class="border-bottom border-dark">Succión</th>
                            <th scope="col" class="border-bottom border-dark">Descarga</th>
                            <th scope="col" class="border-bottom border-dark">Potencia (hp)</th>
                            <th scope="col" class="border-bottom border-dark">Etapa</th>
                            <th scope="col" class="border-bottom border-dark">Fases</th>
                            <th scope="col" class="border-bottom border-dark">Voltaje (V)</th>
                            <th scope="col" class="border-bottom border-dark">H máx (mca)*</th>
                            <th scope="col" class="border-bottom border-dark">Q max (gpm)**</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">KE 1.5 100</td>
                            <td scope="col">1E0525</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">10</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">69</td>
                            <td scope="col">190</td>
                        </tr>
                        <tr>
                            <td scope="col">KE 1.5 150</td>
                            <td scope="col">1E0526P</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">15</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">78</td>
                            <td scope="col">210</td>
                        </tr>
                        <tr>
                            <td scope="col">KE 1.5 200</td>
                            <td scope="col">1E0557</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">20</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">87</td>
                            <td scope="col">235</td>
                        </tr>
                        <tr>
                            <td scope="col">KE 1.5 250</td>
                            <td scope="col">1E0527</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">1 1/2” NPT</td>
                            <td scope="col">25</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">97</td>
                            <td scope="col">240</td>
                        </tr>
                        <tr>
                            <td scope="col">KE 3 150</td>
                            <td scope="col">1E0534P</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">15</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">71</td>
                            <td scope="col">278</td>
                        </tr>
                        <tr>
                            <td scope="col">KE 3 200</td>
                            <td scope="col">1E0587</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">20</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">80</td>
                            <td scope="col">278</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">KE 3 250</td>
                            <td scope="col">1E0535P</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">25</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">94</td>
                            <td scope="col">297</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Contenido Series AG --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="AG">Bombas Autocebantes a Gasolina AG</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/wdm/AG.png') }}" width="100%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                        <figcaption class="d-flex justify-content-center">
                            <h6 class="h6">Serie AG</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1xEu0ejWJyx_DTIcTm8j_GBlzB2wBR7a1/view?usp=drive_link"
                        class="btn btn-primary">Ficha Técnica</a>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Texto -->
                <p>
                    Bombas a gasolina hechas para durar en hierro fundido. La Serie AG de WDM opera a presiones de
                    hasta 49mca (metros columna de agua) y flujos de hasta 465 GPM.. Al ser autocebante no necesita
                    de accesorios extra como pichanchas y lo que la hace fácil de operar. Existen modelos desde 6.5
                    hp hasta 18hp.
                </p>
                 <!-- Aplicaciones -->
            <h4>Aplicaciones</h4>
            <br>
            <ul>
                <li>Bombeo de agua con sólidos en suspensión.</li>
                <li>Desagüe de cajas telefónicas y eléctricas.</li>
                <li>Desagüe de zonas inundadas.</li>
                <li>Riego de estiércol.</li>
                <li>Riego por aspersión.</li>
                <li>Riego por goteo.</li>
                <li>Riego por inundación.</li>
                <li>Transporte de líquidos en carro tanques.</li>
            </ul>
            </div>
        </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <!-- Tabla -->
                <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                    <h4 class="h4">Bombas Autocebantes con motor HI-FORCE a gasolina</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Modelo</th>
                            <th scope="col" class="border-bottom border-dark">Ref.</th>
                            <th scope="col" class="border-bottom border-dark">Succión</th>
                            <th scope="col" class="border-bottom border-dark">Descarga</th>
                            <th scope="col" class="border-bottom border-dark">Potencia (hp)</th>
                            <th scope="col" class="border-bottom border-dark">H máx (mca)*</th>
                            <th scope="col" class="border-bottom border-dark">Q max (gpm)**</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">AG 2 65 HF</td>
                            <td scope="col">1D0271</td>
                            <td scope="col">2″ NPT</td>
                            <td scope="col">2″ NPT</td>
                            <td scope="col">6.5</td>
                            <td scope="col">35</td>
                            <td scope="col">148</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 2 80 HF</td>
                            <td scope="col">1D0398</td>
                            <td scope="col">2″ NPT</td>
                            <td scope="col">2″</td>
                            <td scope="col">8</td>
                            <td scope="col">32</td>
                            <td scope="col">260</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 3 65 HF</td>
                            <td scope="col">1D0283</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">6.5</td>
                            <td scope="col">30</td>
                            <td scope="col">227</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 3 90 HF</td>
                            <td scope="col">1D0284</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">9</td>
                            <td scope="col">32</td>
                            <td scope="col">270</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 4 130 HF</td>
                            <td scope="col">1D0286</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">13</td>
                            <td scope="col">40</td>
                            <td scope="col">325</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">AG 6 130 HF</td>
                            <td scope="col">1D0285</td>
                            <td scope="col">6” NPT</td>
                            <td scope="col">6” NPT</td>
                            <td scope="col">13</td>
                            <td scope="col">30</td>
                            <td scope="col">580</td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="h4">Bombas Autocebantes con motor KOHLER a gasolina</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Modelo</th>
                            <th scope="col" class="border-bottom border-dark">Ref.</th>
                            <th scope="col" class="border-bottom border-dark">Succión</th>
                            <th scope="col" class="border-bottom border-dark">Descarga</th>
                            <th scope="col" class="border-bottom border-dark">Potencia (hp)</th>
                            <th scope="col" class="border-bottom border-dark">H máx (mca)*</th>
                            <th scope="col" class="border-bottom border-dark">Q max (gpm)**</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">AG 2 65 KL</td>
                            <td scope="col">1D0520</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">6.5</td>
                            <td scope="col">35</td>
                            <td scope="col">148</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 3 65 KL</td>
                            <td scope="col">1D0521</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">6.5</td>
                            <td scope="col">30</td>
                            <td scope="col">227</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 3 95 KL</td>
                            <td scope="col">1D0523</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">9.5</td>
                            <td scope="col">32</td>
                            <td scope="col">270</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">AG 4 140 KL</td>
                            <td scope="col">1D0524</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">14</td>
                            <td scope="col">40</td>
                            <td scope="col">327</td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="h4">Bombas Autocebantes con motor BRIGGS & STRATTON a gasolina</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Modelo</th>
                            <th scope="col" class="border-bottom border-dark">Ref.</th>
                            <th scope="col" class="border-bottom border-dark">Succión</th>
                            <th scope="col" class="border-bottom border-dark">Descarga</th>
                            <th scope="col" class="border-bottom border-dark">Potencia (hp)</th>
                            <th scope="col" class="border-bottom border-dark">H máx (mca)*</th>
                            <th scope="col" class="border-bottom border-dark">Q max (gpm)**</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">AG 2 35 BS</td>
                            <td scope="col">1D0003</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">3.5</td>
                            <td scope="col">35</td>
                            <td scope="col">120</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 2 60 BS</td>
                            <td scope="col">1D0007</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">6</td>
                            <td scope="col">35</td>
                            <td scope="col">148</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 2 80 BS</td>
                            <td scope="col">1D0387</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">8</td>
                            <td scope="col">36</td>
                            <td scope="col">180</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 3 60 BS</td>
                            <td scope="col">1D0388</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">6</td>
                            <td scope="col">30</td>
                            <td scope="col">227</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 3 80 BS</td>
                            <td scope="col">1D0389</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">8</td>
                            <td scope="col">32</td>
                            <td scope="col">270</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 3 100 BS</td>
                            <td scope="col">1D0390</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">10</td>
                            <td scope="col">40</td>
                            <td scope="col">330</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 3 130 BS</td>
                            <td scope="col">1D0391</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">13</td>
                            <td scope="col">41</td>
                            <td scope="col">340</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 4 130 BS</td>
                            <td scope="col">1D0392</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">13</td>
                            <td scope="col">39</td>
                            <td scope="col">340</td>
                        </tr>
                        <tr>
                            <td scope="col">AG 4 160 BS</td>
                            <td scope="col">1D0014</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">16</td>
                            <td scope="col">42</td>
                            <td scope="col">400</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">AG 4 180 BS***</td>
                            <td scope="col">1D0393</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">4” NPT</td>
                            <td scope="col">18</td>
                            <td scope="col">43</td>
                            <td scope="col">410</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Contenido Series VSE --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="VSE">Bombas Eléctricas Multietapas VSE y VHSE</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-lg-5 ">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/wdm/VSE.png') }}" width="100%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                        <figcaption class="d-flex justify-content-center">
                            <h6>Serie VSE</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1s7t2s6GahTWIY5RNip278cfbrFv5plVD/view?usp=drive_link"
                        class="btn btn-primary">Ficha Técnica</a>
                </div>
            </div>
            <div class="col-lg-7">
                <!-- Texto -->
                <b>Rendimiento Multietapas Versátil</b>
                <p>
                    La Serie VSE y VHSE es una solución versátil para aplicaciones que demandan una presión
                    constante y un flujo controlado. Estas bombas eléctricas multietapas se destacan en situaciones
                    donde se necesita una presión continua y confiable. La capacidad de estas bombas es de hasta una
                    carga de 240mca y de un gasto de hasta 436 GPM en descarga de hasta 4”. Temperatura de operación
                    de hasta 70 grados. Y presión max de hasta 341 psi. Materiales de construcción el cuerpo de
                    hierro fundido y los impulsores en acero inoxidable.  Motores eléctricos trifásicos con
                    potencias desde 1.0 hp hasta 40 hp.
                </p>
                <b>Bombas Sumergibles para Aguas Residuales NE</b>
                <p>
                    Estas bombas están disponibles en una variedad de tamaños y capacidades para adaptarse a las
                    necesidades específicas de tu aplicación. Ya sea que necesites manejar aguas residuales en una
                    planta industrial o en un sistema municipal, hay una bomba de la Serie NE que se adapta
                    perfectamente. Altura máxima de hasta 50 mca, flujo máximo de hasta 2,275 gpm,  Impulsor cerrado
                    o semiabierto en hierro fundido y el cuerpo de la bomba en hierro fundido por lo cual la hace
                    muy duradera.
                </p>
                <!-- Aplicaciones -->
                <h4>Aplicaciones</h4>
                <ul>
                    <li>Lavaderos de automóviles.</li>
                    <li>Lavado a presión de maquinaria.</li>
                    <li>Lavado de galpones.</li>
                    <li>Sistemas contraincendio.</li>
                    <li>Sistemas de presión.</li>
                </ul>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <!-- Tabla -->
            <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                <h4 class="h4">Bombas Multietapas en acero inoxidable con motor eléctrico</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Modelo</th>
                            <th scope="col" class="border-bottom border-dark">Ref.</th>
                            <th scope="col" class="border-bottom border-dark">Succión</th>
                            <th scope="col" class="border-bottom border-dark">Descarga</th>
                            <th scope="col" class="border-bottom border-dark">Potencia (hp)</th>
                            <th scope="col" class="border-bottom border-dark">Etapa</th>
                            <th scope="col" class="border-bottom border-dark">Fases</th>
                            <th scope="col" class="border-bottom border-dark">Voltaje (V)</th>
                            <th scope="col" class="border-bottom border-dark">H máx (mca)*</th>
                            <th scope="col" class="border-bottom border-dark">Q max (gpm)**</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">VSE 1-9-10</td>
                            <td scope="col">1G0136</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">1</td>
                            <td scope="col">9</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">79</td>
                            <td scope="col">12</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 1-11-15</td>
                            <td scope="col">1G0137</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">1.5</td>
                            <td scope="col">11</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">114</td>
                            <td scope="col">12</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 1-13-15</td>
                            <td scope="col">1GO138</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">1.5</td>
                            <td scope="col">13</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">118</td>
                            <td scope="col">12</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 1-17-20</td>
                            <td scope="col">1G0163</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">2</td>
                            <td scope="col">17</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">148</td>
                            <td scope="col">12</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 1-21-30</td>
                            <td scope="col">1G0140</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">3</td>
                            <td scope="col">21</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">183</td>
                            <td scope="col">12</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 1-23-30</td>
                            <td scope="col">1G0141</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">3</td>
                            <td scope="col">23</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">200</td>
                            <td scope="col">12</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 3-8-15</td>
                            <td scope="col">1G0136</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">1.5</td>
                            <td scope="col">8</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">79</td>
                            <td scope="col">22</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 3-11-20</td>
                            <td scope="col">1G0143</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">2</td>
                            <td scope="col">11</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">101</td>
                            <td scope="col">22</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 3-15-30</td>
                            <td scope="col">1G0144</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">3</td>
                            <td scope="col">18</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">138</td>
                            <td scope="col">22</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 3-17-30</td>
                            <td scope="col">1G0145</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">3</td>
                            <td scope="col">17</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">156</td>
                            <td scope="col">22</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 3-25-50</td>
                            <td scope="col">1G0146</td>
                            <td scope="col">1 1/4” B</td>
                            <td scope="col">1” B</td>
                            <td scope="col">5</td>
                            <td scope="col">25</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">228</td>
                            <td scope="col">22</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 10-3-30</td>
                            <td scope="col">1G0181</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">53</td>
                            <td scope="col">67</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 10-6-50</td>
                            <td scope="col">1G0147</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">5</td>
                            <td scope="col">6</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">96</td>
                            <td scope="col">67</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 10-8-75</td>
                            <td scope="col">1G0148</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">7.5</td>
                            <td scope="col">8</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">120</td>
                            <td scope="col">67</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 10-10-100</td>
                            <td scope="col">1G0149</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">10</td>
                            <td scope="col">10</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">150</td>
                            <td scope="col">67</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 10-12-100</td>
                            <td scope="col">1G0150</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">10</td>
                            <td scope="col">12</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">180</td>
                            <td scope="col">67</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 10-14-150</td>
                            <td scope="col">1G0151</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">1 1/2” B</td>
                            <td scope="col">15</td>
                            <td scope="col">14</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">240</td>
                            <td scope="col">67</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 15-4-75</td>
                            <td scope="col">1G0152</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">7.5</td>
                            <td scope="col">4</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">90</td>
                            <td scope="col">115</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 15-5-100</td>
                            <td scope="col">1G0153</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">10</td>
                            <td scope="col">5</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">110</td>
                            <td scope="col">115</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 15-8-150</td>
                            <td scope="col">1G0154</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">15</td>
                            <td scope="col">8</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">163</td>
                            <td scope="col">115</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 15-10-200</td>
                            <td scope="col">1G0155</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">20</td>
                            <td scope="col">10</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">206</td>
                            <td scope="col">115</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 15-12-250</td>
                            <td scope="col">1G0156</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">2 1/2” B</td>
                            <td scope="col">25</td>
                            <td scope="col">12</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">240</td>
                            <td scope="col">115</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 32-3-150</td>
                            <td scope="col">1G0157</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">15</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">60</td>
                            <td scope="col">212</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 32-4-150</td>
                            <td scope="col">1G0158</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">15</td>
                            <td scope="col">4</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">140</td>
                            <td scope="col">212</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 32-5-200</td>
                            <td scope="col">1G0159</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">20</td>
                            <td scope="col">5</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">178</td>
                            <td scope="col">212</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 32-6-250</td>
                            <td scope="col">1G0182</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">25</td>
                            <td scope="col">6</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">210</td>
                            <td scope="col">212</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 32-7-300</td>
                            <td scope="col">1G0183</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">30</td>
                            <td scope="col">7</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">230</td>
                            <td scope="col">212</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 32-9-400</td>
                            <td scope="col">1G0184</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">40</td>
                            <td scope="col">9</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">250</td>
                            <td scope="col">212</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 32-10-500</td>
                            <td scope="col">1G0198</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">50</td>
                            <td scope="col">10</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">260</td>
                            <td scope="col">212</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 45-2-200</td>
                            <td scope="col">1G0185</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">20</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">68</td>
                            <td scope="col">287</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 45-3-250</td>
                            <td scope="col">1G0186</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">25</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">109</td>
                            <td scope="col">287</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 45-4-300</td>
                            <td scope="col">1G0187</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">30</td>
                            <td scope="col">4</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">122</td>
                            <td scope="col">287</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 45-5-400</td>
                            <td scope="col">1G0188</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">40</td>
                            <td scope="col">5</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">170</td>
                            <td scope="col">287</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 45-7-600</td>
                            <td scope="col">1G0199</td>
                            <td scope="col">3” B</td>
                            <td scope="col">3” B</td>
                            <td scope="col">60</td>
                            <td scope="col">7</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">240</td>
                            <td scope="col">287</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 64-2-200</td>
                            <td scope="col">1G0189</td>
                            <td scope="col">4” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">20</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">58</td>
                            <td scope="col">436</td>
                        </tr>
                        <tr>
                            <td scope="col">VSE 64-3-300</td>
                            <td scope="col">1G0190</td>
                            <td scope="col">4” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">30</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">97</td>
                            <td scope="col">436</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">VSE 64-3-400</td>
                            <td scope="col">1G0191</td>
                            <td scope="col">4” B</td>
                            <td scope="col">4” B</td>
                            <td scope="col">40</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">220/440</td>
                            <td scope="col">122</td>
                            <td scope="col">436</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Contenido Series NE --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="NE">Bombas Sumergibles para Aguas Residuales NE</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/wdm/NE.png') }}" width="100%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                        <figcaption class="d-flex justify-content-center">
                            <h6>Serie NE</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1d88Vbwq9o-4qUCE2qdNBSGlvZ3k_uCNI/view?usp=sharing"
                    class="btn btn-primary">Ficha Técnica</a>
                </div>
            </div>
            <div class="col-md-8 mt-5 mb-3">
                <!-- Texto -->
                <p>
                    Estas bombas están disponibles en una variedad de tamaños y capacidades para adaptarse a las
                    necesidades específicas de tu aplicación. Ya sea que necesites manejar aguas residuales en una
                    planta industrial o en un sistema municipal, hay una bomba de la Serie NE que se adapta
                    perfectamente. Altura máxima de hasta 50 mca, flujo máximo de hasta 2,275 gpm,  Impulsor cerrado
                    o semiabierto en hierro fundido y el cuerpo de la bomba en hierro fundido por lo cual la hace
                    muy duradera.
                </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Bombeo de agua con sólidos en suspensión.</li>
                        <li>Control de niveles freáticos.</li>
                        <li>Desagüe de zonas inundadas.</li>
                        <li>Fuentes decorativas.</li>
                        <li>Manejo de agua en beneficiaderos de café.</li>
                        <li>Manejo de aguas residuales o negras.</li>
                        <li>Plantas de tratamiento.</li>
                        <li>Pozos sépticos.</li>
                        <li>Riego de estiércol.</li>
                    </ul>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <!-- Tabla -->
            <div class="col-lg-12 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                <h4 class="h4">Bombas Aguas residuales con motor eléctrico a 3.600 rpm</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Modelo</th>
                            <th scope="col" class="border-bottom border-dark">Descarga</th>
                            <th scope="col" class="border-bottom border-dark">Potencia (hp)</th>
                            <th scope="col" class="border-bottom border-dark">Fases</th>
                            <th scope="col" class="border-bottom border-dark">Voltaje (V)</th>
                            <th scope="col" class="border-bottom border-dark">H máx (mca)*</th>
                            <th scope="col" class="border-bottom border-dark">Q max (gpm)**</th>
                            <th scope="col" class="border-bottom border-dark">I Amperes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">NE 3 20-2-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">24</td>
                            <td scope="col">163</td>
                            <td scope="col">15</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 20-2-440</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">24</td>
                            <td scope="col">163</td>
                            <td scope="col">7.5</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 30-2-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">29</td>
                            <td scope="col">193</td>
                            <td scope="col">18</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 30-2-440</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">29</td>
                            <td scope="col">193</td>
                            <td scope="col">9</td>
                        </tr>
                        <tr>
                            <td scope="col">NHE 3 10-1-2-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">1</td>
                            <td scope="col">1</td>
                            <td scope="col">220</td>
                            <td scope="col">23</td>
                            <td scope="col">120</td>
                            <td scope="col">13</td>
                        </tr>
                        <tr>
                            <td scope="col">NHE 3 20-2-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">27</td>
                            <td scope="col">135</td>
                            <td scope="col">15</td>
                        </tr>
                        <tr>
                            <td scope="col">NHE 3 20-2-440</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">27</td>
                            <td scope="col">135</td>
                            <td scope="col">7.5</td>
                        </tr>
                        <tr>
                            <td scope="col">NHE 3 30-2-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">34</td>
                            <td scope="col">140</td>
                            <td scope="col">18</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">NHE 3 30-2-440</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">34</td>
                            <td scope="col">140</td>
                            <td scope="col">9</td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="h4">Bombas Aguas residuales con motor eléctrico a 1.800 rpm</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Modelo</th>
                            <th scope="col" class="border-bottom border-dark">Descarga</th>
                            <th scope="col" class="border-bottom border-dark">Potencia (hp)</th>
                            <th scope="col" class="border-bottom border-dark">Fases</th>
                            <th scope="col" class="border-bottom border-dark">Voltaje (V)</th>
                            <th scope="col" class="border-bottom border-dark">H máx (mca)*</th>
                            <th scope="col" class="border-bottom border-dark">Q max (gpm)**</th>
                            <th scope="col" class="border-bottom border-dark">I Amperes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">NE 2 4 1-4 110</td>
                            <td scope="col">2” NPT</td>
                            <td scope="col">0.4</td>
                            <td scope="col">1</td>
                            <td scope="col">110</td>
                            <td scope="col">8</td>
                            <td scope="col">95</td>
                            <td scope="col">9.5</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 5-1-4-110</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">0.5</td>
                            <td scope="col">1</td>
                            <td scope="col">110</td>
                            <td scope="col">8</td>
                            <td scope="col">168</td>
                            <td scope="col">11</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 7-1-4-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">0.75</td>
                            <td scope="col">1</td>
                            <td scope="col">220</td>
                            <td scope="col">9</td>
                            <td scope="col">180</td>
                            <td scope="col">7</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 10-1-4-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">1</td>
                            <td scope="col">1</td>
                            <td scope="col">220</td>
                            <td scope="col">11</td>
                            <td scope="col">219</td>
                            <td scope="col">8.5</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 10-4-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">11</td>
                            <td scope="col">219</td>
                            <td scope="col">6</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 10-4-440</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">1</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">11</td>
                            <td scope="col">219</td>
                            <td scope="col">3</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 20-1-4-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">2</td>
                            <td scope="col">1</td>
                            <td scope="col">220</td>
                            <td scope="col">14</td>
                            <td scope="col">364</td>
                            <td scope="col">18</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 20-4-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">15</td>
                            <td scope="col">364</td>
                            <td scope="col">13</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 20-4-440</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">15</td>
                            <td scope="col">364</td>
                            <td scope="col">65</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 30-4-220</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">20</td>
                            <td scope="col">390</td>
                            <td scope="col">17</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 3 30-4-440</td>
                            <td scope="col">3” NPT</td>
                            <td scope="col">3</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">20</td>
                            <td scope="col">390</td>
                            <td scope="col">8.5</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 4 45-4-220</td>
                            <td scope="col">4” B</td>
                            <td scope="col">4.5</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">12</td>
                            <td scope="col">637</td>
                            <td scope="col">17.6</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 4 45-4-440</td>
                            <td scope="col">4” B</td>
                            <td scope="col">4.5</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">12</td>
                            <td scope="col">637</td>
                            <td scope="col">8.8</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 4 75-4-220</td>
                            <td scope="col">4” B</td>
                            <td scope="col">7.5</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">15</td>
                            <td scope="col">731</td>
                            <td scope="col">23.6</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 4 75-4-440</td>
                            <td scope="col">4” B</td>
                            <td scope="col">7.5</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">15</td>
                            <td scope="col">731</td>
                            <td scope="col">11.8</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 4 113-4-220</td>
                            <td scope="col">4” B</td>
                            <td scope="col">11.3</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">22</td>
                            <td scope="col">875</td>
                            <td scope="col">28.4</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 4 113-4-440</td>
                            <td scope="col">4” B</td>
                            <td scope="col">11.3</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">22</td>
                            <td scope="col">875</td>
                            <td scope="col">14.2</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 4 150-4-220</td>
                            <td scope="col">4” B</td>
                            <td scope="col">15</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">25</td>
                            <td scope="col">937</td>
                            <td scope="col">40</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 4 150-4-440</td>
                            <td scope="col">4” B</td>
                            <td scope="col">15</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">25</td>
                            <td scope="col">937</td>
                            <td scope="col">20</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 180-4-220</td>
                            <td scope="col">6” B</td>
                            <td scope="col">18</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">32</td>
                            <td scope="col">1,625</td>
                            <td scope="col">50.6</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 180-4-220</td>
                            <td scope="col">6” B</td>
                            <td scope="col">18</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">32</td>
                            <td scope="col">1,625</td>
                            <td scope="col">25.3</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 240-4-220</td>
                            <td scope="col">6” B</td>
                            <td scope="col">24</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">36</td>
                            <td scope="col">1,670</td>
                            <td scope="col">62.8</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 240-4-440</td>
                            <td scope="col">6” B</td>
                            <td scope="col">24</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">36</td>
                            <td scope="col">1,670</td>
                            <td scope="col">31.4</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 300-4-220</td>
                            <td scope="col">6” B</td>
                            <td scope="col">30</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">38</td>
                            <td scope="col">1,720</td>
                            <td scope="col">75.8</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 300-4-440</td>
                            <td scope="col">6” B</td>
                            <td scope="col">30</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">38</td>
                            <td scope="col">1,720</td>
                            <td scope="col">37.9</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 360-4-220</td>
                            <td scope="col">6” B</td>
                            <td scope="col">36</td>
                            <td scope="col">3</td>
                            <td scope="col">220</td>
                            <td scope="col">43</td>
                            <td scope="col">1,750</td>
                            <td scope="col">90</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 360-4-440</td>
                            <td scope="col">6” B</td>
                            <td scope="col">36</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">43</td>
                            <td scope="col">1,750</td>
                            <td scope="col">45</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 480-4-440</td>
                            <td scope="col">6” B</td>
                            <td scope="col">48</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">34</td>
                            <td scope="col">1,950</td>
                            <td scope="col">65</td>
                        </tr>
                        <tr>
                            <td scope="col">NE 6 600-4-440</td>
                            <td scope="col">6” B</td>
                            <td scope="col">60</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">44</td>
                            <td scope="col">2,100</td>
                            <td scope="col">78</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">NE 6 750-4-440</td>
                            <td scope="col">6” B</td>
                            <td scope="col">75</td>
                            <td scope="col">3</td>
                            <td scope="col">440</td>
                            <td scope="col">50</td>
                            <td scope="col">2,275</td>
                            <td scope="col">96</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Contenido Series HIDRO --}}
    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h4 id="HIDRO">Hidroneumáticos de Velocidad Variable y Presión Constante</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-4">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/wdm/HIDRO.png') }}" width="100%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                        <figcaption class="d-flex justify-content-center">
                            <h6>Serie HIDRO</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1GQBL1B4tMLTn8jscc8ipdcPNesLSc_F0/view?usp=sharing"
                    class="btn btn-primary">Ficha Técnica</a>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Texto -->
                <p>
                    Los Hidroneumáticos de Velocidad Variable y Presión Constante de la marca WDM son la respuesta a
                    la demanda de soluciones de suministro de agua más inteligentes y eficientes. Estos sistemas
                    representan una verdadera revolución en la forma en que el agua se suministra y se mantiene a
                    presión en edificios comerciales, industriales y residenciales.
                </p>
                <b>Velocidad Variable para un Suministro Eficiente</b>
                <p>
                    Una de las características destacadas de estos hidroneumáticos es su capacidad de operar a
                    velocidad variable. Esto significa que pueden ajustar automáticamente la velocidad del motor
                    para satisfacer la demanda de agua en tiempo real. Cuando se necesita más agua, el sistema
                    aumenta la velocidad; cuando la demanda disminuye, la velocidad se reduce. Esto se traduce en un
                    suministro de agua eficiente y en la reducción de costos operativos.
                </p>
                <b>Presión Constante para un Rendimiento Óptimo</b>
                <p>
                    Los Hidroneumáticos de Presión Constante de WDM garantizan una presión constante en todo
                    momento. No importa cuántas salidas de agua estén en uso, la presión se mantiene constante. Esto
                    es esencial para sistemas de agua a presión en edificios comerciales y residenciales, ya que
                    garantiza un rendimiento óptimo en todas las situaciones.
                </p>
                <b>Ahorro de Energía y Costos Operativos</b>
                <p>
                    La eficiencia energética es una parte fundamental del diseño de estos sistemas. La capacidad de
                    ajustar la velocidad del motor en función de la demanda no solo ahorra energía, sino que también
                    reduce significativamente los costos operativos a lo largo del tiempo.
                </p>
                <b>Mantenimiento Simplificado y Durabilidad</b>
                <p>
                    El mantenimiento de estos sistemas es sencillo y práctico, lo que significa menos tiempo de
                    inactividad y costos reducidos en tareas de servicio y reparación. La construcción robusta y
                    duradera garantiza una larga vida útil y un rendimiento confiable.
                </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-lg-12 mt-5 mb-5 pb-5">
                <h4 class="h4">Aplicaciones</h4>
                <!-- Aplicaciones -->
                <ul>
                    <li>Edificaciones donde se requiera un suministro confiable</li>
                    <li>Edificios habitacionales</li>
                    <li>Conjuntos residenciales</li>
                    <li>Procesos industriales</li>
                    <li>Hospitales</li>
                    <li>Centros comerciales</li>
                    <li>Tiendas de autoservicio, etc.</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Contenido Series SCI --}}
    <div>
        <div class="row">
            <div>
                <h4 id="SCI" class="h4">Sistemas Contra Incendios</h4>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/wdm/SCI.png') }}" width="100%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption class="d-flex justify-content-center">
                    <h6>Serie SCI</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1kPyp-hCnARo2m5Dt0s2RoXFDYD9k9oKD/view?usp=sharing"
                    class="btn btn-primary">Ficha Técnica</a>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Texto -->
                <p>
                    Los Sistemas Contra Incendios de la marca WDM representan un estándar de excelencia en la
                    protección y seguridad en caso de incendio. Estos sistemas han sido diseñados para ofrecer una
                    respuesta rápida y efectiva en situaciones de emergencia, brindando tranquilidad y protección en
                    una amplia gama de entornos, desde edificios comerciales hasta instalaciones industriales y más.
                </p>
                <b>Prevención y Respuesta Rápida</b>
                <p>
                    La prevención y la respuesta rápida son fundamentales cuando se trata de incendios. Los Sistemas
                    Contra Incendios de WDM incorporan tecnología de vanguardia para detectar y responder a
                    incendios de manera inmediata. Esto ayuda a minimizar los daños y proteger vidas y propiedades.
                </p>
                <b>Confianza en Situaciones Críticas</b>
                <p>
                    En situaciones de incendio, la confiabilidad es esencial. Los Sistemas Contra Incendios de WDM
                    están diseñados para funcionar de manera confiable en condiciones extremas.
                </p>
                <b>Cumplimiento de Normativas y Regulaciones</b>
                <p>
                    Los sistemas de WDM cumplen con las normativas y regulaciones locales e internacionales para
                    garantizar que estés en cumplimiento en todo momento.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Aplicaciones -->
                <h4 class="h4">Aplicaciones</h4>
                <ul>
                    <li>Edificios habitacionales</li>
                    <li>Conjuntos residenciales</li>
                    <li>Procesos industriales</li>
                    <li>Centros comerciales</li>
                    <li>Hospitales</li>
                    <li>Plazas </li>
                    <li>Tiendas de autoservico</li>
                    <li>Edificaciones donde se requiera un equipo contra Incendio.</li>

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
     <livewire:footer/>  
     <livewire:floating-whats/>
</body>

</html>
