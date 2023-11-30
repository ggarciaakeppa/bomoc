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
    <div style="padding: 100px 70px 70px;
   margin: auto;
   font-size: 2.5rem;
   font-weight: 500;" class="d-flex justify-content-center">
    <h2>Nuestros servicios</h2>
</div>
<div class="container-fluid rounded-xl shadow">
    <div class="row row-cols-1 g-5 mb-2">
        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Puesta en Marcha</b></h4>
                                <div class="m-5">
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Ejecución personal por parte de un experto</h6>
                                <br>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Comprobación de la instalación</h6>
                                <br>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Ajuste de parámetros optimizados para la instalación</h6>
                                <br>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Prueba de funcionamiento</h6>
                                <br>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Documentación de la puesta en marcha en el informe de servicio</h6>
                                <br>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">La presencia de los mismos técnicos siempre para la puesta en marcha in situ.</h6>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="/imagenes/servicios/puesta_en_marcha.jpg" class="img-fluid rounded-end h-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="/imagenes/servicios/reparacion.avif" class="img-fluid rounded-start  h-90" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Reparación de Equipos</b></h4>
                           
                            <div class="m-5">
                            <p class="card-text"><b>Reparación en equipos con una gran calidad </b></p>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Verificación de la causa del error y de las condiciones del sistema</h6>
                                <br>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Presupuesto a medida por solicitud del cliente</h6>
                                <br>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Reparación en caso de daños con repuestos originales</h6>
                                <br>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Subsanación de la causa de error</h6>
                                <br>
                                <h6><img src="/imagenes/6.svg" width="24" height="24" style="margin-bottom: 1 em; ">Marcha de prueba electrico-hidráulica</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Mantenimiento</b></h4>
                            <p class="card-text"><b>Mantenimiento Correctivo a Sistemas Contra Incendios ECI</b></p>
                            <p class="card-text text-sm-start"> <b>¡Programa tu visita de diagnóstico!</b> El mantenimiento correctivo se realiza con el objetivo de
                                disminuir el riesgo de falla de tu
                                ECI durante un evento como un incendio. Además, Protección Civil, bomberos, Secretaría
                                de Trabajo o tu aseguradora verifican el estado y la funcionalidad de los ECI, por lo cual,
                                encontrándose en óptimo estado, evitarás observaciones o incluso incurrir en
                                penalizaciones al mantener tu sistema operativo. También minimizas la posibilidad de
                                afectar la operación y la seguridad del edificio y, por último, incrementas la vida útil de tu
                                sistema o unidad contra incendio.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="/imagenes/servicios/mantenimiento.jpg" class="img-fluid rounded-end h-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="/imagenes/servicios/accesorios y refacciones.jpg" class="img-fluid rounded-start h-100" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Refacciones</b></h4>
                            <p class="card-text"><b>¿Cómo encontrar las refacciones ágilmente?</b></p>
                            <p class="card-text text-sm-start">Encontrar las refacciones para la bomba que necesita no debe llevar mucho tiempo. Simplemente
                                escríbanos a través de nuestros canales de contacto para encontrar las refacciones que necesita,
                                indicándonos el modelo del equipo, serie, la marca o el número de parte de la refacción que
                                necesita. Entre más datos nos sean proporcionados, más ágil será la respuesta."</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Polizas de mantenimiento a sistemas contraincendios</b></h4>
                            <p class="card-text"><b>Esta permitirá detectar anticipadamente deficiencias en su
                                sistemas</b></p>
                            para así implementar acciones correctivas.
                            Las Pólizas de mantenimiento que bombas de occidente ofrece son soluciones de mantenimiento
                            individuales y contratos de mantenimiento completo.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="/imagenes/servicios/polizas.jpg" class="img-fluid rounded-end h-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h2 class="text-center">Acoplamientos</h2>
            <div>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="/imagenes/servicios/acoplamiento.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="/imagenes/servicios/acoplamiento1.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="/imagenes/servicios/acoplamiento2.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="/imagenes/servicios/acoplamiento3.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="/imagenes/servicios/acoplamiento4.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="/imagenes/servicios/acoplamiento5.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    
       
</body>

</html>
