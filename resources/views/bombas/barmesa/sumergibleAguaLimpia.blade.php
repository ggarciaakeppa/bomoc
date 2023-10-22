<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
                    <a href="#solar"><img src="{{ asset('imagenes/bombas/barmesa/solares/q.jpg') }}"
                            height="25%" class="figure-img img-fluid rounded" alt=""></a>
                    <figcaption class="figure-caption ">
                        <h3 style="color: blue">Solares</h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <a href="#sp"><img src="{{ asset('imagenes/bombas/barmesa/pozoProfundo/SP.jpg') }}"
                            height="25%" class="figure-img img-fluid rounded" alt=""></a>
                    <figcaption class="figure-caption ">
                        <h3 style="color: blue">Series SP </h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <a href="#ss"><img src="{{ asset('imagenes/bombas/barmesa/pozoProfundo/SS.jpg') }}"
                            height="25%" class="figure-img img-fluid rounded" alt=""></a>
                    <figcaption class="figure-caption ">
                        <h3 style="color: blue">Series SS </h3>
                    </figcaption>
                </figure>
            </div>
        </div>    
        <div class="mb-3">
            <h1>Sumergibles para pozo profundo</h1>
            <div class="card" id="solar">
                {{-- Contenido  --}}
                <div class="card-body">
                    <h5 class="card-title">Serie Solar Q</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:sumergibles-solares-table /> 
                            <P>
                                Diseñada para suministrar agua limpia de pozos y norias en zonas rurales donde no cuenten con suministro de energía eléctrica, ya que emplea la energía solar fotovoltaica para su funcionamiento
                            </P>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/solares/q.jpg') }}"
                            style="vertical-align: middle" class="figure-img img-fluid rounded">
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="sp">
                {{-- Contenido  --}}
                <div class="card-body">
                    <h5 class="card-title">Series SP 8" y SP 10" </h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:pozo-sp-table /> 
                            <p>* Cuentan con válvula check</p>
                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                            <img src="{{ asset('imagenes/bombas/barmesa/pozoProfundo/SP.jpg') }}"
                            style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/pozoProfundo/SP2.jpg') }}"
                            style="vertical-align: middle" class="figure-img img-fluid rounded">
                      
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="ss">
                {{-- Contenido  --}}
                <div class="card-body">
                    <h5 class="card-title">Serie SS</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:pozo-ss-table /> 
                            <p>* Cuentan con válvula check</p>
                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                            <img src="{{ asset('imagenes/bombas/barmesa/pozoProfundo/SS.jpg') }}"
                            style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/pozoProfundo/SS2.jpg') }}"
                            style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
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
