<div>
    <div class="container m-0">
        <p style="font-size: 14pt">
            <img src="{{ asset('imagenes/inicio/calendar.svg') }}" style="width: 14pt; height: 14pt;">
            Fecha: {{ $fecha }}<br>
            <img src="{{ asset('imagenes/inicio/coin.svg') }}" style="width: 14pt; height: 14pt;"> 
            Valor del tipo de cambio: ${{ number_format($dato + 0.1192, 2, '.', ',') }}
        </p>
    </div>
</div>
