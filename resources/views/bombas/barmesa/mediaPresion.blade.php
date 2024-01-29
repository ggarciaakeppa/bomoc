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


            <div>
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                    {{-- Imagen Diesel --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#diesel"><img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/diesel.jpg') }}"
                                height="25%" class="figure-img img-fluid rounded" alt="diesel"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor a diesel</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen Gasolina --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#gasolina"><img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/gasolina.jpg') }}"
                               class="figure-img img-fluid rounded" alt="gasolina"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor a gasolina</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
                    {{-- Imagen Electrico --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#electrico"><img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/electrico.jpg') }}"
                                height="25%" class="figure-img img-fluid rounded" alt="electrico"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Motor eléctrico</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen Transmision Universal --}}
                    <div class="col">
                        <figure class="figure">
                        <a href="#electrico"><img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/transmisión universal.webp') }}"
                        width="75%"  class="figure-img img-fluid rounded" alt="transmiasion universal"></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: #f68221">Transmisión Universal</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Centrífugas de Mediana Presión</h1>
        </div>
        <div id="diesel" class="mb-3">
            <h1>Diesel</h1>
            <div class="card">
                {{-- Contenido Tek-Pro --}}
                <div class="card-body">
                    <h5 class="card-title">Tek-Pro | Serie CG</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-media-diesel-table />
                            <div class=" justify-content-center">
                                <h5>Serie 20CG</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-20cg.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_15-30cg.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/generalDiesel.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 20CG">
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="gasolina" class="mb-3">
            <h1>Gasolina</h1>
            <div class="card">
                {{-- Contenido Tek-Pro --}}
                <div class="card-body">
                    <h5 class="card-title">Tek-Pro | Serie CG</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-media-gasolina-tek-cg-table />
                            
                            <div class=" justify-content-center">
                                <h5>Serie 15CG</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-15cg.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_15-30cg.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>
                            <br>
                            
                            <div class=" justify-content-center">
                                <h5>Serie 30CG</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_serie-30cg.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_15-30cg.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/generalGasolina.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie 15CG">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Briggs & Stratton || Honda--}}
                <div class="card-body">
                    <h5 class="card-title">Briggs & Stratton / Honda | Serie CG</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-media-gasolina-briggs-cg-table />
                        </div>
                        <div class="col-md-6">
                            <livewire:centri-media-gasolina-honda-cg-table />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Tek-Pro / Briggs & Straton --}}
                <div class="card-body">
                    <h5 class="card-title">Tek-Pro / Briggs & Stratton | Serie NB Y M-STD</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-media-gasolina-tekpro-nm-table />
                        </div>
                        <div class="col-md-6">
                            <livewire:centri-media-gasolina-briggs-nm-table />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Honda--}}
                <div class="card-body">
                    <h5 class="card-title">Honda | Serie M-STD</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-media-gasolina-honda-nm-table />
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/generalGasolina.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie M-STD">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Kohler / Motores--}}
                <div class="card-body">
                    <h5 class="card-title">Kohler | Serie M-STD</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-media-gasolina-kohler-nm-table />
                        </div>
                        <div class="col-md-6">
                            <livewire:centri-media-gasolina-barmesa-nm-table />
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <div id="electrico" class="mb-3">
            <h1>Eléctrico</h1>
            <div class="card">
                {{-- Contenido Serie IB--}}
                <div class="card-body">
                    <h5 class="card-title">Acopladas Directamente TCCVE | Serie IB</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-media-electrico-barmesa-ib-table />
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/generalElectrico.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie IB.1">
                                <img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/generalElectrico2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie IB.2">
                                <div class=" justify-content-center">
                                    <h5>Serie IB</h5>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_ib.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                    <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                    <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_serie-ib.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                </div>     
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Serie IB--}}
                <div class="card-body">
                    <h5 class="card-title">Acopladas Directamente APG | Serie IC</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-media-electrico-barmesa-ic-table />
                            <div class=" justify-content-center">
                                <h5>Serie IC1¼</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_ic1.25.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_ic1.25.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                                <h5>Serie IC1½</h5>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf"> 
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_ficha-tecnica_ic1.50.pdf" style="text-decoration: none; color: #f68221;">Ficha Técnica</a>
                                <img src="/imagenes/icons/pdf.svg" style="width: 24px; height: 24px;" alt="pdf">
                                <a href="https://www.barmesapumps.com/MX/productos/pdfs/mx_manual_ic1.50.pdf" style="text-decoration: none; color: #f68221;">Manual</a>
                            </div>      
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/generalElectrico3.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="pdf">
                                <img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/generalElectrico4.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="pdf">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div id="universal" class="mb-3">
            <h1>Transmisión Universal</h1>
            <div class="card">
                {{-- Contenido Honda--}}
                <div class="card-body">
                    <h5 class="card-title">Honda | Serie M-STD</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:centri-media-universal-barmesa-table />
                        </div>
                        <div class="col-md-6">
                                <img src="{{ asset('imagenes/bombas/barmesa/medianaPresion/transmisión universal.webp') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded" alt="Serie M-STD">
                        </div>
                    </div>
                </div>
            </div>
        </div>           
        <!-- Boton hacia arriba -->
          <img class='ir-arriba' javascript:void(0) title="Volver arriba"
          src="{{ asset('imagenes/icons/up.svg') }}" style="width: 48px; height: 48px;" alt="flecha">
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
<livewire:floating-whats/>
</body>

</html>
