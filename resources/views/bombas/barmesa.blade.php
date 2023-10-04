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
        style="   background: #3789C8 url(../imagenes/inicio/wasteTreatment.jpg) center center no-repeat;
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
                    <img src="{{ asset('imagenes/bombas/barmesa/logo.png') }}" class="figure-img img-fluid rounded"
                        alt="...">
                </figure>
            </div>
            {{-- Layout barmesa --}}
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary btn-lg mb-3" href="{{ route('autocebantes') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary btn-lg mb-3" href="{{ route('autocebantes') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center bg-light border-dark" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary btn-lg mb-3" href="{{ route('autocebantes') }}">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS DE MEDIANA PRESIÓN</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS EN ACERO INOX. 316</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS CASERAS</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS DE POZO SOMERO</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>CENTRÍFUGAS DE PROCESO ANSI</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>SUMERGIBLES PARA AGUAS NEGRAS</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>SUMERGIBLES PARA POZO PROFUNDO</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center" style="max-width: 540px;">
                        <img src="{{ asset('imagenes/bombas/barmesa/backgroundCard.jpeg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5>AUTOCEBANTES</h5>
                            <a class="btn btn-primary lift mb-3" href="/">Entrar</a>
                        </div>
                    </div>
                </div>
                
            </div>   
        </div>
</body>
</html>
