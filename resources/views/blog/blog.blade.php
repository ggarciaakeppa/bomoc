<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-758Q24T3P5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-758Q24T3P5');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/logo/cropped-logitoBO02-32x32.png') }}">
    <title>Bombas y Motores de Occidentes</title>

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
        style="  background: url(../imagenes/blog/portada.jpg) center center no-repeat;
    background-size: cover;
    padding: 250px 70px 70px;
    margin: auto;
    font-size: 2.5rem;
    font-weight: 800;">
    </div>

    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Blog</h1>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('imagenes/blog/impulsores.png') }}" class="card-img-top" alt="Impulsores">
                    <div class="card-body">
                        <h5 class="card-title">¿Qué es un impulsor?</h5>
                        <p class="card-text">Conoce las funciones y los principales tipos de impulsores.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('impulsores') }}" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('imagenes/blog/next.png') }}" class="card-img-top" style="width: 90%" alt="Próximamente">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Contenido emocionante está en camino. ¡Estén atentos!</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary disabled">Leer más</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('imagenes/blog/next.png') }}" class="card-img-top" style="width: 90%" alt="Próximamente">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Nuevo contenido estará disponible pronto. ¡No te lo pierdas!</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary disabled">Leer más</a>
                    </div>
                </div>
            </div>
            
            
        </div>


        </div>
    </div>
    

    <livewire:footer />

    <livewire:floating-whats />
</body>
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

.card-img-top{
    margin-left: 0;
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
</html>
