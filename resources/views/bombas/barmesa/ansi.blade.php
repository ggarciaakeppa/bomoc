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
</head>

<body>

    @include('navbar')
    <div
        style=" background: #3789C8 url(/imagenes/bombas/barmesa/backNav2.jpg) center center no-repeat;
   background-size: cover;
   padding: 150px 70px 70px;
   font-size: 2.5rem;
   font-weight: 800;">
    </div>

    <div class="container-fluid">
        <div>
            {{-- Logo --}}
            <div class="text-center">

                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/barmesa/ansi/logo.png') }}" class="figure-img img-fluid rounded"
                        alt="...">
                </figure>
            </div>


            <div>
                <div class="text-center  border-bottom border-2 row row-cols-2 row-md-cols-2 row-cols-lg-4 g-4 g-lg-4">
                    {{-- Imagen 911S --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#911s"><img src="{{ asset('imagenes/bombas/barmesa/ansi/911s.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #00599c">911 S</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen 911M --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#911m"><img src="{{ asset('imagenes/bombas/barmesa/ansi/911m.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #00599c">911 M</h3>
                            </figcaption>
                        </figure>
                    </div>
                   {{-- Imagen 911L --}}
                   <div class="col">
                    <figure class="figure">
                        <a href="#911m"><img src="{{ asset('imagenes/bombas/barmesa/ansi/911l.jpg') }}"
                                height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h3 style="color: #00599c">911 L</h3>
                        </figcaption>
                    </figure>
                </div>
                {{-- Imagen 911LX --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#911m"><img src="{{ asset('imagenes/bombas/barmesa/ansi/911lx.jpg') }}"
                                height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h3 style="color: #00599c">911 LX</h3>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Bombas Centrífugas de Proceso ANSI</h1>
        </div>
        <div class="mb-3">
            <div class="card">
                {{-- Contenido Modelo 911s --}}
                <div class="card-body">
                    <h5 class="card-title">Modelo 911S</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6 text-center">
                            
                        </div>
                        
                        <div class="col-md-6">
                            <livewire:ansi911s-table />
                        
                        </div> 
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Modelo 911m | 911l--}}
                <div class="card-body">
                    <h5 class="card-title">Modelo 911M | Modelo 911L</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:ansi911m-table />
                           
                        </div>
                        <div class="col-md-6">
                            <livewire:ansi911l-table />
                          
                        </div> 
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Modelo 911lx--}}
                <div class="card-body">
                    <h5 class="card-title">Modelo 911LX</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:ansi911lx-table />
                          
                        </div>
                        <div class="col-md-6">
                        <p>
                        Los precios NO incluyen estopero, sello mecánico, brida de sello y plan 11 de enfriamiento.
                        </p>
                        <p>
                        Las bombas básicas se suministran sin recorte de impulsor.  
                        </p>
                        <p>
                        El recorte solo aplica a las bombas.    
                        </p>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        
     <!-- Boton hacia arriba -->
     <img class='ir-arriba' javascript:void(0) title="Volver arriba"
     src="{{ asset('imagenes/icons/up2.svg') }}" style="width: 48px; height: 48px;">
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
   

            ul {
                list-style: none;
                /* Elimina los puntos de la lista */
                padding: 0;
            }
            a{
                text-decoration: none;
                color: #00599c;
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
