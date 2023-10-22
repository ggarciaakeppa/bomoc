<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @livewireScripts
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    @include('navbar')
    <div
        style=" background: #3789C8 url(imagenes/bombas/barmesa/backgroundCard.jpeg) center center no-repeat;
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
                    <img src="{{ asset('imagenes/bombas/barmesa/logo.png') }}" class="figure-img img-fluid rounded"
                        alt="...">
                </figure>
            </div>
        </div>
        <div class="text-center border-top border-bottom border-2 row row-cols-3 row-cols-lg-3 g-2 g-lg-3">
            {{-- Imagen  --}}
            <div class="col">
                <figure class="figure">
                   <img src="{{ asset('imagenes/bombas/barmesa/verticales/BVL.jpg') }}"
                            height="25%" class="figure-img img-fluid rounded" alt="">
                </figure>
            </div>
            {{-- Imagen --}}
            <div class="col">
                <figure class="figure">
                    <img
                            src="{{ asset('imagenes/bombas/barmesa/verticales/BVL.jpg') }}"
                            height="25%" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption ">
                        <h3 style="color: blue">Serie BVL</h3>
                    </figcaption>
                </figure>
                </figure>
            </div>
   
            {{-- Imagen  --}}
            <div class="col">
                <figure class="figure">
                    <img
                            src="{{ asset('imagenes/bombas/barmesa/verticales/BVL.jpg') }}"
                            height="25%" class="figure-img img-fluid rounded" alt="">
                </figure>
            </div>
        </div>
        <div class="mb-3">
            <h1>Acopladas Directamente a Motor Trifásico TCCVE</h1>
            <div class="card">
                {{-- Contenido PRACTIK --}}
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    {{-- lh-base --}}
                    <div class="row">
                            <livewire:bvl-table /> 
                        
                    </div>
                </div>
            </div>
        </div>
        <a class='flotante' href='#' style="text-decoration: aliceblue"><img
                src="{{ asset('imagenes/icons/up.svg') }}">Arriba</a>
        <style>
            .flotante {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 20px;
            }
        </style>
        <script>
            window.addEventListener('scroll', function() {
                var enlaceFlotante = document.querySelector('.flotante');

                if (window.scrollY > 200) {
                    enlaceFlotante.style.display = 'block';
                } else {
                    enlaceFlotante.style.display = 'none';
                }
            });
        </script>

</body>

</html>
