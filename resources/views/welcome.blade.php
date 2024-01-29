<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta title="Bombas y Motores de Occidente Inicio">
    <meta name="description" content="Equipos de bombeo para la industria alimentaria, azucarera, cerámica, electrónica, farmacéutica, química, petroquímica, minera, papelera, vinícola, pinturas, etc.">
    <title>Bombas y Motores de Occidente</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/logo/cropped-logitoBO02-32x32.png') }}">
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
   

    <div class="d-flex justify-content-center " style="height: 50vh; overflow: hidden;">
        <video width="100%" height="100%" autoplay muted loop style="object-fit: cover;" alt="video inicio">
            <source src="{{ asset('videos/Portadabomoc.mp4') }}" type="video/mp4">
        </video>
    </div>
    
    <div class="d-flex justify-content-center border-top border-bottom m-3">
        <h1>Bienvenido</h1>

    </div>
    <div class=" row text-align: justify m-3">
        <div class="col-md-12">
    <p> Somos una empresa 100% mexicana, establecida en 2017 en Guadalajara, Jalisco, México, con una visión innovadora y compromiso total. 
        Contamos con experiencia sólida en el mercado nacional, destacando en la fabricación y distribución de equipos de bombeo de primera calidad.
        </p>
        <p>
        Nuestra propuesta se distingue por ofrecer marcas líderes y soluciones especializadas para diversas aplicaciones en el manejo de fluidos y gases. 
        Trabajamos en estrecha colaboración con los fabricantes, garantizando precios competitivos y un acceso directo a productos de alta calidad. 
        Nuestra filosofía se basa en el principio inquebrantable de brindar una atención al cliente excepcional y un servicio de calidad.
        </p>

    <p> Tenemos una amplia variedad en equipos de bombeo para la industria alimentaria, azucarera, cerámica, electrónica, farmacéutica, química, petroquímica, minera, papelera, vinícola, pinturas, etc.
        Solucionamos el manejo de aceites, ácidos, asfalto, barniz, chocolate, combustóleo, diesel, fructosa, glucosa, grasas, jabón, melaza, parafina, pegamento, resinas, salsas, tintas, silicón, gases, etc.
    </p>
</div>

    <div class="d-flex justify-content-center border-top">
        <h1>Nuestras Marcas</h1>

    </div>

        <livewire:inicio-carrusel/>
        <hr>
        <livewire:maps/>
        <hr>
        <livewire:footer/>
        
        <livewire:floating-whats/>
</body>

</html>
