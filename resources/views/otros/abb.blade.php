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
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
       <style>
    @media (max-width: 767px) {
        iframe {
            width: 90%; /* Adjust the width as needed */
            height: auto;
        }
    }
</style>

</head>
<body>

    @include('navbar')
   <div style=" background:  url(/imagenes/ABB/water.jpg) center center no-repeat;
    background-size: cover;
    padding: 220px 100px 100px;
    margin: auto;
    font-size: 2.5rem;
    font-weight: 800;">
   </div>
   <div class="container-fluid">
    <div>
        {{-- Logo --}}
        <div class="text-center">

            <figure class="figure">
                <img src="{{ asset('imagenes/ABB/logo2.jpg') }}" width="60%" ;
                    class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>

        {{-- Imagenes al seleccionar ACS355 --}}
        <div>
            <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
                {{-- Imagen de Variadores ACS355 --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#tx"><img src="{{ asset('imagenes/ABB/ACS310.jpg') }}"
                                width="100%" height="60%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Variadores ACS355 </h6>
                        </figcaption>
                    </figure>
                </div>
                {{-- Imagen de Variadores ACS480 --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#KOR"><img src="{{ asset('imagenes/ABB/ACS480.jpg') }}"
                                width="100%" height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Variadores ACS480</h6>
                        </figcaption>
                    </figure>
                </div>
                {{-- Imagen de Variadores ACS580 --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#APL"><img src="{{ asset('imagenes/ABB/Variadores ACS580.jpg') }}"
                                width="100%" height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Variadores ACS580</h6>
                        </figcaption>
                    </figure>
                </div>
                {{-- Imagen de Variadores ACS310 --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#APL1"><img src="{{ asset('imagenes/ABB/ACS480.jpg') }}"
                                width="100%" height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Variadores ACS310</h6>
                        </figcaption>
                    </figure>
                </div>
                {{-- Imagen de Variadores ACQ580 --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#APE"><img src="{{ asset('imagenes/ABB/ACQ580.jpg') }}"
                                width="100%" height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Variadores ACQ580</h6>
                        </figcaption>
                    </figure>
                </div>
                {{-- Imagen de Aplicaciones --}}
                <div class="col">
                    <figure class="figure">
                        <a target="_blank" href="https://library.e.abb.com/public/5df01aa831ce4f5db5966c5e82ce9a9e/ES_Dairy_brochure_2019_REV_A_3AXD50000516728.pdf?x-sign=MdKmPgqxJcEIFqddrTb008XmyV0eVz+/6GwuHttuzDqzvQcReqNDDsjpVVaJln4T">
                            <img src="{{ asset('imagenes/aplicaciones.svg') }}" 
                         class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                              <h6> Aplicaciones</h6>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    {{-- Contenido de Variadores ACS355 --}}
    <div>
        <div class="col m-2 mt-3 pb-3">
            <h4 id="tx" class="h4">Variadores ACS355</h4>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 ">
            <div class="col-md-6 mt-3">
                <figure class="d-flex justify-content-center">
                    <img src="{{ asset('imagenes/ABB/ACS310.jpg') }}" width="80%"
                            width="100%" class="figure-img img-fluid rounded" alt="">
                </figure>
                {{-- <button type="button" class="btn btn-primary ms-4">Ver Catalogo</button> --}}
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/14s1P5t1Ymu1ScyaCnS1RfdBpcjNIpt6q/view"
                        class="btn btn-primary mb-4">ACS355</a>
                </div>
            </div>
            {{-- lh-base --}}
            <div class="col-md-6 mt-lg-5 text-justify">
                
                <div class="d-flex justify-content-center align-items-center">
            <iframe width="80%" height="315"
                        src="https://www.youtube.com/embed/L3_jbkH-CzI?si=NjP9DKnUkRxt05bY" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row border-bottom border-2">
            {{-- lh-base 1 --}}
            <div class="col-md-6 mt-lg-6 text-justify" style="overflow-x:auto;">
                <h4 class="h4">200/240V ± 10%, IP20 = NEMA 1 Entrada monofásica 230 VAC, salida trifásica 230 VAC
                </h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Modelo</th>
                                <th scope="col">Amp</th>
                                <th scope="col">HP</th>
                                <th scope="col">Código</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ACS355-01E-02A4-2</td>
                                <td>2.4</td>
                                <td>0.5</td>
                                <td>3AUA0000058166</td>
                            </tr>
                            <tr>
                                <td>ACS355-01E-04A7-2</td>
                                <td>4.7</td>
                                <td>1</td>
                                <td>3AUA0000058167</td>
                            </tr>
                            <tr>
                                <td>ACS355-01E-06A7-2</td>
                                <td>6.7</td>
                                <td>1.5</td>
                                <td>3AUA0000058168</td>
                            </tr>
                            <tr>
                                <td>ACS355-01E-07A5-2</td>
                                <td>7.5</td>
                                <td>2</td>
                                <td>3AUA0000058169</td>
                            </tr>
                            <tr>
                                <td>ACS355-01E-09A8-2</td>
                                <td>9.8</td>
                                <td>3</td>
                                <td>3AUA0000058170</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- lh-base 2 --}}
            <div class="col-md-6 mt-lg-6 text-justify" style="overflow-x:auto;">
                <h4 class="h4">200/240V ± 10%, IP20 = NEMA 1 Entrada monofásica 230 VAC, salida trifásica 230 VAC
                </h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Modelo</th>
                                <th scope="col">Amp</th>
                                <th scope="col">HP</th>
                                <th scope="col">Código</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ACS355-01E-02A4-2</td>
                                <td>2.4</td>
                                <td>0.5</td>
                                <td>3AUA0000058166</td>
                            </tr>
                            <tr>
                                <td>ACS355-01E-04A7-2</td>
                                <td>4.7</td>
                                <td>1</td>
                                <td>3AUA0000058167</td>
                            </tr>
                            <tr>
                                <td>ACS355-01E-06A7-2</td>
                                <td>6.7</td>
                                <td>1.5</td>
                                <td>3AUA0000058168</td>
                            </tr>
                            <tr>
                                <td>ACS355-01E-07A5-2</td>
                                <td>7.5</td>
                                <td>2</td>
                                <td>3AUA0000058169</td>
                            </tr>
                            <tr>
                                <td>ACS355-01E-09A8-2</td>
                                <td>9.8</td>
                                <td>3</td>
                                <td>3AUA0000058170</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- lh-base 3 --}}
            <div class="col-md-6 mt-lg-6 text-justify" style="overflow-x:auto;">
                <h4 class="h4">Entrada trifásica 230 VAC, salida trifásica 230 VAC</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Modelo</th>
                                <th scope="col">Amp</th>
                                <th scope="col">HP</th>
                                <th scope="col">Código</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">ACS355-03E-02A4-2</td>
                                <td scope="col">2.4</td>
                                <td scope="col">0.5</td>
                                <td scope="col">3AUA0000058171</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-03A5-2</td>
                                <td scope="col">3.5</td>
                                <td scope="col">0.75</td>
                                <td scope="col">3AUA0000058172</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-04A7-2</td>
                                <td scope="col">4.7</td>
                                <td scope="col">1</td>
                                <td scope="col">3AUA0000058173</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-06A7-2</td>
                                <td scope="col">6.7</td>
                                <td scope="col">1.5</td>
                                <td scope="col">3AUA0000058174</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-07A5-2</td>
                                <td scope="col">7.5</td>
                                <td scope="col">2</td>
                                <td scope="col">3AUA0000058175</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-09A8-2</td>
                                <td scope="col">9.8</td>
                                <td scope="col">3</td>
                                <td scope="col">3AUA0000058176</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-013A3-2</td>
                                <td scope="col">13.3</td>
                                <td scope="col">4</td>
                                <td scope="col">3AUA0000058177</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-17A6-2</td>
                                <td scope="col">17.6</td>
                                <td scope="col">5</td>
                                <td scope="col">3AUA0000058178</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-24A4-2</td>
                                <td scope="col">24.4</td>
                                <td scope="col">7.5</td>
                                <td scope="col">3AUA0000058179</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-31A0-2</td>
                                <td scope="col">31</td>
                                <td scope="col">10</td>
                                <td scope="col">3AUA0000058180</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-46A2-2</td>
                                <td scope="col">46.2</td>
                                <td scope="col">15</td>
                                <td scope="col">3AUA0000058181</td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- lh-base 4 --}}
            <div class="col-md-6 mt-lg-6 text-justify" style="overflow-x:auto;">
                <h4 class="h4">380/480V ± 10%, IP20 = NEMA 1 Entrada trifásica, salida trifásica</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Modelo</th>
                                <th scope="col">Amp</th>
                                <th scope="col">HP</th>
                                <th scope="col">Código</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">ACS355-03E-01A2-4</td>
                                <td scope="col">1.2</td>
                                <td scope="col">0.5 </td>
                                <td scope="col">3AUA0000058182</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-01A9-4</td>
                                <td scope="col">1.9</td>
                                <td scope="col">0.75</td>
                                <td scope="col">3AUA0000058183</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-02A4-4</td>
                                <td scope="col">2.4</td>
                                <td scope="col">1</td>
                                <td scope="col">3AUA0000058184</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-03A3-4</td>
                                <td scope="col">3.3</td>
                                <td scope="col">1.5</td>
                                <td scope="col">3AUA0000058185</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-04A1-4</td>
                                <td scope="col">4.1</td>
                                <td scope="col">2</td>
                                <td scope="col">3AUA0000058186</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-05A6-4</td>
                                <td scope="col">5.6</td>
                                <td scope="col">3</td>
                                <td scope="col">3AUA0000058187</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-07A3-4</td>
                                <td scope="col">7.3</td>
                                <td scope="col">4</td>
                                <td scope="col">3AUA0000058188</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-08A8-4</td>
                                <td scope="col">8.8</td>
                                <td scope="col">5</td>
                                <td scope="col">3AUA0000058189</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-12A5-4</td>
                                <td scope="col">12.5</td>
                                <td scope="col">7.5</td>
                                <td scope="col">3AUA0000058190</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-15A6-4</td>
                                <td scope="col">15.6</td>
                                <td scope="col">10</td>
                                <td scope="col">3AUA0000058191</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-23A1-4</td>
                                <td scope="col">23.1</td>
                                <td scope="col">15</td>
                                <td scope="col">3AUA0000058192</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-31A0-4</td>
                                <td scope="col">31</td>
                                <td scope="col">20</td>
                                <td scope="col">3AUA0000058193</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-38A0-4</td>
                                <td scope="col">38</td>
                                <td scope="col">25</td>
                                <td scope="col">3AUA0000058194</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-44A0-4</td>
                                <td scope="col">44</td>
                                <td scope="col">30</td>
                                <td scope="col">3AUA0000058195</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- lh-base 5 --}}
            <div class="col-md-6 mt-lg-6 text-justify" style="overflow-x:auto;">
                <h4 class="h4">IP66 = NEMA 4X 200/240V ± 10%, IP66 = NEMA 4X Entrada trifásica, salida
                    trifásica
                </h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Modelo</th>
                                <th scope="col">Amp</th>
                                <th scope="col">HP</th>
                                <th scope="col">Código</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">ACS355-03E-02A4-2+B063</td>
                                <td scope="col">2.4</td>
                                <td scope="col">0.5</td>
                                <td scope="col">3AUA0000058148</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-03A5-2+B063</td>
                                <td scope="col">3.5</td>
                                <td scope="col">0.75</td>
                                <td scope="col">3AUA0000058149</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-04A7-2+B063</td>
                                <td scope="col">4.7</td>
                                <td scope="col">1</td>
                                <td scope="col">3AUA0000058150</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-06A7-2+B063</td>
                                <td scope="col">6.7</td>
                                <td scope="col">1.5</td>
                                <td scope="col">3AUA0000058151</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-07A5-2+B063</td>
                                <td scope="col">7.5</td>
                                <td scope="col">2</td>
                                <td scope="col">3AUA0000058152</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-09A8-2+B063</td>
                                <td scope="col">9.8</td>
                                <td scope="col">3</td>
                                <td scope="col">3AUA0000058153</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-13A3-2+B063</td>
                                <td scope="col">13.3</td>
                                <td scope="col">4</td>
                                <td scope="col">3AUA0000058154</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-17A6-2+B063</td>
                                <td scope="col">17.6</td>
                                <td scope="col">5</td>
                                <td scope="col">3AUA0000058155</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            {{-- lh-base 6 --}}
            <div class="col-md-6 mt-lg-6 text-justify" style="overflow-x:auto;">
                <h4 class="h4">380/480V ± 10%, IP66 = NEMA 4X Entrada trifásica, salida trifásica</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Modelo</th>
                                <th scope="col">Amp</th>
                                <th scope="col">HP</th>
                                <th scope="col">Código</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">ACS355-03E-01A2-4+B063</td>
                                <td scope="col">1.2</td>
                                <td scope="col">0.5</td>
                                <td scope="col">3AUA0000058156</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-01A9-4+B063</td>
                                <td scope="col">1.9</td>
                                <td scope="col">0.75</td>
                                <td scope="col">3AUA0000058157</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-02A4-4+B063</td>
                                <td scope="col">2.4</td>
                                <td scope="col">1</td>
                                <td scope="col">3AUA0000058158</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-03A3-4+B063</td>
                                <td scope="col">3.3</td>
                                <td scope="col">1.5</td>
                                <td scope="col">3AUA0000058159</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-04A1-4+B063</td>
                                <td scope="col">4.1</td>
                                <td scope="col">2</td>
                                <td scope="col">3AUA0000058160</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-05A6-4+B063</td>
                                <td scope="col">5.6</td>
                                <td scope="col">3</td>
                                <td scope="col">3AUA0000058161</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-07A3-4+B063</td>
                                <td scope="col">7.3</td>
                                <td scope="col">4</td>
                                <td scope="col">3AUA0000058162</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-08A8-4+B063</td>
                                <td scope="col">8.8</td>
                                <td scope="col">5</td>
                                <td scope="col">3AUA0000058163</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-12A5-4+B063</td>
                                <td scope="col">12.5</td>
                                <td scope="col">7.5</td>
                                <td scope="col">3AUA0000058164</td>
                            </tr>
                            <tr>
                                <td scope="col">ACS355-03E-15A6-2+B063</td>
                                <td scope="col">15.6</td>
                                <td scope="col">10</td>
                                <td scope="col">3AUA0000058165</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        {{-- Contenido de Variadores ACS480 --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="KOR" class="h4">Variadores ACS480</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center">
                        <img src="{{ asset('imagenes/ABB/ACS480.jpg') }}"
                                width="80%" class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1z4JY1U84uAWk4QZP5k2i1PDxutUtCqge/view"
                            class="btn btn-primary mb-4">ACS480</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                <div class="d-flex justify-content-center align-items-center">
            <iframe width="80%" height="315"
                            src="https://www.youtube.com/embed/nOQGM62gB70?si=5nxJ6AenjIqOAHcX"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
                </div>
            </div>
            <div class="row border-bottom border-2">
                <div class="col-md-12" >
                    <h4 class="h4">Tipos y tensiones:</h4>
                    <div class="col " style="overflow-x:auto;">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                <th colspan="2">Par Variable</th>
                                 <th colspan="2">Par Constante</th>
                                </tr>
                                
                                <tr>
                                    <th scope="col">(HP)</th>
                                    <th scope="col">(A)</th>
                                    <th scope="col">(HP)</th>
                                    <th scope="col">(A)</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Catálogo</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr scope="col">
                                    <b>Trifásico,U<sub>N</sub> = 400 V (rango de 380 a 480 V). Estas
                                        especificaciones de
                                        potencia
                                        son
                                        válidas a una
                                        tensión nominal de 400 V.</b>
                                </tr>
                                <tr>
                                    <td scope="col">1,0</td>
                                    <td scope="col">2,5</td>
                                    <td scope="col">0,75</td>
                                    <td scope="col">1,6</td> 
                                    <td scope="col">3AXD50000047765</td>
                                    <td scope="col">ACS480-04-02A7-4</td>
                                </tr>
                                <tr>
                                    <td scope="col">1,5</td>
                                    <td scope="col">3,0</td>
                                    <td scope="col">1,0</td>
                                    <td scope="col">2,1</td>
                                    <td scope="col">3AXD50000047766</td>
                                    <td scope="col">ACS480-04-03A4-4</td>
                                </tr>
                                <tr>
                                    <td scope="col">2,0</td>
                                    <td scope="col">3,4</td>
                                    <td scope="col">1,5</td>
                                    <td scope="col">3,0</td>
                                    <td scope="col">3AXD50000047767</td>
                                    <td scope="col">ACS480-04-04A1-4</td>
                                </tr>
                                <tr>
                                    <td scope="col">2,0</td>
                                    <td scope="col">4,8</td>
                                    <td scope="col">2,0</td>
                                    <td scope="col">3,4</td>
                                    <td scope="col">3AXD50000047767</td>
                                    <td scope="col">ACS480-04-05A7-4</td>
                                </tr>
                                <tr>
                                    <td scope="col">3,0</td>
                                    <td scope="col">6,0</td>
                                    <td scope="col">2,0</td>
                                    <td scope="col">4,0</td>
                                    <td scope="col">3AXD50000047768</td>
                                    <td scope="col">ACS480-04-07A3-4</td>
                                </tr>
                                <tr>
                                    <td scope="col">5,0</td>
                                    <td scoppe="col">7,6</td>
                                    <td scope="col">3,0
                                    <td scope="col">4,8</td>
                                    <td scope="col">3AXD50000047769</td>
                                    <td scope="col">ACS480-04-09A5-4</td>
                                </tr>
                                <tr>
                                    <td scope="col">7,5</td>
                                    <td scope="col">11</td>
                                    <td scope="col">5,0</td>
                                    <td scope="col">7,6</td>
                                    <td scope="col">3AXD50000047770</td>
                                    <td scope="col">ACS480-04-12A7-4</td>
                                </tr>
                                <tr>
                                    <td  scope="col">10,0</td>
                                    <td scope="col">14,0</td>
                                    <td scope="col">1,5</td>
                                    <td scope="col">3,0</td>
                                    <td scope="col">3AXD50000047791</td>
                                    <td scope="col">ACS480-04-018A-4</td>
                                </tr>
                                <tr>
                                    <td scope="col">15,0</td>
                                    <td scope="col">21,0</td>
                                    <td scope="col">10,0
                                    <td scolpe="col">14,0</td>
                                    <td scope="col">3AXD50000047792</td>
                                    <td scope="col">ACS480-04-026A-4</td>
                                </tr>
                                <tr>
                                    <td  scope="col">20,0</td>
                                    <td scope="col">27,0</td>
                                    <td scope="col">15,0
                                    <td scope="col">21,0</td>
                                    <td scope="col">3AXD50000047793</td>
                                    <td scope="col">ACS480-04-033A-4</td>
                                </tr>
                                <tr>
                                    <td scope="col">25,0
                                    <td scope="col">34,0</td>
                                    <td scope="col">20,0
                                    <td scope="col">27,0</td>
                                    <td scope="col">3AXD50000199068</td>
                                    <td scope="col">ACS480-04-039A-4</td>
                                </tr>
                                <tr>
                                    <td  scope="col">30,0</td>
                                    <td scope="col">40,0</td>
                                    <td scope="col">25,0
                                    <td scope="col">34,0</td>
                                    <td scope="col">3AXD50000199082</td>
                                    <td scope="col">ACS480-04-046A-4</td>
                                </tr>
                                <tr>
                                    <td  scope="col">30,0
                                    <td scopes="col">42,0</td>
                                    <td scope="col">30,0
                                    <td scope="col">40,0</td>
                                    <td scope="col">3AXD50000199099</td>
                                    <td scope="col">ACS480-04-050A-4</td>
                                </tr>
                            </tbody>
                          
                        </table>
                    </div>
                </div>
            </div>
        </div>


        {{-- Contenido de Variadores ACS580 --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="APL" class="h4">Variadores ACS580</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center">
                        <img src="{{ asset('imagenes/ABB/Variadores ACS580.jpg') }}"
                                width="70%" class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/14wKO9H4Syf-RiydMSETgnzlqvfEOEVYL/view"
                            class="btn btn-primary mb-4">ACS580</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                <div class="d-flex justify-content-center align-items-center">
            <iframe width="80%" height="315"
                            src="https://www.youtube.com/embed/tgiu5r_anzo?si=wyB0AOrSsGckqrx_"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
</div>
                </div>
            </div>
            <div class="row border-bottom border-2">
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">220V a 240V Units IP21 = NEMA 1</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                 <tr>
                                <th colspan="2">Par Variable</th>
                                 <th colspan="2">Par Constante</th>
                                </tr>
                                <tr>
                                   
                                    <th scope="col">(A)
                                    </th>
                                    <th scope="col">(HP)<p>
                                    </th>
                                    <th scope="col">(A)
                                    </th>
                                    <th scope="col">(HP)<p>
                                    </th>
                                    <th scope="col">Código<p>
                                    </th>
                                    <th scope="col">Modelo<p>
                                    </th>
                                <tr>
                                   
                                    <td scope="col">4.7</td>
                                    <td scope="col">1</td>
                                    <td scope="col">3.5</td>
                                    <td scope="col">0.5</td>
                                    <td scope="col">3AXD50000417346</td>
                                    <td scope="col">ACS580-01-04A7-2</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">6.7</td>
                                    <td scope="col">1.5</td>
                                    <td scope="col">4.7</td>
                                    <td scope="col">1</td>
                                    <td scope="col">3AXD50000417353</td>
                                    <td scope="col">ACS580-01-06A7-2</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">7.6</td>
                                    <td scope="col">2</td>
                                    <td scope="col">6.7</td>
                                    <td scope="col">2</td>
                                    <td scope="col">3AXD50000417360</td>
                                    <td scope="col">ACS580-01-07A6-2</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">12</td>
                                    <td scope="col">3</td>
                                    <td scope="col">7.6</td>
                                    <td scope="col">2</td>
                                    <td scope="col">3AXD50000417377</td>
                                    <td scope="col">ACS580-01-012A-2</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">18</td>
                                    <td scope="col">5</td>
                                    <td scope="col">12</td>
                                    <td scope="col">3</td>
                                    <td scope="col">3AXD50000417384</td>
                                    <td scope="col">ACS580-01-018A-2</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">25</td>
                                    <td scope="col">7.5</td>
                                    <td scope="col">18</td>
                                    <td scope="col">5</td>
                                    <td scope="col">3AXD50000417391</td>
                                    <td scope="col">ACS580-01-025A-2</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">32</td>
                                    <td scope="col">10</td>
                                    <td scope="col">25</td>
                                    <td scope="col">7.5</td>
                                    <td scope="col">3AXD50000417407</td>
                                    <td scope="col">ACS580-01-032A-2</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">47</td>
                                    <td scope="col">15</td>
                                    <td scope="col">32</td>
                                    <td scope="col">10</td>
                                    <td scope="col">3AXD50000417414</td>
                                    <td scope="col">ACS580-01-047A-2</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">60</td>
                                    <td scope="col">20</td>
                                    <td scope="col">47</td>
                                    <td scope="col">15</td>
                                    <td scope="col">3AXD50000417421</td>
                                    <td scope="col">ACS580-01-060A-2</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">89</td>
                                    <td scope="col">30</td>
                                    <td scope="col">60</td>
                                    <td scope="col">20</td>
                                    <td scope="col">3AXD50000417438</td>
                                    <td scope="col">ACS580-01-089A-2</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">115</td>
                                    <td scope="col">40</td>
                                    <td scope="col">89</td>
                                    <td scope="col">30</td>
                                    <td scope="col">3AXD50000417445</td>
                                    <td scope="col">ACS580-01-115A-2</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">144</td>
                                    <td scope="col">50</td>
                                    <td scope="col">115</td>
                                    <td scope="col">40</td>
                                    <td scope="col">3AXD50000417452</td>
                                    <td scope="col">ACS580-01-144A-2</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">171</td>
                                    <td scope="col">60</td>
                                    <td scope="col">144</td>
                                    <td scope="col">50</td>
                                    <td scope="col">3AXD50000417469</td>
                                    <td scope="col">ACS580-01-171A-2</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">213</td>
                                    <td scope="col">75</td>
                                    <td scope="col">171</td>
                                    <td scope="col">60</td>
                                    <td scope="col">3AXD50000417476</td>
                                    <td scope="col">ACS580-01-213A-2 </td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">276</td>
                                    <td scope="col">100</td>
                                    <td scope="col">213</td>
                                    <td scope="col">75</td>
                                    <td scope="col">3AXD50000417483</td>
                                    <td scope="col">ACS580-01-276A-2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">200V a 240V Units IP55 = NEMA 12</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th colspan="2">Par Variable</th>
                                 <th colspan="2">Par Constante</th>
                                </tr>
                                <tr>
                                  
                                    <th scope="col">(A)
                                    </th>
                                    <th scope="col">(HP)
                                    </th>
                                    <th scope="col">(A)
                                    </th>
                                    <th scope="col">(HP)
                                    </th>
                                    <th scope="col">Código<p>
                                    </th>
                                    <th scope="col">Modelo<p>
                                    </th>
                                <tr>
                                   
                                    <td scope="col">4.7</td>
                                    <td scope="col">1</td>
                                    <td scope="col">3.5</td>
                                    <td scope="col">0.5</td>
                                    <td scope="col">3AXD50000417490</td>
                                    <td scope="col">ACS580-01-04A7-2+B056</td>
                                </tr>
                                <tr>
                                  
                                    <td scope="col">6.7</td>
                                    <td scope="col">1.5</td>
                                    <td scope="col">4.7</td>
                                    <td scope="col">1</td>
                                    <td scope="col">3AXD50000417506</td>
                                    <td scope="col">ACS580-01-06A7-2+B056</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">7.6</td>
                                    <td scope="col">2</td>
                                    <td scope="col">6.7</td>
                                    <td scope="col">1.5</td>
                                    <td scope="col">3AXD50000417513</td>
                                    <td scope="col">ACS580-01-07A6-2+B056</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">12</td>
                                    <td scope="col">3</td>
                                    <td scope="col">7.6</td>
                                    <td scope="col">2</td>
                                    <td scope="col">3AXD50000417520</td>
                                    <td scope="col">ACS580-01-012A-2+B056</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">18</td>
                                    <td scope="col">5</td>
                                    <td scope="col">12</td>
                                    <td scope="col">3</td>
                                    <td scope="col">3AXD50000417537</td>
                                    <td scope="col">ACS580-01-018A-2+B056</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">25</td>
                                    <td scope="col">7.5</td>
                                    <td scope="col">18</td>
                                    <td scope="col">5</td>
                                    <td scope="col">3AXD50000417544</td>
                                    <td scope="col">ACS580-01-025A-2+B056</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">32</td>
                                    <td scope="col">10</td>
                                    <td scope="col">25</td>
                                    <td scope="col">7.5</td>
                                    <td scope="col">3AXD50000417551</td>
                                    <td scope="col">ACS580-01-032A-2+B056</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">47</td>
                                    <td scope="col">15</td>
                                    <td scope="col">32</td>
                                    <td scope="col">10</td>
                                    <td scope="col">3AXD50000417568</td>
                                    <td scope="col">ACS580-01-047A-2+B056</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">60</td>
                                    <td scope="col">20</td>
                                    <td scope="col">47</td>
                                    <td scope="col">15</td>
                                    <td scope="col">3AXD50000417575</td>
                                    <td scope="col">ACS580-01-060A-2+B056</td>
                                </tr>
                                <tr>
                                  
                                    <td scope="col">89</td>
                                    <td scope="col">30</td>
                                    <td scope="col">60</td>
                                    <td scope="col">20</td>
                                    <td scope="col">3AXD50000417582</td>
                                    <td scope="col">ACS580-01-089A-2+B056</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">115</td>
                                    <td scope="col">40</td>
                                    <td scope="col">89</td>
                                    <td scope="col">30</td>
                                    <td scope="col">3AXD50000417599</td>
                                    <td scope="col">ACS580-01-115A-2+B056</td>
                                </tr>
                                <tr>
                                  
                                    <td scope="col">144</td>
                                    <td scope="col">50</td>
                                    <td scope="col">115</td>
                                    <td scope="col">40</td>
                                    <td scope="col">3AXD50000417605</td>
                                    <td scope="col">ACS580-01-144A-2+B056</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">171</td>
                                    <td scope="col">60</td>
                                    <td scope="col">144</td>
                                    <td scope="col">50</td>
                                    <td scope="col">3AXD50000417612</td>
                                    <td scope="col">ACS580-01-171A-2+B056</td>

                                </tr>
                                <tr>
                                   
                                    <td scope="col">213</td>
                                    <td scope="col">75</td>
                                    <td scope="col">171</td>
                                    <td scope="col">60</td>
                                    <td scope="col">3AXD50000417629</td>
                                    <td scope="col">ACS580-01-213A-2+B056</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">276</td>
                                    <td scope="col">100</td>
                                    <td scope="col">213</td>
                                    <td scope="col">75</td>
                                    <td scope="col">3AXD50000417636</td>
                                    <td scope="col">ACS580-01-276A-2+B056</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <div class="table-responsive">
                        <h4 class="h4">380V a 480V Units IP21 = NEMA 1</h4>
                        <table class="table table-striped ">
                            <tbody>
                            <tr>
                                <th colspan="2">Par Variable</th>
                                 <th colspan="2">Par Constante</th>
                                </tr>
                                <tr>
                                <tr>
                                   
                                    <th scope="col">(A)
                                    </th>
                                    <th scope="col">(HP)
                                    </th>
                                    <th scope="col">(A)
                                    </th>
                                    <th scope="col">(HP)
                                    </th>
                                    <th scope="col">Código<p>
                                    </th>
                                    <th scope="col">Modelo<p>
                                    </th>
                                <tr>
                                   
                                    <td scope="col">2.1</td>
                                    <td scope="col">1</td>
                                    <td scope="col">1.6</td>
                                    <td scope="col">0.75</td>
                                    <td scope="col">3AXD50000038937</td>
                                    <td scope="col">ACS580-01-02A7-4</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">3</td>
                                    <td scope="col">1.5</td>
                                    <td scope="col">2.1</td>
                                    <td scope="col">1</td>
                                    <td scope="col">3AXD50000038938</td>
                                    <td scope="col">ACS580-01-03A4-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">3.4</td>
                                    <td scope="col">2</td>
                                    <td scope="col">3</td>
                                    <td scope="col">1.5</td>
                                    <td scope="col">3AXD50000038939</td>
                                    <td scope="col">ACS580-01-04A1-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">4.8</td>
                                    <td scope="col">3</td>
                                    <td scope="col">3.4</td>
                                    <td scope="col">2</td>
                                    <td scope="col">3AXD50000038940</td>
                                    <td scope="col">ACS580-01-05A7-4</td>
                                </tr>
                                <tr>
                                  
                                    <td scope="col">6</td>
                                    <td scope="col">3</td>
                                    <td scope="col">4</td>
                                    <td scope="col">3</td>
                                    <td scope="col">3AXD50000038951</td>
                                    <td scope="col">ACS580-01-07A3-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">7.6</td>
                                    <td scope="col">5</td>
                                    <td scope="col">4.8</td>
                                    <td scope="col">3</td>
                                    <td scope="col">3AXD50000038952</td>
                                    <td scope="col">ACS580-01-09A5-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">11</td>
                                    <td scope="col">7.5</td>
                                    <td scope="col">7.6</td>
                                    <td scope="col">5</td>
                                    <td scope="col">3AXD50000038953</td>
                                    <td scope="col">ACS580-01-12A7-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">14</td>
                                    <td scope="col">10</td>
                                    <td scope="col">11</td>
                                    <td scope="col">7.5</td>
                                    <td scope="col">3AXD50000038959</td>
                                    <td scope="col">ACS580-01-018A-4</td>
                                </tr>
                                <tr>
                                
                                    <td scope="col">21</td>
                                    <td scope="col">15</td>
                                    <td scope="col">14</td>
                                    <td scope="col">10</td>
                                    <td scope="col">3AXD50000038960</td>
                                    <td scope="col">ACS580-01-026A-4</td>
                                </tr>
                                <tr>
                                  
                                    <td scope="col">27</td>
                                    <td scope="col">20</td>
                                    <td scope="col">21</td>
                                    <td scope="col">15</td>
                                    <td scope="col">3AXD50000038961</td>
                                    <td scope="col">ACS580-01-033A-4</td>
                                </tr>
                                <tr>
                                  
                                    <td scope="col">34</td>
                                    <td scope="col">25</td>
                                    <td scope="col">27</td>
                                    <td scope="col">20</td>
                                    <td scope="col">3AXD50000038962</td>
                                    <td scope="col">ACS580-01-039A-4</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">40</td>
                                    <td scope="col">30</td>
                                    <td scope="col">34</td>
                                    <td scope="col">25</td>
                                    <td scope="col">3AXD50000038963</td>
                                    <td scope="col">ACS580-01-046A-4</td>
                                </tr>
                                <tr>
                                  
                                    <td scope="col">52</td>
                                    <td scope="col">40</td>
                                    <td scope="col">40</td>
                                    <td scope="col">30</td>
                                    <td scope="col">3AUA0000080498</td>
                                    <td scope="col">ACS580-01-062A-4</td>
                                </tr>
                                <tr>
                                 
                                    <td scope="col">65</td>
                                    <td scope="col">50</td>
                                    <td scope="col">52</td>
                                    <td scope="col">40</td>
                                    <td scope="col">3AUA0000080499</td>
                                    <td scope="col">ACS580-01-073A-4 </td>
                                </tr>
                                <tr>
                                 
                                    <td scope="col">77</td>
                                    <td scope="col">60</td>
                                    <td scope="col">65</td>
                                    <td scope="col">50</td>
                                    <td scope="col">3AUA0000080502</td>
                                    <td scope="col">ACS580-01-088A-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">96</td>
                                    <td scope="col">75</td>
                                    <td scope="col">77</td>
                                    <td scope="col">60</td>
                                    <td scope="col">3AUA0000080503</td>
                                    <td scope="col">ACS580-01-106A-4</td>
                                </tr>
                                <tr>
                                  
                                    <td scope="col">124</td>
                                    <td scope="col">100</td>
                                    <td scope="col">96</td>
                                    <td scope="col">75</td>
                                    <td scope="col">3AUA0000080504</td>
                                    <td scope="col">ACS580-01-145A-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">156</td>
                                    <td scope="col">125</td>
                                    <td scope="col">124</td>
                                    <td scope="col">100</td>
                                    <td scope="col">3AUA0000080505</td>
                                    <td scope="col">ACS580-01-169A-4</td>
                                </tr>
                                <tr>
                                    
                                    <td scope="col">180</td>
                                    <td scope="col">150</td>
                                    <td scope="col">156</td>
                                    <td scope="col">125</td>
                                    <td scope="col">3AUA0000080506</td>
                                    <td scope="col">ACS580-01-206A-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">240</td>
                                    <td scope="col">200</td>
                                    <td scope="col">180</td>
                                    <td scope="col">150</td>
                                    <td scope="col">3AUA0000080507</td>
                                    <td scope="col">ACS580-01-246A-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">260</td>
                                    <td scope="col">200</td>
                                    <td scope="col">240</td>
                                    <td scope="col">150</td>
                                    <td scope="col">3AUA0000080508</td>
                                    <td scope="col">ACS580-01-293A-4</td>
                                </tr>
                                <tr>
                                   
                                    <td scope="col">361</td>
                                    <td scope="col">300</td>
                                    <td scope="col">302</td>
                                    <td scope="col">250</td>
                                    <td scope="col">3AUA0000080509</td>
                                    <td scope="col">ACS580-01-363A-4</td>
                                </tr>
                                <tr>
                                 
                                    <td scope="col">414</td>
                                    <td scope="col">350</td>
                                    <td scope="col">361</td>
                                    <td scope="col">300</td>
                                    <td scope="col">3AUA0000080510</td>
                                    <td scope="col">ACS580-01-430A-4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <div class="table-responsive">
                        <h4 class="h4">380V a 480V Units IP55 = NEMA 12</h4>
                        <table class="table table-striped ">
                        <tr>
                                <th colspan="2">Par Variable</th>
                                 <th colspan="2">Par Constante</th>
                                </tr>
                            <tr>
                                
                                <th scope="col">(A)
                                </th>
                                <th scope="col">(HP)
                                </th>
                                <th scope="col">(A)
                                </th>
                                <th scope="col">(HP)
                                </th>
                                <th scope="col">Código<p>
                                </th>
                                <th scope="col">Modelo<p>
                                </th>
                            <tr>
                               
                                <td scope="col">2.1</td>
                                <td scope="col">1</td>
                                <td scope="col">1.6</td>
                                <td scope="col">0.75</td>
                                <td scope="col">3AXD50000038964</td>
                                <td scope="col">ACS580-01-02A7-4+B056</td>
                            </tr>
                            <tr>
                                
                                <td scope="col">3</td>
                                <td scope="col">1.5</td>
                                <td scope="col">2.1</td>
                                <td scope="col">1</td>
                                <td scope="col">3AXD50000038965</td>
                                <td scope="col">ACS580-01-03A4-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">3.4</td>
                                <td scope="col">2</td>
                                <td scope="col">3</td>
                                <td scope="col">1.5</td>
                                <td scope="col">3AXD50000038966</td>
                                <td scope="col">ACS580-01-04A1-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">4.8</td>
                                <td scope="col">3</td>
                                <td scope="col">3.4</td>
                                <td scope="col">2</td>
                                <td scope="col">3AXD50000038967</td>
                                <td scope="col">ACS580-01-05A7-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">6</td>
                                <td scope="col">3</td>
                                <td scope="col">4</td>
                                <td scope="col">3</td>
                                <td scope="col">3AXD50000038968</td>
                                <td scope="col">ACS580-01-07A3-4+B056</td>
                            </tr>
                            <tr>
                              
                                <td scope="col">7.6</td>
                                <td scope="col">5</td>
                                <td scope="col">4.8</td>
                                <td scope="col">3</td>
                                <td scope="col">3AXD50000038969</td>
                                <td scope="col">ACS580-01-09A5-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">11</td>
                                <td scope="col">7.5</td>
                                <td scope="col">7.6</td>
                                <td scope="col">5</td>
                                <td scope="col">3AXD50000038970</td>
                                <td scope="col">ACS580-01-12A7-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">14</td>
                                <td scope="col">10</td>
                                <td scope="col">11</td>
                                <td scope="col">7.5</td>
                                <td scope="col">3AXD50000038976</td>
                                <td scope="col">ACS580-01-018A-4+B056</td>
                            </tr>
                            <tr>
                              
                                <td scope="col">21</td>
                                <td scope="col">15</td>
                                <td scope="col">14</td>
                                <td scope="col">10</td>
                                <td scope="col">3AXD50000038977</td>
                                <td scope="col">ACS580-01-026A-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">27</td>
                                <td scope="col">20</td>
                                <td scope="col">21</td>
                                <td scope="col">15</td>
                                <td scope="col">3AXD50000038978</td>
                                <td scope="col">ACS580-01-033A-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">34</td>
                                <td scope="col">25</td>
                                <td scope="col">27</td>
                                <td scope="col">20</td>
                                <td scope="col">3AXD50000038979</td>
                                <td scope="col">ACS580-01-039A-4+B056</td>
                            </tr>
                            <tr>
                             
                                <td scope="col">40</td>
                                <td scope="col">30</td>
                                <td scope="col">34</td>
                                <td scope="col">25</td>
                                <td scope="col">3AXD50000038980</td>
                                <td scope="col">ACS580-01-046A-4+B056</td>
                            </tr>
                            <tr>
                             
                                <td scope="col">52</td>
                                <td scope="col">40</td>
                                <td scope="col">40</td>
                                <td scope="col">30</td>
                                <td scope="col">3AUA0000083573</td>
                                <td scope="col">ACS580-01-062A-4+B056</td>
                            </tr>
                            <tr>
                              
                                <td scope="col">65</td>
                                <td scope="col">50</td>
                                <td scope="col">52</td>
                                <td scope="col">40</td>
                                <td scope="col">3AUA0000083574</td>
                                <td scope="col">ACS580-01-073A-4+B056</td>
                            </tr>
                            <tr>
                              
                                <td scope="col">77</td>
                                <td scope="col">60</td>
                                <td scope="col">65</td>
                                <td scope="col">50</td>
                                <td scope="col">3AUA0000083577</td>
                                <td scope="col">ACS580-01-088A-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">96</td>
                                <td scope="col">75</td>
                                <td scope="col">77</td>
                                <td scope="col">60</td>
                                <td scope="col">3AUA0000083578</td>
                                <td scope="col">ACS580-01-106A-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">124</td>
                                <td scope="col">100</td>
                                <td scope="col">96</td>
                                <td scope="col">75</td>
                                <td scope="col">3AUA0000083579</td>
                                <td scope="col">ACS580-01-145A-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">156</td>
                                <td scope="col">125</td>
                                <td scope="col">124</td>
                                <td scope="col">100</td>
                                <td scope="col">3AUA0000083580</td>
                                <td scope="col">ACS580-01-169A-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">180</td>
                                <td scope="col">150</td>
                                <td scope="col">156</td>
                                <td scope="col">125</td>
                                <td scope="col">3AUA0000083581</td>
                                <td scope="col">ACS580-01-206A-4+B056</td>
                            </tr>
                            <tr>
                                
                                <td scope="col">240</td>
                                <td scope="col">200</td>
                                <td scope="col">180</td>
                                <td scope="col">150</td>
                                <td scope="col">3AUA0000083582</td>
                                <td scope="col">ACS580-01-246A-4+B056</td>
                            </tr>
                            <tr>
                               
                                <td scope="col">260</td>
                                <td scope="col">200</td>
                                <td scope="col">240</td>
                                <td scope="col">150</td>
                                <td scope="col">3AUA0000083583</td>
                                <td scope="col">ACS580-01-293A-4+B056</td>
                            </tr>
                            <tr>
                              
                                <td scope="col">361</td>
                                <td scope="col">300</td>
                                <td scope="col">302</td>
                                <td scope="col">250</td>
                                <td scope="col">3AUA0000083584</td>
                                <td scope="col">ACS580-01-363A-4+B056</td>
                            </tr>
                            <tr>
                             
                                <td scope="col">414</td>
                                <td scope="col">350</td>
                                <td scope="col">361</td>
                                <td scope="col">300</td>
                                <td scope="col">3AUA0000083585</td>
                                <td scope="col">ACS580-01-430A-4+B056</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        {{-- Contenido de Variadores ACS310 --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="APL1" class="h4">Variadores ACS310</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center">
                       <img src="{{ asset('imagenes/ABB/ACS480.jpg') }}"
                                width="80%" class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1YtSVrFCQsDjYmeiYGaZMylOqiykX71_g/view"
                            class="btn btn-primary mb-4">ACS310</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                <div class="d-flex justify-content-center align-items-center">
            <iframe width="80%" height="315"
                            src="https://www.youtube.com/embed/pgWAJ3dN55o?si=e1w3CMzlNVcreYhA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
                </div>
            </div>
            <div class="row border-bottom border-2">
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">200/240V ± 10%, IP20 = NEMA 1</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td scope="col">Modelo</td>
                                    <td scope="col">Código</td>
                                    <td scope="col">Amp</td>
                                    <td scope="col">KW</td>
                                    <td scope="col">HP</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-01E-02A4-2</td>
                                    <td scope="col">3AUA0000038701</td>
                                    <td scope="col">2.3</td>
                                    <td scope="col">0.37</td>
                                    <td scope="col">0.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-01E-04A7-2</td>
                                    <td scope="col">3AUA0000038843</td>
                                    <td scope="col">4.5</td>
                                    <td scope="col">0.75</td>
                                    <td scope="col">1</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-01E-06A7-2</td>
                                    <td scope="col">3AUA0000038844</td>
                                    <td scope="col">6.5</td>
                                    <td scope="col">1.1</td>
                                    <td scope="col">1.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-01E-07A5-2</td>
                                    <td scope="col">3AUA0000038845</td>
                                    <td scope="col">7.2</td>
                                    <td scope="col">1.5</td>
                                    <td scope="col">2</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-01E-09A8-2</td>
                                    <td scope="col">3AUA0000039071</td>
                                    <td scope="col">9.4</td>
                                    <td scope="col">2.2</td>
                                    <td scope="col">3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">200/240V ± 10%, IP20 = NEMA 1</h4>
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <tbody>
                                <tr>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Amp</th>
                                    <th scope="col">KW</th>
                                    <th scope="col">HP</th>
                                <tr>
                                    <td scope="col">ACS310-03E-02A6-2</td>
                                    <td scope="col">3AUA0000039087</td>
                                    <td scope="col">2.4</td>
                                    <td scope="col">0.37</td>
                                    <td scope="col">0.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-03A9-2</td>
                                    <td scope="col">3AUA0000039163</td>
                                    <td scope="col">3.5</td>
                                    <td scope="col">0.55</td>
                                    <td scope="col">0.75</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-05A2-2</td>
                                    <td scope="col">3AUA0000039192</td>
                                    <td scope="col">4.7</td>
                                    <td scope="col">0.75</td>
                                    <td scope="col">1</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-07A4-2</td>
                                    <td scope="col">3AUA0000039215</td>
                                    <td scope="col">6.7</td>
                                    <td scope="col">1.1</td>
                                    <td scope="col">1.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-08A3-2</td>
                                    <td scope="col">3AUA0000039218</td>
                                    <td scope="col">7.5</td>
                                    <td scope="col">1.5</td>
                                    <td scope="col">2</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-10A8-2</td>
                                    <td scope="col">3AUA0000039234</td>
                                    <td scope="col">9.8</td>
                                    <td scope="col">2.2</td>
                                    <td scope="col">3</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-14A6-2</td>
                                    <td scope="col">3AUA0000039307</td>
                                    <td scope="col">13.3</td>
                                    <td scope="col">3</td>
                                    <td scope="col">4</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-19A4-2</td>
                                    <td scope="col">3AUA0000039621</td>
                                    <td scope="col">17.6</td>
                                    <td scope="col">4</td>
                                    <td scope="col">5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-26A8-2</td>
                                    <td scope="col">3AUA0000039622</td>
                                    <td scope="col">24.4</td>
                                    <td scope="col">5.5</td>
                                    <td scope="col">7.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-34A1-2</td>
                                    <td scope="col">3AUA0000039623</td>
                                    <td scope="col">31</td>
                                    <td scope="col">7.5</td>
                                    <td scope="col">10</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-50A8-2</td>
                                    <td scope="col">3AUA0000039624</td>
                                    <td scope="col">46.2</td>
                                    <td scope="col">11</td>
                                    <td scope="col">15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">380/480V ± 10%, IP20 = NEMA 1</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Amp</th>
                                    <th scope="col">KW</th>
                                    <th scope="col">HP</th>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-01A3-4</td>
                                    <td scope="col">3AUA0000039625</td>
                                    <td scope="col">1.2</td>
                                    <td scope="col">0.37</td>
                                    <td scope="col">0.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-02A1-4</td>
                                    <td scope="col">3AUA0000039626</td>
                                    <td scope="col">1.9</td>
                                    <td scope="col">0.55</td>
                                    <td scope="col">0.75</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-02A6-4</td>
                                    <td scope="col">3AUA0000039627</td>
                                    <td scope="col">2.4</td>
                                    <td scope="col">0.75</td>
                                    <td scope="col">1</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-03A6-4</td>
                                    <td scope="col">3AUA0000039628</td>
                                    <td scope="col">3.3</td>
                                    <td scope="col">1.1</td>
                                    <td scope="col">1.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-04A5-4</td>
                                    <td scope="col">3AUA0000039629</td>
                                    <td scope="col">4.1</td>
                                    <td scope="col">1.5</td>
                                    <td scope="col">2</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-06A2-4</td>
                                    <td scope="col">3AUA0000039630</td>
                                    <td scope="col">5.6</td>
                                    <td scope="col">2.2</td>
                                    <td scope="col">3</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-08A0-4</td>
                                    <td scope="col">3AUA0000039631</td>
                                    <td scope="col">7.3</td>
                                    <td scope="col">3</td>
                                    <td scope="col">4</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-09A7-4</td>
                                    <td scope="col">3AUA0000039632</td>
                                    <td scope="col">8.8</td>
                                    <td scope="col">4</td>
                                    <td scope="col">5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-13A8-4</td>
                                    <td scope="col">3AUA0000039633</td>
                                    <td scope="col">12.5</td>
                                    <td scope="col">5.5</td>
                                    <td scope="col">7.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-17A2-4</td>
                                    <td scope="col">3AUA0000039634</td>
                                    <td scope="col">15.6</td>
                                    <td scope="col">7.5</td>
                                    <td scope="col">10</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-25A4-4</td>
                                    <td scope="col">3AUA0000039635</td>
                                    <td scope="col">23.1</td>
                                    <td scope="col">11</td>
                                    <td scope="col">15</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-34A1-4</td>
                                    <td scope="col">3AUA0000039636</td>
                                    <td scope="col">31</td>
                                    <td scope="col">15</td>
                                    <td scope="col">20</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-41A8-4</td>
                                    <td scope="col">3AUA0000039637</td>
                                    <td scope="col">38</td>
                                    <td scope="col">18.5</td>
                                    <td scope="col">25</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACS310-03E-48A4-4</td>
                                    <td scope="col">3AUA0000039638</td>
                                    <td scope="col">44</td>
                                    <td scope="col">22</td>
                                    <td scope="col">30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        {{-- Contenido Variadores ACQ580 --}}
        <div>
            <div class="col m-2 mt-3 pb-3">
                <h4 id="APE" class="h4">Variadores ACQ580</h4>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-md-6 mt-3">
                    <figure class="d-flex justify-content-center">
                      <img src="{{ asset('imagenes/ABB/ACQ580.jpg') }}"
                                width="80%" class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/12wQEeaSPkOGEbLSwWE0_65Q2HILVkkUn/view"
                            class="btn btn-primary mb-4">ACQ580</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                <div class="d-flex justify-content-center align-items-center">
            <iframe width="80%" height="315"
                            src="https://www.youtube.com/embed/R3h-51si0WY?si=FV9-JL6JIqJ2dk7s"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
        </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">200/240V ± 10%, IP21=NEMA 1</h4>
                    <h4 class="h4">Alimentación trifásica, 200 a 240V</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="col">Catálogo</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Amp</th>
                                    <th scope="col">HP</th>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-04A7-2</td>
                                    <td scope="col">3AXD50000417940</td>
                                    <td scope="col">4.7</td>
                                    <td scope="col">1</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-06A7-2</td>
                                    <td scope="col">3AXD50000417957</td>
                                    <td scope="col">6.7</td>
                                    <td scope="col">1.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-07A6-2</td>
                                    <td scope="col">3AXD50000417964</td>
                                    <td scope="col">7.6</td>
                                    <td scope="col">2</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-018A-2</td>
                                    <td scope="col">3AXD50000417988</td>
                                    <td scope="col">16.9</td>
                                    <td scope="col">5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-025A-2</td>
                                    <td scope="col">3AXD50000417995</td>
                                    <td scope="col">24.5</td>
                                    <td scope="col">7.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-032A-2</td>
                                    <td scope="col">3AXD50000418008</td>
                                    <td scope="col">31.2</td>
                                    <td scope="col">10</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-047A-2</td>
                                    <td scope="col">3AXD50000418015</td>
                                    <td scope="col">46.7</td>
                                    <td scope="col">15</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-060A-2</td>
                                    <td scope="col">3AXD50000418022</td>
                                    <td scope="col">60</td>
                                    <td scope="col">20</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-089A-2</td>
                                    <td scope="col">3AXD50000268474</td>
                                    <td scope="col">89</td>
                                    <td scope="col">30</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-115A-2</td>
                                    <td scope="col">3AXD50000268481</td>
                                    <td scope="col">115</td>
                                    <td scope="col">40</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-144A-2</td>
                                    <td scope="col">3AXD50000268498</td>
                                    <td scope="col">144</td>
                                    <td scope="col">50</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-171A-2</td>
                                    <td scope="col">3AXD50000268504</td>
                                    <td scope="col">171</td>
                                    <td scope="col">60</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-213A-2</td>
                                    <td scope="col">3AXD50000268511</td>
                                    <td scope="col">213</td>
                                    <td scope="col">75</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-276A-2</td>
                                    <td scope="col">3AXD50000268528</td>
                                    <td scope="col">276</td>
                                    <td scope="col">100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">200/240V ± 10%, IP55=NEMA 12</h4>
                    <h4 class="h4">Alimentación trifásica, 200 a 240V</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="col">Catálogo</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Amp</th>
                                    <th scope="col">HP</th>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-04A7-2+B056</td>
                                    <td scope="col">3AXD50000418091</td>
                                    <td scope="col">4.7</td>
                                    <td scope="col">1</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-06A7-2+B056</td>
                                    <td scope="col">3AXD50000418107</td>
                                    <td scope="col">6.7</td>
                                    <td scope="col">1.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-07A6-2+B056</td>
                                    <td scope="col">3AXD50000418114</td>
                                    <td scope="col">7.6</td>
                                    <td scope="col">2</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-012A-2+B056</td>
                                    <td scope="col">3AXD50000418121</td>
                                    <td scope="col">12</td>
                                    <td scope="col">3</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-018A-2+B056</td>
                                    <td scope="col">3AXD50000418138</td>
                                    <td scope="col">16.9</td>
                                    <td scope="col">5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-025A-2+B056</td>
                                    <td scope="col">3AXD50000418145</td>
                                    <td scope="col">24.5</td>
                                    <td scope="col">7.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-032A-2+B056</td>
                                    <td scope="col">3AXD50000418152</td>
                                    <td scope="col">31.2</td>
                                    <td scope="col">10</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-047A-2+B056</td>
                                    <td scope="col">3AXD50000418169</td>
                                    <td scope="col">46.7</td>
                                    <td scope="col">15</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-060A-2+B056</td>
                                    <td scope="col">3AXD50000418176</td>
                                    <td scope="col">60</td>
                                    <td scope="col">20</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-089A-2+B056</td>
                                    <td scope="col"></td>
                                    <td scope="col">89</td>
                                    <td scope="col">30</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-115A-2+B056</td>
                                    <td scope="col"></td>
                                    <td scope="col">115</td>
                                    <td scope="col">40</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-144A-2+B056</td>
                                    <td scope="col"></td>
                                    <td scope="col">144</td>
                                    <td scope="col">50</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-171A-2+B056</td>
                                    <td scope="col"></td>
                                    <td scope="col">171</td>
                                    <td scope="col">60</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-213A-2+B056</td>
                                    <td scope="col"></td>
                                    <td scope="col">213</td>
                                    <td scope="col">75</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-276A-2+B056</td>
                                    <td scope="col"></td>
                                    <td scope="col">276</td>
                                    <td scope="col">100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">380/480V ± 10%, IP20 = NEMA 1</h4>
                    <h4 class="h4">Alimentación trifásica, 380 a 480V</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Amp</th>
                                    <th scope="col">HP</th>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-02A7-4</td>
                                    <td scope="col">ACQ580-01-02A7-4</td>
                                    <td scope="col">2.1</td>
                                    <td scope="col">1</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-03A4-4</td>
                                    <td scope="col">3AXD50000039016</td>
                                    <td scope="col">3</td>
                                    <td scope="col">1.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-04A1-4</td>
                                    <td scope="col">3AXD50000039017</td>
                                    <td scope="col">3.4</td>
                                    <td scope="col">2</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-05A7-4</td>
                                    <td scope="col">3AXD50000039018</td>
                                    <td scope="col">4.8</td>
                                    <td scope="col">3</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-07A3-4</td>
                                    <td scope="col">3AXD50000039019</td>
                                    <td scope="col">6</td>
                                    <td scope="col">3</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-09A5-4</td>
                                    <td scope="col">3AXD50000039020</td>
                                    <td scope="col">7.6</td>
                                    <td scope="col">5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-12A7-4</td>
                                    <td scope="col">3AXD50000039021</td>
                                    <td scope="col">11</td>
                                    <td scope="col">7.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-018A-4</td>
                                    <td scope="col">3AXD50000039027</td>
                                    <td scope="col">16.2</td>
                                    <td scope="col">10</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-026A-4</td>
                                    <td scope="col">3AXD50000039028</td>
                                    <td scope="col">21</td>
                                    <td scope="col">15</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-033A-4</td>
                                    <td scope="col">3AXD50000039029</td>
                                    <td scope="col">27</td>
                                    <td scope="col">20</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-039A-4</td>
                                    <td scope="col">3AXD50000039030</td>
                                    <td scope="col">34</td>
                                    <td scope="col">25</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-046A-4</td>
                                    <td scope="col">3AXD50000039031</td>
                                    <td scope="col">40</td>
                                    <td scope="col">30</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-062A-4</td>
                                    <td scope="col">3AXD50000034599</td>
                                    <td scope="col">52</td>
                                    <td scope="col">40</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-073A-4</td>
                                    <td scope="col">3AXD50000034600</td>
                                    <td scope="col">65</td>
                                    <td scope="col">50</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-088A-4</td>
                                    <td scope="col">3AXD50000034601</td>
                                    <td scope="col">77</td>
                                    <td scope="col">60</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-106A-4</td>
                                    <td scope="col">3AXD50000034602</td>
                                    <td scope="col">96</td>
                                    <td scope="col">75</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-145A-4</td>
                                    <td scope="col">3AXD50000034603</td>
                                    <td scope="col">124</td>
                                    <td scope="col">100</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-169A-4</td>
                                    <td scope="col">3AXD50000034604</td>
                                    <td scope="col">156</td>
                                    <td scope="col">125</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-206A-4</td>
                                    <td scope="col">3AXD50000034605</td>
                                    <td scope="col">180</td>
                                    <td scope="col">150</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-246A-4</td>
                                    <td scope="col">3AXD50000034606</td>
                                    <td scope="col">240</td>
                                    <td scope="col">200</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-293A-4</td>
                                    <td scope="col">3AXD50000034607</td>
                                    <td scope="col">260</td>
                                    <td scope="col">200</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-363A-4</td>
                                    <td scope="col">3AXD50000034608</td>
                                    <td scope="col">361</td>
                                    <td scope="col">300</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-430A-4</td>
                                    <td scope="col">3AXD50000034609</td>
                                    <td scope="col">414</td>
                                    <td scope="col">350</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">380/480V ± 10%, IP21=NEMA 1</h4>
                    <h4 class="h4">Alimentación trifásica, 380 a 480V</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Amp</th>
                                    <th scope="col">HP</th>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-02A7-4+B056</td>
                                    <td scope="col">3AXD50000039032</td>
                                    <td scope="col">2.1</td>
                                    <td scope="col">1</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-03A4-4+B056</td>
                                    <td scope="col">3AXD50000039033</td>
                                    <td scope="col">3</td>
                                    <td scope="col">1.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-04A1-4+B056</td>
                                    <td scope="col">3AXD50000039034</td>
                                    <td scope="col">3.4</td>
                                    <td scope="col">2</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-05A7-4+B056</td>
                                    <td scope="col">3AXD50000039035</td>
                                    <td scope="col">4.8</td>
                                    <td scope="col">3</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-07A3-4+B056</td>
                                    <td scope="col">3AXD50000039036</td>
                                    <td scope="col">6</td>
                                    <td scope="col">3</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-09A5-4+B056</td>
                                    <td scope="col">3AXD50000039037</td>
                                    <td scope="col">7.6</td>
                                    <td scope="col">5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-12A7-4+B056</td>
                                    <td scope="col">3AXD50000039038</td>
                                    <td scope="col">11</td>
                                    <td scope="col">7.5</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-018A-4+B056</td>
                                    <td scope="col">3AXD50000039044</td>
                                    <td scope="col">16.2</td>
                                    <td scope="col">10</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-026A-4+B056</td>
                                    <td scope="col">3AXD50000039028</td>
                                    <td scope="col">21</td>
                                    <td scope="col">15</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-033A-4+B056</td>
                                    <td scope="col">3AXD50000039046</td>
                                    <td scope="col">27</td>
                                    <td scope="col">20</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-039A-4+B056</td>
                                    <td scope="col">3AXD50000039047</td>
                                    <td scope="col">34</td>
                                    <td scope="col">25</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-046A-4+B056</td>
                                    <td scope="col">3AXD50000039048</td>
                                    <td scope="col">40</td>
                                    <td scope="col">30</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-062A-4+B056</td>
                                    <td scope="col">3AXD50000034622</td>
                                    <td scope="col">52</td>
                                    <td scope="col">40</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-073A-4+B056</td>
                                    <td scope="col">3AXD50000034623</td>
                                    <td scope="col">65</td>
                                    <td scope="col">50</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-088A-4+B056</td>
                                    <td scope="col">3AXD50000034624</td>
                                    <td scope="col">77</td>
                                    <td scope="col">60</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-106A-4+B056</td>
                                    <td scope="col">3AXD50000034625</td>
                                    <td scope="col">96</td>
                                    <td scope="col">75</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-145A-4+B056</td>
                                    <td scope="col">3AXD50000034626</td>
                                    <td scope="col">124</td>
                                    <td scope="col">100</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-169A-4+B056</td>
                                    <td scope="col">3AXD50000034627</td>
                                    <td scope="col">156</td>
                                    <td scope="col">125</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-206A-4+B056</td>
                                    <td scope="col">3AXD50000034628</td>
                                    <td scope="col">180</td>
                                    <td scope="col">150</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-246A-4+B056</td>
                                    <td scope="col">3AXD50000034629</td>
                                    <td scope="col">240</td>
                                    <td scope="col">200</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-293A-4+B056</td>
                                    <td scope="col">3AXD50000034630</td>
                                    <td scope="col">260</td>
                                    <td scope="col">200</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-363A-4+B056</td>
                                    <td scope="col">3AXD50000034631</td>
                                    <td scope="col">361</td>
                                    <td scope="col">300</td>
                                </tr>
                                <tr>
                                    <td scope="col">ACQ580-01-430A-4+B056</td>
                                    <td scope="col">3AXD50000034632</td>
                                    <td scope="col">414</td>
                                    <td scope="col">350</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Boton hacia arriba -->
 <img class='ir-arriba' javascript:void(0) title="Volver arriba" src="{{ asset('imagenes/icons/up2.svg') }}"
            style="width: 48px; height: 48px;">
         <style>
            .ir-arriba {
            display: none;
            background-repeat: no-repeat;
            font-size: 20px;
            color: black;
            cursor: pointer;
            position: fixed;
            bottom: 10px;
            right: 10px;
            z-index: 2;
            }
         </style>
         <script>
            $(document).ready(function() {
                irArriba();
            }); //Hacia arriba
            function irArriba() {
                $('.ir-arriba').click(function() {
                    $('body,html').animate({
                        scrollTop: '0px'
                    }, 1000);
                });
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 0) {
                        $('.ir-arriba').slideDown(600);
                    } else {
                        $('.ir-arriba').slideUp(600);
                    }
                });
                $('.ir-abajo').click(function() {
                    $('body,html').animate({
                        scrollTop: '1000px'
                    }, 1000);
                });
            }
     
         </script>

         <livewire:footer />
</body>
</html>