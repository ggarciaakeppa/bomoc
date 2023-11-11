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
   

    <div class="d-flex justify-content-center " style="height: 50vh; overflow: hidden;">
        <video width="100%" height="100%" autoplay muted loop style="object-fit: cover;">
            <source src="{{ asset('videos/Portadabomoc.mp4') }}" type="video/mp4">
        </video>
    </div>
    
    <div class="d-flex justify-content-center border-top border-bottom">
        <h1>Bienvenido</h1>

    </div>
    <div class=" row text-align: justify ms-2">
        <div class="col-md-12">
    <p>Nos visualizamos como una empresa líder y referente en la industria de equipos contra incendios y bombeo, reconocida por su excelencia en productos y servicios. Nuestra visión es proporcionar soluciones integrales y confiables que contribuyan a la seguridad y bienestar de las comunidades a las que servimos. Queremos ser conocidas por nuestra pasión por la innovación, la calidad y la atención al cliente excepcional.
    </p>
</div>
</div>

    <div class="d-flex justify-content-center border-top border-bottom">
        <h1>Nuestras Marcas</h1>

    </div>

 
 
        <livewire:inicio-carrusel/>
        <livewire:maps/>
        <livewire:footer/>

</body>

</html>
