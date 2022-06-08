@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>
        <section class="pagina puntoautorizados">

            <ul class="pagina__breadcrumb limit">
                <li><a href="/">Inicio</a></li>/
                <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
                <li>Puntos autorizados</li>
            </ul>
            <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
                <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
                <li>Puntos autorizados</li>
            </ul>


            <div class="list__title">
                <h3>Puntos autorizados</h3>
            </div>  

            <div class="list_tab">     
                <ul id="listPoint">
                    <li  id="tab-financieras">
                        <span >Entidades Financieras</span>
                       <!--  <a href="/lugares-de-pago">Canales online</a> -->
                    </li>
                    <li  id="tab-establecimientos">
                        <span>Establecimientos</span>
                       <!--  <a href="/lugares-de-pago-empresas">Canales presenciales </a> -->
                    </li>
                </ul>
            </div>


            <div class="list-point info-point table-mw" id="financieras">
                <div class="item table-w">
                    <div class="table-content table1" id="table1" >
                        <span id="hidden1"></span>
                        <table class="child-align">
                            <tr class="align-text-left">
                                <th>Banco</th>
                                <th>Costo en ventanilla</th>
                                <th>Costo en agente</th>
                            </tr>

                            <tr>
                                <td>Banco de la Nación</td>
                                <td>S/0.00</td>
                                <td>S/0.00</td>
                            </tr>

                            {{-- <tr>
                                <td>Banco Pichincha</td>
                                <td>S/0.00</td>
                                <td>No cuenta con agente</td>
                            </tr> --}}

                            <tr>
                                <td>BBVA</td>
                                <td>S/6.00</td>
                                <td>S/1.50</td>
                            </tr>

                            <tr>
                                <td>Scotiabank</td>
                                <td>S/3.50</td>
                                <td>S/1.00</td>
                            </tr>

                            <tr>
                                <td>Banbif</td>
                                <td>S/2.50</td>
                                <td>S/1.50</td>
                            </tr>


                            <tr>
                                <td>BCP</td>
                                <td>S/6.00</td>
                                <td>S/1.00</td>
                            </tr>

                            <tr>
                                <td>Falabella</td>
                                <td>S/0.00</td>
                                <td>S/0.00</td>
                            </tr>

                            <tr>
                                <td>Interbank</td>
                                <td>No presta servicio</td>
                                <td>S/1.60</td>
                            </tr>
                        </table>
                    </div>
                      
                    <div class="table-content table2" id="table2">
                        <span id="hidden2"></span>
                        <table class="child-align">
                            <tr class="align-text-left">
                                <th>Caja</th>
                                <th>Costo en ventanilla</th>
                                <th>Costo en agente</th>
                            </tr>

                            <tr>
                                <td>Caja Huancayo</td>
                                <td>S/1.00</td>
                                <td>No presta servicio</td>
                            </tr>

                            <tr>
                                <td>Caja Sullana </td>
                                <td>S/1.50</td>
                                <td>S/1.50</td>
                            </tr>

                            <tr>
                                <td>Caja Cusco</td>
                                <td>S/1.00</td>
                                <td>S/0.00</td>
                            </tr>

                            <tr>
                                <td>Caja Arequipa</td>
                                <td>S/2.50</td>
                                <td>S/1.00</td>
                            </tr>

                            <tr>
                                <td>Caja Trujillo</td>
                                <td>S/1.50</td>
                                <td>S/0.50</td>
                            </tr>

                            <tr>
                                <td>Caja Rural de ahorro <br> y crédito Los Andes <small style="color: #d00000;">*</small></td>
                                <td>S/1.00</td>
                                <td>S/1.00</td>
                            </tr>

                            <tr>
                                <td>Financiera Qapaq <small style="color: #d00000;">*</small></td>
                                <td>S/1.00</td>
                                <td>S/1.00</td>
                            </tr>


                            <tr>
                                <td>Caja Municipal de ahorro <br> y crédito de Paita <small style="color: #d00000;">*</small></td>
                                <td>S/1.00</td>
                                <td>S/1.00</td>
                            </tr>


                            <tr>
                                <td>Caja Municipal de ahorro <br> y crédito del Santa <small style="color: #d00000;">*</small></td>
                                <td>S/1.00</td>
                                <td>S/1.00</td>
                            </tr>


                        </table>    
                        <small style="color: #d00000;">*A través de Western Union</small>
                    </div>


                </div>

                <!-- <div class="item">
                   

                    <iframe frameborder="0" width="100%" height="627" src="https://staticcatalogo.azurewebsites.net/apps/store-locator/cacs/"></iframe>
                </div> -->

            </div>

            <div class="list-point info-point table-mw" id="establecimientos">
                <div class="item table-w">
                    <div class="table-content table1 table-before" >
                        <!-- <span id="hidden3"></span> -->
                        <table>
                            <tr>
                                <th>Establecimiento</th>
                                <th>Costo por Agente</th>
                               
                            </tr>

                            <tr>
                                <td>Western Union</td>
                                <td>S/1.00</td>
                                
                            </tr>

                            <tr>
                                <td>Full Carga</td>
                                <td>S/1.00</td>
                                
                            </tr>

                            <tr>
                                <td>Cell Power</td>
                                <td>S/1.00</td>
                               
                            </tr>

                            <tr>
                                <td>Tambo <small style="color: #d00000;">*</small></td>
                                <td>S/1.00</td>
                               
                            </tr>

                            <tr>
                                <td>Disashop</td>
                                <td>S/1.00</td>
                            </tr>

                            <tr>
                                <td>KasNet</td>
                                <td>S/1.00</td>
                            </tr>

                            <tr>
                                <td>BIM- Billetera Móvil</td>
                                <td>S/0.00</td>
                            </tr>

                            <tr>
                                <td>Red Digital</td>
                                <td>S/1.00</td>
                            </tr>

                        </table>
                        <small style="color: #d00000;">*A través del BBVA</small>
                    </div>
                      
                   


                </div>
            </div>

            
            
            <!-- <div class="limit">
                <h2 class="pagina__titulo">Puntos autorizados</h2>

                <center><a class="banner__debito" href="https://conoceturecibo.claro.com.pe/debito-automatico"></a></center>

                <div class="acordeonContenedor--puntos">
                    <div class="acordeon acordeon--estilo2 ">
                       @foreach($post as $pos) 
                       @foreach($pos->posts as $k => $p)
                        <div class="acordeon__item">
                            <div class="acordeon__boton @if($k==0) act @endif">
                                <strong> {{ $p->title }}</strong>
                                <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido open @if($k==0) act @endif">
                                <div class="acordeon__contenido__detalle">
                                   {!! $p->body !!}
                                </div>
                            </div>
                        </div>
                       @endforeach
                    @endforeach
                    </div>
                </div>
                
            </div> -->

        </section>

        <div class="puntoFooter"></div>
@endsection