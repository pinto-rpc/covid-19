@extends('layout')

@section('contenido')

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">#QuedateEnCasa</h1>
                                <div class="animation animated-item-2">
                                    Se declara como emergencia sanitaria la epidemia generada por COVID-19.
                                </div>
                                <a class="btn-slide animation animated-item-3" href="#">Leer Mas</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.item-->

            <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Medidas de Prevencion</h1>
                                <div class="animation animated-item-2">
                                    Las medidas de prevencion son las siguientes
                                </div>
                                <a class="btn-slide  animation animated-item-3" href="#">Leer mas</a>
                                <!--<a class="btn-slide animation animated-item-3" href="#">Get Started</a>-->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!--/.item-->

        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section>
<!--/#main-slider-->
@endsection

