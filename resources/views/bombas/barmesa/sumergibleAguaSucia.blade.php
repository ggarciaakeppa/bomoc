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
                <div class="text-center border-top border-bottom border-2 row row-cols-3 row-cols-lg-3 g-2 g-lg-3">
                    {{-- Imagen  --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#lodosa"><img src="{{ asset('imagenes/bombas/barmesa/lodosa/KMUD.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Aguas Lodosas</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen  --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#desague"><img src="{{ asset('imagenes/bombas/barmesa/desague/KTM.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Desagüe</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#drenaje"><img src="{{ asset('imagenes/bombas/barmesa/drenaje/KAG.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Drenaje</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#efluentes"><img
                                    src="{{ asset('imagenes/bombas/barmesa/efluentes/efluentes.jpg') }}" height="25%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Efluentes</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#lodos"><img src="{{ asset('imagenes/bombas/barmesa/lodos/lodos.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Lodos</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#cortadoras"><img
                                    src="{{ asset('imagenes/bombas/barmesa/cortadoras/cortadorasGeneral.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Roto-Blade<sub>&reg;</sub></h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#trituradoras"><img
                                    src="{{ asset('imagenes/bombas/barmesa/trituradoras/trituradorasGeneral.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Trituradoras</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#negras"><img
                                    src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Agua negras</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#cortadoras"><img
                                    src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral9.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Acero Inox. 316</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <h1> Aguas Lodosas</h1>
            <div class="card" id="lodosa">
                {{-- Contenido KMUD --}}
                <div class="card-body">
                    <h5 class="card-title">Serie KMUD</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:lodosa-kmud-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/lodosa/lodosaGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <h1>Para Desagüe</h1>
            <div class="card" id="desague">
                {{-- Contenido KTM --}}
                <div class="card-body">
                    <h5 class="card-title">Serie KTM</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:desague-ktm-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/desague/desagueGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <h1>Para Drenaje</h1>
            <div class="card" id="drenaje">
                {{-- Contenido KAG --}}
                <div class="card-body">
                    <h5 class="card-title">Serie KAG</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:drenaje-kag-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/drenaje/drenajeGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <h1>Para efluentes</h1>
            <div class="card" id="efluentes">
                {{-- Contenido KAG --}}
                <div class="card-body">
                    <h5 class="card-title">Series SVEN,2AHS,BPSTEP,EH,EUSR</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:sumergibles-efluentes-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/efluentes/efluentesGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/efluentes/efluentesGeneral2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <h1>Para Lodos</h1>
            <div class="card" id="lodos">
                {{-- Contenido KAG --}}
                <div class="card-body">
                    <h5 class="card-title">Series 4SEH, 6SE, 8SE </h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:sumergibles-lodos-table />
                            <div class="d-flex justify-content-center">
                                <P>
                                    * Las bombas 6SE y 8SE cuentan con sensores de humedad y temperatura, y deberían ser
                                    conectados correctamente al panel de control para validar su garantía.
                                </P>

                            </div>
                            <div class="d-flex justify-content-start">
                                <P>
                                    ** Todas las bombas cuentan con sello
                                </P>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/lodos/lodosGeneral.jpg') }}"
                                style="vertical-align: middle;" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/lodos/lodosGeneral2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <h1>Marca Roto-Blade<sub>&reg;</sub></h1>
            <div class="card" id="cortadoras">
                {{-- Contenido KAG --}}
                <div class="card-body">
                    <h5 class="card-title">Roto-blade</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:sumergibles-cortadoras-table />
                            <div class="d-flex justify-content-center">
                                <P>
                                    * Incluyen codo de descarga y brida
                                </P>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/cortadoras/cortadorasGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/cortadoras/logo.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <h1>Trituradoras</h1>
            <div class="card" id="trituradoras">
                {{-- Contenido KTM --}}
                <div class="card-body">
                    <h5 class="card-title">Serie GRX | SGV</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:trituradoras-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/trituradoras/trituradorasGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/trituradoras/trituradorasGeneral2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <h1 id="negras">Aguas Negras</h1>
            <div class="card">
                {{-- Contenido KTM --}}
                <div class="card-body">
                    <h5 class="card-title">Serie KAT</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:negras-kat-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral.jpg') }}"
                                style="horizontal-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido KTM --}}
                <div class="card-body">
                    <h5 class="card-title">Serie KATO</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:negras-kato-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral3.jpg') }}"
                                style="horizontal-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral4.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral5.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido KTM --}}
                <div class="card-body">
                    <h5 class="card-title">Serie SW</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:negras-sw-table />
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral6.jpg') }}"
                                style="horizontal-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral7.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral8.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido KTM --}}
                <div class="card-body">
                    <h5 class="card-title">Serie BSV-DS</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:negras316-table />
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral9.jpg') }}"
                                style="horizontal-align: middle" class="figure-img img-fluid rounded"> 
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
