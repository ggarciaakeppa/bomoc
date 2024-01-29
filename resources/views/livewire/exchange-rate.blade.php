<div>
    <div class="container mt-1">
        <p style="font-size: 14pt">
            <img src="{{ asset('imagenes/inicio/calendar.svg') }}" style="width: 14pt; height: 14pt;" alt="día">
            Fecha: <span id="fecha"></span>
            <img src="{{ asset('imagenes/inicio/coin.svg') }}" style="width: 14pt; height: 14pt;" alt="coin"> 
            Valor del tipo de cambio: $<span id="tipo"></span>
        </p>
    </div>
</div>
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

