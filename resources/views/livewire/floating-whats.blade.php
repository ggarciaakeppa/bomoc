<div>
    <a href="https://api.whatsapp.com/send?phone=3329437092" target="_blank" class='ir-arriba' style="display: block; position: fixed; bottom: 5%; left: 5%; z-index: 2;">
        <img title="Abrir WhatsApp" src="{{ asset('imagenes/icons/Float.svg') }}"
            style="width: 10vw; height: auto; max-width: 80px; display: block;">
    </a>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                $('.ir-arriba').fadeIn(600);
            });
        });
    </script>
</div>
