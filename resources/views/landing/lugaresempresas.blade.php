@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

<section class="pagina">

    <ul class="pagina__breadcrumb limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago">Empresas</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago">Empresas</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>

    <div class="list__title">
        <h3>Lugares de pago</h3>
    </div>  

    <div class="list_tab">     
        <ul class="page-company">
            <li  class=" active ">
                <span >Canales online</span>
               <!--  <a href="/lugares-de-pago">Canales online</a> -->
            </li>
        </ul>
    </div>




    <div class="content-infoTab active content-info-empresa">
        <div class="list__info">
            <p>Paga tu recibo rápido y fácil sin salir de casa</p>
        </div>

        <div class="list__item type2 page-pay-company" id="canalesempresas" >
            <div class="item">
                <div class="item__image">
                    <img src="/img/bancos.svg" alt="" >
                </div>
                <div class="item__title">
                    <h3>Banca digital</h3>
                    <p> Paga tus recibos desde las aplicaciones o web de tus bancos. </p>
                </div>
                <div class="item__link">
                    <a href="/lugares-de-pago-empresas/banca-digital">
                        Ver más
                    </a>
                </div>
            </div>


            <div class="item">
                <div class="item__image">
                    <img src="/assets/_cajeros.svg" alt="" >
                </div>
                <div class="item__title">
                    <h3>Débito Automático</h3>
                    <p>Evita las colas y moras afiliando el pago de tus servicios a una de tus tarjetas. </p>
                </div>
                <div class="item__link">
                    <a href="/lugares-de-pago-empresas/debito-automatico">
                        Ver más
                    </a>
                </div>
            </div>
       
        </div>

        <br>
        <br>
        <br>

    </div>

</section>

<div class="puntoFooter"></div>

<!-- <div class="espacioHeader"></div>

<section class="pagina">

    <ul class="pagina__breadcrumb limit">
        <li><a href="/">Inicio</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="/">Inicio</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>

    <h2 class="pagina__titulo"><img src="/img/deayuda_lugares.png" alt="Lugares de pago" /> Lugares de Pago</h2>


    <p class="parrafo_pagos" style="text-align:center;">Conoce los canales disponibles para realizar el pago de tu recibo</p>

    <div class="tab__lugares">
        <ul>
            <li id="personas" >
                <a href="/lugares-de-pago">Para personas</a>
            </li>
            <li id="empresas" class="active"><a href="/lugares-de-pago-empresas">Para empresas </a></li>
        </ul>
    </div>

    


    <div class="limit " id="para_empresas">
        <ul class="lugaresdepago__opciones">
            <li class="lugaresdepago__item   bancos ">
                <strong>Bancos</strong>
                <span>
                    <img src="/assets/bank-icon.svg" alt="" class="imgWeb">
                    <img src="/assets/bank-icon_.svg" alt="" class="imgMobile">
                </span>
                <ul class="bancos__listaSelect new-type">
                    <li><a href="/lugares-de-pago-empresas-bcp">BCP Telecrédito </a></li>
                    <li><a href="/lugares-de-pago-empresas-scotiabank">Scotiabank Telebanking</a></li>
                </ul>
            </li>

            <li class="lugaresdepago__item   bancos ">
                <strong>Débito Automático </strong>
                <span>
                    <img src="/assets/_cajeros.svg" alt="" class="imgWeb">
                    <img src="/assets/_cajeros-blanco.svg" alt="" class="imgMobile">
                </span>
                <ul class="bancos__listaSelect new-type">
                    <li><a href="/lugares-de-pago-empresas-debito-automatico-bcp">BCP </a></li>
                    <li><a href="/lugares-de-pago-empresas-debito-automatico-scotiabank">Scotiabank</a></li>
                </ul>
            </li>

            
        </ul>
    </div>
</section>

<div class="puntoFooter"></div> -->

@endsection