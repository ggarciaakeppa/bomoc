<div class="container">
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row align-items-center">
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/01-barnes-150x150.jpg') }}"
                         class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/02-wdm-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/03-picsa-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/04-delta-150x150.jpg') }}"
                    class="d-block">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row align-items-center">
                <div class="col ">
                    <img src="{{ asset('/imagenes/marcas/05-danfoss-150x150.jpg') }}"
                         class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/06-baldor-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/07-altamira-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/08-yanmar-150x150.jpg') }}"
                    class="d-block">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row align-items-center">
                <div class="col ">
                    <img src="{{ asset('/imagenes/marcas/09-yaskawa-150x150.jpg') }}"
                         class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/10-mannpumps-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/11-zoeller-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/12-goulds-150x150.jpg') }}"
                    class="d-block">
                </div>
            </div>
        </div>
        <!-- Repite esta estructura para las siguientes diapositivas -->
    </div>
</div>
<div id="myCarousel2" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row align-items-center">
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/13-matathon-150x150.jpg') }}"
                         class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/14-joohn-deere-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/15-us-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/16-racom-150x150.jpg') }}"
                    class="d-block">
                </div>
              
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row align-items-center">
                <div class="col ">
                    <img src="{{ asset('/imagenes/marcas/17-wilo-150x150.jpg') }}"
                         class="d-block" width='150px' height='150px'>
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/18-weg-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/19-armstrong-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/20-franklin-150x150.jpg') }}"
                    class="d-block">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row align-items-center">
                <div class="col ">
                    <img src="{{ asset('/imagenes/marcas/21-pentair-150x150.jpg') }}"
                         class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/24-abb-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/25-flygt-150x150.jpg') }}"
                    class="d-block">
                </div>
                <div class="col">
                    <img src="{{ asset('/imagenes/marcas/22-grundfos-1-150x150.jpg') }}"
                    class="d-block">
                </div>
            </div>
        </div>
        <!-- Repite esta estructura para las siguientes diapositivas -->
    </div>
</div>
</div>
<script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000,
        wrap: true,
    })
    var myCarousel2 = document.querySelector('#myCarousel2')
    var carousel = new bootstrap.Carousel(myCarousel2, {
        interval: 4000,
        wrap: true,
    })
</script>
