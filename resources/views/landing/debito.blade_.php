@extends('layouts.app')

@section('content')

  <modal name="m0" :width="1000" :height="'auto'" :adaptive="true">
    <div class="modal">
      <div class="modal__header">
        <hgroup>
          <figure><img src="/assets/logomiclaro.png"/></figure>
          <button class="close" @click="hideModal()"></button>
        </hgroup>
      </div>
      <div class="modal__main">
        <div class="content">
          <vue-slick class="content__list" ref="slick0" :options="slickOptions.mode2">
            <div class="item">
              <div class="item__image"><img src="/assets/miclaro1.png"/></div>
              <div class="item__info">
                <span>
                  <div class="circle"><div class="circle__inner"><div class="circle__wrapper"><div class="circle__content">1</div></div></div></div>
                </span>
                <p>Ingresa a la App. Si cuentas con una línea Claro, accede sólo con tu número de celular. No necesitas registrarte.</p>
              </div>
            </div>
            <div class="item">
              <div class="item__image"><img src="/assets/miclaro1.png"/></div>
              <div class="item__info">
                <div class="circle"><div class="circle__inner"><div class="circle__wrapper"><div class="circle__content">2</div></div></div></div>
                <p>Ingresa a la App. Si cuentas con una línea Claro, accede sólo con tu número de celular. No necesitas registrarte.</p>
              </div>
            </div>
            <div class="item">
              <div class="item__image"><img src="/assets/miclaro1.png"/></div>
              <div class="item__info">
                <div class="circle"><div class="circle__inner"><div class="circle__wrapper"><div class="circle__content">3</div></div></div></div>
                <p>Ingresa a la App. Si cuentas con una línea Claro, accede sólo con tu número de celular. No necesitas registrarte.</p>
              </div>
            </div>
            <div class="item">
              <div class="item__image"><img src="/assets/miclaro1.png"/></div>
              <div class="item__info">
                <div class="circle"><div class="circle__inner"><div class="circle__wrapper"><div class="circle__content">4</div></div></div></div>
                <p>Ingresa a la App. Si cuentas con una línea Claro, accede sólo con tu número de celular. No necesitas registrarte.</p>
              </div>
            </div>
          </vue-slick>
        </div>
      </div>
    </div>
  </modal>
  
  <div class="espacioHeader"></div>

  <section class="pagina">
    <ul class="pagina__breadcrumb limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
        <li>Débito Automatico</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
        <li>Débito Automatico</li>
    </ul>
  </section>


  <div class="page2">


    <div class="list__title type2" id="new-afil">

        <p class="first-text"> Del 01 de junio al 31 de julio </p>

        <!--<h3> <b>AFÍLIATE AL </b> <span class="box-">DÉBITO AUTOMÁTICO</span>--> <!-- <br> Y PODRÍAS GANAR INCREÍBLES PREMIOS --> </h3>

        <h3> <b>¡AFÍLIATE AL DÉBITO AUTOMÁTICO Y MANTENTE <br>SIEMPRE AL DÍA EN TUS PAGOS!</b></h3>

        <p>Sin colas, sin comisiones, y sin salir de casa.</p>

        <div class="content__block">
          <figcaption>
            <p>Ademas, podrias ganar una </p> 
            <h4><span>GIFT CARD DE VISA</span> POR S/150</h4>
          </figcaption>
          <figure><img src="/assets/visa.svg"/></figure>
        </div>

        <!--<p> Afilia tus servicios de Claro al débito automático con tus tarjetas oh! de la marca VISA o Mastercard y Financiera oh! te devolverá hasta el 30% de tu cargo fijo*


           </p>-->
           <!--<p>Afíliate al débito automático y mantente siempre al día en tus pagos, sin colas, sin comisiones, sin salir de casa y estarás participando por una <strong>gift card VISA por S/150</strong></p>-->

          <!--<div class="content__image">
             <img src="/assets/oh.svg"/>  <img src="/assets/visa.svg"/>   <img src="/assets/mastercard.svg"/>  

             <small style="order: 4; margin-top:  35px; font-size:  13px; display:  inline-block;  width:   100%;"  > Para participar de cualquier sorteo, requerimos la afiliación y el primer
cargo con éxito. El importe máximo a devolver S/ 30*.</small>
          </div>-->


          
     
    </div>  


    


  <!--   <section class="section22">
      <div class="section22__align"> 
        <div class="section22__main">

            <div class="content__list">

              <div class="content__item">
                
                <hgroup>
                  <p>Además, si te afiliaste con tu Tarjeta oh!, Financiera oh! te devolverá el 30% del primer importe debitado*</p>
                  <span>  (*) importe máximo a devolver S/ 30. </span>
                </hgroup>
                <figure><img src="/assets/concurso-oh.svg"/ style="margin-bottom: 0;"></figure>
              </div>



             

            </div>
  
        </div>

      </div>
    </section> -->


    <section class="section20">
      <div class="section20__align"> 
        <div class="section20__main">
          <div class="content">
            <div class="content__list">

              <div class="content__group">

              <div class="content__item">
                <figure><img src="/assets/miclaro.png"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link">
                  <span href="https://www.visanetrecurrentes.com/afiliacion/formulario-afiliacion?codigoComercio=467534256" target="_blank">Afíliate aquí</span>


                  <form method="post" action="https://pago-programado.niubiz.com.pe/Afiliacion" target="_blank">
                    <input type="hidden" id="codigoComercio" name="codigoComercio" maxlength="9" required value="467534256" />
                    <input type="hidden" id="etiqueta" name="etiqueta" required value="Número de Servicio/Cod. Cliente"/> 
                    <input type="hidden" id="maxAmount" name="maxAmount" value="Si">
                    
                    <input type="submit" value="Afiliarse">
                  </form>

                  
                </div>
              </div>

              <div class="extra" @click="showModal()">
                <sup></sup>
                <span>Conoce como afiliarte</span>
              </div>

              </div>


              <div class="content__group">

              <div class="content__item">
                <figure><img src="/assets/visa.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link">
                  <span href="https://www.visanetrecurrentes.com/afiliacion/formulario-afiliacion?codigoComercio=467534256" target="_blank">Afíliate aquí</span>


                  <form method="post" action="https://pago-programado.niubiz.com.pe/Afiliacion" target="_blank">
                    <input type="hidden" id="codigoComercio" name="codigoComercio" maxlength="9" required value="467534256" />
                    <input type="hidden" id="etiqueta" name="etiqueta" required value="Número de Servicio/Cod. Cliente"/> 
                    <input type="hidden" id="maxAmount" name="maxAmount" value="Si">
                    <!--<select id="productos" name="productos">
                      <option value="">Seleccione</option>
                      <option value="0012020">PRUEBA VISANET</option> 
                    </select>-->
                    <input type="submit" value="Afiliarse">
                  </form>

                  
                </div>
              </div>

              </div>



              <div class="content__group">

              <div class="content__item">
                <figure><img src="/assets/mastercard.png"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link">
                  <span href="https://www.visanetrecurrentes.com/afiliacion/formulario-afiliacion?codigoComercio=467534256" target="_blank">Afíliate aquí</span>

                   <form method="post" action="https://pago-programado.niubiz.com.pe/Afiliacion" target="_blank">
                    <input type="hidden" id="codigoComercio" name="codigoComercio" maxlength="9" required value="467534256" />
                    <input type="hidden" id="etiqueta" name="etiqueta" required value="Número de Servicio/Cod. Cliente"/> 
                    <input type="hidden" id="maxAmount" name="maxAmount" value="Si">
                    <!--<select id="productos" name="productos">
                      <option value="">Seleccione</option>
                      <option value="0012020">PRUEBA VISANET</option> 
                    </select>-->
                    <input type="submit" value="Afiliarse">
                  </form>

                </div>
              </div>

              </div>



              <div class="content__group">              

              <div class="content__item">
                <figure><img src="/assets/oh.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link">
                  <span href="https://www.visanetrecurrentes.com/afiliacion/formulario-afiliacion?codigoComercio=467534256" target="_blank">Afíliate aquí</span>

                   <form method="post" action="https://pago-programado.niubiz.com.pe/Afiliacion" target="_blank">
                    <input type="hidden" id="codigoComercio" name="codigoComercio" maxlength="9" required value="467534256" />
                    <input type="hidden" id="etiqueta" name="etiqueta" required value="Número de Servicio/Cod. Cliente"/> 
                    <input type="hidden" id="maxAmount" name="maxAmount" value="Si">
                    <!--<select id="productos" name="productos">
                      <option value="">Seleccione</option>
                      <option value="0012020">PRUEBA VISANET</option> 
                    </select>-->
                    <input type="submit" value="Afiliarse">
                  </form>

                </div>
              </div>

              </div>



              <div class="content__group">

              <div class="content__item">
                <figure><img src="/assets/interbank.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link"><a href="https://interbank.pe/solicitar/pago/automatico/inicio?mcid=sms:claro:00-11-2019_pago_automatico " target="_blank">Afíliate aquí</a></div>
              </div>

              </div>

              <div class="content__group">

              <div class="content__item">
                <figure><img src="/assets/scotiabank.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link"><a href="https://www.scotiabank.com.pe/Personas" target="_blank">Afíliate aquí</a></div>
              </div>    

              </div>   

              <div class="content__group">

              <div class="content__item">
                <figure><img src="/assets/bcp.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link"><a href="https://www.viabcp.com/" target="_blank">Afíliate aquí</a></div>
              </div>

              </div>

            </div>
          </div>
        </div>

      </div>
    </section>



    <div class="tips-successful-membership">
        <h3>Consejos para una afiliación exitosa</h3>
        <article>
            <ul>
                <li>
                    <span>Si cambias de tarjeta, ingresa una nueva afiliación para actualizar tus datos.</span>
                </li>
                <li>
                    <span>Asegúrate que la opción de compras por internet esté habilitada. Activa esta opción en el aplicativo de tu banco. </span>
                </li>
                <li>
                    <span>Revisa si tienes el saldo suficiente para completar la operación. </span>
                </li>
                <li>
                    <span>Si tu tarjeta es Scotiabank, asegúrate de tener un límite diario que permita realizar la operación. Recuerda que puedes cambiar este límite en el aplicativo de tu banco.</span>
                </li>
                <li>
                    <span>Si tu tarjeta es del Banco de la Nación, solo podrás hacer compras hasta 200 soles por operación.</span>
                </li>
                <li>
                    <span>Si ingresas un monto tope, asegúrate de que este sea mayor a tu cargo fijo para evitar un saldo pendiente.</span>
                </li>
            </ul>
            <figure>
                <img class="cerrado" src="/img/person_afiliacion.jpg" alt="">
            </figure>
        </article>
    </div>




    <section class="section21"  >
      <div class="section21__align hide" id="contentalign"> 


        <div class="section21__header">
          <div class="content">
            <div class="content__title">
              <span> CONSIDERACIONES </span>
              <h3> Nos gusta hablar Claro </h3>
            </div>
            <div class="content__close" id="contentclose">
              <span id="changetext"> Saber más </span>
              <img id="changeimage" src="/assets/292fdf05-2aa6-4730-ae50-7e119c7e705a-MasCeleste.svg"/>
            </div>
          </div>
        </div>


        <div class="section21__main">
          <div class="content" id="contentmain">
            <div class="content__title">
              <p>Sobre Débito automático</p> <img src="/assets/8633d187-a147-4b79-bf9c-ff612184b1b7-ArrowDown.svg"/>
            </div>
            <div class="content__info">
              <ul>
                <li> Si quieres modificar el monto máximo a debitar de una tarjeta de crédito la puedes solicitar de manera telefónica y presencial; y si quieres modificar el monto máximo a debitar de una cuenta bancaria solicítala de manera presencial. </li>

                <li> El débito a la cuenta será cargado en cualquier momento entre las 48 horas antes y 48 horas después de la fecha de vencimiento de tu recibo. </li>
                <li> Si tienes una cuenta de ahorro en el BCP o Interbank, puedes escanear los documentos solicitados y enviarlos al buzón recaudaciondebitos@claro.com.pe.  </li>
                <li> Para el caso de cuentas del BBVA y Scotiabank, se requiere acudir al Centro de Atención para presentar la documentación necesaria.  </li>
                <li>  Para desafiliarte del débito automático debes hacerlo de manera telefónica o presencial. </li>
                <li> Términos y condiciones de campaña: "Gift card Visa" <a href="/assets/files/TyCDebitoautomaticogiftcardsVISA.pdf"/ target="_blank">aquí</a> </li>
                <li>Términos y condiciones sobre la solicitud de afiliación al débito automático. Más información <a href="/assets/files/Terminos_y_Condiciones_Solicitud_de_Afiliacion_al_Debito_Automatico_05.03.pdf"/ target="_blank">aquí</a></li>


              </ul>
            </div>
          </div>
            
        </div>
      </div>
    </section>



  </div>

@endsection