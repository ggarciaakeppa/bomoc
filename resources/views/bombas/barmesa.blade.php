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
    <meta title="barmsea">
    <meta title="Bombas y Motores de Occidente Barmesa">
    <meta name="description" content="Equipos de bombeo para la industria alimentaria, azucarera, cerámica, electrónica, farmacéutica, química, petroquímica, minera, papelera, vinícola, pinturas, etc.">
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
    style="background: #ffffff;
    padding: 70px 70px;
    font-size: 2.5rem;
    font-weight: 100;">
    </div>
    <div class="container-fluid">
        <div>
            {{-- Logo --}}
            <div class="text-center">
                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/barmesa/logo.png') }}" class="figure-img img-fluid rounded"
                        alt="logo barmesa">
                </figure>
            </div>
            {{-- Layout barmesa --}}
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3  g-4 ">
                <div class="col">
                    <div class="card" id="autocebantes" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/8M.jpg') }}"
                            alt="Autocebantes" >
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Autocebantes</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#autocebantes");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('autocebantes') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="tragasolidos" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/SH6-4TNNV98C.jpg') }}"
                            alt="Tragasolidos">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Autocebantes Tragasólidos</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#tragasolidos");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('tragasolidos') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="centrifugadasAlta" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/IA.jpg') }}"
                            alt="CentrifugadasAlta">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Centrífugas de alta presión</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#centrifugadasAlta");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('centrifugadasAlta') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="centrifugadasMedia" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/IB.jpg') }}"
                            alt="CentrifugadasMedia">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Centrífugas de mediana presión</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#centrifugadasMedia");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('centrifugadasMedia') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="centrifugadasInox" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/PS.jpg') }}"
                            alt="CentrifugadasInox">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Centrífugas en acero inox.</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#centrifugadasInox");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('centrifugadasInox') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="centrifugadasCaseras" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/NB.jpg') }}"
                            alt="CentrifugasCaseras">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Centrifugas caseras y pozo somero</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#centrifugadasCaseras");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('centrifugadasCaseras') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="centrifugadasAnsi" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/911L.jpg') }}"
                            alt="CentrifugadasAnsi">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Centrífugas de proceso ANSI</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#centrifugadasAnsi");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('centrifugadasAnsi') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="sumergiblesAchique" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/PRACTIK.jpg') }}"
                            alt="SumergiblesAchique">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Sumergibles de Achique</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#sumergiblesAchique");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('sumergiblesAchique') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="sumergiblesInox" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/KLEIN.jpg') }}"
                            alt="SumergiblesInox">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Sumergibles inox. para desagüe</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#sumergiblesInox");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('sumergiblesInox') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="sumergibleAguaSucia" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/2BS501.jpg') }}"
                            alt="SumergibleAguaSucia">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Sumergibles agua sucias</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#sumergibleAguaSucia");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('sumergibleAguaSucia') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="sumergibleAguaLimpia" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top"
                            src="{{ asset('imagenes/bombas/barmesa/inicios/BOMBAS SUMERGIBLES.jpg') }}"
                            alt="SumergibleAguaLimpia">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Sumergibles agua limpia</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#sumergibleAguaLimpia");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('sumergibleAguaLimpia') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="sumergibleMotores" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top"
                            src="{{ asset('imagenes/bombas/barmesa/inicios/MOTORES SUMERGIBLES.jpg') }}"
                            alt="SumergibleMotores">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Motores sumergibles</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#sumergibleMotores");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('sumergibleMotores') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="verticalesLinea" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/BVL.jpg') }}"
                            alt="VerticalesLinea">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Verticales en línea</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#verticalesLinea");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('verticalesLinea') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="multiHorizontales" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/MH.jpg') }}"
                            alt="MultiHorizontales">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Multietapas horizontales</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#multiHorizontales");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('multiHorizontales') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="multiVerticales" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/HMV.jpg') }}"
                            alt="MultiVerticales">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Multietapas verticales</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#multiVerticales");
                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('multiVerticales') }}";
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="card" id="bipartidas" style="max-width: 540px; cursor: pointer;">
                        <img class="card-img-top" src="{{ asset('imagenes/bombas/barmesa/inicios/BIPARTIDA.jpg') }}"
                            alt="Bipartidas">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-center">Bipartidas</h4>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Obtenemos la tarjeta por su clase "card"
                            var card = document.querySelector("#bipartidas");

                            // Agregamos un evento de clic a la tarjeta
                            card.addEventListener("click", function() {
                                // Redirigir al usuario a la ruta deseada al hacer clic en la tarjeta
                                window.location.href = "{{ route('bipartidas') }}";
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        <!-- Boton hacia arriba -->
        <img class='ir-arriba' javascript:void(0) title="Volver arriba" src="{{ asset('imagenes/icons/up.svg') }}"
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
            .card-img-top {
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
        <livewire:footer />
        <livewire:floating-whats/>

</body>

</html>
