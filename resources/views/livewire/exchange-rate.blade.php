
    <div class="mt-2">
        <p style="font-size: 12pt">
            <img src="{{ asset('imagenes/inicio/calendar.svg') }}" style="width: 11pt; height: 11pt;" alt="día">
            Fecha: <span id="fecha"></span>

            <br class="break-small-screen">
         
            <img src="{{ asset('imagenes/inicio/coin.svg') }}" style="width: 11pt; height: 11pt;" alt="coin"> 
            Valor del tipo de cambio: $<span id="tipo"></span>
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
<script>
    const endpoint = 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43717/datos/oportuno';
    const token = '8b340de89c0ec3971ae83dff7fa9f08821b997adf64cd7891ae721195e4a7bbe';

    // Obtener la fecha actual
    const fechaActual = new Date();
    
    // Formatear la fecha actual en formato dd-mm-yyyy
    const formattedFechaActual = `${String(fechaActual.getDate()).padStart(2, '0')}-${String(fechaActual.getMonth() + 1).padStart(2, '0')}-${fechaActual.getFullYear()}`;

    fetch(`${endpoint}?token=${token}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Obtén el dato de la API y suma 0.1192
            const dato = parseFloat(data.bmx.series[0].datos[0].dato) + 0.1192;

            // Actualiza los elementos HTML con los valores obtenidos
            document.getElementById('fecha').innerText = formattedFechaActual;
            document.getElementById('tipo').innerText = dato.toFixed(2);

            // Puedes hacer lo que necesites con fecha y dato aquí
            // console.log(`Fecha: ${formattedFechaActual}, Dato: ${dato}`);
        })
        .catch(error => {
            // Manejar el error si la solicitud falla.
            console.error('Error en la solicitud:', error);
        });
</script>

