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
   <div style=" background: #3789C8 url(../imagenes/bombas/altamira/portada.jpg) center center no-repeat;
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
                <img src="{{ asset('imagenes/bombas/barmesa/logo.png') }}"
                    class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>

        {{-- Imagenes al seleccionar --}}
        <div>
             <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
{{-- Imagen de Series Tx --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#tx"><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/diesel.jpg') }}" 
                                height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h3 style="color: blue">Motor a diesel</h3>
                        </figcaption>
                    </figure>
                </div>
{{-- Imagen de Series KOR --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#tx"><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/gasolina.jpg') }}" 
                            height="25%" class="figure-img img-fluid rounded" alt=""></a>
                    <figcaption class="figure-caption ">
                        <h3 style="color: blue">Motor a gasolina</h3>
                    </figcaption>
                </figure>
                    </figure>
                </div>
{{-- Imagen de Series Flux --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#tx"><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/electrico.jpg') }}" 
                            height="25%" class="figure-img img-fluid rounded" alt=""></a>
                    <figcaption class="figure-caption ">
                        <h3 style="color: blue">Motor electrico</h3>
                    </figcaption>
                    </figure>
                </div>

                <div class="col">
                    <figure class="figure">
                        <a href="#tx"><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/transmision.jpg') }}" 
                            height="25%" class="figure-img img-fluid rounded" alt=""></a>
                    <figcaption class="figure-caption ">
                        <h3 style="color: blue">Transmisión Universal</h3>
                    </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    {{-- Contenido Series TX --}}
    <div >
        <div class="row row-cols-2 ">
            <h4 id="tx" class="h4">John Deere</h4>
        </div>
        <div class="row">
            <div class="col md-6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th scope="col">Modelo</th>
                          <th scope="col">HP</th>
                          <th scope="col">TAMAÑO SUC Y DESC</th>
                          <th scope="col">RPM</th>
                          <th scope="col">Notas</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>90MD-4045DF</td>
                          <td>80</td>
                          <td>6" x 6"</td>
                          <td>2500</td>
                          <td><button type="button" class="btn btn-success" data-bs-target="#exampleModal" data-bs-toggle="modal">Ver</button></td>
                        </tr>
                        <tr>
                          <td>125MD-4045DF</td>
                          <td>80</td>
                          <td>8" x 8"</td>
                          <td>2500</td>
                          <td><button type="button" class="btn btn-success" data-bs-target="#exampleModal" data-bs-toggle="modal">Ver</button></td>
                        </tr>
                        <tr>
                            <td>125MD-4045TF</td>
                            <td>115</td>
                            <td>8" x 8"</td>
                            <td>2500</td>
                            <td><button type="button" class="btn btn-success" data-bs-target="#exampleModal" data-bs-toggle="modal">Ver</button></td>
                          </tr>
                          <tr>
                            <td>200MD-4045TF</td>
                            <td>115</td>
                            <td>10" x 10"</td>
                            <td>2100</td>
                            <td><button type="button" class="btn btn-success" data-bs-target="#exampleModal" data-bs-toggle="modal">Ver</button></td>
                          </tr>
                          <tr>
                            <td>200MD-6068TF</td>
                            <td>170</td>
                            <td>10" x 10"</td>
                            <td>2100</td>
                            <td><button type="button" class="btn btn-success" data-bs-target="#exampleModal" data-bs-toggle="modal">Ver</button></td>
                          </tr>
                      </tbody>
                  </table>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Notas</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Tanque de combustible opcional de 120 litros  
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            {{-- lh-base --}}
            <div class="col md-6 ">
                <figure class="figure">
                    <a href="#tx"><img src="{{ asset('imagenes/bombas/barmesa/autocebantes/generalDiesel.jpg') }}" 
                      style="vertical-align: middle" class="figure-img img-fluid rounded" alt=""></a>
              
                </figure>
            </div>
        </div>
    </div>
</div>    
</body>

</html>
