@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

<section class="pagina pagina--quetepasoestemes pb-pag">

    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago-empresas">Lugares y medios de pago</a></li>/
        <li><a href="/lugares-de-pago-empresas">Débito Automático</a></li>/
        <li id="textDesktop">BCP</li>
   
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin pagina__breadcrumb--mobile limit">
        <li><a href="/lugares-de-pago-empresas">Lugares y medios de pago</a></li>/
        <li><a href="/lugares-de-pago-empresas">Débito Automático</a></li>/
        <li id="textMob">BCP</li>
    </ul>

    <h2 class="pagina__titulo ">Débito Automático</h2>

    <article class="contbox">
      <ul class="banco__lista" id="list_bank_debito">
        <li  class="banco__item-mobile bcp "  id="tab-debitobcp">
           <!--  <a href="/lugares-de-pago/Pagos-digitales/Interbank"> -->
                <img src="/assets/bcp.svg" alt="">
            <!-- </a> -->
        </li>
        <li  class="banco__item-mobile scotiabank"   id="tab-debitoscotiabank">
               <!--  <a href="/lugares-de-pago/Pagos-digitales/bcp"> -->
                    <img src="/assets/scotiabank.svg" alt="">
                <!-- </a> -->
            </li>
      </ul>
    </article>

  
    <div class="limit limitt">
        <div class="acordeonContenedor--bancos">


          <div id="info-debitobcp" class="bancadigital-acor acordeon acordeon--estilo2 primero act">
             <div class="acordeon__item">
                <div class="acordeon__boton act" data-target="d" ><strong>Vía Débito automático <span>Sin comisión</span> </strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
                <div class="acordeon__contenido act" data-target="d" style="overflow: hidden; height: auto;">
                   <div class="acordeon__contenido__detalle" data-target="d">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                         <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                               <img src="/assets/debito-bcp/1.png" alt="">
                               <p><span>1</span> Ingresa <a href="https://www.viabcp.com/" target="_blank" rel="noopener">www.viabcp.com </a> y haz clic en CUENTAS, luego en AFILIAR / DESAFILIAR AL DÉBITO AUTOMÁTICO</p>
                            </article>
                            <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                               <img src="/assets/debito-bcp/2.png" alt="">
                               <p><span>2</span> Registra tu tarjeta y clave</p>
                            </article>
                            <article class="swiper-slide" style="width: 900px;">
                               <img src="/assets/debito-bcp/3.png" alt="">
                               <p><span>3 </span>Selecciona AMERICA MÓVIL PERÚ S.A.C y completa los datos de la afilición.</p>
                            </article>
                         </div>
                         <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled"> <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                   </div>
                </div>
             </div>
          </div>



         <div id="info-debitoscotiabank" class="bancadigital-acor acordeon acordeon--estilo2 primero act">
            <div class="acordeon__item type2">
               <div class="acordeon__boton act" data-target="d"><strong>Vía Débito automático <span>Sin comisión</span> </strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
               <div class="acordeon__contenido act" data-target="d" style="overflow: hidden; height: auto;">
                  <div class="acordeon__contenido__detalle" data-target="d">
                     <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                           <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                              <img src="/assets/debito-scotiabank/1.png" alt="">
                              <p><span>1</span> Ingresa a la banca por internet de <a href="https://www.scotiabank.com.pe/Personas/Default" target="_blank" rel="noopener">Scotiabank </a> y selecciona la opción ACCEDER</p>
                           </article>
                           <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                              <img src="/assets/debito-scotiabank/2.png" alt="">
                              <p><span>2</span>Elige la opción SERVICIO AL CLIENTE, luego seleccionar CARGO AUTOMÁTICO y haz clic en AFILIACIÓN</p>
                           </article>
                           <article class="swiper-slide" style="width: 900px;">
                              <img src="/assets/debito-scotiabank/3.png" alt="">
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


   <!--  <div class="view-more-nd">
        <a href="/debito-automatico" >
            <h3>Evita las colas y ahorra tiempo afiliando tu tarjeta al Débito Automático</h3>  <span>Ver más</span>
        </a>
    </div> -->

</section>

<div class="puntoFooter"></div>
@endsection