@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

<section class="pagina pagina--quetepasoestemes pb-pag">

    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
        <li>Banca digital</li>
   
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin pagina__breadcrumb--mobile limit">
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
        <li>Banca digital</li>
    
       
    </ul>

    <h2 class="pagina__titulo ">Banca digital</h2>

    <article class="contbox">
      <ul class="banco__lista" id="list_bank">
        <li  class="banco__item-mobile interbank"  id="tab-interbank">
           <!--  <a href="/lugares-de-pago/Pagos-digitales/Interbank"> -->
                <img src="/img/interbank.svg" alt="">
            <!-- </a> -->
        </li>
        <li  class="banco__item-mobile bcp"  id="tab-bcp">
               <!--  <a href="/lugares-de-pago/Pagos-digitales/bcp"> -->
                    <img src="/img/bcp.svg" alt="">
                <!-- </a> -->
            </li>
        <li  class="banco__item-mobile bbva"  id="tab-bbva">
           <!--  <a href="/lugares-de-pago/Pagos-digitales/bbva"> -->
                <img src="/img/bbva.svg" alt="">
            <!-- </a> -->
        </li>
        <li  class="banco__item-mobile scotiabank"  id="tab-scotiabank">
            <!-- <a href="/lugares-de-pago/Pagos-digitales/scotiabank"> -->
                <img src="/img/scotiabank.svg" alt="">
            <!-- </a> -->
        </li>
        <li  class="banco__item-mobile banco-nacion"  id="tab-banco-nacion">
            <!-- <a href="/lugares-de-pago/Pagos-digitales/banco-de-la-nacion"> -->
                <img src="/img/banco-de-la-nacion.svg" alt="">
            <!-- </a> -->
        </li>

        <li  class="banco__item-mobile bim"  id="tab-bim">
            <!-- <a href="/lugares-de-pago/Pagos-digitales/banco-de-la-nacion"> -->
                <img src="/img/bim_logo.svg" alt="">
            <!-- </a> -->
        </li>
      </ul>
    </article>

  
    <div class="limit limitt">
        <div class="acordeonContenedor--bancos">

     
        <div id="info-interbank" class="interbank bancadigital-acor acordeon acordeon--estilo2 primero d-flex">

          <div class="acordeon__item second">
              <div class="acordeon__boton" data-target="a">
                  <strong>Vía Web <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>

              <div class="acordeon__contenido" data-target="a">
                  <div class="acordeon__contenido__detalle" data-target="a">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/eBHuBkXGyqrkPt6gDV45.png" alt="">
                                  <p><span>1</span> Ingresa a la banca por internet de <a href="https://interbank.pe" target="_blank" rel="noopener">Interbank</a> y selecciona la opción Personas.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/NLlkPsBKmlCCmuqnJ5Dz.png" alt="">
                                  <p><span>2</span> Registra tu tarjeta y número de documento.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/VFIju326BBNIt69pKSq4.png" alt="">
                                  <p><span>3 </span>Ingresa a la sección "Mis Operaciones", selecciona PAGO DE SERVICIOS.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/4CdWbLuoVlzqQ47TB7Kx.png" alt="">
                                  <p><span>4</span> Escribe CLARO y selecciona el servicio que deseas pagar, por ejemplo "PAGOPORDNI" <br> Ingresa el "DNI" y ¡Listo!</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/7Tomq9r7pDGOvoXHYGz7.png" alt="">
                                  <p><span>5</span> Selecciona el recibo que quieres cancelar y la cuenta de la cuál se va descontar el monto. Luego, haz clic en Siguiente.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/asmA2tlvNwKjC9FJZm6o.png" alt="">
                                  <p><span>6</span>Valida el monto a cancelar e ingresa la clave SMS de confirmación.   </p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="acordeon__item first">
              <div class="acordeon__boton act" data-target="b">
                  <strong>Vía APP <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>
              <div class="acordeon__contenido open act" data-target="b" style="overflow: hidden; height: auto;">
                  <div class="acordeon__contenido__detalle" data-target="b">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper mobile" style="transform: translate3d(0px, 0px, 0px);">
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/banca-digital/Interbank/interbank_1.png" alt="">
                                  <p><span>1</span> Inicia sesión en la App de Interbank registrando tu número de tarjeta y documento de identidad. Si aún no la tienes descárgala desde Google Play o App Store.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/banca-digital/Interbank/interbank_2.png" alt="">
                                  <p><span>2</span> Ingresa a la sección "Paga y Recarga", selecciona PAGO A INSTITUCIÓN O EMPRESA</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/Interbank/interbank_3.png" alt="">
                                  <p><span>3</span> Selecciona CLARO y selecciona el servicio que deseas pagar, por ejemplo, "PAGOPORDNI". <br> Ingresa el "Número de DNI" y ¡Listo!</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/Interbank/interbank_4.png" alt="">
                                  <p><span>4</span> Selecciona el recibo que quieres pagar.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/Interbank/interbank_5.png" alt="">
                                  <p><span>5</span> Valida los datos del recibo en la pantalla de CONFIRMACIÓN DE PAGO e ingresa la clave de SMS que llegará a tu celular.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>

          <div class="acordeon__item" style="display: none;">
              <div class="acordeon__boton" data-target="c"><strong>Vía Agente Interbank <span>Comisión S/ 1 sol</span></strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
              <div class="acordeon__contenido" data-target="c">
                  <div class="acordeon__contenido__detalle" data-target="c">
                      <article class="articleBullet">
                          <p><span>1</span>Acércate a cualquier agente Interbank.</p>
                          <p><span>2</span>Solicita cancelar tu deuda Claro con tu número de teléfono o código de cliente.</p>
                          <p><span>3</span>Verifica el monto a pagar.<br>*El costo por comisión de los agentes Interbank es de S/1.00.</p>
                      </article>
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
                                  <img src="/assets/mlozd8KjpXfiCfkNs8MRO1QIJi5gOct2JoiBF6iy.png" alt="">
                                  <p><span>1</span> Ingresa a la página de <a href="https://interbank.pe/solicitar/pago/automatico/inicio?mcid=sms:claro:00-11-2019_pago_automatico" target="_blank" rel="noopener">Pago Automático </a> de Interbank</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/MEFe8M3qGQxyvsOWKDIFIkwgJlyPK0y19dL6WOpl.png" alt="">
                                  <p><span>2</span> Completa tus datos en el formulario y haz clic en COMENCEMOS</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/6A1s3spehCCmeBxEHWv5zByv86QvFbpSzpQK4BuR.png" alt="">
                                  <p><span>3 </span> Selecciona la opción para recibir tu código de identificación; y luego coloca el código que te llego</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/ZTnx75CBEEMZpNkw6vtAsxlbo3jxQ3CoNpPyH8k7.png" alt="">
                                  <p><span>4 </span> Ingresa tus datos en el formulario para la afiliación del servicio</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/O6IegAF5RcqBJzkbomZeGMHNq3eJmB0cG5Wl4ydB.png" alt="">
                                  <p><span>5 </span> ¡Listo! Tu servicio ya se encuentra afiliado al Débito Automático</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled"> <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
        </div>



        <div id="info-bcp" class="bcp bancadigital-acor acordeon acordeon--estilo2 primero d-flex">
          <div class="acordeon__item second">
              <div class="acordeon__boton" data-target="a">
                  <strong>Vía Web <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>
              <div class="acordeon__contenido" data-target="a">
                  <div class="acordeon__contenido__detalle" data-target="a">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/W726f7rPPQrhpzYQ0Vem.png" alt="">
                                  <p><span>1</span> Ingresa a <a href="https://www.viabcp.com" target="_blank" rel="noopener">https://www.viabcp.com</a> y haz clic en el botón BANCA POR INTERNET.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/aP4WN5Gv3JilPhoKiJep.png" alt="">
                                  <p><span>2</span> Registra tu tarjeta.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/IGszsMms7FvRYxJRwVZF.png" alt="">
                                  <p><span>3</span> Ingresa al menú PAGAR Y TRANSFERIR y selecciona PAGAR UN SERVICIO. Luego, haz clic en BUSCAR POR NOMBRE DE LA EMPRESA</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/RPgaevYGRsoI3oOWc1B7.png" alt="">
                                  <p><span>4</span> Escribe CLARO en el recuadro y luego selecciona la etiqueta DNI. </p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/5uHCAv3IFp4hwk06DQpJ.png" alt="">
                                  <p><span>5</span> Escribe tu número de DNI y haz clic en SIGUIENTE.  </p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/fxxhaG3xMHXnmLT1PbcU.png" alt="">
                                  <p><span>6</span> Elige tu cuenta y el tipo de pago para asignar el monto: PAGO TOTAL o PAGO PARCIAL. Luego, haz clic en siguiente.Escribe tu clave token y dale clic a PAGAR AHORA para obtener tu constancia.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="acordeon__item first">
              <div class="acordeon__boton act" data-target="b">
                  <strong>Vía APP <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>
              <div class="acordeon__contenido open act" data-target="b">
                  <div class="acordeon__contenido__detalle" data-target="b">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper mobile" style="transform: translate3d(0px, 0px, 0px);">
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/banca-digital/BCP/bcp_1.png" alt="">
                                  <p><span>1</span> Inicia sesión en la App del BANCA MÓVIL BCP registrando tu número de tarjeta y clave de internet. Si aún no la tienes descárgala desde Google Play o App Store.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/banca-digital/BCP/bcp_2.png" alt="">
                                  <p><span>2</span> En el menú lateral izquierdo, selecciona la opción PAGO DE SERVICIOS. Nuevamente dale clic a PAGO DE SERVICIOS</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/BCP/bcp_3.png" alt="">
                                  <p><span>3</span> Coloca CLARO en el buscador y selecciona CLARO DNI</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/BCP/bcp_4.png" alt="">
                                  <p><span>4</span> Dale clic a 2 DNI, introduce tu número y dale clic a CONTINUAR.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/BCP/bcp_5.png" alt="">
                                  <p><span>5</span> Selecciona el recibo que quieres pagar y elige la cuenta o tarjeta a la cual quieres cargar el pago.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/BCP/bcp_6.png" alt="">
                                  <p><span>6</span> Confirma tu operación con tu clave token y dale clic a CONTINUAR para obtener tu constancia.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="acordeon__item" style="display: none;">
              <div class="acordeon__boton" data-target="c"><strong>Vía Agente BCP <span>Comisión S/ 1 sol</span></strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
              <div class="acordeon__contenido" data-target="c">
                  <div class="acordeon__contenido__detalle" data-target="c">
                      <article class="articleBullet">
                          <p><span>1</span>Acércate a cualquier Agente BCP.</p>
                          <p><span>2</span>Solicita cancelar tu deuda Claro con tu número de teléfono o código de cliente.</p>
                          <p><span>3</span>Verifica el monto a pagar.<br>*El costo por comisión de los agentes BCP es de S/1.00.</p>
                      </article>
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
                                  <img src="/assets/9fRYhtWI3YqnVLEkD0Ad11FgWKLxNvzrfLqKZgKr.png" alt="">
                                  <p><span>1</span> Ingresa <a href="https://www.viabcp.com/" target="_blank" rel="noopener">www.viabcp.com </a> y haz clic en CUENTAS, luego en AFILIAR / DESAFILIAR AL DÉBITO AUTOMÁTICO</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/24CrinA8vHyyhpHPXHWtgLUFqj9sm3w0w8xwMzTM.png" alt="">
                                  <p><span>2</span> Registra tu tarjeta y clave</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/QRIq7jRHlIXZsCPL09C2NotC7h8uPgr3nJH46DFb.png" alt="">
                                  <p><span>3 </span>Selecciona AMERICA MÓVIL PERÚ S.A.C y completa los datos de la afilición.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled"> <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
        </div>


      
        <div id="info-bbva" class=" bbva bancadigital-acor acordeon acordeon--estilo2 primero d-flex">
          <div class="acordeon__item second">
              <div class="acordeon__boton" data-target="a">
                  <strong>Vía Web <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>
              <div class="acordeon__contenido" data-target="a">
                  <div class="acordeon__contenido__detalle" data-target="a">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/xlTuJaPsIghemcZQfNx1.png" alt="">
                                  <p><span>1</span> Ingresa a la banca por internet del <a href="https://www.bbvacontinental.pe/" target="_blank" rel="noopener">BBVA</a> y registra tu tarjeta.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/z9LKXbKdHOcXLKkQ05rs.png" alt="">
                                  <p><span>2</span> Selecciona la opción PAGO DE SERVICIOS.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/uRMXje02CVE47hH1iY6e.png" alt="">
                                  <p><span>3</span> Selecciona TELEFONÍA MÓVIL y luego CLARO DNI</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/Cdnxm48MLGuOqP1o8a4p.png" alt="">
                                  <p><span>4</span> Ingresa el NÚMERO DE DNI y selecciona el recibo a cancelar</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/XFMFXZZSsfcecirsVBdH.png" alt="">
                                  <p><span>5</span> Para terminar, ingresa la clave de SMS de confirmación.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="acordeon__item first">
              <div class="acordeon__boton act" data-target="b">
                  <strong>Vía APP <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>
              <div class="acordeon__contenido open act" data-target="b">
                  <div class="acordeon__contenido__detalle" data-target="b">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper mobile" style="transform: translate3d(0px, 0px, 0px);">
                              <!-- <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/MXDmzt5P3lm4tLsB6qLz.png" alt="">
                                  <p><span>1</span> Inicia sesión en la App del BBVA Banco Continental ingresando tu DNI y CONTRASEÑA DE BANCA POR INTERNET. Si aún no tienes la App, descárgala desde Google Play o App Store.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/2yi6DePB17W3as67XBnd.png" alt="">
                                  <p><span>2</span> Elige la opción PAGOS en el menú inferior, luego SERVICIOS PÚBLICOS. Posteriormente selecciona TELEFONÍA MÓVIL.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/cslbnUXSmZYOBvj48DsO.png" alt="">
                                  <p><span>3</span> En instituciones o empresas digita CLARO y selecciona CLARO DNI MN. Luego, coloca tu número de DNI.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/m8MVYIb49FvGJIocy4Gi.png" alt="">
                                  <p><span>4</span> Selecciona el recibo que quieres cancelar y elige la cuenta o tarjeta a la cual quieres cargar el pago.</p>
                              </article> -->

                               <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/banca-digital/BBVA/bbva_1.png" alt="">
                                  <p><span>1</span> Inicia sesión en la App del BBVA Banco Continental ingresando tu DNI y CONTRASEÑA DE BANCA POR INTERNET. Si aún no tienes la App, descárgala desde Google Play o App Store.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/banca-digital/BBVA/bbva_2.png" alt="">
                                  <p><span>2</span> En instituciones o empresas digita CLARO y selecciona CLARO DNI MN.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/BBVA/bbva_3.png" alt="">
                                  <p><span>3</span> . Ingresa tu número de DNI. </p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/BBVA/bbva_4.png" alt="">
                                  <p><span>4</span> Selecciona el recibo que quieres cancelar.</p>
                              </article>

                               <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/BBVA/bbva_5.png" alt="">
                                  <p><span>5</span> Elige la cuenta o tarjeta a la cual quieres cargar el pago. </p>
                              </article>

                              
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="acordeon__item" style="display: none;">
              <div class="acordeon__boton" data-target="c"><strong>Vía Agente BBVA <span>Comisión S/ 1 sol</span></strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
              <div class="acordeon__contenido" data-target="c">
                  <div class="acordeon__contenido__detalle" data-target="c">
                      <article class="articleBullet">
                          <p><span>1</span>Acércate a cualquier Agente BBVA.</p>
                          <p><span>2</span>Solicita cancelar tu deuda Claro con tu número de teléfono o código de cliente.</p>
                          <p><span>3</span>Verifica el monto a pagar.<br>*El costo por comisión de los agentes BBVA es de S/1.00.</p>
                      </article>
                  </div>
              </div>
          </div>
        </div>

         
        <div id="info-scotiabank" class="scotiabank bancadigital-acor acordeon acordeon--estilo2 primero d-flex">
          <div class="acordeon__item second">
              <div class="acordeon__boton" data-target="a">
                  <strong>Vía Web <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>
              <div class="acordeon__contenido" data-target="a">
                  <div class="acordeon__contenido__detalle" data-target="a">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/MsmCT3jkhBwqWJMK6A9C.png" alt="">
                                  <p><span>1</span> Ingresa a la banca por internet del <a href="https://www.scotiabank.com.pe" target="_blank" rel="noopener">Scotiabank</a> e ingresa tus datos.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/aZJyn2Bw14VrswTGuZl1.png" alt="">
                                  <p><span>2</span> Elige la opción PAGAR O RECARGAR y luego haz clic en TELÉFONO, CABLE E INTERNET.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/lAZ6A8IxJE0JLzuu35XR.png" alt="">
                                  <p><span>3</span> En empresa o insitución digita CLARO y selecciona CLARO VARIOS.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/UcuZb1mq8fknYFjFuA8S.png" alt="">
                                  <p><span>4</span> Selecciona CLARO DNI e ingresa el número de documento. Luego, haz clic en CONTINUAR.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/fzreOCZlUGGPHC3SROi1.png" alt="">
                                  <p><span>5</span> Selecciona el recibo que quieres cancelar y haz clic en PAGAR. Para terminar, ingresa la CLAVE TOKEN y  haz clic en EJECUTAR.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="acordeon__item first">
              <div class="acordeon__boton act" data-target="b">
                  <strong>Vía APP <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>
              <div class="acordeon__contenido open act" data-target="b">
                  <div class="acordeon__contenido__detalle" data-target="b">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper mobile" style="transform: translate3d(0px, 0px, 0px);">
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/banca-digital/Scotiabank/scotia_1.png" alt="">
                                  <p><span>1</span> Inicia tu sección en la APP del Scotiabank.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/banca-digital/Scotiabank/scotia_2.png" alt="">
                                  <p><span>2</span> Elige la opción PAGAR en la pestaña Quiero. Luego, la opción TELÉFONO, CABLE E INTERNET.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/Scotiabank/scotia_3.png" alt="">
                                  <p><span>3</span> Busca la EMPRESA y selecciona CLARO VARIOS. Luego, selecciona el tipo de servicio que deseas cancelar e ingresa tu NÚMERO DE DNI.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/Scotiabank/scotia_4.png" alt="">
                                  <p><span>4</span>Selecciona el recibo que quieres cancelar y la cuenta o tarjeta a la cual quieres cargarla.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/Scotiabank/scotia_5.png" alt="">
                                  <p><span>5</span>Confirma tu clave SMS y el pago de tu Recibo Claro habrá sido realizado con éxito.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="acordeon__item" style="display: none;">
              <div class="acordeon__boton" data-target="c"><strong>Vía Agente Scotiabank <span>Comisión S/ 1 sol</span></strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
              <div class="acordeon__contenido" data-target="c">
                  <div class="acordeon__contenido__detalle" data-target="c">
                      <article class="articleBullet">
                          <p><span>1</span>Acércate a cualquier Agente Scotiabank.</p>
                          <p><span>2</span>Solicita cancelar tu deuda Claro con tu número de teléfono o código de cliente.</p>
                          <p><span>3</span>Verifica el monto a pagar.<br>*El costo por comisión de los agentes Scotiabank es de S/1.00.</p>
                      </article>
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
                                  <img src="/assets/JJRvZ8MvABBqOqm3Dn5JiQF6wZ9s7mwxMo0GZa0J.png" alt="">
                                  <p><span>1</span> Ingresa a la banca por internet de <a href="https://www.scotiabank.com.pe/Personas/Default" target="_blank" rel="noopener">Scotiabank </a> y selecciona la opción ACCEDER</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/mnGmDDMf1bscLUzv0wmncordqFnuMJ64VJPeTQYn.png" alt="">
                                  <p><span>2</span>Elige la opción SERVICIO AL CLIENTE, luego seleccionar CARGO AUTOMÁTICO y haz clic en AFILIACIÓN</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/IWWMe0X4vmZJox8IWCVZBFjrdo40uO0S1O1w6Lhy.png" alt="">
                                  <p><span>3 </span>Selecciona AMERICA MÓVIL PERÚ S.A.C y completa los datos de la afilición.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled"> <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
        </div>

    

        <div id="info-banco-nacion" class="banco-nacion bancadigital-acor acordeon acordeon--estilo2 primero d-flex">
          <div class="acordeon__item second">
              <div class="acordeon__boton act" data-target="a">
                  <strong>Vía Web <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>
              <div class="acordeon__contenido act" data-target="a" style="height: auto;">
                  <div class="acordeon__contenido__detalle" data-target="a">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/uf2YzgJIy6AMYGD1FSY2.png" alt="">
                                  <p><span>1</span> Accede a la banca por internet del <a href="https://zonasegura1.bn.com.pe/BNWeb/Inicio" target="_blank" rel="noopener">Banco de la Nación </a> y selecciona la opción INGRESA A TUS CUENTAS.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/3ZkXmGml00nFsCkL3nA3.png" alt="">
                                  <p><span>2</span> Registra tu tarjeta.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/hF38sYwLCNwHo0cE2SSL.png" alt="">
                                  <p><span>3</span> Ingresa a pago de servicio y en la opción CELULAR selecciona la opción RECIBO CLARO.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/A8zJCFdT00yNdP7uY40l.png" alt="">
                                  <p><span>4</span> Después, ingresa tu NÚMERO CELULAR y selecciona el recibo a cancelar.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/ROff9ffTlcjXaYd1h8Ww.png" alt="">
                                  <p><span>5</span> Por último, ingresa los 6 dígitos de tu TOKEN y da clic en la opción pagar.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="acordeon__item" style="display: none;">
              <div class="acordeon__boton" data-target="c"><strong>Vía Agente del Banco de la Nación <span>Sin comisión</span></strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
              <div class="acordeon__contenido" data-target="c">
                  <div class="acordeon__contenido__detalle" data-target="c">
                      <article class="articleBullet">
                          <p><span>1</span>Acércate a cualquier Agente del Banco de la Nación.</p>
                          <p><span>2</span>Solicita cancelar tu deuda Claro con tu número de teléfono o código de cliente.</p>
                          <p><span>3</span>Verifica el monto a pagar.<br>*No tiene costo de comisión.</p>
                      </article>
                  </div>
              </div>
          </div>
        </div>

        <div id="info-bim" class="bim bancadigital-acor acordeon acordeon--estilo2 primero d-flex">
          <div class="acordeon__item first">
              <div class="acordeon__boton act" data-target="b">
                  <strong>Vía App <span>Sin comisión</span></strong>
                  <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                  <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
              </div>
              <div class="acordeon__contenido act" data-target="b" style="height: auto;">
                  <div class="acordeon__contenido__detalle" data-target="b">
                      <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro swiper-container-horizontal">
                          <div class="swiper-wrapper mobile" style="transform: translate3d(0px, 0px, 0px);">
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/banca-digital/bim/paso_1.png" alt="">
                                  <p><span>1</span> Ingresa a la aplicación, selecciona la opción <strong>Paga servicios</strong>.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-active" style="width: 900px;">
                                  <img src="/assets/banca-digital/bim/paso_2.png" alt="">
                                  <p><span>2</span> Selecciona la categoría <strong>telefonía</strong> y empresa <strong>Claro</strong>.</p>
                              </article>
                              <article class="swiper-slide swiper-slide-next" style="width: 900px;">
                                  <img src="/assets/banca-digital/bim/paso_3.png" alt="">
                                  <p><span>3</span> Al seleccionar el servicio tendrás dos opciones: hacer el pago por <strong>Número de celular/Fijo o Código de cliente</strong>.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/bim/paso_4_codigo-cliente.png" alt="">
                                  <p><span>4</span> Si tienes tu código de cliente deberás ingresarlo.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/bim/paso_5_numero-celular.png" alt="">
                                  <p><span>5</span> Si tienes Número de celular/fijo deberás ingresarlo.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/bim/paso_6.png" alt="">
                                  <p><span>6</span> Selecciona la deuda a pagar o ingresa el monto de tu deuda.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/bim/paso_7.png" alt="">
                                  <p><span>7</span> Confirma la operación con tu contraseña.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/bim/paso_8.png" alt="">
                                  <p><span>8</span> Y listo, habrás hecho el pago de tu recibo Claro.</p>
                              </article>
                              <article class="swiper-slide" style="width: 900px;">
                                  <img src="/assets/banca-digital/bim/paso_9.png" alt="">
                                  <p><span>9</span> No olvides que recibirás un SMS confirmando el pago.</p>
                              </article>
                          </div>
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left swiper-button-disabled">
                          <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="acordeon__item" style="display: none;">
              <div class="acordeon__boton" data-target="c"><strong>Vía Agente de Banco de la Nación <span>Sin comisión</span></strong> <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt=""> <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt=""></div>
              <div class="acordeon__contenido" data-target="c">
                  <div class="acordeon__contenido__detalle" data-target="c">
                      <article class="articleBullet">
                          <p><span>1</span>Acércate a cualquier Agente del Banco de la Nación.</p>
                          <p><span>2</span>Solicita cancelar tu deuda Claro con tu número de teléfono o código de cliente.</p>
                          <p><span>3</span>Verifica el monto a pagar.<br>*No tiene costo de comisión.</p>
                      </article>
                  </div>
              </div>
          </div>
        </div>

        </div>

    </div>

    <div class="tips-successful-payment">
        <h3>Consejos para un pago exitoso</h3>
        <article>
            <ul>

                <li>
                    <span>Asegúrate que la opción de compras por internet esté habilitada. Puedes activar esta opción en el aplicativo de tu banco.</span>
                </li>
                <li>
                    <span>Ingresa correctamente el CVV de 3 dígitos y fecha de vencimiento de tu tarjeta.</span>
                </li>
                <li>
                    <span>Revisa si tienes el saldo suficiente para completar la operación.</span>
                </li>
                <li>
                    <span>Si tu tarjeta es Scotiabank, asegúrate de tener un límite diario que permita realizar la operación. Recuerda que puedes cambiar este límite en el aplicativo de tu banco.</span>
                </li>
                <li>
                    <span>Si tu tarjeta es del Banco de la Nación, solo podrás hacer compras hasta 200 soles por operación.</span>
                </li>
            </ul>
            <figure>
                <img class="cerrado" src="/img/person_claro.jpg" alt="">
            </figure>
        </article>
    </div>
   

    <div class="view-more-nd">
        <a href="debito-automatico" >
            <h3>Evita las colas y ahorra tiempo afiliando tu tarjeta al Débito Automático</h3>  <span>Ver más</span>
        </a>
    </div>

</section>

<div class="puntoFooter"></div>
@endsection