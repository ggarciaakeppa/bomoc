<div>
    <div class="container m-0">
        <p style="font-size: 14pt">
            <img src="{{ asset('imagenes/inicio/calendar.svg') }}" style="width: 14pt; height: 14pt;">
            Fecha: <span id="fecha"></span><br>
            <img src="{{ asset('imagenes/inicio/coin.svg') }}" style="width: 14pt; height: 14pt;"> 
            Valor del tipo de cambio: $<span id="tipo"></span>
        </p>
    </div>
</div>
<script>
    const endpoint = 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43717/datos/oportuno';
    const token = '8b340de89c0ec3971ae83dff7fa9f08821b997adf64cd7891ae721195e4a7bbe';

    fetch(`${endpoint}?token=${token}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        
    .then(data => {
    // Obtén el valor del campo "dato" & "fecha"
    const fechaString = data.bmx.series[0].datos[0].fecha;
    console.log('Fecha original:', fechaString);

    // Formatea la cadena de fecha para que sea reconocida por new Date()
    const fechaParts = fechaString.split('T')[0].split('-');
    const formattedFecha = `${fechaParts[0]}`;

    // Obtén el dato de la API y suma 0.1192
    const dato = parseFloat(data.bmx.series[0].datos[0].dato) + 0.1192;

    // Actualiza los elementos HTML con los valores obtenidos
    document.getElementById('fecha').innerText = formattedFecha;
    document.getElementById('tipo').innerText = dato.toFixed(2);

    // Puedes hacer lo que necesites con fecha y dato aquí
    console.log(`Fecha: ${formattedFecha}, Dato: ${dato}`);
})
.catch(error => {
    // Manejar el error si la solicitud falla.
    console.error('Error en la solicitud:', error);
});



</script>
