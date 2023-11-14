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
        style=" background: #3789C8 url(/imagenes/bombas/barmesa/backgroundCard.jpeg) center center no-repeat;
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
                                <h3 style="color: #f68221">Aguas Lodosas</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen  --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#desague"><img src="{{ asset('imagenes/bombas/barmesa/desague/KTM.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Desagüe</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#drenaje"><img src="{{ asset('imagenes/bombas/barmesa/drenaje/KAG.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Drenaje</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#efluentes"><img
                                    src="{{ asset('imagenes/bombas/barmesa/efluentes/efluentes.jpg') }}" height="25%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Efluentes</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#lodos"><img src="{{ asset('imagenes/bombas/barmesa/lodos/lodos.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Lodos</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#cortadoras"><img
                                    src="{{ asset('imagenes/bombas/barmesa/cortadoras/cortadorasGeneral.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Roto-Blade<sub>&reg;</sub></h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#trituradoras"><img
                                    src="{{ asset('imagenes/bombas/barmesa/trituradoras/trituradorasGeneral.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Trituradoras</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#negras"><img
                                    src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Agua negras</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <a href="#inox"><img
                                    src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral9.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Acero Inox. 316</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Sumergibles para aguas sucias</h1>
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
                          
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/lodosa/lodosaGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                                <div class="row justify-content-center">
                                    <div class="col">
                                    <h5>Modelos: 3KMUD553 / 554</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3kmud553.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kmud.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelos: 4KMUD803 / 804</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4kmud803.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kmud.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelos: 6KMUD1203 / 1204</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_6kmud1203.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kmud.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
                                <div class="col">
                                    <h5>Modelos: 6KMUD1503 / 1504</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_6kmud1503.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kmud.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelos: 8KMUD2003 / 2004</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_8kmud2003.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kmud.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelo: 8KMUD3004</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_8kmud3004.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kmud.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
                                </div>
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
                           
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/desague/desagueGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                                <div class="row justify-content-center">
                                    <div class="col">
                                    <h5>Modelo: 2KTM201</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2ktm201.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ktm.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelos: 2KTM203 / 2KTM204</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2ktm203-204.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ktm.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelos: 2KTM303 / 2KTM304</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2ktm303-304.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ktm.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelos: 3KTM503 / 3KTM504</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3ktm503-504.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ktm.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
                                <div class="col">
                                    <h5>Modelos: 3KTM753 / 3KTM754</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3ktm753-754.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ktm.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelos: 4KTM1003 / 4KTM1004</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4ktm1003-1004.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ktm.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelo: 4KTM1504</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4ktm1503-1504.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ktm.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelo: 4KTM2004</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4ktm2004.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ktm.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
                                </div>    
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
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/drenaje/drenajeGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                                <div class="row justify-content-center">
                                    <div class="col">
                                    <h5>Modelos: 2KAG201/203/204</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2kag2.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kag.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelos: 2KAG303 / 304</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2kag3.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kag.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                    <div class="col">
                                        <h5>Modelos: 3KAG503 / 504</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3kag5.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kag.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                        <h5>Modelos: 4KAG503 / 504</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4kag5.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kag.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                </div>  
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
                            <div class=" justify-content-center">
                              <p>
                                Bombas sumergibles para efluentes, ideales para desagüe residencial, comercial e industrial, fuentes decorativas y bombeo de sedimentos de pequeños sumideros o cárcamos.
                              </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/efluentes/efluentesGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/efluentes/efluentesGeneral2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                                <div class="row justify-content-center">
                                    <div class="col">
                                    <h5>Modelo: SVEN</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-sven.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-sven.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelo: EUSR</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_eusr.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_eusr.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelo: 2AHS</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2ahs.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_2ahs.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                    <div class="col">
                                        <h5>Modelo: EH</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_eh.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_eh.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                        <h5>Modelo: BPSTEP</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_bpstep.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_bpstep.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                        </div>
                                </div>  
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
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                            <div class="col">
                                <h5>Modelo: 2BS501</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2bs501.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_2bs501.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelos: 2SE51SS - 3SE51SS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2se51ss.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_2se-3se-ss-1hp.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelos: 2SE-SS / 3SE-SS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2se-3se-ss-1hp.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_2se-3se-ss-1hp.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 3ANH-DS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3anh-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_3anh-ds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>
                            <div class="col">
                                <h5>Modelo: 3SE-SS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3se-ss-1.5-2hp.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_3se-ss-1.5-3hp.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 3SE-SS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3se-ss-3hp.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_3se-ss-1.5-3hp.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 3BWSE-DS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3bwse-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_3bwse-ds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 4SE-SS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4se-ss.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_4se-ss.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>
                            <div class="col">
                                <h5>Modelo: 4BWSE-DS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4bwse-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_4bwse-ds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 4SEH-DS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4seh-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_4seh-ds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 4BSE-HLDS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4bse-hlds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_4bse-hlds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 6SE-LDS 9-30 HP</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_6se-lds_9-30.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_6se-lds_6se-hlds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>
                            <div class="col">
                                <h5>Modelos: 6SE-LDS 18-60 HP</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_6se-lds_18-60.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_6se-lds_6se-hlds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 6SE-HLDS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_6se-hlds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_6se-lds_6se-hlds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 8SE-HLDS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_8se-hlds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_8se-hlds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelo: 8SE-HADS</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_8se-hads.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_8se-hads.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>
                            </div>    
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
                            <div class=" row d-flex justify-content-center">
                                <P>
                                    * Incluyen codo de descarga y brida
                                </P>
                                <div class="col">
                                <h5>Modelos: CUT303 / CUT304</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_cut303-304.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_blade-cut.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Modelos: CUT503 / CUT504</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_cut503-504.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_blade-cut.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
                                <div class="col">
                                    <h5>Modelos: CUT753 / CUT754</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_cut753-754.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_blade-cut.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelos: CUT1003 / CUT1004</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_cut1003-1004.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_blade-cut.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
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
                            <div class="row justify-content-center">
                                <div class="col">
                                    <h5>Serie: GRX</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-grx.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-grx.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
                                <div class="col">
                                    <h5>Serie: SGV-DS</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_sgv-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_sgv-ds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
                                <div class="col">
                                    <h5>Serie: SGV-LDS</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_sgv-lds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_sgv-lds.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>
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
            <div class="card" id="negras">
                {{-- Contenido KTM --}}
                <div class="card-body">
                    <h5 class="card-title">Serie KAT</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:negras-kat-table />
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral.jpg') }}"
                                style="horizontal-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                                <div class=" row  justify-content-center">
                                    <div class="col">
                                    <h5>Serie: 2KAT 1-2 HP</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-2kat-(1-2hp).pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kat-kato.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Serie: 2KAT 3-7.5 HP</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-2kat-(3-7.5hp).pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_blade-cut.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                    <div class="col">
                                        <h5>Serie: 3/4KAT 3-10 HP</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-3-4kat-(3-10hp).pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_blade-cut.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                        <h5>Serie: 4KAT 7.5-30 HP</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-4kato-(7.5-30hp).pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_blade-cut.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                </div>
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
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral3.jpg') }}"
                                style="horizontal-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral4.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral5.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                                <div class="row justify-content-center">
                                    <div class="col">
                                    <h5>Serie: 4KATO 7.5-30 HP</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-4kato-(7.5-30hp).pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kat-kato.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Serie: 6KATO 15-30 HP</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-6kato-(15-30hp).pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kat-kato.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Serie: 6KATO 40-50 HP</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-6kato-(40-50hp).pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kat-kato.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                    <div class="col">
                                        <h5>Serie: 8KATO 15-30 HP</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-8kato-(15-30hp).pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kat-kato.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                        <h5>Serie: 8KATO 40-100 HP</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-8kato-(40-100hp).pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-kat-kato.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                        </div>
                                </div>
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
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <h5>Serie: 4SWL-DS</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4swl-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                       
                                        <h5>Serie: 4SWM-DS</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4swm-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                      
                                        <h5>Serie: 4SWH-DS</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4swh-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                       
                                    </div>
                                    <div class="col">
                                        <h5>Serie: 6SWL-DS</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_6swl-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                       
                                        <h5>Serie: 6SWM-DS</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_6swm-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                      
                                        <h5>Serie: 6SWH-DS</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_6swh-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                       
                                    </div>
                                    <div class="col">
                                        <h5>Serie: 8SWL-DS</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_8swl-ds.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        
                                       
                                        
                                    </div>
                                </div>          
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="inox">
                {{-- Contenido KTM --}}
                <div class="card-body">
                    <h5 class="card-title">Serie BSV-DS</h5>
                    <h3>Con impulsor <i>vortex</i> en inox. 316 </h3>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:negras316-table />
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/negras/negrasGeneral9.jpg') }}"
                                style="horizontal-align: middle" class="figure-img img-fluid rounded"> 
                                <div class=" row  justify-content-center">
                                    <div class="col">
                                    <h5>Modelo: 2BSV-DS 0.5-1 HP</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2bsv-ds_0.5-1hp.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-bsv.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    <h5>Modelo: 2BSV-DS 2-3 HP</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_2bsv-ds_2-3hp.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-bsv.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                    <div class="col">
                                        <h5>Serie: 3BSV-DS 5-7 HP</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_3bsv-ds_5-7.5hp.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-bsv.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                        <h5>Serie: 4BSV-DS 10HP</h5>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;"> 
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_4bsv-ds_10hp.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                        <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;">
                                        <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-bsv.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                    </div>
                                </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Boton hacia arriba -->
        <img class='ir-arriba' javascript:void(0) title="Volver arriba"
        src="{{ asset('imagenes/icons/up.svg') }}" style="width: 48px; height: 48px;">
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
    <livewire:footer/>
</body>

</html>
