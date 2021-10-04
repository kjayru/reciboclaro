@extends('layouts.app')

@section('content')

  <div class="page2">
    <section class="section1">
      <div class="section4__align">
        <div class="section4__header">
          <div class="title">
            <h2>Afíliate al débito automático</h2><span>El servicio que te permite afiliar tus cuentas o tarjetas de crédito para<br/> realizar el pago de tus servicios.</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section5">
      <div class="section5__align"> 
        <div class="section5__main">
          <div class="content">
            <div class="content__list">
              <div class="content__item">
                <figure><img src="assets/visa.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link"><a href="https://www.visanetrecurrentes.com/afiliacion/formulario-afiliacion?codigoComercio=467534256" target="_blank">Afíliate aquí</a></div>
              </div>
              <div class="content__item">
                <figure><img src="assets/bcp.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link"><a href="https://www.viabcp.com/" target="_blank">Afíliate aquí</a></div>
              </div>
              <div class="content__item">
                <figure><img src="assets/interbank.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link"><a href="https://interbank.pe/solicitar/pago/automatico/inicio?mcid=sms:claro:00-11-2019_pago_automatico " target="_blank">Afíliate aquí</a></div>
              </div>
              <div class="content__item">
                <figure><img src="assets/scotiabank.svg"/></figure>
                <hgroup>
                  <h3>Solicita tu afiliación para servicios:</h3>
                </hgroup>
                <div class="link"><a href="https://www.scotiabank.com.pe/Personas" target="_blank">Afíliate aquí</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--
    <section class="section2">
      <div class="section2__align">
        <div class="section2__main">
          <div class="item">
            <div class="image"><img src="assets/pg2_section3_img1.svg" alt=""/></div>
            <div class="info">
              <p>Solicita tu afiliación para servicios:</p>
            </div>
            <div class="link">
              <span>
                <form action="https://pagoprogramado.visanetonline.pe/Afiliacion" method="post" target="_blank">
                  <input name="codigoComercio" type="hidden" value="467534256"/>
                  <input class="etiqueta" name="etiqueta" type="hidden" value="NÚMERO DE SERVICIO"/>
                  <button class="hv-boton" type="submit">Móviles y Fijos
                  </button>
                </form></span>

              
                <span>
                <form action="https://pagoprogramado.visanetonline.pe/Afiliacion" method="post" target="_blank">
                  <input name="codigoComercio" type="hidden" value="467534257"/>
                  <input class="etiqueta" name="etiqueta" type="hidden" value="CÓDIGO DE CLIENTE"/>
                  <button class="hv-boton" type="submit">Fijos
                  </button>
                </form>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <section class="section3">
      <div class="section3__align">
        <div class="section3__header">
          <div class="title">
            <h2>Beneficios</h2>
          </div>
        </div>
        <div class="section3__main">
          <div class="list">
            <div class="item">
              <div class="image"><img src="assets/pg2_section8_img1.svg" alt=""/></div>
              <div class="title">
                <h3>Paga a tiempo
                </h3>
              </div>
              <div class="info">
                <p>Evita las moras y <br/>cortes de servicio</p>
              </div>
            </div>
            <div class="item">
              <div class="image"><img src="assets/pg2_section8_img2.svg" alt=""/></div>
              <div class="title">
                <h3>Ahorras tiempo
                </h3>
              </div>
              <div class="info">
                <p>No mas largas filas.</p>
              </div>
            </div>
            <div class="item">
              <div class="image"><img src="assets/pg2_section8_img3.svg" alt=""/></div>
              <div class="title">
                <h3>Mayor seguridad</h3>
              </div>
              <div class="info">
                <p>evita manejar <br/> efectivo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="consideraciones">
      <div class="consideraciones__align">
        <div class="consideraciones__main">
          <div class="consideraciones__title">
            <h2>¡Ten en cuenta!</h2>
          </div>
          <div class="head-acordeon" target="a">
            <div class="head-acordeon__align">
              <div class="head-acordeon__main">
                <h3>Consideraciones generales </h3>
              </div>
            </div>
            <div class="listado-mas">
              <div class="line-a"></div>
              <div class="line-b"></div>
            </div>
          </div>
          <div class="body-acordeon" target="a">
            <div class="body-acordeon__align">
              <div class="body-acordeon__main">
                <ul>
                  <!--<li> Puedes afiliarte con tu número de cuenta BCP, Interbank, Scotiabank o con tu número de tarjeta VISA, Diners, Mastercard o AMEX.</li>-->
                  <li> La modificación del monto máximo a debitar se puede solicitar de manera telefónica y presencial; en cambio, la actualización de tarjeta o cuenta debe ser presencial al igual que una nueva afiliación.</li>
                  <li> El débito a la cuenta será cargado en cualquier momento entre las 72 horas antes y 72 horas después de la fecha de vencimiento de tu recibo.</li>
                  <li> La desafiliación del débito automático se puede realizar de manera telefónica o presencial.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section4">
      <div class="section4__align">
        <div class="section4__header">
          <div class="title">
            <h2>Ayúdanos a mejorar</h2><span>¿Te sirvió la información que encontraste en esta página?</span>
          </div>
        </div>
        <div class="section8__main">
          <div class="list">
            <div class="item"><span>Si</span></div>
            <div class="item"><span>No</span></div>
          </div>
          <!--.info
          .image
            img(src=path+'assets/chat.svg' alt='')
          .title
            h3 Si tienes alguna duda adicional, chatea con nosotros 
              a(href="#") aquí.           
          
          -->
        </div>
      </div>
    </section>
  </div>

@endsection