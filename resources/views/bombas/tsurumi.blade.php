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
    <meta name="description" content="Equipos de bombeo para la industria alimentaria, azucarera, cerámica, electrónica, farmacéutica, química, petroquímica, minera, papelera, vinícola, pinturas, etc.">
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
   <div style=" background: url(../imagenes/bombas/tsurumi/Mineria.jpg) center center no-repeat;
    background-position: center 20%;
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
                    <img src="{{ asset('imagenes/bombas/tsurumi/logo.png') }}" width="60%"
                        class="figure-img img-fluid rounded" alt="...">
                </figure>
            </div>

            {{-- Imagenes al seleccionar --}}
            <div>
                {{-- Esto es la Fila --}}
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                    {{-- Imagen de Bomba sumergible Serie HS --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#HS"><img src="{{ asset('imagenes/bombas/tsurumi/HS-Series.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie HS</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Serie LB --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#LB"><img src="{{ asset('imagenes/bombas/tsurumi/LB-Series.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie LB</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Serie NK --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#NK"><img src="{{ asset('imagenes/bombas/tsurumi/NK-Series2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie NK</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Serie GPN --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#GPN"><img src="{{ asset('imagenes/bombas/tsurumi/GPN-Series2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie GPN</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Serie GSD --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#GSD"><img src="{{ asset('imagenes/bombas/tsurumi/GSD.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie GSD</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Series GSZ --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#GSZ"><img src="{{ asset('imagenes/bombas/tsurumi/GSZ-Series.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie GSZ</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Series KRS --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#KRS"><img src="{{ asset('imagenes/bombas/tsurumi/KRS-Series-2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie KRS</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Series KTD --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#KTD"><img src="{{ asset('imagenes/bombas/tsurumi/KTD-Series2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie KTD</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Series KTZ --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#KTZ"><img src="{{ asset('imagenes/bombas/tsurumi/KTZ-Series2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie KTZ</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Series KTV --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#KTV"><img src="{{ asset('imagenes/bombas/tsurumi/KTV-Series2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie KTV</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Series SQ --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#SQ"><img src="{{ asset('imagenes/bombas/tsurumi/SQ-Series.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie SQ</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Series SFQ --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#SFQ"><img src="{{ asset('imagenes/bombas/tsurumi/SFQ-Series.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie SFQ</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Series LH --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#LH"><img src="{{ asset('imagenes/bombas/tsurumi/LH-Series2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie LH</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Bomba sumergible Series LHW --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#LHW"><img src="{{ asset('imagenes/bombas/tsurumi/LHW-Series2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Bomba Serie LHW</h6>
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
        {{-- Bomba sumergible Serie HS --}}
        <div>
            <div class=" m-2 p-2">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="HS" class="h4">Bomba sumergible Serie HS </h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 mt-3">
                        <figure class="d-flex justify-content-center"><img
                                    src="{{ asset('imagenes/bombas/tsurumi/HS-Series.jpg') }}" width="52%"
                                    class="figure-img img-fluid rounded" alt="">
                        </figure>
                        {{-- <button type="button" class="btn btn-primary ms-4">Ver Catalogo</button> --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                class="btn btn-primary">HS</a>
                        </div>
                        </div>
                        {{-- lh-base --}}
                    
                        <div class="col-md-6 text-justify">
                            <b>La bomba sumergible </b>diseñada para bombeo de agua, aguas residuales y lodos
                            ligeros.
                        </div>
                        <div class="col-md-6 mt-lg-5 text-justify">
                        <h4 class="h4">Aplicaciones</h4>
                        <ul>
                            <li>Desasolver agua sucia</li>
                            <li>Residenciales y comerciales ligeras de agus sucias</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>

        {{-- Bomba sumergible Serie LB --}}
        <div>
            <div class=" m-2 p-2">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="LB" class="h4">Bomba sumergible Serie LB </h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 mt-3">
                        <figure class="d-flex justify-content-center"><img
                                    src="{{ asset('imagenes/bombas/tsurumi/LB-Series.jpg') }}" width="52%"
                                    class="figure-img img-fluid rounded" alt="">
                        </figure>
                        <p></p>
                        {{-- <button type="button" class="btn btn-primary ">Ver Catalogo</button> --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                class="btn btn-primary">LB</a>
                        </div>
                        </div>   
                    <div class="col-md-6 mt-lg-5 text-justify">
                            <b>Bomba de achique</b> resistentes construidas para encajar en tuberías de 8" en 2/3HP, 1HP
                            y 2HP.
                        </div>
                        <div class="col-md-6 mt-lg-5 text-justify">
                        <h4 >Aplicaciones</h4>
                        <ul>
                            <li>Aguas residuales residenciales, comerciales e industriales y drenaje del sitio.</li>
                            <li>Remoción de sedimentos de pequeños sumideros o depósitos.</li>
                            <li>Tranferencia general de agua</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bomba sumergible Serie NK --}}
        <div>
            <div class=" m-2 p-2">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="NK" class="h4">Bomba sumergible Serie NK </h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 mt-3">
                        <figure class="d-flex justify-content-center">
                           <img src="{{ asset('imagenes/bombas/tsurumi/NK-Series2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt="">
                        </figure>
                        
                        {{-- <button type="button" class="btn btn-primary ms-4">Ver Catalogo</button> --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                class="btn btn-primary ">NK</a>
                        </div>
                        </div>
                        <div class="col-md-6 mt-lg-5 text-justify">
                            <p><b>La bomba sumergible ideal para bombear liquidos</b> que contienen arena, sólidos
                                y
                                desechos con un desgaste y obstrucción mínimos. Estas bombas operan a alta carga y
                                son de uso pesado.
                            </p>
                            <p>
                                Motor monofásico en 110 V o 220 V. El impulsor esta hecho de hierro lo que
                                permite que sea altamente resistente al desgaste.
                            </p>
                        </div>
                        <div class="col-md-6 mt-lg-5 text-justify">
                        <h4 class="h4">Aplicaciones</h4>
                        <ul>
                            <li>Desagüe de aguas lodosas</li>
                            <li>Ideal para uso en minas abiertas</li>
                            <li>Platas de tratamiento de agua</li>
                        </ul>
                    </div>
                        
            </div>
        </div>

        {{-- Bomba sumergible Serie GPN --}}
        <div>
            <div class=" m-2 p-2">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="GPN" >Bomba sumergible Serie GPN </h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 mt-3">
                        <figure class="d-flex justify-content-center"><img
                                    src="{{ asset('imagenes/bombas/tsurumi/GPN-Series2.jpg') }}" width="60%"
                                    class="figure-img img-fluid rounded" alt="">
                        </figure>
                        <p></p>
                        {{-- <button type="button" class="btn btn-primary ms-4">Ver Catalogo</button> --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                class="btn btn-primary ">GPN</a>
                        </div>
                        </div>
                        
                    
                   
                    <div class="col-md-6 mt-lg-5 text-justify">
                            <b>Bomba sumergible serie</b> agitador diseñada para bombeo de lodo y
                            arena con piezas de desgaste ajustables de hierro duro y descarga lateral
                            inferior de hasta 6". Hasta 30 HP con motores trifásicos de 4 polos para una
                            velocidad de punta del impulsor más lenta que prolonga la vida útil del
                            impulsor.
                        </div>
                        <div class="col-md-6 mt-lg-5 text-justify">
                        <h4 >Aplicaciones</h4>
                        <ul>
                            <li>Para bombear Lodo, varios tipos de lechada, líquido que contiene
                                lodo arenoso.</li>
                            <li>Remoción de lodo del depósito de sedimentación de grava.</li>
                            <li>Extracción de arena fina de trabajos de grava.</li>
                            <li>Bombeo de agua abrasiva y con cenizas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bomba sumergible Serie GSD --}}
        <div>
            <div class=" m-2 p-2">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="GSD" >Bomba sumergible Serie GSD</h4>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col-md-6 mt-3">
                        <figure class="d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/tsurumi/GSD.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt="">
                        </figure>
                        
                        {{-- <button type="button" class="btn btn-primary ms-4">Ver Catalogo</button> --}}
                        <div class="d-flex justify-content-center">
                            <a href="https://drive.google.com/file/d/1_wMU4VfuhwpdNWNJPl8kRyEri7NL_4cD/view?usp=drive_link"
                                class="btn btn-primary ">GSD</a>
                        </div>
                        </div>
                      
                    
                  
                    <div class="col-md-6 mt-lg-5 text-justify">
                            <b>Bomba de arenas para trabajos duros</b> un
                            impulsor y tapa de succión fabricados en acero especial han
                            incrementado la vida operativa de la bomba. El caracol está diseñado
                            con un gran paso de sólidos, a través de unas gruesas paredes
                            fabricadas en material antiabrasivo. Temperatura maxima 40º
                            centigrados.
                        </div>
                        <div class="col-md-6 mt-lg-5 text-justify">
                        <h4>Aplicaciones</h4>
                        <ul>
                            <li>Bombeo de fangos</li>
                            <li>Lodos</li>
                            <li>Líquidos cargados</li>
                            <li>Bentonita</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Bomba sumergible Serie GSZ --}}
            <div>
                <div class=" m-2 p-2">
                    <div class="col m-2 mt-3 pb-3">
                        <h4 id="GSZ">Bomba sumergible Serie GSZ
                        </h4>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                        <div class="col-md-6 mt-3">
                            <figure class="d-flex justify-content-center"><img
                                        src="{{ asset('imagenes/bombas/tsurumi/GSZ-Series.jpg') }}"
                                        width="55%" class="figure-img img-fluid rounded" alt="">
                            </figure>
                            
                            {{-- <button type="button" class="btn btn-primary">Ver Catalogo</button> --}}
                            <div class="d-flex justify-content-center">
                                <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                    class="btn btn-primary ">GSZ</a>
                            </div>
                            </div>
                            
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <b>Bomba para gran altura </b> motor de 4
                                polos que incrementa la vida operativa mayor conveniencia
                                y ligeros.
                            </div>
                            <div class="col-md-6 mt-lg-5 text-justify">
                            <h4>Aplicaciones</h4>
                            <ul>
                                <li>Aguas limpias y ligeramente cargadas</li>
                            </ul>
                        </div>
                </div>
            </div>

            {{-- Bomba sumergible Serie KRS --}}
            <div>
                <div class=" m-2 p-2">
                    <div class="col m-2 mt-3 pb-3">
                        <h4 id="KRS" >Bomba sumergible
                            Serie KRS </h4>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                        <div class="col-md-6 mt-3">
                            <figure class="d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/tsurumi/KRS-Series-2.jpg') }}"
                                    width="60%" class="figure-img img-fluid rounded" alt="">
                                </figure>
                                
                                {{-- <button type="button" class="btn btn-primary ms-4">Ver Catalogo</button> --}}
                                <div class="d-flex justify-content-center">
                                    <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                        class="btn btn-primary ">KRS</a>
                                </div>
                                </div>
                               
                        
                        
                        <div class="col-md-6 mt-lg-5 text-justify">
                                    <b>Aplicaciones de bombeo</b> de
                                    alto volumen disponibles en diseños de 3HP a 50HP.
                                </div>
                                <div class="col-md-6 mt-lg-5 text-justify">
                            <h4>Aplicaciones</h4>
                            <ul>
                                <li>Preparación/aclaración del agua de enjuague
                                    procedente del procesamiento de grava</li>
                                <li>Desaguado durante la construcción de un
                                    edificio residencial</li>
                                <li>Rápido desagüe de estacionamientos</li>
                            </ul>
                        </div>
                </div>
            </div>

            {{-- Bomba sumergible Serie KTD --}}
            <div>
                <div class=" m-2 p-2">
                    <div class="col m-2 mt-3 pb-3">
                        <h4 id="KTD" >Bomba
                            sumergible Serie
                            KTD </h4>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                        <div class="col-md-6 mt-3">
                            <figure class="d-flex justify-content-center"><img
                                        src="{{ asset('imagenes/bombas/tsurumi/KTD-Series2.jpg') }}"
                                        width="60%" class="figure-img img-fluid rounded" alt="">
                            </figure>
                            
                            <div class="d-flex justify-content-center">
                                <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                    class="btn btn-primary ">KTD</a>
                            </div>
                            </div>
                            
                            
                                <div class="col-md-6 mt-lg-5 text-justify">
                               <p> <b>La Bomba Agitadora Tsurumi Serie KTD</b>
                                es una bomba de lodo resistente fabricada en
                                hierro fundido que emplea la Serie KTZ como
                                base. Se proporciona un agitador para ayudar
                                a succionar de manera más eficiente el
                                fluido que se bombea. El diseño de flujo
                                lateral y descarga superior mantiene el
                                motor refrigerado incluso si la bomba se
                                utiliza de manera continua con el motor
                                expuesto al aire, y facilita su colocación
                                en espacios reducidos.
                                </p>
                                </div>
                                <div class="col-md-6 mt-lg-5 text-justify">
                                <h4>Aplicaciones</h4>
                                <ul>
                                    <li>Construcción de tuneles</li>
                                    <li>Transportar una amplia variedad de
                                        sustancias, incluida agua
                                        contaminada, barro, lodo, bentonita,
                                        cemento, líquidos corrosivos, etc.
                                    </li>
                                </ul>
                                </div>
                            
                    </div>
                </div>

                {{-- Bomba sumergible Serie KTZ --}}
                <div>
                    <div class=" m-2 p-2">
                        <div class="col m-2 mt-3 pb-3">
                            <h4 id="KTZ" class="h4">
                                Bomba sumergible
                                Serie KTZ </h4>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col-md-6 mt-3">
                                <figure class="d-flex justify-content-center"><img
                                            src="{{ asset('imagenes/bombas/tsurumi/KTZ-Series2.jpg') }}"
                                            width="60%" class="figure-img img-fluid rounded" alt="">
                                </figure>
                                
                                <div class="d-flex justify-content-center">
                                    <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                        class="btn btn-primary ">KTZ</a>
                                </div>
                            </div>
                            {{-- lh-base --}}
                            
                            
                            <div class="col-md-6  text-justify">
                                <b>Bombas de construcción
                                    capaces</b> de convertirse de
                                alta presión a alto volumen en
                                diseños de 2HP a 15HP calidad
                                superior para un eficaz uso tanto en
                                achique como en ingeniería civil.
                                Máxima profundidad de agua 25m.
                            </div>
                            <div class="col-md-6 text-justify">
                                <h4 >Aplicaciones</h4>
                                <ul>
                                    <li>Avance de túneles mediante
                                        métodos de perforación</li>
                                    <li>Extracción bombeada de agua
                                        subterránea y de fisuras
                                    </li>
                                    <li>Eliminación de agua de
                                        lluvia en trabajos de
                                        balastro</li>
                                    <li>Desagüe durante la
                                        construcción de un edificio
                                        residencial</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bomba sumergible Serie KTV --}}
                <div>
                    <div class=" m-2 p-2">
                        <div class="col m-2 mt-3 pb-3">
                            <h4 id="KTV" >
                                Bomba sumergible
                                Serie KTV </h4>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col-md-6 mt-3">
                                <figure class="d-flex justify-content-center"><img
                                            src="{{ asset('imagenes/bombas/tsurumi/KTV-Series2.jpg') }}"
                                            width="60%" class="figure-img img-fluid rounded" alt="">
                                </figure>
                                
                                <div class="d-flex justify-content-center">
                                    <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                        class="btn btn-primary ">KTV</a>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <b>Las bombas KTV</b> son
                                resistentes al desgaste y
                                están diseñadas para
                                aplicaciones de servicio
                                liviano a mediano. Nuestra
                                serie KTVE incorpora un
                                sensor de nivel que elimina
                                la necesidad de paneles de
                                control automático y
                                conjuntos de flotadores
                                montados externamente.
                            </div>
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <h4>
                                    Aplicaciones
                                </h4>
                                <ul>
                                    <li>Desagüe durante la
                                        construcción de un
                                        edificio residencial
                                    </li>
                                    <li>Ideal para su uso en
                                        construcciones</li>
                                    <li>Desagüe de aguas
                                        lodosas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bomba sumergible Serie SQ --}}
                <div>
                    <div class=" m-2 p-2">
                        <div class="col m-2 mt-3 pb-3">
                            <h4 id="SQ" >
                                Bomba sumergible
                                Serie SQ
                            </h4>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col-md-6 mt-3">
                                <figure class="d-flex justify-content-center"><img
                                            src="{{ asset('imagenes/bombas/tsurumi/SQ-Series.jpg') }}"
                                            width="60%" class="figure-img img-fluid rounded" alt="">
                                </figure>
                                
                                <div class="d-flex justify-content-center">
                                    <a href="https://drive.google.com/file/d/1jhJYffedSu66fOl4ZLX-shMVDBS6lVfF/view?usp=drive_link"
                                        class="btn btn-primary">SQ</a>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <b>La bomba SQ
                                    cuenta con una
                                    descarga</b>
                                superior y un diseño
                                de flujo continuo
                                con enfriamiento
                                forzado del motor
                                que permite un
                                funcionamiento
                                prolongado en
                                niveles de agua
                                bajos. Además, la
                                bomba SQ se adapta a
                                una tubería de 8
                                pulgadas. Presenta
                                un impulsor
                                semivórtice, vórtice
                                y semiabierto.
                            </div>
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <h4>
                                    Aplicaciones
                                </h4>
                                <ul>
                                    <li>inoxidable
                                        para
                                        líquidos
                                        corrosivos.
                                    </li>
                                    <li>Drenaje de
                                        aguas negras
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bomba sumergible Serie SFQ --}}
                <div>
                    <div class=" m-2 p-2">
                        <div class="col m-2 mt-3 pb-3">
                            <h4 id="SFQ" >
                                Bomba
                                sumergible
                                Serie
                                SFQ
                            </h4>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col-md-6 mt-3">
                                <figure class="d-flex justify-content-center"><img
                                            src="{{ asset('imagenes/bombas/tsurumi/SFQ-Series.jpg') }}"
                                            width="60%" class="figure-img img-fluid rounded" alt="">
                                </figure>
                               
                                <div class="d-flex justify-content-center">
                                    <a href="https://drive.google.com/file/d/1Zgzr_vDdES8lg4n_qOylE9ml92Qf1tqA/view?usp=drive_link"
                                        class="btn btn-primary ">SFQ</a>
                                </div>
                            </div>
                            {{-- lh-base --}}
                            
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <b>Las
                                    bombas
                                    de la
                                    serie
                                    SFQ</b>
                                ha sido
                                desarollada
                                exclusivamente
                                para el
                                bombeo de
                                líquidos
                                corrosivos.
                                Con todos
                                los
                                componentes
                                sumergidos
                                fabricados
                                en acero
                                inoxidable,
                                la bomba SFQ
                                está
                                altamente
                                especializada
                                por su
                                diseño y
                                componentes.
                            </div>
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <h4 >
                                    Aplicaciones
                                </h4>
                                <ul>
                                    <li>Desagüe
                                        de
                                        líquidos
                                        corrosivos
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bomba sumergible Serie LH --}}
                <div>
                    <div class=" m-2 p-2">
                        <div class="col m-2 mt-3 pb-3">
                            <h4 id="LH" >
                                Bomba
                                sumergible
                                Serie
                                LH
                            </h4>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col-md-6 mt-3">
                                <figure class="d-flex justify-content-center"><img
                                            src="{{ asset('imagenes/bombas/tsurumi/LH-Series2.jpg') }}"
                                            width="60%" class="figure-img img-fluid rounded" alt="">
                                </figure>
                                
                                <div class="d-flex justify-content-center">
                                    <a href="https://drive.google.com/file/d/15njmD1peZziyDmLfcTpuXRcirTI04jz5/view"
                                        class="btn btn-primary ">LH</a>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <b>La
                                    Serie
                                    LH
                                    de
                                    Tsurumi</b>
                                maneja
                                caudales
                                medios
                                a
                                altos
                                con
                                altas
                                presiones,
                                pero
                                su
                                diseño
                                de
                                descarga
                                superior
                                de
                                flujo
                                continuo
                                permite
                                operación
                                a
                                niveles
                                de
                                agua
                                bajos
                                durante
                                períodos
                                prolongados.
                                Con
                                un
                                impulsor
                                semipartido
                                de
                                alto
                                cromo
                                y
                                anillos
                                de
                                desgaste
                                ajustables,
                                nuestras
                                bombas
                                LH
                                ofrecen
                                una
                                mayor
                                resistencia
                                al
                                desgaste,
                                ya
                                sea
                                que
                                su
                                aplicación
                                sea
                                la
                                transferencia
                                de
                                efluentes,
                                el
                                drenaje
                                de
                                sitios
                                de
                                construcción
                                o el
                                desagüe
                                comercial/industrial.
                            </div>
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <h4 class="h4">
                                    Aplicaciones
                                </h4>
                                <ul>
                                    <li>Extracción
                                        de
                                        agua
                                        superficial
                                        desde
                                        el
                                        nivel
                                        principal
                                        de
                                        la
                                        mina
                                        a
                                        cielo
                                        abierto
                                        hacia
                                        el
                                        cuerpo
                                        receptor
                                        de
                                        agua.
                                    </li>
                                    <li>Ideal
                                        para
                                        uso
                                        en
                                        minas
                                        abiertas.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bomba sumergible Serie LHW --}}
                <div>
                    <div class=" m-2 p-2">
                        <div class="col m-2 mt-3 pb-3">
                            <h4 id="LHW" >
                                Bomba
                                sumergible
                                Serie
                                LHW
                            </h4>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col-md-6 mt-3">
                                <figure class="d-flex justify-content-center"><img
                                            src="{{ asset('imagenes/bombas/tsurumi/LHW-Series2.jpg') }}"
                                            width="60%" class="figure-img img-fluid rounded" alt="">
                                </figure>
                                <div class="d-flex justify-content-center">
                                    <a href="https://drive.google.com/file/d/1bsnZbPV_q_5FuBfkidbtNjqCzMfL7BiT/view?usp=drive_link v"
                                        class="btn btn-primary ">LHW</a>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <b>La
                                    serie
                                    de
                                    acero
                                    inoxidable
                                    LH
                                    /
                                    LHW</b>
                                es
                                una
                                bomba
                                sumergible
                                de
                                fundición
                                de
                                acero
                                inoxidable
                                de
                                cabeza
                                alta
                                resistente
                                a
                                la
                                corrosión
                                diseñada
                                para
                                manejar
                                líquidos
                                agresivos
                                y
                                corrosivos.
                                Todas
                                las
                                partes
                                húmedas
                                están
                                hechas
                                de
                                acero
                                inoxidable
                                316,
                                lo
                                que
                                le
                                permite
                                soportar
                                las
                                condiciones
                                exigentes
                                que
                                se
                                encuentran
                                en
                                las
                                aplicaciones
                                de
                                construcción
                                y
                                minería.
                                LH-14
                                presenta
                                un
                                impulsor
                                único
                                con
                                fundición
                                de
                                acero
                                inoxidable
                                316
                                /
                                LHW-14
                                cuenta
                                con
                                impulsores
                                dobles
                                con
                                fundición
                                de
                                ac.
                            </div>
                            <div class="col-md-6 mt-lg-5 text-justify">
                                <h4 class="h4">
                                    Aplicaciones
                                </h4>
                                <ul>
                                    <li>Bombeo
                                        de
                                        liquidos
                                        abrasivos
                                    </li>
                                </ul>
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

         <livewire:footer />
         <livewire:floating-whats/>
</body>

</html>
