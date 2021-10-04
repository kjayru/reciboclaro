@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>



<section class="pagina">

    <ul class="pagina__breadcrumb limit">
        <li><a href="/">Inicio</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="/">Inicio</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>

   <!--  <h2 class="pagina__titulo"><img src="/img/deayuda_lugares.png" alt="Lugares de pago" /> Lugares de Pago</h2> -->


    <!-- <center><a class="banner__debito" href="https://conoceturecibo.claro.com.pe/debito-automatico"></a></center> -->
 

   <!--  <p class="parrafo_pagos" style="text-align:center;">Conoce los canales disponibles para realizar el pago de tu recibo</p> -->

    <!-- <div class="tab__lugares">
        <ul>
            <li id="personas" class="active">
                <a href="/lugares-de-pago">Para personas</a>
                <a href="/lugares-de-pago">Canales online</a>
            </li>
            <li id="empresas">
                <a href="/lugares-de-pago-empresas">Para empresas </a>
                <a href="/lugares-de-pago-empresas">Canales presenciales </a>
            </li>
        </ul>
    </div> -->
    <br>
    <div class="list__title">
        <h3>Lugares de pago</h3>
    </div>  

    <div class="list_tab">     
        <ul id="listTab">
            <li  id="tab-canales-digitales">
                <span >Canales online</span>
               <!--  <a href="/lugares-de-pago">Canales online</a> -->
            </li>
            <li  id="tab-canales-presenciales">
                <span>Canales presenciales</span>
               <!--  <a href="/lugares-de-pago-empresas">Canales presenciales </a> -->
            </li>
        </ul>
    </div>



    <div id="canales-digitales" class="content-infoTab">
        <div class="list__info">
            <p>Paga tu recibo rápido y fácil sin salir de casa</p>
        </div>

        <div class="list__item" id="canalesdig">
            <div class="item type1">
                <div class="item__image">
                    <img src="/img/mi-claro.svg" alt=""  class="type1">
                </div>
                <div class="item__title">
                    <h3>Mi Claro</h3>
                    <p>Realiza tus consultas de deuda, saldo o compra de paquetes desde la comodidad de tu casa. </p>
                </div>
                <div class="item__link">
                    <a href="lugares-de-pago/mi-claro">
                        Ver más
                    </a>
                </div>
            </div>


            <div class="item">
                <div class="item__image">
                    <img src="/img/bancos.svg" alt="" >
                </div>
                <div class="item__title">
                    <h3>Banca digital</h3>
                    <p> Paga tus recibos desde las aplicaciones o web de tus bancos. </p>
                </div>
                <div class="item__link">
                    <a href="lugares-de-pago/banco-digital">
                        Ver más
                    </a>
                </div>
            </div>


            <div class="item">
                <div class="item__image">
                    <img src="/assets/_cajeros.svg" alt="" >
                </div>
                <div class="item__title">
                    <h3>Débito automático</h3>
                    <p>Evita las colas y moras afiliando el pago de tus servicios a una de tus tarjetas.
  </p>
                </div>
                <div class="item__link">
                    <a href="lugares-de-pago/debito-automatico">
                        Ver más
                    </a>
                   <!--  <form method="post" action="https://pagoprogramado.visanetonline.pe/Afiliacion" target="_blank">
                        <input type="hidden" id="codigoComercio" name="codigoComercio" maxlength="9" required value="467534256" />
                        <input type="hidden" id="etiqueta" name="etiqueta" required value="Celular"/> 
                        <input type="hidden" id="maxAmount" name="maxAmount" value="Si"> -->
                        

                        <!-- --el select va comentado-- -->
                        <!-- <select id="productos" name="productos">
                          <option value="">Seleccione</option>
                          <option value="0012020">PRUEBA VISANET</option> 
                        </select> -->


                       <!--  <input type="submit" value="Afiliarse">
                    </form> -->
                </div>
            </div>
        </div>


        <div class="list__subtitle">
            <h3>¿Tienes una empresa?</h3>
            <p>Encuentra más información de los lugares de pago 
                <a href="/lugares-de-pago-empresas">aquí</a></p>
        </div>
    </div>


    <div id="canales-presenciales" class="content-infoTab">
        <div class="list__info">
            <p>Más opciones para pagar tu recibo</p>
        </div>

        <div class="list__item type2" id="canalespre">
            <div class="item">
                <div class="item__image">
                    <img src="/img/puntos-autorizados.svg" alt="" >
                </div>
                <div class="item__title">
                    <h3>Puntos autorizados</h3>
                    <p>Realiza tus pagos en nuestros puntos autorizados. </p>
                </div>
                <div class="item__link">
                    <a href="lugares-de-pago/puntos-autorizados">
                        Ver más
                    </a>
                </div>
            </div>


            <div class="item">
                <div class="item__image">
                    <img src="/img/cajeros.svg" alt="" >
                </div>
                <div class="item__title">
                    <h3>Cajeros Claro</h3>
                    <p> Paga tus servicios en nuestros cajeros.  </p>
                </div>
                <div class="item__link">
                    <a href="lugares-de-pago/cajeros-claro">
                        Ver más
                    </a>
                </div>
            </div>
       
        </div>


        <!-- <div class="list__iframe">
            <h3> Encuentra el establecimiento de pago más cercano</h3>
            
            <div class="iframe">
                <iframe frameborder="0" width="100%" height="174" src="https://staticcatalogo.azurewebsites.net/apps/store-locator/cacs/"></iframe>

              
            </div>  

        </div> -->

        <br><br><br>

    </div>


<!-- 
    <div class="limit" id="para_personas">
        <ul class="lugaresdepago__opciones">
           
           @foreach($lugares as $key => $lugar )
            <li class="lugaresdepago__item a  @if($key === 0) bancos @endif">
                <strong>{{$lugar->name}}</strong>
               @if($key === 0) 
                 {!! $lugar->descripcion !!}
                    <ul class="bancos__listaSelect">
                        @foreach($lugar->posts as $post)
                        <li><a href="/lugares-de-pago/Pagos-digitales/{{ $post->slug}}">{{ $post->title }}</a></li>
                        @endforeach
                    </ul>
                @else
                <a href="/lugares-de-pago/{{ $lugar->slug }}">
                    {!! $lugar->descripcion !!} 
                 </a>
                @endif
            </li>


           @endforeach
           <li class="lugaresdepago__item a  bancos ">
                <strong> Débito Automático</strong>
                <a href="/debito-automatico">
                     <span>
                        <img  src="/assets/_cajeros.svg" alt="" class="imgWeb width-">
                        <img  src="/assets/_cajeros-blanco.svg" alt="" class="imgMobile width-">
                    </span>
                </a>
                <ul class="bancos__listaSelect a">
                    <li>
                        <a href="https://www.visanetrecurrentes.com/afiliacion/formulario-afiliacion?codigoComercio=467534256" target="_blank">Visa</a>
                        <form method="post" action="https://pagoprogramado.visanetonline.pe/Afiliacion" target="_blank">
                            <input type="hidden" id="codigoComercio" name="codigoComercio" maxlength="9" required value="467534256" />
                            <input type="hidden" id="etiqueta" name="etiqueta" required value="Celular"/> 
                            <input type="hidden" id="maxAmount" name="maxAmount" value="Si">
                            

                            --el select va comentado--
                            <select id="productos" name="productos">
                              <option value="">Seleccione</option>
                              <option value="0012020">PRUEBA VISANET</option> 
                            </select>


                            <input type="submit" value="Afiliarse">
                        </form>
                    </li>
                    <li><a href="https://www.viabcp.com/" target="_blank">BCP</a></li>
                    <li><a href="https://interbank.pe/solicitar/pago/automatico/inicio?mcid=sms:claro:00-11-2019_pago_automatico" target="_blank">Interbank</a></li>
                    <li><a href="https://www.scotiabank.com.pe/Personas" target=" _blank">Scotiabank</a></li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    
                </ul>
            </li>
        </ul>
    </div>
 -->

   <!--  <div class="limit notactive" id="para_empresas">
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
 -->
    

</section>

<div class="puntoFooter"></div>

@endsection