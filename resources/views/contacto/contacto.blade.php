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
    <style>
        body {
            font-family: 'Roboto';
        }
    </style>
</head>

<body>
    
    @include('navbar')
   <div style="    padding: 100px 70px 70px;
   margin: auto;
   font-size: 2.5rem;
   font-weight: 500;">
   </div>
        
      {{-- Logo --}}
      <div class=" mb-3">
        <livewire:sender-email />

      </div>

      <livewire:footer />
    
   
</body>

</html>
