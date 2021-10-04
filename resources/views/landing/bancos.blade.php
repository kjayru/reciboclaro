@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

<section class="pagina pagina--quetepasoestemes pb-pag" style="opacity: 0;">

    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
        <li><a href="/lugares-de-pago">Banca digital</a></li>/
        <li>{{ $post->title }} </li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin pagina__breadcrumb--mobile limit">
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
        <li><a href="/lugares-de-pago">Banca digital</a></li>/
        <li>{{ $post->title }} </li>
       
    </ul>

    <h2 class="pagina__titulo ">Banca digital</h2>

   <!--  <p class="parrafo_pagos pb-" style="text-align:center;">Paga tu recibo por internet a través de Mi Claro (sin costo por comisión) o por la banca digital de tu banco</p>
 -->
    <!-- <center><a class="banner__debito" href="https://conoceturecibo.claro.com.pe/debito-automatico"></a></center>
     -->
    <article class="contbox">
           
            <!-- <ul class="banco__lista" d="list_bank_desktop" >
                
                <li class="banco__item @if($post->slug=='mi-claro') act @endif">
                    <a href="/lugares-de-pago/Pagos-digitales/mi-claro" >
                        <img src="/img/mi-claro.svg" alt="">
                    </a>
                </li>


                <li class="banco__item @if($post->slug=='Interbank') act @endif">
                    <a href="/lugares-de-pago/Pagos-digitales/Interbank" >
                        <img src="/img/interbank.svg" alt="">
                    </a>
                </li>
                <li class="banco__item @if($post->slug =='BCP') act @endif">
                        <a href="/lugares-de-pago/Pagos-digitales/bcp">
                            <img src="/img/bcp.svg" alt="">
                        </a>
                    </li>
                <li class="banco__item @if($post->slug=='BBVA') act @endif">
                    <a href="/lugares-de-pago/Pagos-digitales/bbva">
                        <img src="/img/bbva.svg" alt="">
                    </a>
                </li>
                <li class="banco__item @if($post->slug=='Scotiabank') act @endif">
                    <a href="/lugares-de-pago/Pagos-digitales/scotiabank">
                        <img src="/img/scotiabank.svg" alt="">
                    </a>
                </li>
                <li class="banco__item @if($post->slug=='banco-de-la-nacion') act @endif">
                    <a href="/lugares-de-pago/Pagos-digitales/banco-de-la-nacion">
                        <img src="/img/banco-de-la-nacion.svg" alt="">
                    </a>
                </li>

            </ul> -->
         
            <ul class="banco__lista" id="list_bank">
                    
                    <!-- <li  class=" mi-claro banco__item-mobile  @if($post->slug=='mi-claro') act @endif" >
                        <a href="/lugares-de-pago/Pagos-digitales/mi-claro">
                            <img src="/img/mi-claro.svg" alt="">
                        </a>
                    </li> -->

                    <li  class="Interbank  banco__item-mobile  @if($post->slug=='Interbank') act @endif" >
                        <a href="/lugares-de-pago/Pagos-digitales/Interbank">
                            <img src="/img/interbank.svg" alt="">
                        </a>
                    </li>
                    <li  class=" bcp banco__item-mobile @if($post->slug=='BCP') act @endif" >
                            <a href="/lugares-de-pago/Pagos-digitales/bcp">
                                <img src="/img/bcp.svg" alt="">
                            </a>
                        </li>
                    <li  class=" bbva banco__item-mobile @if($post->slug=='BBVA') act @endif" >
                        <a href="/lugares-de-pago/Pagos-digitales/bbva">
                            <img src="/img/bbva.svg" alt="">
                        </a>
                    </li>
                    <li  class=" scotiabank banco__item-mobile @if($post->slug=='Scotiabank') act @endif" >
                        <a href="/lugares-de-pago/Pagos-digitales/scotiabank">
                            <img src="/img/scotiabank.svg" alt="">
                        </a>
                    </li>
                    <li  class="banco-de-la-nacion  banco__item-mobile @if($post->slug=='banco-de-la-nacion') act @endif" >
                        <a href="/lugares-de-pago/Pagos-digitales/banco-de-la-nacion">
                            <img src="/img/banco-de-la-nacion.svg" alt="">
                        </a>
                    </li>
    
            </ul>
                <!-- <a href="#" class="capsula cap-bancos"><span class="boton-banco-open"></span></a> -->
            
    </article>
    @if(@$sliders[0])
    <div class="limit">
        <div class="acordeonContenedor--bancos">
            <div id="bcp" class="acordeon acordeon--estilo2 primero act d-flex">



                <div class="acordeon__item second">
                    <div class="acordeon__boton" data-target="a">
                        <strong>Vía Web <span>Sin comisión</span></strong>
                        <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                        <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
                    </div>
                    <div class="acordeon__contenido" data-target="a">
                        <div class="acordeon__contenido__detalle" data-target="a">
                            <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro">
                                    <div class="swiper-wrapper">
                                     @foreach($sliders[0]->slideritems as $slider)     
                                        
                                        <article class="swiper-slide">
                                            <img src="/storage/{{ $slider->imagen }}" alt="">
                                            {!! $slider->content !!}
                                        </article>
                                    @endforeach
                                       
                                    </div>
                                    <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left" />
                                    <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right" />
                            </div>
                        </div>
                    </div>
                </div>
     @endif

    @if(@$sliders[1])
                <div class="acordeon__item first">
                    <div class="acordeon__boton act" data-target="b">
                        <strong>Vía APP <span>Sin comisión</span></strong>
                        <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                        <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
                    </div>
                    <div class="acordeon__contenido open act" data-target="b">
                        <div class="acordeon__contenido__detalle" data-target="b">
                            <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro">
                                    <div class="swiper-wrapper mobile">
                                      @foreach($sliders[1]->slideritems as $slider) 
                                        <article class="swiper-slide">
                                            <img src="/storage/{{ $slider->imagen }}" alt="" >
                                            {!! $slider->content !!}
                                        </article>
                                       
                                       @endforeach 
                                    </div>
                                    <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left" />
                                    <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right" />
                            </div>
                        </div>
                    </div>
                </div>
    @endif


                {!! $post->body !!}
            </div>
           
            
        </div>
    </div>


    <!-- <center><a class="banner__debito ptt" href="http://conoceturecibo.com/debito-automatico"></a></center> -->

    <div class="view-more-nd">
            <a href="lugares-de-pago/debito-automatico" >
                <h3>Evita las colas y ahorra tiempo afiliando tu tarjeta al Débito Automático</h3>  <span>Ver más</span>
            </a>
        </div>

</section>

<div class="puntoFooter"></div>
@endsection