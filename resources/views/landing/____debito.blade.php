@extends('layouts.app')

@section('content')
  
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

        <p class="first-text"> Del 04 de febrero al 30 de abril </p>

        <h3> <b>AFÍLIATE AL </b> <span class="box-">DÉBITO AUTOMÁTICO</span> <!-- <br> Y PODRÍAS GANAR INCREÍBLES PREMIOS --> </h3>

        <!--<p> Afilia tus servicios de Claro al débito automático con tus tarjetas oh! de la marca VISA o Mastercard y Financiera oh! te devolverá hasta el 30% de tu cargo fijo*


           </p>-->
           <p>Afilia tus servicios de Claro al débito automático, realiza un cargo exitoso por 6 meses consecutivos y podrías obtener un bono de hasta 12 GB, dependiendo de tu plan.</p>

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



              <div class="content__item">
                <figure><img src="/assets/interbank.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link"><a href="https://interbank.pe/solicitar/pago/automatico/inicio?mcid=sms:claro:00-11-2019_pago_automatico " target="_blank">Afíliate aquí</a></div>
              </div>

              <div class="content__item">
                <figure><img src="/assets/scotiabank.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link"><a href="https://www.scotiabank.com.pe/Personas" target="_blank">Afíliate aquí</a></div>
              </div>       

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
    </section>



    




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
                <li> Términos y condiciones de campaña: "Bono por débito automático" <a href="/assets/files/Debito_automatico_01.02.pdf"/ target="_blank">aquí</a> </li>


              </ul>
            </div>
          </div>
            
        </div>
      </div>
    </section>



  </div>

@endsection