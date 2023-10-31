
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Phone.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Email.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Facebook.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Instagram.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Phone.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Email.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Facebook.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Instagram.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
            </div>
        </div>
        <!-- Repite esta estructura para las siguientes diapositivas -->
    </div>
</div>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Phone.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Email.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Facebook.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Instagram.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Phone.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Email.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Facebook.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Instagram.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
            </div>
        </div>
        <!-- Repite esta estructura para las siguientes diapositivas -->
    </div>
</div>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Phone.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Email.svg') }}" style="width: 48px; height: 48px; margin:10px;"
                        class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Facebook.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Instagram.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Phone.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Email.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Facebook.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/icons/Instagram.svg') }}"
                        style="width: 48px; height: 48px; margin:10px;" class="d-block w-100">
                </div>
            </div>
        </div>
        <!-- Repite esta estructura para las siguientes diapositivas -->
    </div>
</div>

<script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 5000,
        wrap: true,
    })
</script>
