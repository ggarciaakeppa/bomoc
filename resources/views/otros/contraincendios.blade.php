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
   <div style="  background: #ffffff url(../imagenes/bombas/armstrong/portada.jpg) center center no-repeat;
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
              <img src="{{ asset('imagenes/bombas/armstrong/logo.png') }}"
                  class="figure-img img-fluid rounded" alt="...">
          </figure>
      </div>

        {{-- Layout armstrong --}}
        <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-5 g-2 g-lg-3 ">
            <h5>Contraincendios</h5>
            
       </div>    
  
</body>

</html>
