<!-- bcp -->
@extends('layouts.master')
@section('content')
<div class="espacioHeader"></div>
<section class="pagina pagina--quetepasoestemes" style="opacity: 0;">
    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin limit">
        <li><a href="/">Inicio</a></li>
        /
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>
        /
        <li><a href="/lugares-de-pago-empresas">Bancos</a></li>
        /
        <li>BCP Telecrédito </li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin pagina__breadcrumb--mobile limit">
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>
        /
        <li><a href="/lugares-de-pago-empresas">Bancos</a></li>
        /
        <li>BCP</li>
    </ul>
    <h2 class="pagina__titulo pagina__titulo--quetepasoestemes pagina__titulo-new-j" id="new-text-mobile">Bancos</h2>
    <p class="parrafo_pagos new-parrafo_pagos" style="text-align:center;">Si eres empresa elige uno de los siguientes bancos disponibles para realizar el pago de tu recibo.</p>
    <article class="contbox">
        <ul class="banco__lista version-desktop-j">
            <li class="banco__item act">
                <a href="/lugares-de-pago-empresas-bcp">
                <img src="/assets/bcp-logo.png" alt="" class="bank-bcp-j">
                </a>
            </li>
            <li class="banco__item ">
                <a href="/lugares-de-pago-empresas-scotiabank">
                <img src="/assets/scotia-logo.png" alt="" class="bank-scotia-j">
                </a>
            </li>
        </ul>
        <ul class="banco__lista version-mobile-j">
            <li class="banco__item-mobile act">
                <a href="/lugares-de-pago-empresas-bcp">
                <img src="/assets/bcp-logo.png" class="bank-bcp-j" alt="">
                </a>
            </li>
            <li class="banco__item-mobile  ">
                <a href="/lugares-de-pago-empresas-scotiabank">
                <img src="/assets/scotia-logo.png" alt="" class="bank-scotia-j">
                </a>
            </li>
        </ul>
        <a href="#" class="capsula cap-bancos new-style"><span class="boton-banco-open"></span></a>
    </article>
    <div class="limit">
        <div class="acordeonContenedor--bancos">
            <div id="bcp" class="acordeon acordeon--estilo2 primero act">
                <div class="acordeon__item">
                    <div class="acordeon__boton act" data-target="b">
                        <strong>Vía  Web <span>Sin comisión</span></strong>
                        <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                        <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
                    </div>
                    <div class="acordeon__contenido act" data-target="b" style="overflow: hidden; height: auto;">
                        <div class="acordeon__contenido__detalle" data-target="b">
                            <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                                <div class="swiper-wrapper mobile slider-mobile-img" style="transition-duration: 0ms; transform: translate3d(-2700px, 0px, 0px);">
                                    <article class="swiper-slide" style="width: 900px;">
                                        <img src="assets/bcp/1.png" alt="">
                                        <p><span>1</span> Ingresa el número que aparece en tu tarjeta; tu clave de internet y código captcha.</p>
                                    </article>
                                    <article class="swiper-slide" style="width: 900px;">
                                        <img src="assets/bcp/2.png" alt="">
                                        <p><span>2</span> Selecciona la opción "Pago de servicio".</p>
                                    </article>
                                    <article class="swiper-slide swiper-slide-prev" style="width: 900px;">
                                        <img src="assets/bcp/3.png" alt="">
                                        <p><span>3</span> Selecciona "Clasificación de pagos telefonía", la Empresa y elige el Servicio a pagar. </p>
                                    </article>
                                    <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                        <img src="assets/bcp/4.png" alt="">
                                        <p><span>4</span>  Ingrese el número de teléfono, código de pago o código de recarga a pagar. Aparecerá la fecha de vencimiento, N° de 
                                            documento de pago, el tipo de pago que deseas realizar y el importe a pagar. 
                                        </p>
                                    </article>
                                    <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                        <img src="assets/bcp/5.png" alt="">
                                        <p><span>5</span> Escoge el pago como frecuente y si deseas enviar una constancia del abono por correo. Selecciona la opción firmar ahora o enviar a firmar.</p>
                                    </article>
                                </div>
                                <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left">
                                <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right swiper-button-disabled">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="acordeon__item">
                    <div class="acordeon__boton" data-target="d"><strong>Vía Débito automático <span>Sin comisión</span> </strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
                    <div class="acordeon__contenido" data-target="d" style="overflow: hidden; height: 0px;">
                        <div class="acordeon__contenido__detalle" data-target="d">
                            <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                    <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                        <img src="assets/debito-bcp/1.png" alt="">
                                        <p><span>1</span> Ingresa <a href="https://www.viabcp.com/" target="_blank" rel="noopener">www.viabcp.com </a> y haz clic en CUENTAS, luego en AFILIAR / DESAFILIAR AL DÉBITO AUTOMÁTICO</p>
                                    </article>
                                    <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                        <img src="assets/debito-bcp/2.png" alt="">
                                        <p><span>2</span> Registra tu tarjeta y clave</p>
                                    </article>
                                    <article class="swiper-slide" style="width: 900px;">
                                        <img src="assets/debito-bcp/3.png" alt="">
                                        <p><span>3 </span>Selecciona AMERICA MÓVIL PERÚ S.A.C y completa los datos de la afilición.</p>
                                    </article>
                                </div>
                                <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled"> <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="puntoFooter"></div>
@endsection