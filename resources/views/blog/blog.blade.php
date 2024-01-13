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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
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
    <div style="  background: url(../imagenes/blog/portada.jpg) center center no-repeat;
    background-size: cover;
    padding: 250px 70px 70px;
    margin: auto;
    font-size: 2.5rem;
    font-weight: 800;">
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <h1>Blog</h1>
            </div>
            <div class="text-center row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-lg-3 m-md-2 m-lg-2">
    <a href="{{ route('barmesa') }}" class="text-decoration-none text-dark">
        <div class="col">
            <img src="{{ asset('imagenes/blog/impulsores.png') }}" width="100%" class="img-fluid rounded" alt="...">
            <div>
                <h5 class="h5">¿Qué es un impulsor?</h5>
            </div>
            <div>
                <p>Conoce las funciones y los principales tipos de impulsores.</p>
            </div>
        </div>
    </a>

    <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
        <div class="col">
            <h1>Próximamente...</h1>
        </div>
    </a>

    <a href="#" class="text-decoration-none text-dark d-flex align-items-center">
        <div class="col">
            <h1>Próximamente...</h1>
        </div>
    </a>
</div>


        </div>
    </div>
    </div>

    </div>
    </div>

    <!-- Boton hacia arriba -->
    <img class='ir-arriba' javascript:void(0) title="Volver arriba" src="{{ asset('imagenes/icons/up2.svg') }}" style="width: 48px; height: 48px;">
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


</body>

</html>