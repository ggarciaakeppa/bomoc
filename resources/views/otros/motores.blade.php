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
        style="  background: #ffffff url(../imagenes/bombas/armstrong/portada.jpg) center center no-repeat;
   background-size: cover;
   padding: 150px 70px 70px;
   margin: auto;
   font-size: 2.5rem;
   font-weight: 800;">
    </div>

    <div class="container-fluid">
        <div>
            {{-- Logo --}}
            <div class="text-center">
                <figure class="figure">
                    <img src="{{ asset('imagenes/motores/logo.jpg') }}" width="50%" ; height="10%" ;
                        class="figure-img img-fluid rounded" alt="...">
                </figure>
            </div>

            {{-- Imagenes al seleccionar --}}
            <div>
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    {{-- Imagen de W22 ARMAZÓN DE ALUMINIO --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#tx"><img src="{{ asset('imagenes/motores/w22 severe duty.jpg') }}"
                                    width="80%" height="25%" class="figure-img img-fluid rounded"
                                    alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">W22 ARMAZÓN DE ALUMINIO</h6>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen de W22 SEVERE DUTY --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#KOR"><img src="{{ asset('imagenes/motores/w22 severe duty.jpg') }}"
                                    width="80%" height="25%" class="figure-img img-fluid rounded"
                                    alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">W22 SEVERE DUTY</h6>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen de CON FRENO --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#flux"><img src="{{ asset('imagenes/motores/con freno.jpg') }}" width="100%"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">CON FRENO</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de W22 SEVERE DUTY JM --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#JM"><img src="{{ asset('imagenes/motores/w22 severe duty jm.jpg') }}"
                                    width="80%" height="25%" class="figure-img img-fluid rounded"
                                    alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">W22 SEVERE DUTY JM</h6>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen de TRIFÁSICOS W22 EFICIENCIA PREMIUM IE3 --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#IE3"><img src="{{ asset('imagenes/motores/w22 aluminio.jpg') }}" width="80%"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">TRIFÁSICOS W22 EFICIENCIA PREMIUM IE3</h6>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen de A PRUEBA DE EXPLOSIÓN --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#EXP"><img src="{{ asset('imagenes/motores/explosion.jpg') }}" width="80%"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">A PRUEBA DE EXPLOSIÓN</h6>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen de CRUSHER DUTY --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#DUTY"><img src="{{ asset('imagenes/motores/W22 severe duty.jpg') }}"
                                    width="80%" height="25%" class="figure-img img-fluid rounded"
                                    alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">CRUSHER DUTY</h6>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen de ZÓN 56 DE LÁMINA ROLADA --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#ROL"><img src="{{ asset('imagenes/motores/lamina ralada.jpg') }}"
                                    width="80%" height="25%" class="figure-img img-fluid rounded"
                                    alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">ARMAZÓN 56 DE LÁMINA ROLADA</h6>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen de ARMAZON DE LÁMINA ROLADA NEMA USO BOMBA --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#BOM"><img src="{{ asset('imagenes/MOTORES/lamina ralada.jpg') }}"
                                    width="80%" height="25%" class="figure-img img-fluid rounded"
                                    alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">ARMAZON DE LÁMINA ROLADA NEMA USO BOMBA</h6>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen de aplicaciones --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#APL"> <img src="{{ asset('imagenes/aplicaciones.svg') }}"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">APLICACIONES</h6>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        {{-- Contenido W22 ARMAZÓN DE ALUMINIO --}}

        <div class="col m-2 mt-3 pb-3">
            <h4 id="tx" class="h4">W22 ARMAZÓN DE ALUMINIO</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3 ">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/w22 severe duty.jpg') }}" width="60%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">MOTORES NEMA TRIFÁSICOS MULTIMONTAJE NEMA PREMIUM</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1zFP1jQyZVOP3WLXs6hBfMYOEPwkKRlJI/view"
                        class="btn btn-primary ms-4" target="_blank">W22 Armazón de aluminio</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                <h4 class="h4">Características</h4>
                <ul>
                    <li>Motores con patas desmontables (armazón 143/5T - 213/5T).</li>
                    <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                    <li>Montaje horizontal.</li>
                    <li>Caja de conexiones superior F3 como estándar.</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico NEMA B.</li>
                    <li>Protección IP55.</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.25.</li>
                    <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                    <li>Aplican certificaciones a partir de 1 HP.</li>
                </ul>
            </div>

        </div>
        <livewire:armazon-alumino-table />

        {{-- Contenido W22 SEVERE DUTY --}}

        <div class="col m-2 mt-3 pb-3">
            <h4 id="KOR" class="h4">W22 SEVERE DUTY</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/w22 severe duty.jpg') }}" width="65%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">MOTORES NEMA TRIFÁSICOS ARMAZÓN DE HIERRO NEMA PREMIUM</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1zFP1jQyZVOP3WLXs6hBfMYOEPwkKRlJI/view"
                        class="btn btn-primary ms-4">W22 SEVERE DUTY</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                <h4 class="h4">Características:</h4>
                <ul>
                    <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                    <li>Montaje horizontal.</li>
                    <li>Caja de conexiones F1.</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico NEMA B.</li>
                    <li>Rodamiento de bolas.</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.25 de 1HP a 100HP.</li>
                    <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                    <li>Protección IP55.</li>
                    <li>Aplican certificaciones a partir de 1HP.</li>
                </ul>
            </div>
        </div>
        <livewire:severe-duty-table1 />

        {{-- Contenido W22 SEVERE DUTY-2 --}}

        <div class="col m-2 mt-3 pb-3">
            <h4>W22 SEVERE DUTY</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/w22 severe duty.jpg') }}" width="65%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">MOTORES NEMA TRIFÁSICOS ARMAZÓN DE HIERRO NEMA PREMIUM</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1zFP1jQyZVOP3WLXs6hBfMYOEPwkKRlJI/view"
                        class="btn btn-primary ms-4">W22 SEVERE DUTY</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                <h4 class="h4">Características:</h4>
                <ul>
                    <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                    <li>Montaje horizontal.</li>
                    <li>Caja de conexiones lateral F1.</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico NEMA B.</li>
                    <li>Rodamiento de bolas (de rodillos como opcional bajo consulta).</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.25 de 1 a 100HP y de 1.15 para potencias mayores.</li>
                    <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                    <li>Protección IP55.</li>
                    <li>Aplican certificaciones a partir de 1HP.</li>
                </ul>
            </div>
        </div>
        <livewire:severe-duty-table2 />



        {{-- Contenido W22 SEVERE DUTY-3 --}}

        <div class="col m-2 mt-3 pb-3">
            <h4>W22 SEVERE DUTY</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/w22 severe duty.jpg') }}" width="65%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6>MOTORES NEMA TRIFÁSICOS ARMAZÓN DE HIERRO NEMA PREMIUM</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1zFP1jQyZVOP3WLXs6hBfMYOEPwkKRlJI/view"
                        class="btn btn-primary ms-4">W22 SEVERE DUTY</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify ">
                <h4>Características:</h4>
                <ul>
                    <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                    <li>Montaje horizontal.</li>
                    <li>Caja de conexiones lateral F1.</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico NEMA B.</li>
                    <li>Rodamiento de bolas (de rodillos como opcional bajo consulta).</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.25 de 1 a 100HP y de 1.15 para potencias mayores.</li>
                    <!-- <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                    <li>Protección IP55.</li>
                    <li>Aplican certificaciones a partir de 1HP.</li> -->
                </ul>
            </div>
        </div>

        <livewire:severe-duty-table3 />

        {{-- Contenido CON FRENO --}}
        <div class="col m-2 mt-3 pb-3">
            <h4>CON FRENO</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/con freno.jpg') }}" class="figure-img img-fluid rounded"
                        alt=""></figure>
                <figcaption class="d-flex justify-content-center">
                    <h6>MOTORES NEMA TRIFÁSICOS ARMAZÓN DE HIERRO EFICIENCIA</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/13AsAzL4d-TjCawnXybQJYXYiYXCkBjBt/view"
                        class="btn btn-primary ms-4">Ver Catalogo</a>
                </div>
            </div>
            <div class="col-md-6 mt-lg-5 text-justify ">
                <h4 class="h4">Características:</h4>
                <ul>
                    <li>Montaje horizontal.</li>
                    <li>Caja de conexiones lateral F1.</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico NEMA B.</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.25</li>
                    <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                    <li>Protección IP55.</li>
                    <li>Tensión de alimentación del freno 220-240V. Opcional 440-480V.</li>
                </ul>
            </div>
        </div>
        <livewire:freno-table1 />

        {{-- Contenido CON FRENO-2 --}}
        <div class="col m-2 mt-3 pb-3">
            <h4 id="flux" class="h4">CON FRENO</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/con freno.jpg') }}" class="figure-img img-fluid rounded"
                        alt="motor_freno_2"></figure>
                <figcaption class="d-flex justify-content-center">
                    <h6>MOTORES NEMA TRIFÁSICOS ARMAZÓN DE HIERRO EFICIENCIA</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/13AsAzL4d-TjCawnXybQJYXYiYXCkBjBt/view"
                        class="btn btn-primary ms-4">Ver Catalogo</a>
                </div>
            </div>
            <div class="col-md-6 mt-lg-5 text-justify">
                <h4 class="h4">Características:</h4>
                <ul>
                    <li>Montaje horizontal.</li>
                    <li>Caja de conexiones lateral F1.</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico NEMA B.</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.25</li>
                    <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                    <li>Protección IP55.</li>
                    <li>Tensión de alimentación del freno 220-240V. Opcional 440-480V.</li>
                </ul>
            </div>
        </div>

        <livewire:freno-table2 />

        {{-- Contenido W22 SEVERE DUTY JM --}}
        <div class="col m-2 mt-3 pb-3">
            <h4>W22 SEVERE DUTY JM</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/w22 severe duty jm.jpg') }}" width="60%"
                        alt="w22_serve_duty">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">MOTORES NEMA TRIFÁSICOS ARMAZÓN DE HIERRO NEMA PREMIUM</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1zFP1jQyZVOP3WLXs6hBfMYOEPwkKRlJI/view"
                        class="btn btn-primary ms-4">W22 SEVERE DUTY JM</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify">
                <h4 class="h4">Características:</h4>
                <ul>
                    <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                    <li>Montaje horizontal.</li>
                    <li>Caja de conexiones F1.</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico NEMA B.</li>
                    <li>Rodamiento de bolas.</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.25 de 1HP a 100HP.</li>
                    <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                    <li>Protección IP55.</li>
                    <li>Aplican certificaciones a partir de 1HP.</li>
                </ul>
            </div>
        </div>

        <livewire:severe-duty-jm-table />

        {{-- Contenido TRIFÁSICOS W22 EFICIENCIA PREMIUM IEC --}}

        <div class="col m-2 mt-3 pb-3">
            <h4 id="IE3" class="h4">TRIFÁSICOS W22 EFICIENCIA PREMIUM IEC</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/w22 aluminio.jpg') }}" width="60%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">MOTORES IEC</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1zFP1jQyZVOP3WLXs6hBfMYOEPwkKRlJI/view"
                        class="btn btn-primary ms-4">W22 EFICIENCIA PREMIUM IEC</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify">
                <h4 class="h4">Características:</h4>
                <ul>
                    <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                    <li>Montaje horizontal.</li>
                    <li>Caja de conexiones superior F3.</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico IEC N.</li>
                    <li>Rodamiento de bolas.</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.15.</li>
                    <li>Voltaje: 208-230 / 460 V @ 60 HZ.</li>
                    <li>Protección IP55.</li>
                    <li>Aplican certificaciones a partir de 1 HP.</li>
                </ul>
            </div>
        </div>
        <livewire:premiun-iec-table />

        {{-- Contenido A PRUEBA DE EXPLOSIÓN --}}
        <div class="col m-2 mt-3 pb-3">

            <h4 id="EXP" class="h4">A PRUEBA DE EXPLOSIÓN</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/explosión.jpg') }}" width="50%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">MOTORES NEMA TRIFÁSICOS ARMAZÓN DE HIERRO EFICIENCIA</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1i84UJdLM1Xgz-FtdkzD1TWX7Vc6gm0Fd/view"
                        class="btn btn-primary ms-4">CONTRA EXPLOSIÓN</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify ">
                <h4 class="h4">Características:</h4>
                <ul>
                    <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                    <li>Montaje horizontal.</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico NEMA B.</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.15.</li>
                    <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                    <li>División l Clase l Grupo C y D.</li>
                    <li>División l Clase ll Grupo F y G (143T / 586/7T).</li>
                    <li>Clase de temperatura T3C (armazón 143T a 586/7T).</li>
                    <li>Termostato desconexión 155°C</li>
                </ul>
            </div>
        </div>
        <livewire:contra-explosion-table1 />

        {{-- Contenido A PRUEBA DE EXPLOSIÓN-2 --}}

        <div class="col m-2 mt-3 pb-3">
            <h4 id="EXP" class="h4">A PRUEBA DE EXPLOSIÓN</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/explosión.jpg') }}" width="50%"
                        class="figure-img img-fluid rounded" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">MOTORES NEMA TRIFÁSICOS ARMAZÓN DE HIERRO</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1i84UJdLM1Xgz-FtdkzD1TWX7Vc6gm0Fd/view"
                        class="btn btn-primary ms-4">CONTRA EXPLOSIÓN</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify">
                <div class="col-md-6 mt-lg-5 text-justify " style="overflow-x:auto;">
                    <h4 class="h4">Características:</h4>
                    <ul>
                        <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                        <li>Montaje horizontal.</li>
                        <li>Aislamiento clase F.</li>
                        <li>Diseño eléctrico NEMA B.</li>
                        <li>Servicio continuo.</li>
                        <li>Factor de servicio 1.15.</li>
                        <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                        <li>División l Clase l Grupo C y D.</li>
                        <li>División l Clase ll Grupo F y G (143T / 586/7T).</li>
                        <li>Clase de temperatura T3C (armazón 143T a 586/7T).</li>
                        <li>Termostato desconexión 155°C</li>
                    </ul>
                </div>
            </div>
        </div>
            <livewire:contra-explosion-table2 />

        

        {{-- Contenido A PRUEBA DE EXPLOSIÓN-3 --}}

        <div class="col m-2 mt-3 pb-3">
            <h4 id="EXP" class="h4">A PRUEBA DE EXPLOSIÓN</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col-md-6 mt-3">
                <figure class="figure d-flex justify-content-center"><img
                        src="{{ asset('imagenes/motores/explosión.jpg') }}" width="50%" alt="">
                </figure>
                <figcaption class="d-flex justify-content-center">
                    <h6 class="h6">MOTORES NEMA TRIFÁSICOS ARMAZÓN DE HIERRO EFICIENCIA</h6>
                </figcaption>
                <div class="d-flex justify-content-center">
                    <a href="https://www.vde.com.mx/media/amasty/amfile/attach/KgBuHWztLWi6wL4V2QTzBDGKjMFW5ePW.pdf"
                        class="btn btn-primary ms-4">CONTRA EXPLOSIÓN</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify">
                <h4 class="h4">Características:</h4>
                <ul>
                    <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                    <li>Aislamiento clase F.</li>
                    <li>Diseño eléctrico NEMA B.</li>
                    <li>Servicio continuo.</li>
                    <li>Factor de servicio 1.15.</li>
                    <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                    <li>División l Clase l Grupo C y D.</li>
                    <li>División l Clase ll Grupo F y G (143T / 586/7T).</li>
                    <li>Clase de temperatura T3C (armazón 143T a 586/7T).</li>
                    <li>Termostato desconexión 155°C</li>
                </ul>
            </div>
        </div>
 
 <livewire:contra-explosion-table3 />

        {{-- Contenido MOTORES W22 CRUSHER DUTY --}}
        
            <div class="col m-2 mt-3 pb-3">
                <h4 id="DUTY" class="h4">CRUSHER DUTY</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/motores/w22 severe duty.jpg') }}" width="60%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">MOTORES W22 NEMA TRIFÁSICOS</h6>
                    </figcaption>
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1zFP1jQyZVOP3WLXs6hBfMYOEPwkKRlJI/view"
                            class="btn btn-primary ms-4">W22 CRUSHER DUTY</a>
                    </div>
                </div>
                {{-- lh-base --}}
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4 class="h4">Características:</h4>
                    <ul>
                        <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                        <li>Montaje horizontal.</li>
                        <li>Resistencias calefactoras monofásicas a 127 V, C.A. (aplica para armazón 586/7T y TZ).</li>
                        <li>Caja de conexiones lateral F1.</li>
                        <li>Aislamiento clase F.</li>
                        <li>Diseño eléctrico NEMA A.</li>
                        <li>Doble sello “W-Seal” (excepto en armazón 586/7T y armazones TZ).</li>
                        <li>Sello “laberinto” (en la flecha para armazón 586/7T y TZ).</li>
                        <li>Rodamiento de rodillos.</li>
                        <li>Factor de servicio 1.25 de 1 a 100HP y de 1.15 para potencias mayores.</li>
                        <li>Voltaje 208-230 / 460 V para 50 y 60 HP, para las demás potencias voltaje 460 PWS @ 60 HZ.
                        </li>
                        <li>Protección IP55.</li>
                        <li>Plan de pintura 203A</li>
                        <p>Se recomienda el uso de este motor para aplicaciones de: Cemento, máquinas trituradoras de
                            piedra,
                            bandas trasportadoras e industria minera.</p>
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <livewire:crusher-duty-table1 />
                <livewire:crusher-duty-table2 />
            </div>

        {{-- Contenido ARMAZÓN 56 DE LÁMINA ROLADA --}}
        
            <div class="col m-2 mt-3 pb-3">
                <h4 id="ROL" class="h4">ARMAZÓN 56 DE LÁMINA ROLADA</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/motores/lamina ralada.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">MOTORES NEMA TRIFÁSICOS</h6>
                    </figcaption>
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1DNkupI19zSXqNu6aZ03uWOQmxFJZsP0J/view"
                            class="btn btn-primary ms-4">LÁMINA ROLADA</a>
                    </div>
                </div>
                {{-- lh-base --}}
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4 class="h4">Características:</h4>
                    <ul>
                        <li>Totalmente cerrados con ventilación exterior (TEFC).</li>
                        <li>Montaje horizontal.</li>
                        <li>Aislamiento clase F.</li>
                        <li>Diseño eléctrico NEMA B.</li>
                        <li>Servicio continuo.</li>
                        <li>Factor de servicio 1.15.</li>
                        <li>Voltaje 208-230 / 460 V @ 60 HZ.</li>
                        <li>Protección IP55.</li>
                        <li>Eficiencia Premium a partir de 1 HP.</li>
                        <li>Aplican certificaciones a partir de 1 HP.</li>
                    </ul>
                </div>
            </div>
            <livewire:rolada-table1 /> 
       


        {{-- Contenido ARMAZÓN DE LÁMINA ROLADA USO GENERAL --}}
    
            <div class="col m-2 mt-3 pb-3">
                <h4 id="ROL" class="h4">ARMAZÓN DE LÁMINA ROLADA USO GENERAL</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/motores/lamina ralada.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">MOTORES NEMA MONOFÁSICOS ABIERTO</h6>
                    </figcaption>
                    <div class="d-flex justify-content-center">
                        <a href="https://www.vde.com.mx/media/amasty/amfile/attach/KgBuHWztLWi6wL4V2QTzBDGKjMFW5ePW.pdf"
                            class="btn btn-primary ms-4">LÁMINA ROLADA USO GENERAL</a>
                    </div>
                </div>
                {{-- lh-base --}}
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4 class="h4">Características:</h4>
                    <ul>
                        <li>Uso continuo.</li>
                        <li>Arranque con capacitor.</li>
                        <li>Rotor tipo jaula de ardilla.</li>
                        <li>Abierto sin ventilación (ODP).</li>
                        <li>Protección IP21.</li>
                        <li>Voltaje 127/ 220V @ 60 HZ.</li>
                        <li>Norma NOM-014-ENER-2004</li>
                    </ul>
                </div>
            </div>
            <livewire:rolada-table2/>
       

        {{-- Contenido ARMAZON DE LÁMINA ROLADA NEMA USO BOMBA --}}
            <div class="col m-2 mt-3 pb-3">
                <h4 id="BOM" class="h4">ARMAZON DE LÁMINA ROLADA NEMA USO BOMBA</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/motores/lamina ralada.jpg') }}" width="50%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">MOTORES NEMA MONOFÁSICOS</h6>
                    </figcaption>
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1DNkupI19zSXqNu6aZ03uWOQmxFJZsP0J/view"
                            class="btn btn-primary ms-4">LÁMINA ROLADA NEMA USO BOMBA</a>
                    </div>
                </div>
                {{-- lh-base --}}
                <div class="col-md-6 mt-lg-5 text-justify">
                    <h4>Características:</h4>
                    <ul>
                        <li>Uso continuo.</li>
                        <li>Rotor tipo jaula de ardilla</li>
                        <li>Abierto sin ventilación (ODP).</li>
                        <li>Protección IP21.</li>
                        <li>Voltaje 127 V (0.25, 0.5, 0.75 Y 1 HP)</li>
                        <li>Voltaje 127 / 220 V (1.5 HP).</li>
                        <li>Norma NOM-014-ENER-2004</li>
                    </ul>
                </div>
            </div>
    
            <livewire:rolada-table3/>

        {{-- Contenido APLICACIONES --}}
        <div class=" m-2 p-2">
            <div class="row m-1">
                <h4 id="APL" class="h4">APLICACIONES</h4>
            </div>
            <div class="row m-5">
                <div class="col">
                    <figure class="figure"> <img src="{{ asset('imagenes/aplicaciones.svg') }}" width="50%"
                            height="50%" class="figure-img img-fluid rounded" alt=""></figure>
                </div>
                {{-- lh-base --}}
                <div class="col me-5 pe-5">
                    <h4 class="h4">CONTENIDOS:</h4>
                    <ul>
                        <li><a href="https://drive.google.com/file/d/1B6mJYNBo3yrNfMpdjfgilDJmGB-oumG7/view?usp=sharing"
                                target="_blank" style="text-decoration: none;">Soluciones
                                para la minería</a></li>
                        <li><a href="https://drive.google.com/file/d/1qpSwKK2ZMnFRJcnVNn5NWUUChqJqkGIj/view?usp=sharing"
                                target="_blank" style="text-decoration: none;">Soluciones
                                para celulosa y papel</a></li>
                        <li><a href="https://drive.google.com/file/d/1bagBGTKcICNj4bG6oklZmhxGItIz21H_/view?usp=sharing"
                                target="_blank" style="text-decoration: none;">Soluciones
                                en la industria naval</a></li>
                        <li><a href="https://drive.google.com/file/d/1a1fpZ9_0HGMHng-7Rj-ILjAZBPRxsPE0/view?usp=sharing"
                                target="_blank" style="text-decoration: none;">Soluciones
                                para petróleo y gas</a></li>
                        <li><a href="https://drive.google.com/file/d/1vjadjcDiI_vD1PiUNzgQ5cQJ080glbkn/view?usp=drive_link"
                                target="_blank" style="text-decoration: none;">Soluciones
                                para azúcar y Alcohol</a></li>
                        <li><a href="https://drive.google.com/drive/folders/1mQ3_-0ey9yRtwfqe5mcZZOk5OkjDhaYx?usp=sharing"
                                target="_blank" style="text-decoration: none;">Extras</a></li>
                    </ul>
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
    <livewire:floating-whats/>
</body>

</html>
