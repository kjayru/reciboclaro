@extends('layouts.app')

@section('content')

<div class="page1">
          
    <div class="page1__main">
      

      <div class="section_banner">
        <div class="owl-carousel owl-theme">
          <div id="banner1">
            <div class="box">
              <a class="btn" href="#">Ingresa aquí</a>
            </div>
          </div>
          <div id="banner2">
            <div class="box">
              <a class="btn" href="/que-es-el-recibo-por-email">Ingresa aquí</a>
            </div>
          </div>
          <div id="banner3">
            <div class="box">
              <a class="btn" href="/debito-automatico">Ingresa aquí</a>
            </div>
          </div>
        </div>
      </div>

      <!--
      <section class="section2">
        <div class="section2__align">
          <div class="section2__header">
            <div class="title">
              <h2>Bienvenido a tu nueva línea Postpago</h2>
            </div>
          </div>
          <div class="section2__main">
            <div class="info">
              <p>Debes saber que: <b>1. </b>Al inicio de tu ciclo mensual se renovará el saldo de<br/> tu plan con minutos, megas, SMS y otros beneficios.<b>    2.</b> Se emitirá tu recibo y <br/> tendrás hasta unos días después para pagarlo. </p>
            </div>
            <div class="link">
              <p>¿Aún no estás afiliado al recibo por email?</p><span><a href="/como-leer-tu-recibo-movil">Conoce más</a></span>
            </div>
          </div>
        </div>
      </section> -->



      <div class="section_linepost">
        <div class="section_linepost__main">
          <h2>Bienvenido a tu nueva línea Postpago</h2>
          <p>Debes saber que:</p>
          <div class="box">
            <div class="item">
              <span class="num">1</span>
              <p><strong>Se emitirá tu recibo</strong> y tendrás hasta unos días después para pagarlo.</p>
            </div>
            <div class="item">
              <span class="num">2</span>
              <p><strong>Al inicio de tu ciclo  mensual se renovará el saldo</strong> de tu plan con minutos, megas, SMS y otros beneficios.</p>
            </div>
            <div class="item">
              <span class="num">3</span>
              <p><strong>Regístrate GRATIS al Recibo Digital.</strong> Sé parte del cambio y ayúdanos a cuidar el planeta. Te enviaremos mensualmente tu recibo a tu correo. Afíliate <a href="https://conoceturecibo.com/que-es-el-recibo-por-email" target="_blank">aquí</a> </p>
            </div>
          </div>
          <!--
          <h3>¿Tienes dudas con tu recibo?</h3>
          <a href="/como-leer-tu-recibo-movil" class="btn">Conoce más</a>-->
        </div>
      </div>


      <section class="section6">
        <div class="section6__align">
          <div class="section6__header">
            <div class="title">
              <h2>Conoce dónde pagar tu recibo Claro </h2><span>Estos son los canales disponibles para realizar tu pago</span>
            </div>
          </div>
          <div class="section6__main">
            <div class="list">

              <div class="item"><a href="/lugares-de-pago/mi-claro">
                  <div class="image"><img src="/assets/pg1_section6_image3.svg" alt=""/></div>
                  <div class="title">
                    <h3>Mi  Claro
                     
                    </h3>
                   
                  </div></a></div>


              <div class="item"><a href="/lugares-de-pago/banco-digital">
                  <div class="image"><img src="/assets/pg1_section6_image1_new.svg" style="width: 70px;" alt=""/></div>
                  <div class="title">
                    <h3>Banca digital
                     
                    </h3>
                    
                  </div></a></div>


              <div class="item"><a href="/lugares-de-pago/debito-automatico">
                  <div class="image"><img src="/assets/_cajeros.svg" alt=""/></div>
                  <div class="title">
                    <h3>Débito <br/>  Automático
                      
                    </h3>
                  </div></a></div>


              



              



                  <div class="item"><a href="/lugares-de-pago/puntos-autorizados">
                  <div class="image"><img src="/assets/pg1_section6_image4.svg" alt=""/></div>
                  <div class="title">
                    <h3>Puntos <br/> autorizados
                      
                    </h3>
                    
                  </div></a></div>


                  <div class="item"><a href="/lugares-de-pago/cajeros-claro">
                  <div class="image"><img src="/img/cajeros.svg" alt=""/></div>
                  <div class="title">
                    <h3>Cajeros Claro
                     
                    </h3>
                  </div></a></div>


                  


            </div>
          </div>
        </div>
      </section>


        <!--

      <section class="sectioncall">
        <div class="sectioncall__align">
          <div class="sectioncall__main">
            <div class="info">
              <p>No más hojas impresas, afíliate al recibo por email  </p>
            </div>
            <div class="item">
              <span><a href="/que-es-el-recibo-por-email">Descubre más</a></span>
            </div>
            
           
          </div>
        </div>
      </section> -->

      



      <section class="section4">
        <div class="section4__align">
          <div class="section4__header">
            <div class="title">
              <h2>Límite de consumo</h2><span>Si tienes una línea postpago, puedes elegir el límite de consumo que más te convenga. <br/>  Así tú decides cómo quieres comunicarte.</span>
            </div>
          </div>
          <div class="section4__main">
            <div class="list">
              <div class="item"><a class="type" href="https://mi.claro.com.pe/" target="_blank">
                  <div class="image"><img src="/assets/pg1_section4_image1.svg" alt=""/></div>
                  <div class="title">
                    <h3>Consumo abierto</h3><span>Libertad total</span>
                  </div>
                  <div class="info">
                    <p>Los consumos que excedan a tu plan, se facturarán como adicionales en tu siguiente recibo.</p>
                  </div>
                  <div class="link"><a href="https://mi.claro.com.pe/" target="_blank">Ir a Mi Claro</a></div></a></div>
              <div class="item"><a class="type" href="http://www.claro.com.pe/personas/movil/beneficios-adicionales/?tab=postpagocambiate" target="_blank">
                  <div class="image"><img src="/assets/pg1_section4_image2.svg" alt=""/></div>
                  <div class="title">
                    <h3>Consumo adicional</h3><span>Flexibilidad para comunicarte</span>
                  </div>
                  <div class="info">
                    <p>Tu plan permite consumos adicionales hasta un máximo de un cargo fijo. </p>
                  </div>
                  <div class="link"><a href="http://www.claro.com.pe/personas/movil/beneficios-adicionales/?tab=postpagocambiate" target="_blank">Ir a promociones</a></div></a></div>
              <div class="item"><a class="type" href="http://www.claro.com.pe/personas/movil/beneficios-adicionales/?tab=postpagopaquetes" target="_blank">
                  <div class="image"><img src="/assets/pg1_section4_image3.svg" alt=""/></div>
                  <div class="title">
                    <h3>Consumo exacto</h3><span>Todo bajo control</span>
                  </div>
                  <div class="info">
                    <p>Tu plan no permite realizar consumos adicionales. Sólo podrás usar los beneficios que otorga tu plan. </p>
                  </div>
                  <div class="link"><a href="http://www.claro.com.pe/personas/movil/beneficios-adicionales/?tab=postpagopaquetes" target="_blank">Ir a paquetes </a></div></a></div>
            </div>
          </div>
        </div>
      </section>

      <section class="section5">
        <div class="section5__align">
          <div class="section5__header">
            <div class="title">
              <h2>Servicios adicionales a tu plan</h2><span>Si elegiste Consumo Abierto o Adicional tienes la opción de solicitar servicios que pueden sumar<br/> cargos a tu facturación. Aquí te detallamos los más comunes:</span>
            </div>
          </div>
          <div class="section5__main">
            <div class="list">
              <div class="item"><a class="type" href="/glosario-de-facturacion/P">
                  <div class="image"><img src="/assets/pg1_section5_image1.jpg" alt=""/></div>
                  <div class="title">
                    <h3>Compra de<br/>  paquetes de internet</h3>
                   
                  </div>
                  
                  <div class="link"><a href="/glosario-de-facturacion/P">Ver detalles</a></div></a></div>
              <div class="item"><a class="type" href="/glosario-de-facturacion/S">
                  <div class="image"><img src="/assets/pg1_section5_image2.jpg" alt=""/></div>
                  <div class="title">
                    <h3>Servicios de suscripción</h3>
                    
                  </div>
                  
                  <div class="link"><a href="/glosario-de-facturacion/S">Ver detalles</a></div></a></div>
            </div>
          </div>
        </div>
      </section>

      <section class="section3">
        <div class="section3__align">
          <div class="section3__header">
            <div class="title">
              <h2>Nos importa mucho que entiendas tu recibo</h2>
            </div>
          </div>
          <div class="section3__main">
          <div class="info" style="padding-bottom:  0px;" >
              <p>Si tienes dudas, te ayudamos a resolverlas</p>
            </div>
            <div class="item">
               <!-- <div class="contenedor_video">
                <div id="videoprom"></div>
                <div class="capavideo">
                  <div class="reload">
                      <i class="fa fa-refresh" aria-hidden="true"></i>
                  </div>
                </div>
              </div> -->

              <span><a href="/dudas-sobre-tu-facturacion">Más información</a></span>
            </div>
            
           
          </div>
        </div>
      </section>
 
      
    </div>
  </div> 

@endsection
