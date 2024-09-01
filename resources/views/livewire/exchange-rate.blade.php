
    <div class="mt-2">
        <p style="font-size: 12pt">
            <img src="{{ asset('imagenes/inicio/calendar.svg') }}" style="width: 11pt; height: 11pt;" alt="día">
   <div class="mt-2">
        <p style="font-size: 12pt">
            <img src="{{ asset('imagenes/inicio/calendar.svg') }}" style="width: 11pt; height: 11pt;" alt="día">
            Fecha: <span id="fecha"></span>

            <br class="break-small-screen">
         
            <img src="{{ asset('imagenes/inicio/coin.svg') }}" style="width: 11pt; height: 11pt;" alt="coin"> 
            Valor del tipo de cambio: $<span id="tipo"></span>

            <br class="break-small-screen">
         
            <img src="{{ asset('imagenes/inicio/coin.svg') }}" style="width: 11pt; height: 11pt;" alt="coin"> 
            Tipo de cambio: $<span id="tipo"></span>
        </p>
    </div>
    <style>
        @media only screen and (min-width: 767px) {
        .break-small-screen {
            display: none; /* Oculta el salto de línea en dispositivos pequeños */
        }
        img{
            margin-left: 10px;
        }
    }
    
    </style>

{{--Modifcación 28/01/2024--}}
    <style>
        @media only screen and (min-width: 767px) {
        .break-small-screen {
            display: none; /* Oculta el salto de línea en dispositivos pequeños */
        }
        img{
            margin-left: 10px;
        }
    }
    
    </style>
<script>
    const apiTokenEndpoint = '/token';
    const banxicoEndpoint = 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF63528/datos/oportuno';
    
    // Obtener la fecha actual
    const fechaActual = new Date();
    
    // Formatear la fecha actual en formato dd/mm/yyyy
    const formattedFechaActual = `${String(fechaActual.getDate()).padStart(2, '0')}/${String(fechaActual.getMonth() + 1).padStart(2, '0')}/${fechaActual.getFullYear()}`;
    
    fetch(apiTokenEndpoint)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            const token = data.token;
            return fetch(`${banxicoEndpoint}?token=${token}`);
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Obtén el dato de la API y suma 0.2125
            let dato = parseFloat(data.bmx.series[0].datos[0].dato) + 0.2125;
    
            // Verifica si el valor es igual o menor a 17.1499 y ajusta a 17.1500 si es necesario
            if (dato <= 17.1499) {
                dato = 17.1500;
            }
    
            // Actualiza los elementos HTML con los valores obtenidos
            document.getElementById('fecha').innerText = formattedFechaActual;
            document.getElementById('tipo').innerText = dato.toFixed(4);
    
            // Puedes hacer lo que necesites con fecha y dato aquí
            console.log(`Fecha: ${formattedFechaActual}, Dato: ${dato}`);
        })
        .catch(error => {
            // Manejar el error si la solicitud falla.
            console.error('Error en la solicitud:', error);
        });
    </script>
    

