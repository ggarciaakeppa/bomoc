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
        style="
    background: #3789C8 url(../imagenes/inicio/wasteTreatment.jpg) center center no-repeat;
    background-size: cover;
    padding: 150px 70px 70px;
    margin: auto;
    font-size: 2.5rem;
    font-weight: 800;">
    </div>
    <div>
        <h1 class="h1">
            Nuestra Empresa
        </h1>
    </div>
    <p>
        Bombas y Motores de Occidente (BOMOC) somos una empresa 100% mexicana,
        fabricantes de tableros de control para contraincendios, hidroneumáticos,
        cárcamos, etc., dedicada al asesoramiento, suministro e instalación de equipos de bombeo.
    </p>
    <p>
        Contamos con las distribuciones de las mejores marcas de equipos de bombeo,
        bombas sanitarias, de procesos, motores, reductores, variadores de velocidad y
        una amplia variedad de equipos especializados. Brindamos soluciones y servicios,
        al sector agrícola, hotelería, industria alimentaria, plantas de tratamiento, industrias
        en general, etc. En BOMOC estamos enfocados en la confiabilidad y durabilidad de nuestros
        productos y refacciones por las marcas de calidad que manejamos.
    </p>
    <p>Distribuimos equipos de procesos o bombas ANSI con características a composición química
        de los materiales y especificaciones de seguridad, que cubren las necesidades de la industria
        de proceso químico. Estas bombas suelen usarse para las industrias como son: Automotriz, Alimenticia,
        Textil, Petroquímica, Farmacéutica, Química, Pulpa y papel, Industria en general.
    </p>
    <div>
        <h1 class="h1">BOMBAS INDUSTRIALES Y REFACCIONES DE ALTA PRECISIÓN.</h1>


    </div>

    <div>
        <h1>NUESTRAS MARCAS</h1>

    </div>

    <img src="{{ asset('imagenes/inicio/ehsr.jpg') }}" alt="" width=200px height=200px alt="">
    </div>
    <div>
        <h5 class="h5">Testimonios de nuestros clientes.</h5>
    </div>
    <div class="border"></div>
    <p class="lead">Opiniones que nuestros clientes han escrito en nuestra página Bombas de Occidente en Google maps.
    </p>
    </div>
    {{-- Imagen como carrusel --}}
    <div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <livewire:inicio-carrusel/>
        <livewire:maps/>
        <livewire:footer/>

</body>

</html>
