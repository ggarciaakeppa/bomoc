<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
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
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
      <div style="background: url(/imagenes/bombas/jandy/portada.png) no-repeat;
         background-position: center 100%;
         background-size: cover;
         padding: 250px 70px 70px;
         margin: auto;
         font-size: 2.5rem;
         font-weight: 700;
         ">
      </div>
      <div class="container-fluid">
      {{-- Menu --}}
      <div>
         {{-- Logo --}}
         <div class="text-center">
            <figure class="figure">
               <img src="{{ asset('imagenes/bombas/jandy/logo.png') }}" width="70%"
                  class="figure-img img-fluid rounded" alt="...">
            </figure>
         </div>
         {{-- Imagenes al seleccionar --}}
         <div>
            {{-- Esto es la Fila --}}
            <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
               {{-- Imagen de Serie Victoria Plus Silent VS Velocidad Variable --}}
               <div class="col">
                  <figure class="figure">
                     <a href="#VPSV"><img
                        src="{{ asset('imagenes/bombas/jandy/Victoria Plus Silent VS.jpg') }}"
                        width="90%" class="figure-img img-fluid rounded" alt=""></a>
                     <figcaption class="figure-caption ">
                        <h6 class="h6">Victoria Plus Silent VS Velocidad Variable</h6>
                     </figcaption>
                  </figure>
               </div>
               {{-- Imagen de Serie Victoria Plus Silent --}}
               <div class="col">
                  <figure class="figure">
                     <a href="#SVPS"><img src="{{ asset('imagenes/bombas/jandy/ProductPage.jpg') }}"
                        width="90%" class="figure-img img-fluid rounded" alt=""></a>
                     <figcaption class="figure-caption ">
                        <h6 class="h6">Victoria Plus Silent</h6>
                     </figcaption>
                  </figure>
               </div>
               {{-- Imagen de Bomba Serie Centrífuga Maxim  --}}
               <div class="col">
                  <figure class="figure">
                     <a href="#SCM"><img src="{{ asset('imagenes/bombas/jandy/Bomba MAXIM.jpg') }}"
                        width="90%" class="figure-img img-fluid rounded" alt=""></a>
                     <figcaption class="figure-caption ">
                        <h6 class="h6">Centrífuga Maxim</h6>
                     </figcaption>
                  </figure>
               </div>
               {{-- Imagen de Bomba Serie de Velocidad Simple FloPro de Jandy  --}}
               <div class="col">
                  <figure class="figure">
                     <a href="#SVSF"><img src="{{ asset('imagenes/bombas/jandy/flopro.jpg') }}" width="90%"
                        class="figure-img img-fluid rounded" alt=""></a>
                     <figcaption class="figure-caption ">
                        <h6 class="h6">Bomba Velocidad Simple FloPro</h6>
                     </figcaption>
                  </figure>
               </div>
               {{-- Imagen de Bomba Serie de Velocidad Variable Vs FloPro 2.7HP DV2A --}}
               <div class="col">
                  <figure class="figure">
                     <a href="#SVVVF"><img src="{{ asset('imagenes/bombas/jandy/FloProTM2.jpg') }}"
                        width="90%" class="figure-img img-fluid rounded" alt=""></a>
                     <figcaption class="figure-caption ">
                        <h6 class="h6">Variable Vs FloPro 2.7HP DV2A</h6>
                     </figcaption>
                  </figure>
               </div>
               {{-- Imagen de Bomba Serie de Velocidad Variable ePump --}}
               <div class="col">
                  <figure class="figure">
                     <a href="#SVVE"><img src="{{ asset('imagenes/bombas/jandy/ePump2.jpg') }}" width="90%"
                        class="figure-img img-fluid rounded" alt=""></a>
                     <figcaption class="figure-caption ">
                        <h6 class="h6">Velocidad Variable ePump</h6>
                     </figcaption>
                  </figure>
               </div>
               {{-- Imagen de Bomba de Calor TOP + Inverter --}}
               <div class="col">
                  <figure class="figure">
                     <a href="#SCTI"><img src="{{ asset('imagenes/bombas/jandy/TOP Inverter2.jpg') }}"
                        width="90%" class="figure-img img-fluid rounded" alt=""></a>
                     <figcaption class="figure-caption ">
                        <h6 class="h6">Bomba de Calor TOP + Inverter</h6>
                     </figcaption>
                  </figure>
               </div>
               {{-- Imagen de Bomba de Calor VersaTemp --}}
               <div class="col">
                  <figure class="figure">
                     <a href="#SCV"><img src="{{ asset('imagenes/bombas/jandy/VersaTemp2.jpg') }}"
                        width="90%" class="figure-img img-fluid rounded" alt=""></a>
                     <figcaption class="figure-caption ">
                        <h6 class="h6">Bomba de Calor VersaTemp</h6>
                     </figcaption>
                  </figure>
               </div>
               {{-- Imagen de Bomba Serie Centrifuga Kivu  --}}
               <div class="col">
                  <figure class="figure">
                     <a href="#SCK"><img src="{{ asset('imagenes/bombas/jandy/Kivu.jpg') }}" width="90%"
                        class="figure-img img-fluid rounded" alt=""></a>
                     <figcaption class="figure-caption ">
                        <h6 class="h6">Centrifuga Kivu</h6>
                     </figcaption>
                  </figure>
               </div>
               {{-- Cierre de Fila --}}
            </div>
            {{-- Cierre de imagenes --}}
         </div>
         {{-- Fin de Menu --}}
        </div>
        {{-- Contenido Serie Victoria Plus Silent --}}
      <div>
         <div class="row">
            <div class="col m-2 mt-3 pb-3">
               <h4 id="VPSV" class="h4">Victoria Plus Silent VS Velocidad Variable</h4>
            </div>
         </div>
         <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
    <div class="col-md-5">
        <figure class="figure d-flex justify-content-center">
            <img src="{{ asset('imagenes/bombas/jandy/Victoria Plus Silent VS.jpg') }}" width="80%" class="figure-img img-fluid rounded" alt="">
        </figure>
        {{-- direccion de catalogo --}}
        <div class="d-flex justify-content-center">
            <a href="https://drive.google.com/file/d/16d93h83KSLpwLjIQZ4lSKdVmTqxgTOAt/view?usp=sharing" class="btn btn-primary ms-4">Victoria Plus Silent VS</a>
        </div>
    </div>
    <div class="col-md-7">
        <!-- Video -->
        <div class="d-flex justify-content-center align-items-center">
            <iframe width="80%" height="315" src="https://www.youtube.com/embed/-V9knnU4QwA?si=m8tK8lSlaBaJYmZZ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <p class="mt-3">
            La <b>bomba de piscina residencial Victoria Plus Silent de Velocidad variable </b> es una bomba como la palabra “Silenciosa”, silenciosa viene con motores de dos potencias, con variación y control automático de velocidad. Incluye una pantalla táctil para conexión en pared.
        </p>
    </div>
</div>

            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
               <div class="col-lg-5 mt-3 mb-3">
                  <h4>Aplicaciones</h4>
                  <ul>
                     <li>Filtración de agua de alberca</li>
                  </ul>
               </div>
               <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                  <h4 class="h4">Características Técnicas</h4>
                  <table class="table table-striped">
                     <thead>
                        <tr class="border-top border-danger">
                           <th scope="col" class="border-bottom border-dark">Modelo</th>
                           <th scope="col" class="border-bottom border-dark">HP</th>
                           <th scope="col" class="border-bottom border-dark">Volumen en M³</th>
                           <th scope="col" class="border-bottom border-dark">Presión Máx</th>
                           <th scope="col" class="border-bottom border-dark">Flujo</th>
                           <th scope="col" class="border-bottom border-dark">Volts</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="col">Victoria Plus Silent VS 100</td>
                           <td scope="col">1.38</td>
                           <td scope="col">0,087</td>
                           <td scope="col">10mts</td>
                           <td scope="col">16.7 M³/h</td>
                           <td scope="col">220/440</td>
                        </tr>
                        <tr>
                           <td scope="col">Victoria Plus Silent VS 200</td>
                           <td scope="col">2.9</td>
                           <td scope="col">0,087</td>
                           <td scope="col">10mts</td>
                           <td scope="col">25.5 M³/h</td>
                           <td scope="col">220/440</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         {{-- Contenido Serie Victoria Plus Silent --}}
         <div>
            <div class="row">
               <div class="col m-2 mt-3 pb-3">
                  <h4 id="SVPS" >Victoria Plus Silent de Astral Pool</p>(Bomba autoaspirante)
                  </h4>
               </div>
               <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                  <div class="col-md-6 mt-3">
                     <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/jandy/ProductPage.jpg') }}"
                        width="60%" class="figure-img img-fluid rounded" alt="">
                     </figure>
                     {{-- direccion de catalogo --}}
                     <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/16d93h83KSLpwLjIQZ4lSKdVmTqxgTOAt/view"
                           class="btn btn-primary ms-4">Victoria Plus Silent</a>
                     </div>
                  </div>
                  <div class="col-md-6 p-3 text-justify">
                     <p>
                        Las <b>bombas auto-aspirantes </b> ,se les denomina así porque tienen la capacidad de
                        aspirar el
                        agua de la piscina para llevarla al filtro y luego de impulsarla de nuevo a la piscina.
                        Esta bombas viene con motores monofásicos y trifásicos. En el cuerpo de la bomba se ha
                        integrado un prefiltro para evitar la entrada de objetos extraños que pudieran dañar las
                        partes
                        hidráulicas de la bomba. Los motores suministrados han sido protegidos con IP-55 y
                        acondicionados para soportar ambientes calurosos y niveles de humedad elevados.
                     <p>
                        Las principales características de Victoria Plus Silent son:
                     <li>Nivel de sonoridad bajo: entre 61 dB y 70 dB.</li>
                     <li>Fácil de usar: tapa de prefiltro con 2 manetas incluidas (no es necesaria llave).</li>
                     <li>Compatibilidad: 100% compatible en instalaciones equipadas con Victoria Plus.</li>
                     <li>Rodamiento delantero de tamaño superior para mejorar esfuerzos axiales.</li>
                     <li>Conjunto accesorios PVC incluidos en la bomba.</li>
                     </p>
                     </p>
                  </div>
               </div>
               <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3">
                     <h4 >Aplicaciones</h4>
                     <ul>
                        <li>Filtración en albercas.</li>
                     </ul>
                  </div>
                  <div class="col me-5">
                     <div style="overflow-x:auto;">
                        <h4 class="h4">Características Técnicas</h4>
                        <table class="table table-striped">
                           <thead>
                              <tr class="border-top border-danger">
                                 <th scope="col" class="border-bottom border-dark">Código</th>
                                 <th scope="col" class="border-bottom border-dark">Modelo</th>
                                 <th scope="col" class="border-bottom border-dark">Voltaje</th>
                                 <th scope="col" class="border-bottom border-dark">Caudal</th>
                                 <th scope="col" class="border-bottom border-dark">Altura nominal</th>
                                 <th scope="col" class="border-bottom border-dark">Altura Máx.</th>
                                 <th scope="col" class="border-bottom border-dark">Caudal máximo</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td scope="col">65557</td>
                                 <td scope="col">50M</td>
                                 <td scope="col">230 V</td>
                                 <td scope="col">7,5 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">13 m</td>
                                 <td scope="col">14,5 m3/h</td>
                              </tr>
                              <tr>
                                 <td scope="col">65560</td>
                                 <td scope="col">75M</td>
                                 <td scope="col">230 V</td>
                                 <td scope="col">11 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">15 m</td>
                                 <td scope="col">18 m3/h</td>
                              </tr>
                              <tr>
                                 <td scope="col">65562</td>
                                 <td scope="col">100M</td>
                                 <td scope="col">230 V</td>
                                 <td scope="col">16 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">17 m</td>
                                 <td scope="col">23,5 m3/h</td>
                              </tr>
                              <tr>
                                 <td scope="col">65562</td>
                                 <td scope="col">100T</td>
                                 <td scope="col">230 V </p>400 V</td>
                                 <td scope="col">16 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">17 m</td>
                                 <td scope="col">23,5 m3/h</td>
                              </tr>
                              <tr>
                                 <td scope="col">65564</td>
                                 <td scope="col">150M</td>
                                 <td scope="col">230 V</td>
                                 <td scope="col">21,5 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">18 m</td>
                                 <td scope="col">29 m3/h</td>
                              </tr>
                              <tr>
                                 <td scope="col">65565</td>
                                 <td scope="col">150T</td>
                                 <td scope="col">230 V</p>400 V</td>
                                 <td scope="col">21,5 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">18 m</td>
                                 <td scope="col">29 m3/h</td>
                              </tr>
                              <tr>
                                 <td scope="col">65566</td>
                                 <td scope="col">200M</td>
                                 <td scope="col">230 V</td>
                                 <td scope="col">26 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">18 m</td>
                                 <td scope="col">33,5 m3/h</td>
                              </tr>
                              <tr>
                                 <td scope="col">65567</td>
                                 <td scope="col">200T</td>
                                 <td scope="col">230 V </p>400 V</td>
                                 <td scope="col">26 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">18 m</td>
                                 <td scope="col">33,5 m3/h</td>
                              </tr>
                              <tr>
                                 <td scope="col">65569</td>
                                 <td scope="col">300M</td>
                                 <td scope="col">230 V</td>
                                 <td scope="col">35 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">21 m</td>
                                 <td scope="col">41 m3/h</td>
                              </tr>
                              <tr>
                                 <td scope="col">65570</td>
                                 <td scope="col">300T</td>
                                 <td scope="col">230 V </p>400 V</td>
                                 <td scope="col">35 m³/h</td>
                                 <td scope="col">10 m</td>
                                 <td scope="col">21 m</td>
                                 <td scope="col">41 m3/h</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         {{-- Contenido Bomba Serie Centrífuga Maxim --}}
         <div>
            <div class="row">
               <div class="col m-2 mt-3 pb-3">
                  <h4 id="SCM" class="h4">Centrífuga Maxim</h4>
               </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
               <div class="col-md-6 mt-3">
                  <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/jandy/Bomba MAXIM.jpg') }}"
                     width="65%" class="figure-img img-fluid rounded" alt="">
                  </figure>
                  {{-- direccion de catalogo --}}
                  <div class="d-flex justify-content-center">
                     <a href="https://asset.productmarketingcloud.com/api/assetstorage/3096_f98b9a57-bcf2-4493-8afb-7ac0a88fa657"
                        class="btn btn-primary ms-4">Centrífuga Maxim</a>
                  </div>
               </div>
               <div class="col-md-6 mt-lg-5 text-justify">
                  <p>
                     La <b>bomba Centrífuga Maxim de Astral Pool </b> esta fabricada el cuerpo y soportes en material
                     plástico, punta eje motor de
                     acero inox AISI-316 con doble aislamiento.
                     Motor protección IP-55. Cesto prefiltro de 8 litros de capacidad. Tapa prefiltro
                     transparente.
                  </p>
               </div>
            </div>
            <div class="col-12 mt-4">
               <h4 class="h4">Características Técnicas</h4>
               <div class="table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <tr class="border-top border-danger">
                           <th scope="col" class="border-bottom border-dark">Código</th>
                           <th scope="col" class="border-bottom border-dark">Potencia</th>
                           <th scope="col" class="border-bottom border-dark">Conexión</th>
                           <th scope="col" class="border-bottom border-dark">Voltaje</th>
                           <th scope="col" class="border-bottom border-dark">mca 8</th>
                           <th scope="col" class="border-bottom border-dark">mca 10</th>
                           <th scope="col" class="border-bottom border-dark">mca 12</th>
                           <th scope="col" class="border-bottom border-dark">mca 14</th>
                           <th scope="col" class="border-bottom border-dark">mca 16</th>
                           <th scope="col" class="border-bottom border-dark">mca 19,5</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>08003-0810</td>
                           <td>3,5 HP</td>
                           <td>3" unión roscada</td>
                           <td>230/400 V 3F </td>
                           <td>56 m³/h</td>
                           <td>50 m³/h</td>
                           <td>42 m³/h</td>
                           <td>34 m³/h</td>
                           <td>23 m³/h</td>
                           <td>0 m³/h</td>
                        </tr>
                        <tr>
                           <td>08004-0810</td>
                           <td>4,5 HP</td>
                           <td>3" unión roscada</td>
                           <td>230/400 V 3F </td>
                           <td>74 m³/h</td>
                           <td>66 m³/h</td>
                           <td>57 m³/h</td>
                           <td>46 m³/h</td>
                           <td>30 m³/h</td>
                           <td>0 m³/h</td>
                        </tr>
                        <tr>
                           <td>08005-0810</td>
                           <td>5,5 HP</td>
                           <td>3" unión roscada</td>
                           <td>230/400 V 3F </td>
                           <td>88 m³/h</td>
                           <td>78 m³/h</td>
                           <td>67 m³/h</td>
                           <td>53 m³/h</td>
                           <td>34 m³/h</td>
                           <td>0 m³/h</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         {{-- Contenido Bomba Serie de Velocidad Simple FloPro de Jandy --}}
         <div>
            <div class="row">
               <div class="col m-2 mt-3 pb-3">
                  <h4 id="SVSF" class="h4">Bomba Velocidad Simple FloPro</h4>
               </div>
            
                  <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                     <div class="col-md-6">
                        <figure class="figure d-flex justify-content-center">
                        <img src="{{ asset('imagenes/bombas/jandy/flopro.jpg') }}"
                           width="80%" class="figure-img img-fluid rounded" alt="">
                        </figure>
                        {{-- direccion de catalogo --}}
                        <div class="d-flex justify-content-center">
                           <a href="https://cdn.fluidrausa.com/-/media/zodiac/global/downloads/jandy/pumps/21769_sl.pdf?rev=532d575900f4441aa486044eb1fc2324"
                              class="btn btn-primary ms-4">Velocidad Simple FloPro</a>
                        </div>
                     </div>
                     <div class="col p-3">
                     <h4 >Aplicaciones</h4>
                        <p>
                        <li>Diseñadas con materiales resistentes y duraderos</li>
                        <li>Alto rendimiento</li>
                        <li>Silenciosa</li>
                        </p>
                     </div>
                  </div>
               
               
               <div class="col-md-6 mt-3">
                  <h4 class="h4">Referencia Flopro TM</h4>
                  <div class="table-responsive">
                     <table class="table table-striped">
                        <thead>
                           <tr class="border-top border-danger">
                              <th scope="col" class="border-bottom border-dark">Código</th>
                              <th scope="col" class="border-bottom border-dark">Descripción</th>
                              <th scope="col" class="border-bottom border-dark">HP</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>FHPM.75</td>
                              <td>Bomba de cabeza mediana FloPro, 230/115VAC</td>
                              <td>.75 HP</td>
                           </tr>
                           <tr>
                              <td>FHPM1.0</td>
                              <td>Bomba de cabeza mediana FloPro, 230/115VAC</td>
                              <td>1.0 HP</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
          
         <div class="col-md-6 mt-3">
            <h4 class="h4">Características Técnicas</h4>
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                     <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">FloProTM</th>
                        <th scope="col" class="border-bottom border-dark">50M</th>
                        <th scope="col" class="border-bottom border-dark">75M</th>
                        <th scope="col" class="border-bottom border-dark">75T</th>
                        <th scope="col" class="border-bottom border-dark">
                           <center>100M</center>
                        </th>
                        <th scope="col" class="border-bottom border-dark">100T</th>
                        <th scope="col" class="border-bottom border-dark">150M</th>
                        <th scope="col" class="border-bottom border-dark">150T</th>
                        <th scope="col" class="border-bottom border-dark">200M</th>
                        <th scope="col" class="border-bottom border-dark">200T</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td scope="col">Tipo de bomba</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">
                           <center>Bomba de agua auto aspirante</center>
                        </td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                     </tr>
                     <tr>
                        <td scope="col">Tipo de motor</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">
                           <center>Motor asíncrono de alto rendimiento, TEFC, aislamiento clase F</center>
                        </td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                     </tr>
                     <tr>
                        <td scope="col">Rendimiento</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">
                           <center>80% (según normativa IE3, modelos trifásicos)</center>
                        </td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         </div>
         </div>
         <div class="col-12 mt-4">
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                     <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">FloProTM</th>
                        <th scope="col" class="border-bottom border-dark">50M</th>
                        <th scope="col" class="border-bottom border-dark">75M</th>
                        <th scope="col" class="border-bottom border-dark">75T</th>
                        <th scope="col" class="border-bottom border-dark">100M</th>
                        <th scope="col" class="border-bottom border-dark">100T</th>
                        <th scope="col" class="border-bottom border-dark">150M</th>
                        <th scope="col" class="border-bottom border-dark">150T</th>
                        <th scope="col" class="border-bottom border-dark">200M</th>
                        <th scope="col" class="border-bottom border-dark">200T</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td scope="col">Potencia útil HP (P2)</td>
                        <td scope="col">0,5</td>
                        <td scope="col">0,75</td>
                        <td scope="col">0,75</td>
                        <td scope="col">1</td>
                        <td scope="col">1</td>
                        <td scope="col">1,5</td>
                        <td scope="col">1,5</td>
                        <td scope="col">2</td>
                        <td scope="col">2</td>
                     </tr>
                     <tr>
                        <td scope="col">Potencia útil kW (P2)</td>
                        <td scope="col">0,37</td>
                        <td scope="col">0,55</td>
                        <td scope="col">0,55</td>
                        <td scope="col">0,75</td>
                        <td scope="col">0,75</td>
                        <td scope="col">1</td>
                        <td scope="col">1</td>
                        <td scope="col">1,5</td>
                        <td scope="col">1,5</td>
                     </tr>
                     <tr>
                        <td scope="col">Amperaje máximo (A)</td>
                        <td scope="col">3,5</td>
                        <td scope="col">3,5</td>
                        <td scope="col">1,2</td>
                        <td scope="col">4,2</td>
                        <td scope="col">1,6</td>
                        <td scope="col">6</td>
                        <td scope="col">3,2</td>
                        <td scope="col">7,6</td>
                        <td scope="col">3,5</td>
                     </tr>
                     <tr>
                        <td scope="col">Alimentación</td>
                        <td scope="col">Monofásico</td>
                        <td scope="col">Monofásico</td>
                        <td scope="col">Trifásico</td>
                        <td scope="col">Monofásico</td>
                        <td scope="col">Trifásico</td>
                        <td scope="col">Monofásico</td>
                        <td scope="col">Trifásico</td>
                        <td scope="col">Monofásico</td>
                        <td scope="col">Trifásico</td>
                     </tr>
                     <tr>
                        <td scope="col">Caudal 10 mce</td>
                        <td scope="col">10.3 m3/h</td>
                        <td scope="col">13.2 m3/h</td>
                        <td scope="col">13.2 m3/h</td>
                        <td scope="col">15.8 m3/h</td>
                        <td scope="col">15.8 m3/h</td>
                        <td scope="col">20.8 m3/h</td>
                        <td scope="col">20.8 m3/h</td>
                        <td scope="col">27 m3/h</td>
                        <td scope="col">27 m3/h</td>
                     </tr>
                     <tr>
                        <td scope="col">Caudal máximo</td>
                        <td scope="col">16.8 m3/h</td>
                        <td scope="col">18.6 m3/h</td>
                        <td scope="col">18.6 m3/h</td>
                        <td scope="col">22.9 m3/h</td>
                        <td scope="col">22.9 m3/h</td>
                        <td scope="col">27.4 m3/h</td>
                        <td scope="col">27.4 m3/h</td>
                        <td scope="col">35.5m3/h</td>
                        <td scope="col">35.5m3/h</td>
                     </tr>
                     <tr>
                        <td scope="col">Altura manométrica máxima</td>
                        <td scope="col">17.8 m</td>
                        <td scope="col">20.7 m</td>
                        <td scope="col">20.7 m</td>
                        <td scope="col">21.5 m</td>
                        <td scope="col">21.5 m</td>
                        <td scope="col">22.3 m</td>
                        <td scope="col">22.3 m</td>
                        <td scope="col">24.5 m</td>
                        <td scope="col">24.5 m</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-12 mt-4">
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                     <tr class="border-top border-danger">
                        <th scope="col" class="border-bottom border-dark">FloProTM</th>
                        <th scope="col" class="border-bottom border-dark">50M</th>
                        <th scope="col" class="border-bottom border-dark">75M</th>
                        <th scope="col" class="border-bottom border-dark">75T</th>
                        <th scope="col" class="border-bottom border-dark">100M</th>
                        <th scope="col" class="border-bottom border-dark">100T</th>
                        <th scope="col" class="border-bottom border-dark">150M</th>
                        <th scope="col" class="border-bottom border-dark">150T</th>
                        <th scope="col" class="border-bottom border-dark">200M</th>
                        <th scope="col" class="border-bottom border-dark">200T</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td scope="col">Temperatura máxima del agua</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">35 °C</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                     </tr>
                     <tr>
                        <td scope="col">Índice de protección</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">IPX5</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         {{-- Contenido Bomba Serie de velocidad Variable Vs FloPro 2.7HP DV2A --}}
         <div>
            <div class="row">
               <div class="col m-2 mt-3 pb-3">
                  <h4 id="SVVVF" class="h4">Bomba velocidad Variable Vs FloPro 2.7HP DV2A</h4>
               </div>
               <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-md-6 ">
                     <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/jandy/FloProTM2.jpg') }}"
                        width="60%" class="figure-img img-fluid rounded" alt="">
                     </figure>
                     {{-- direccion de catalogo --}}
                     <div class="d-flex justify-content-center">
                        <a href="https://cdn.fluidrausa.com/-/media/zodiac/global/downloads/jandy/pumps/53868_sa.pdf?rev=2652f9c6f434484cb205b8bcc00299b7"
                           class="btn btn-primary ms-4">FloPro 2.7HP DV2A</a>
                     </div>
                  </div>
                  <div class="col-md-6 p-3 text-justify">
                     <p class="text-break">
                        Diseñada para ahorrar energía y espacio, la <b>bomba de velocidad variable FloPro 2.7 HP</b>
                        ahora
                        ofrece un rendimiento y una eficiencia aún mayores al tiempo que reduce notablemente el
                        ruido.
                        Con
                        una mejora del 20% en el rendimiento hidráulico respecto a la generación anterior* y
                        capacidades de
                        Voltaje
                        dual, así como dos conexiones de relé auxiliares.
                        El diseño avanzado del motor permite que la bomba VS FloPro 2.7 HP funcione a
                        velocidades
                        más
                        bajas que ahorran energía para un funcionamiento notablemente más silencioso.
                     </p>
                  </div>
               </div>
               <div class="col-md-6 mt-lg-5 text-justify">
                  <h4 class="h4">Aplicaciones</h4>
                  <ul>
                     <li>Spa grandes con características como cascadas, chorros, limpieza del piso.</li>
                     <li>Sistemas de calefacción solar.</li>
                     <li>Filtración de albercas</li>
                  </ul>
               </div>
               <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                  <h4 class="h4">Referencias VS Flopro 2.7</h4>
                  <table class="table table-striped">
                     <thead>
                        <tr class="border-top border-danger">
                           <th scope="col" class="border-bottom border-dark">Código</th>
                           <th scope="col" class="border-bottom border-dark">Descripción</th>
                           <th scope="col" class="border-bottom border-dark">HP</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="col">VSFHP270DV2A</td>
                           <td scope="col">Bomba VS FloPro de velocidad variable</td>
                           <td scope="col">2.70 HP</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         {{-- Contenido Bomba Serie de Velocidad Variable ePump --}}
         <div>
            <div class="row">
               <div class="col m-2 mt-3 pb-3">
                  <h4 id="SVVE" class="h4">Velocidad Variable ePump</h4>
               </div>
               <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                  <div class="col-md-6 mt-3">
                     <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/jandy/ePump2.jpg') }}"
                        width="55%" class="figure-img img-fluid rounded" alt=""></figure>
                     {{-- direccion de catalogo --}}
                     <div class="d-flex justify-content-center">
                        <a href="https://cdn.fluidrausa.com/-/media/zodiac/global/downloads/jandy/pumps/sl6205.pdf?rev=d8bfb3030514433abb24582f613c3744"
                           class="btn btn-primary ms-4">Velocidad Variable ePump</a>
                     </div>
                  </div>
                  <div class="col-md-6 mt-lg-5 p-3 text-justify">
                     <p>
                        La <b>bomba de Velocidad Variable ePump </b> tiene la canastilla de mayor capacidad en la
                        industria y optimiza completamente el flujo hidraulico.
                        Cuenta con un relé Auxiliar que permite el control automático de equipos adicionales
                        como un bomba de refuerzo Polaris o un clorador de sal Jandy TrueClear. Vida útil del
                        motor extra larga y funcionamiento silensioso, rango de 600 -3400RPM.
                     </p>
                  </div>
               </div>
               {{-- 
               <div class="col-md-6 mt-lg-5 text-justify">
                  <h4 class="h4">Aplicaciones</h4>
                  <ul>
                     <li>La canastilla de mayor capacidad en la industria optimiza completamente el flujo
                        hidráulico.
                     </li>
                     <li>Motor TEFC de imán permanente ECM de ahorro de energía.</li>
                     <li>Vida útil del motor extra larga y funcionamiento silencioso.</li>
                     <li>Rango 600 - 3450 RPM.</li>
                     <li>El modelo SVRS emplea un Sistema de Liberación de Vacío por Succión certificado en
                        ANSI® / ASME®
                        A112.19.17.
                     </li>
                     <li>Cuenta con un Relé Auxiliar que permite el control automático
                        de equipos adicionales como una bomba de refuerzo Polaris o un clorador de sal Jandy
                        TruClear.
                     </li>
                  </ul>
               </div>
               --}}
               <div style="overflow-x:auto;">
                  <h4 class="h4">Referencias ePump TM</h4>
                  <table class="table table-striped">
                     <thead>
                        <tr class="border-top border-danger">
                           <th scope="col" class="border-bottom border-dark">Código</th>
                           <th scope="col" class="border-bottom border-dark">Descripción</th>
                           <th scope="col" class="border-bottom border-dark">HP</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>VSSHP270AUT</td>
                           <td>Bomba de velocidad variable ePump</td>
                           <td>2.7 HP</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         {{-- Contenido Bomba de Calor TOP + Inverter --}}
         <div>
            <div class=" ">
               <div class="col m-2 mt-3 pb-3">
                  <h4 id="SCTI" class="h4">Bomba de Calor TOP + Inverter</h4>
               </div>
               <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                  <div class="col-md-6 mt-3">
                     <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/jandy/TOP Inverter2.jpg') }}"
                        width="65%" class="figure-img img-fluid rounded" alt="">
                     </figure>
                     {{-- direccion de catalogo --}}
                     <div class="d-flex justify-content-center">
                        <a href="https://asset.productmarketingcloud.com/api/assetstorage/3096_80a0b350-31ae-4e67-9b1b-2e3f9a379902"
                           class="btn btn-primary ms-4">Calor TOP + Inverter</a>
                     </div>
                  </div>
                  <div class="col-md-6 mt-lg-5 text-justify">
                     <p>
                        Las <b>Bombas de Calor Top + Inverter</b> han sido fabricadas con estrictos estándares de
                        producción para brindar calidad, confiabilidad y versatilidad. El intercambiador de
                        calor está hecho de tubo de PVC y titanio que puede soportar la exposición prolongada al
                        agua de la piscina. Además es una bomba flexible ya que puede
                        instalarse al aire libre y cuenta con Display LCD para mostrar el estado de
                        funcionamiento.
                     </p>
                  </div>
               </div>
               <div class="col-md-6 mt-lg-5 text-justify">
                  <h4 class="h4">Aplicaciones</h4>
                  <ul>
                     <li>Calentamiento y enfriamiento de piscinas.</li>
                  </ul>
               </div>
               <div class="col-12 mt-4">
                  <h4 class="h4">Modelos de TOP + Inverter</h4>
                  <div class="table-responsive">
                     <table class="table table-striped">
                        <thead>
                           <tr class="border-top border-danger">
                              <th scope="col" class="border-bottom border-dark">Modelo</th>
                              <th scope="col" class="border-bottom border-dark">Código</th>
                              <th scope="col" class="border-bottom border-dark">
                                 <center>Capacidad térmica</center>
                                 </p>
                                 <center>(TBS 27°C / BTU 24,3°C)</center>
                              </th>
                              <th scope="col" class="border-bottom border-dark">COP</th>
                              <th scope="col" class="border-bottom border-dark">Voltaje</th>
                              <th scope="col" class="border-bottom border-dark">
                                 <center>Inverter</center>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td scope="col">B. de calor TOP+5 Inverter</td>
                              <td scope="col">710001</td>
                              <td scope="col">
                                 <center>14.620 Btu/h</center>
                              </td>
                              <td scope="col">6,14</td>
                              <td scope="col">Monofásico (220/240-60HZ)
                              </td>
                              <td scope="col">
                                 <center>si</center>
                              </td>
                           </tr>
                           <tr>
                              <td scope="col">B. de calor TOP+9 Inverter</td>
                              <td scope="col">710003</td>
                              <td scope="col">
                                 <center>29.580 Btu/h</center>
                              </td>
                              <td scope="col">6,30</td>
                              <td scope="col">Monofásico (220/240-60HZ)
                              </td>
                              <td scope="col">
                                 <center>si</center>
                              </td>
                           </tr>
                           <tr>
                              <td scope="col">B. de calor TOP+14 Inverter</td>
                              <td scope="col">710005</td>
                              <td scope="col">
                                 <center>47.600 Btu/h</center>
                              </td>
                              <td scope="col">5,26</td>
                              <td scope="col">Monofásico (220/240-60HZ)
                              </td>
                              <td scope="col">
                                 <center>si</center>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div> 
         {{-- Contenido Bomba de Calor VersaTemp --}}
         <div>
            <div class="">
               <div class="col m-2 mt-3 pb-3">
                  <h4 id="SCV" class="h4"> Bomba de Calor VersaTemp</h4>
               </div>
               <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                  <div class="col-md-6 ">
                     <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/jandy/VersaTemp2.jpg') }}"
                        width="70%" class="figure-img img-fluid rounded" alt="">
                     </figure>
                     {{-- direccion de catalogo --}}
                     <div class="d-flex justify-content-center">
                        <a href="https://cdn.fluidrausa.com/-/media/zodiac/global/downloads/jandy/heating/00982_sl.pdf?rev=c7f6684863544b248ae755a94f17a6fe"
                           class="btn btn-primary ms-4">Calor VersaTemp</a>
                     </div>
                  </div>
                     <div class="col-md-6 mt-lg-5 text-justify">
                     <div class="d-flex justify-content-center align-items-center">
                        <iframe width="80%" height="315"
                              src="https://www.youtube.com/embed/5ZvlH3-G99s?si=h2k6lzpxq_hq8KMz"
                              title="YouTube video player" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              allowfullscreen></iframe>
                        </div>
                     
                     
                 
                     <p class="p-3">
                        La <b>bomba VersaTemp de Jandy</b> cuenta con tecnología
                        SoundShield que hace referencia a la operación ultrasilenciosa. Esta bomba se puede
                        controlar mediante una app en cualquier momento y en cualquier lugar, aunque también cuenta
                        con una pantalla
                        táctil incluida ó Display LCD. Cuenta con termostatos duales que permiten disfrutar de la
                        combinación
                        piscina/Spa a elección.
                     </p>
                     </div>
                  </div>
                  </div>
               </div>
               <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
               <div class="col-md-6 mt-lg-5 text-justify">
                  <h4 class="h4">Aplicaciones</h4>
                  <ul>
                     <li>Calentamiento ó enfriamiento de piscinas</li>
                  </ul>
               </div>
               <div class="col-md-6 ">
                  <h4 class="h4">Características Técnicas</h4>
                  <div class="table-responsive">
                     <table class="table table-striped">
                        <thead>
                           <tr class="border-top border-danger">
                              <th scope="col" class="border-bottom border-dark">Código</th>
                              <th scope="col" class="border-bottom border-dark">Modelo</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td scope="col">JRT2000R</td>
                              <td scope="col">Heat Chill Pump 103,000 BTU</td>
                           </tr>
                           <tr>
                              <td scope="col">JRT2500R</td>
                              <td scope="col">Heat Chill Pump 116,000 BTU</td>
                           </tr>
                           <tr>
                              <td scope="col">JRT3000R</td>
                              <td scope="col">Heat Chill Pump 130,000 BTU</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               </div>
            </div>
         </div>
         {{-- Contenido Bomba Centrifuga Kivu --}}
         <div>
            <div class="col m-2 mt-3 pb-3">
               <div class="row m-1">
                  <h4 id="SCK" class="h4">Bomba Centrifuga Kivu</h4>
               </div>
               <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                  <div class="col-md-6 mt-3">
                     <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/jandy/Kivu.jpg') }}"
                        width="70%" class="figure-img img-fluid rounded" alt="">
                     </figure>
                     {{-- direccion de catalogo --}}
                     <div class="d-flex justify-content-center">
                        <a href="https://asset.productmarketingcloud.com/api/assetstorage/3096_90e25aa6-4d27-467f-8aaa-ea23cf94d7bc"
                           class="btn btn-primary ms-4">Centrifuga Kivu</a>
                     </div>
                  </div>
                  <div class="col-md-6 p-3 text-justify">
                     <p>
                        La <b>Bomba centrífuga de plástico Kivu</b> de alta eficiencia para Piscina
                        públicas
                        que
                        trabaja
                        a
                        1500 rpm.
                     <li>3 modelos de Potencia: 7,5 HP, 10 HP y 15 HP. </li>
                     <li>Bajo nivel sonoro: hasta 66 dBA. </li>
                     <li>Eficiencia hidráulica sin prefiltro del 85% (según norma ISO 9906).
                     </li>
                     <li>Sello mecánico de alta calidad para trabajar con agua de mar. </li>
                     <li>Motores / norma IEC de alta eficiencia (IE3). </li>
                     <li>Eje motor standard (compatibilidad con cualquier fabricante de bombas).
                     </li>
                     <li>La bomba se suministra con prefiltro (en 2 embalajes bomba+prefiltro).
                     </li>
                     </p>
                  </div>
               </div>
               <div class="col-12 mt-4">
                  <h4 class="h4">Características Técnicas</h4>
                  <div class="table-responsive">
                     <table class="table table-striped">
                        <thead>
                           <tr class="border-top border-danger">
                              <th scope="col" class="border-bottom border-dark">HP</th>
                              <th scope="col" class="border-bottom border-dark">Código</th>
                              <th scope="col" class="border-bottom border-dark">Volts</th>
                              <th scope="col" class="border-bottom border-dark">Volumen Std en m³</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>7,5 HP</td>
                              <td>56633-0810</td>
                              <td>230/400 V</td>
                              <td>0,43</td>
                           </tr>
                           <tr>
                              <td>7,5 HP</td>
                              <td>56634-0810</td>
                              <td>400/690 V</td>
                              <td>0,43</td>
                           </tr>
                           <tr>
                              <td>10 HP</td>
                              <td>56635-0810</td>
                              <td>230/400 V</td>
                              <td>0,45</td>
                           </tr>
                           <tr>
                              <td>10 HP</td>
                              <td>56637-0810</td>
                              <td>400/690 V</td>
                              <td>0,45</td>
                           </tr>
                           <tr>
                              <td>15 HP</td>
                              <td>56638-0810</td>
                              <td>230/400 V</td>
                              <td>0,49</td>
                           </tr>
                           <tr>
                              <td>15 HP</td>
                              <td>56639-0810</td>
                              <td>400/690 V</td>
                              <td>0,49</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
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
   </body>
</html>