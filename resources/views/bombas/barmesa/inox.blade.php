<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bomoc</title>
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
        style=" background: #3789C8 url(../imagenes/bombas/barmesa/backgroundCard.jpeg) center center no-repeat;
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


            <div>
                <div class="text-center border-top border-bottom border-2 row row-cols-5 row-cols-lg-5 g-5 g-lg-5">
                    {{-- Imagen BCS --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#bcs"><img src="{{ asset('imagenes/bombas/barmesa/inox316/BCS.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Serie BCS</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen BCSF --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#bcsf"><img src="{{ asset('imagenes/bombas/barmesa/inox316/BCSF.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Serie BCSF</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen CD --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#cd"><img src="{{ asset('imagenes/bombas/barmesa/inox316/CD.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Serie CD</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen PS --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#ps"><img src="{{ asset('imagenes/bombas/barmesa/inox316/PS.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Serie PS</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen SOX --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#sox"><img src="{{ asset('imagenes/bombas/barmesa/inox316/SOX.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Serie SOX</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>CENTRÍFUGAS EN ACERO INOX. 316</h1>
        </div>
        <div class="mb-3">
            <h1>Serie BCS | Serie BCSF</h1>
            <div class="card">
                {{-- Contenido BCS - BCSF --}}
                <div class="card-body">
                    <h5 class="card-title">APDG | TCCVE</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6" id="bcs">
                            <livewire:inox316-bcs-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6" id="bcsf">
                            <livewire:inox316-bcsf-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>CENTRÍFUGAS EN ACERO INOX. 304</h1>
        </div>
        <div class="mb-3">
            <h1>Serie CD | Serie PS</h1>
            <div class="card">
                {{-- Contenido CD - PS --}}
                <div class="card-body">
                    <h5 class="card-title">TCCVE</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6" id="cd">
                            <livewire:inox304-cd-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6" id="ps">
                            <livewire:inox304-ps-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <h1>Serie SOX</h1>
            <div class="card" id="sox">
                {{-- Contenido CD - PS --}}
                <div class="card-body">
                    <h5 class="card-title">TCCVE</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-12">
                            <livewire:inox304-sox-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
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
