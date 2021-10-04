@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>



        <section class="pagina pagina--quetepasoestemes">

            <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin limit">
                <li><a href="/">Inicio</a></li>/
                <li>¿Qué te pasó este mes?</li>
            </ul>
            <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin pagina__breadcrumb--mobile limit">
                <li><a href="/">Inicio</a></li>/
                <li>¿Qué te pasó este mes?</li>
            </ul>

            <h2 class="pagina__titulo pagina__titulo--quetepasoestemes">¿Qué te pasó este mes?</h2>
            <article>
                    <ul class="quetepasoestemes__lista">
                      @foreach($posts as $key =>  $post) 
                        <li class="quetepasoestemes__item 
                        @if($key == 0)
                            act
                        @endif
                        ">
                            <a href="/que-te-paso-este-mes/{{ $post->slug }}">
                                <img src="storage/{{ $post->image }}" alt="">
                                <strong>{{ $post->title }}</strong>
                            </a>
                        </li>
                    @endforeach
                       
                    </ul>
            </article>
          
            <div class="limit " id="quepaso">
                <div class="listadoStandardContenedor listadoStandardContenedor--quetepasoestemes">
                    @foreach($posts as $key =>  $post) 
                      {!! $post->body !!}
                    @endforeach
                   
                </div>
                <div class="acordeon--mobile--quepasoestemesContenedor">
                    <div id="tengo_una_nueva_linea-mobile" class="acordeon acordeon--mobile act">
                        <div class="list-head-mobile"><p>Puede que tu primer recibo, adicional al pago del mes, se sume uno de estos escenarios:</p></div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton act" data-target="a">
                                <strong>Equipo con cuotas</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido open act" data-target="a">
                                <div class="acordeon__contenido__detalle" data-target="a">
                                    <article>
                                        <p>
                                            Si adquiriste un equipo en cuotas, el monto de cada cuota se cargará a tu recibo por los siguientes 12 o 18 meses; es decir durante el tiempo de contrato que hayas elegido.
                                        </p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="b">
                                <strong>Protección móvil</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="b">
                                <div class="acordeon__contenido__detalle" data-target="b">
                                    <article>
                                        <p>Es un servicio adicional de reposición de equipos en caso de daño físico, robo o fallas, que se cobra de forma mensual.</p>
                                    </article>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="no_pague_a_tiempo-mobile" class="acordeon acordeon--mobile">
                        <div class="list-head-mobile"><p>Puede que haya ocurrido lo siguiente:</p></div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton act" data-target="a">
                                <strong>Olvidé cuando vence mi recibo</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido open act" data-target="a">
                                <div class="acordeon__contenido__detalle" data-target="a">
                                    <article>
                                        <p>Si deseas conocer la fecha de vencimiento, tu código de cliente, monto facturado o ciclo de facturación, ingresa a <a href="https://mi.claro.com.pe" target="_blank">Mi Claro</a>, comunícate al 123 desde un móvil o al 0800-00123 desde un teléfono fijo.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="b">
                                <strong>Cambió la fecha de vencimiento de mi recibo</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="b">
                                <div class="acordeon__contenido__detalle" data-target="b">
                                    <article>
                                        <p>Las fechas de vencimiento de los recibos son variables (feriados, domingos, etc.) y aunque se busca que de caigan en rango o fecha habitual no siempre es posible. Por lo que te sugerimos revisar la fecha de vencimiento de tu recibo ni bien lo recibas. También puedes consultarla a través de <a href="https://mi.claro.com.pe" target="_blank">Mi Claro</a>, llamando al 123 desde un móvil o al 0800-00123 desde un fijo.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="c">
                                <strong>Mi ciclo de facturación cambió</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="c">
                                <div class="acordeon__contenido__detalle" data-target="c">
                                    <article>
                                        <p>Si cambiaste de plan, recuerda verificar tu nuevo ciclo de facturación. Este determina cuándo recibirás tu saldo y la fecha aproximada del vencimiento de tu recibo. Puedes verificar esta información al momento de la compra, ingresando a <a href="https://mi.claro.com.pe" target="_blank">Mi Claro</a>, llamando al 123 desde tu móvil o al 0800-00123 desde un teléfono fijo.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="c">
                                <strong>No recordaba dónde pagar</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="c">
                                <div class="acordeon__contenido__detalle" data-target="c">
                                    <article>
                                         <p>Recuerda que puedes realizar tus pagos de manera presencial en los lugares de pago afiliados, o vía online a través de la banca por internet. <a href="lugares-de-pago.html">Conoce más aquí ></a></p> 
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="c">
                                <strong>No me llegó el recibo</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="c">
                                <div class="acordeon__contenido__detalle" data-target="c">
                                    <article>
                                        <p>Puede que te hayas mudado o no recuerdes el correo al que te afiliaste para recibirlo. Te sugerimos verificar tu dirección de envío llamando al 123 desde tu móvil. Recuerda que también puedes visualizar tus 6 últimos recibos a través de Mi Claro.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="me_cobraron_mas-mobile" class="acordeon acordeon--mobile">
                        <div class="list-head-mobile"><p>En realidad pueden sumarse cargos por:</p></div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton act" data-target="a">
                                <strong>Compra de paquete de datos</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido open act" data-target="a">
                                <div class="acordeon__contenido__detalle" data-target="a">
                                    <article>
                                        <p>Si adquiriste un paquete de datos móviles, estos se verán reflejados en el siguiente recibo de tu facturación.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="b">
                                <strong>Servicios de suscripción</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="b">
                                <div class="acordeon__contenido__detalle" data-target="b">
                                    <article>
                                       <p>Cuando te suscribes a servicios adicionales como juegos, noticias, música, horóscopos u otros, se incluyen cargos adicionales a tu recibo móvil. <a href="http://www.claro.com.pe/personas/movil/directorio-suscriptores/" " target="_blank"> Más información ></a></p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="c">
                                <strong>Servicios adicionales (llamadas, mensajes, datos)</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="c">
                                <div class="acordeon__contenido__detalle" data-target="c">
                                    <article>
                                        <p>Recuerda que si no tienes un Límite de consumo y excedes los minutos, SMS o MB que te entrega tu plan, se cargará un adicional a tu siguiente recibo.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="d">
                                <strong>Reconexión de servicio</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="d">
                                <div class="acordeon__contenido__detalle" data-target="d">
                                    <article>
                                        <p>Recuerda que si te bloquean la línea por cobranza, se cargará S/ 10 adicionales a tu recibo por concepto de reconexión.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="e">
                                <strong>Prorrateo</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="e">
                                <div class="acordeon__contenido__detalle" data-target="e">
                                    <article>
                                        <p>El prorrateo ocurre cuando tu línea sufre un bloqueo por robo o cobranza. Dependiendo del día que se reactive tu línea, pueden generase descuentos o cargos adicionales en la emisión de un próximo recibo. <a href="glosario.html" target="_blank">Ir a glosario ></a> </p>
                                    </article>
                                </div>
                            </div>
                        </div>

                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="f">
                                <strong>Costo por reactivación de servicio</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="f">
                                <div class="acordeon__contenido__detalle" data-target="f">
                                    <article>
                                        <p>Se cobra luego de la suspensión temporal por bloqueo o robo en el siguiente recibo. El costo es de S/ 10.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                           <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="g">
                                <strong>Equipo en cuotas</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="g">
                                <div class="acordeon__contenido__detalle" data-target="g">
                                    <article>
                                        <p>Si adquiriste un equipo en cuotas, el monto de cada cuota se cargará a tu recibo por los siguientes 12 o 18 meses; es decir durante el tiempo de contrato que hayas elegido.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="h">
                                <strong>Facturación detallada</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="h">
                                <div class="acordeon__contenido__detalle" data-target="h">
                                    <article>
                                        <p>Si solicitaste una facturación con todas las llamadas realizadas y recibidas de los últimos 3 meses, se te cobrará un cargo de S/ XX adicional a tu siguiente recibo.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="j">
                                <strong>Consumo abierto</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="j">
                                <div class="acordeon__contenido__detalle" data-target="j">
                                    <article>
                                        <p>El servicio de consumo abierto no tiene costo, pero recuerda que tu línea puede generar consumos adicionales (minutos, megas, SMS) por no tener un límite establecido.</p>
                                    </article>
                                </div>
                            </div>
                        </div>

                         <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="k">
                                <strong>Roaming</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="k">
                                <div class="acordeon__contenido__detalle" data-target="k">
                                    <article>
                                             <p>Si viajaste fuera del país e hiciste uso de tu servicio móvil, puede que se generen costos adicionales en tu siguiente recibo. Recuerda que el consumo por el servicio roaming es abierto, por lo que no hay un límite establecido. <a href="http://roaming.claro.com.pe/" target="_blank">Ir a roaming ></a></p>
                                    </article>
                                </div>
                            </div>
                        </div>                       
                    </div>
                    <div id="pague_menos-mobile" class="acordeon acordeon--mobile">
                        <div class="list-head-mobile"><p>Puede haber ocurrido lo siguiente:</p></div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton act" data-target="a">
                                <strong>Bloqueaste tu línea por robo</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido open act" data-target="a">
                                <div class="acordeon__contenido__detalle" data-target="a">
                                    <article>
                                        <p>Si realizaste el bloqueo de tu línea y recuperaste tu chip días después, es probable que el monto a pagar de tu recibo sea menor. Recuerda que descontamos los días que no tuviste el servicio activo</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="b">
                                <strong>Suspendiste tu línea</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="b">
                                <div class="acordeon__contenido__detalle" data-target="b">
                                    <article>
                                        <p>En el periodo de suspensión temporal solicitado (máximo 62 días), no se realizarán cobros por el servicio. Sin embargo, la transacción tiene un costo de S/ 29.75, monto que se visualizará en el recibo posterior a la reactivación.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="c">
                                <strong>Renta adelantada</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="c">
                                <div class="acordeon__contenido__detalle" data-target="c">
                                    <article>
                                        <p>Si adquiriste una línea postpago y te solicitaron rentas adelantadas al momento de la venta, es probable que tu 4to, 5to o 6to recibo llegue por cero soles o con descuento.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="c">
                                <strong>Saldo a favor</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="c">
                                <div class="acordeon__contenido__detalle" data-target="c">
                                    <article>
                                        <p>Puede que por el corte del servicio (trabajos de mantenimiento) o emisión de quejas, figure un descuento en tu recibo por lo días en los que se presentaron problemas.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="c">
                                <strong>Me cortaron el servicio</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="c">
                                <div class="acordeon__contenido__detalle" data-target="c">
                                    <article>
                                        <p>Si te bloquearon el servicio por cobranza, tu recibo llegará por un monto inferior al cargo fijo de tu plan, inclusive puede que en negativo.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="c">
                                <strong>Ajuste de cargo fijo por retención</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="c">
                                <div class="acordeon__contenido__detalle" data-target="c">
                                    <article>
                                        <p>En el caso de que hayas querido portar a otro operador, es probable que ofrezcan descuentos o promociones adicionales a tu plan, por lo que tu recibo llegaría por un monto inferior al normal.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="me_robaron_mi_celular-mobile" class="acordeon acordeon--mobile">
                        <div class="list-head-mobile"><p>Pueden ocurrir ajustes en tu facturación porque:</p></div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton act" data-target="a">
                                <strong>Bloqueé mi línea por robo</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido open act" data-target="a">
                                <div class="acordeon__contenido__detalle" data-target="a">
                                    <article>
                                        <p>Si realizaste el bloqueo de tu línea y recuperaste tu chip días después, es probable que el monto a pagar de tu recibo sea menor. Recuerda que descontamos los días que no tuviste el servicio activo.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="b">
                                <strong>No recuperé mi chip</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="b">
                                <div class="acordeon__contenido__detalle" data-target="b">
                                    <article>
                                        <p>Al no reactivar tu servicio en 30 días calendario, tu línea es dada de baja. Si tienes un contrato vigente (Ej. 18 meses) te llegará un último recibo con cobros por: reintegro de equipo (i) más los días que tuviste el servicio</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sali_de_viaje-mobile" class="acordeon acordeon--mobile">
                        <div class="list-head-mobile"><p>Pueden generarse cobros adicionales por:</p></div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton act" data-target="a">
                                <strong>Sobre pasé los minutos, megas y SMS de mi Cobertura Sin Frontera</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido open act" data-target="a">
                                <div class="acordeon__contenido__detalle" data-target="a">
                                    <article>
                                         <p>Si viajaste a uno de los 17 países con Cobertura Sin Frontera y sobre pasaste los minutos, megas o SMS correspondientes a tu plan Claro MAX, recuerda que se aplican las tarifas adicionales. <a href="http://roaming.claro.com.pe/" target="_blank">Ir a Cobertura Sin Frontera ></a></p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="b">
                                <strong>No activé un paquete roaming</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="b">
                                <div class="acordeon__contenido__detalle" data-target="b">
                                    <article>
                                        <p>Si viajaste fuera de los 17 países que están dentro de la Cobertura Sin Frontera (Ej. Italia) e hiciste uso de tu servicio móvil, se generarán cargos adicionales por concepto de Roaming a la tarifa regular en un siguiente recibo. Te aconsejamos activar uno de los paquetes Roaming por mes que incluyen megas y SMS. <a href="http://roaming.claro.com.pe/" target="_blank">Ir a roaming ></a></p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon__item">
                            <div class="acordeon__boton" data-target="c">
                                <strong>No conocía las tarifas roaming</strong>
                                <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido" data-target="c">
                                <div class="acordeon__contenido__detalle" data-target="c">
                                    <article>
                                           <p>Recuerda que todos los servicios (llamadas, mensajes y megas) utilizados en Roaming tienen costo adicional y no será descontado de las unidades de tu plan. <a href="http://roaming.claro.com.pe/" target="_blank">Ir a roaming ></a></p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="puntoFooter"></div>
@endsection