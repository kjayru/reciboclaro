@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

<section class="pagina pagina--quetepasoestemes pb-pag">

    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago-empresas">Lugares y medios de pago</a></li>/
        <li>Banca digital</li>
   
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin pagina__breadcrumb--mobile limit">
        <li><a href="/lugares-de-pago-empresas">Lugares y medios de pago</a></li>/
        <li>Banca digital</li>
    </ul>

    <h2 class="pagina__titulo ">Banca digital</h2>

    <article class="contbox">
      <ul class="banco__lista" id="list_bank_digital">
        <li  class="banco__item-mobile bcp digital-empresa-img"  id="tab-empresabcp">
           <!--  <a href="/lugares-de-pago/Pagos-digitales/Interbank"> -->
                <img src="/assets/bcp-logo.png" alt="">
            <!-- </a> -->
        </li>
        <li  class="banco__item-mobile scotiabank digital-empresa-img"  id="tab-empresascotiabank">
               <!--  <a href="/lugares-de-pago/Pagos-digitales/bcp"> -->
                    <img src="/assets/scotia-logo.png" alt="">
                <!-- </a> -->
            </li>
      </ul>
    </article>

  
    <div class="limit limitt">
        <div class="acordeonContenedor--bancos">


          <div id="info-empresabcp" class="bancadigital-acor acordeon acordeon--estilo2 primero act">
             <div class="acordeon__item">
                <div class="acordeon__boton act" data-target="b">
                   <strong>Vía  Web <span>Sin comisión</span></strong>
                   <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                   <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
                </div>
                <div class="acordeon__contenido act" data-target="b" style="overflow: hidden; height: auto;">
                   <div class="acordeon__contenido__detalle" data-target="b">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                         <div class="swiper-wrapper mobile slider-mobile-img" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                            <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                               <img src="/assets/bcp/1.png" alt="">
                               <p><span>1</span> Ingresa el número que aparece en tu tarjeta; tu clave de internet y código captcha.</p>
                            </article>
                            <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                               <img src="/assets/bcp/2.png" alt="">
                               <p><span>2</span> Selecciona la opción "Pago de servicio".</p>
                            </article>
                            <article class="swiper-slide" style="width: 900px;">
                               <img src="/assets/bcp/3.png" alt="">
                               <p><span>3</span> Selecciona "Clasificación de pagos telefonía", la Empresa y elige el Servicio a pagar. </p>
                            </article>
                            <article class="swiper-slide" style="width: 900px;">
                               <img src="/assets/bcp/4.png" alt="">
                               <p><span>4</span>  Ingrese el número de teléfono, código de pago o código de recarga a pagar. Aparecerá la fecha de vencimiento, N° de 
                                  documento de pago, el tipo de pago que deseas realizar y el importe a pagar. 
                               </p>
                            </article>
                            <article class="swiper-slide" style="width: 900px;">
                               <img src="/assets/bcp/5.png" alt="">
                               <p><span>5</span> Escoge el pago como frecuente y si deseas enviar una constancia del abono por correo. Selecciona la opción firmar ahora o enviar a firmar.</p>
                            </article>
                         </div>
                         <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                         <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
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



         <div id="info-empresascotiabank" class="bancadigital-acor acordeon acordeon--estilo2 primero act">
            <div class="acordeon__item">
               <div class="acordeon__boton act" data-target="b">
                  <strong>Vía Web <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
               </div>
               <div class="acordeon__contenido act" data-target="b" style="overflow: hidden; height: auto;">
                  <div class="acordeon__contenido__detalle" data-target="b">
                     <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                        <div class="swiper-wrapper mobile slider-mobile-img" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                           <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                              <img src="/assets/scotia/1.png" alt="">
                              <p><span>1</span> Ingresa el número de convenio; número de usuario y su clave secreta.</p>
                           </article>
                           <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                              <img src="/assets/scotia/2.png" alt="">
                              <p><span>2</span> En caso de ser multiempresa, seleccionar la empresa a pagar. </p>
                           </article>
                           <article class="swiper-slide" style="width: 900px;">
                              <img src="/assets/scotia/3.png" alt="">
                              <p><span>3</span> Selecciona la opción "Pago de servicios". </p>
                           </article>
                           <article class="swiper-slide" style="width: 900px;">
                              <img src="/assets/scotia/4.png" alt="">
                              <p><span>4</span> Selecciona el Servicio a pagar.</p>
                           </article>
                           <article class="swiper-slide" style="width: 900px;">
                              <img src="/assets/scotia/5.png" alt="">
                              <p><span>5</span> Seleccione el  N° de 
                                 documento de pago y los datos de la cuenta de cargo. 
                              </p>
                           </article>
                        </div>
                        <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                        <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                     </div>
                  </div>
               </div>
            </div>
            <div class="acordeon__item">
               <div class="acordeon__boton" data-target="d"><strong>Vía Débito automático <span>Sin comisión</span> </strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
               <div class="acordeon__contenido" data-target="d">
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


    <div class="view-more-nd">
        <a href="/lugares-de-pago/debito-automatico" >
            <h3>Evita las colas y ahorra tiempo afiliando tu tarjeta al Débito Automático</h3>  <span>Ver más</span>
        </a>
    </div>

</section>

<div class="puntoFooter"></div>
@endsection