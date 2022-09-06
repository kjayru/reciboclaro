@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/css/bancadigital.css">

<style type="text/css">
  .fade-enter-active, .fade-leave-active {
    transition: opacity 0.25s ease-out;
  }
  
  .fade-enter, .fade-leave-to {
    opacity: 0;
  }
  
</style>
<style type="text/css">
  [v-cloak] > * { display:none; }
  [v-cloak]::before { content: "loading..."; }
  
</style>

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

    <div class="section33"></div>

    <div class="layout" id="app" v-cloak>
      <div class="layout__main">
        <div class="page2">
          <div class="page2__header">
            <!--section.section1-->
            <section class="section2">
              <div class="section2__align">
                <div class="section2__header">
                  <hgroup>
                    <h2>Banca Digital</h2>
                  </hgroup>
                </div>
                <div class="section2__main">
                  <div class="menu">
                    <div class="menu__selected" @click="menu.show1 = !menu.show1" :class="{ 'show': menu.show1 }">
                      <h3>@{{ hash.selected.name }}</h3>
                    </div>
                    <div class="menu__list" :class="[{ movil: menu.show1 }, { show: menu.show1 } ]"><a v-for="(tab, iTab) in hash.tabs" :class="{ 'active': hash.selected.query == tab.query }" @click="chooseTab(tab)">@{{ tab.name }}</a></div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="page2__main">
            <section class="section1" :class="{ 'active': hash.selected.query == 'bancos' }">
              <div class="section1__align">
                <div class="section1__main" v-if="hash.selected.options.length">
                  <div class="menu">
                    <div class="menu__selected" @click="menu.show2 = !menu.show2" :class="{ 'show': menu.show2 }"><a :class="[ 'active', 'b'+ hash.selected.active ]"></a></div>
                    <div class="menu__list" :class="[{ movil: menu.show2 }, { show: menu.show2 } ]"><a v-for="(option, iOption) in hash.selected.options" :class="[{ active: iOption == hash.selected.active }, 'b'+ iOption ]" @click="chooseOption(iOption)"></a></div>
                  </div>
                </div>
                <div class="section1__tabs">
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 0 }">
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][0].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,0,0)"><a>Vía APP 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][0].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick1" :options="slickOptions">
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/interbank_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Inicia sesión en la App de Interbank registrando tu número de tarjeta y documento de identidad. Si aún no la tienes descárgala desde Google Play o App Store.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/interbank_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a la sección "Paga y Recarga", selecciona PAGO A INSTITUCIÓN O EMPRESA</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/interbank_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona CLARO y selecciona el servicio que deseas pagar, por ejemplo, "PAGOPORDNI". Ingresa el "Número de DNI" y ¡Listo!</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/interbank_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona el recibo que quieres pagar.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/interbank_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Valida los datos del recibo en la pantalla de CONFIRMACIÓN DE PAGO e ingresa la clave de SMS que llegará a tu celular.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][0].option[1] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,0,1)"><a>Vía Web 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][0].option[1]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick2" :options="slickOptions">
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/interbank_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a la banca por internet de  <a href="https://interbank.pe/" target="_blank" tabindex="0">Interbank </a>y selecciona la opción Personas.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/interbank_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Registra tu tarjeta y número de documento.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/interbank_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a la sección "Mis Operaciones", selecciona PAGO DE SERVICIOS.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/interbank_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Escribe CLARO y selecciona el servicio que deseas pagar, por ejemplo "PAGOPORDNI" Ingresa el "DNI" y ¡Listo!</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/interbank_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona el recibo que quieres cancelar y la cuenta de la cuál se va descontar el monto. Luego, haz clic en Siguiente.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/interbank_6.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">6</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Valida el monto a cancelar e ingresa la clave SMS de confirmación.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][0].option[2] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,0,2)"><a>Vía Débito automático
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][0].option[2]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick3" :options="slickOptions">
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/interbank_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a la página de <a href="https://interbank.pe/" target="_blank" tabindex="0">Pago Automático  </a>de Interbank</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/interbank_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Completa tus datos en el formulario y haz clic en COMENCEMOS</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/interbank_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona la opción para recibir tu código de identificación; y luego coloca el código que te llego</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/interbank_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa tus datos en el formulario para la afiliación del servicio</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/interbank_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>¡Listo! Tu servicio ya se encuentra afiliado al Débito Automático</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 1 }"> 
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][1].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,1,0)"><a>Vía APP 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][1].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content">
                              <vue-slick class="content__list" ref="slick4" :options="slickOptions">
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bcp_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa al menú “Operaciones” y luego da clic en “Pagar servicios”</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bcp_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Busca el servicio a pagar o el nombre de la empresa.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bcp_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Revisa la deuda y elige la cuenta o tarjeta de crédito de origen.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bcp_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Revisa la deuda y elige la cuenta o tarjeta de crédito de origen.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bcp_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Revisa tus datos, agrégala a favoritos (no olvides colocar un nombre y confirma la operación).</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bcp_6.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>¡Listo! Ahora podrás ahorrar más tiempo la próxima vez.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][1].option[1] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,1,1)"><a>Vía Web 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][1].option[1]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick5" :options="slickOptions">
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bcp_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a <a href="https://www.viabcp.com/" target="_blank" tabindex="0">https://www.viabcp.com </a>y haz clic en el botón BANCA POR INTERNET.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bcp_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Registra tu tarjeta.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bcp_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa al menú PAGAR Y TRANSFERIR y selecciona PAGAR UN SERVICIO. Luego, haz clic en BUSCAR POR NOMBRE DE LA EMPRESA</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bcp_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Escribe CLARO en el recuadro y luego selecciona la etiqueta DNI.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bcp_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Escribe tu número de DNI y haz clic en SIGUIENTE.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bcp_6.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">6</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Elige tu cuenta y el tipo de pago para asignar el monto: PAGO TOTAL o PAGO PARCIAL. Luego, haz clic en siguiente.Escribe tu clave token y dale clic a PAGAR AHORA para obtener tu constancia.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][1].option[2] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,1,2)"><a>Vía Débito automático
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][1].option[2]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick6" :options="slickOptions">
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/bcp_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa <a href="https://interbank.pe/" target="_blank" tabindex="0">www.viabcp.com </a>y haz clic en CUENTAS, luego en AFILIAR / DESAFILIAR AL DÉBITO AUTOMÁTICO</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/bcp_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Registra tu tarjeta y clave</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/bcp_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona AMERICA MÓVIL PERÚ S.A.C y completa los datos de la afilición.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 2 }"> 
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][2].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,2,0)"><a>Vía APP 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][2].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content">
                              <vue-slick class="content__list" ref="slick7" :options="slickOptions">
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bbva_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Inicia sesión en la App del BBVA Banco Continental ingresando tu DNI y CONTRASEÑA DE BANCA POR INTERNET. Si aún no tienes la App, descárgala desde Google Play o App Store.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bbva_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>En instituciones o empresas digita CLARO y selecciona CLARO DNI MN.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bbva_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa tu número de DNI.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bbva_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona el recibo que quieres cancelar.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bbva_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Elige la cuenta o tarjeta a la cual quieres cargar el pago.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][2].option[1] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,2,1)"><a>Vía Web 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][2].option[1]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick8" :options="slickOptions">
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bbva_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a la banca por internet del <a href="https://www.bbvacontinental.pe/" target="_blank" tabindex="0">BBVA </a>y registra tu tarjeta.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bbva_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona la opción PAGO DE SERVICIOS.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bbva_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona TELEFONÍA MÓVIL y luego CLARO DNI.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bbva_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa el NÚMERO DE DNI y selecciona el recibo a cancelar.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/bbva_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Para terminar, ingresa la clave de SMS de confirmación.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 3 }"> 
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][3].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,3,0)"><a>Vía APP 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][3].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content">
                              <vue-slick class="content__list" ref="slick10" :options="slickOptions">
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/scotia_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Inicia tu sección en la APP del Scotiabank.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/scotia_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Elige la opción PAGAR en la pestaña Quiero. Luego, la opción TELÉFONO, CABLE E INTERNET.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/scotia_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Busca la EMPRESA y selecciona CLARO VARIOS. Luego, selecciona el tipo de servicio que deseas cancelar e ingresa tu NÚMERO DE DNI.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/scotia_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona el recibo que quieres cancelar y la cuenta o tarjeta a la cual quieres cargarla.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/scotia_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Confirma tu clave SMS y el pago de tu Recibo Claro habrá sido realizado con éxito.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][3].option[1] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,3,1)"><a>Vía Web 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][3].option[1]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick11" :options="slickOptions">
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/scotia_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a la banca por internet del  <a href="https://www.scotiabank.com.pe/Personas/Default" target="_blank" tabindex="0">Scotiabank </a>e ingresa tus datos.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/scotia_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Elige la opción PAGAR O RECARGAR y luego haz clic en TELÉFONO, CABLE E INTERNET.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/scotia_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>En empresa o insitución digita CLARO y selecciona CLARO VARIOS.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/scotia_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona CLARO DNI e ingresa el número de documento. Luego, haz clic en CONTINUAR.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/scotia_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona el recibo que quieres cancelar y haz clic en PAGAR. Para terminar, ingresa la CLAVE TOKEN y haz clic en EJECUTAR.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][3].option[2] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,3,2)"><a>Vía Débito automático
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][3].option[2]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick12" :options="slickOptions">
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/scotia_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a la banca por internet de <a href="https://interbank.pe/" target="_blank" tabindex="0">Scotiabank </a>y selecciona la opción ACCEDER</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/scotia_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Elige la opción SERVICIO AL CLIENTE, luego seleccionar CARGO AUTOMÁTICO y haz clic en AFILIACIÓN</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/debito/scotia_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona AMERICA MÓVIL PERÚ S.A.C y completa los datos de la afilición.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 4 }"> 
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][4].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,4,0)"><a>Vía Web 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][4].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick14" :options="slickOptions">
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/nacion_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Accede a la banca por internet del <a href="https://www.scotiabank.com.pe/Personas/Default" target="_blank" tabindex="0">Banco de la Nación  </a>y selecciona la opción INGRESA A TUS CUENTAS.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/nacion_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Registra tu tarjeta.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/nacion_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a pago de servicio y en la opción CELULAR selecciona la opción RECIBO CLARO.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/nacion_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Después, ingresa tu NÚMERO CELULAR y selecciona el recibo a cancelar.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/bancos/web/nacion_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Por último, ingresa los 6 dígitos de tu TOKEN y da clic en la opción pagar.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 5 }"> 
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][5].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,5,0)"><a>Vía APP 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][0][5].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content">
                              <vue-slick class="content__list" ref="slick16" :options="slickOptions">
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bim_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa a la aplicación, selecciona la opción <strong>Paga servicios.</strong></p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bim_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona la categoría <strong>telefonía </strong>y empresa <strong>Claro.</strong></p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bim_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Al seleccionar el servicio tendrás dos opciones: hacer el pago por <br/><strong>Número de celular/Fijo o Código de cliente.</strong></p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bim_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Si tienes tu código de cliente deberás ingresarlo.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bim_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Si tienes Número de celular/fijo deberás ingresarlo.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bim_6.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">6</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona la deuda a pagar o ingresa el monto de tu deuda.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bim_7.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">7</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Confirma la operación con tu contraseña.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bim_8.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">8</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Y listo, habrás hecho el pago de tu recibo Claro.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/bancos/app/bim_9.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">9</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>No olvides que recibirás un SMS confirmando el pago.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section1" :class="{ 'active': hash.selected.query == 'cajas-rurales' }">
              <div class="section1__align">
                <div class="section1__main" v-if="hash.selected.options.length">
                  <div class="menu">
                    <div class="menu__selected" @click="menu.show2 = !menu.show2" :class="{ 'show': menu.show2 }"><a :class="[ 'active', 'c'+ hash.selected.active ]"></a></div>
                    <div class="menu__list" :class="[{ movil: menu.show2 }, { show: menu.show2 } ]"><a v-for="(option, iOption) in hash.selected.options" :class="[{ active: iOption == hash.selected.active }, 'c'+ iOption ]" @click="chooseOption(iOption)"></a></div>
                  </div>
                </div>
                <div class="section1__tabs">
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 0 }">
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][1][0].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(1,0,0)"><a>Vía APP 
                            <h5>Recargas</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][1][0].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick19" :options="slickOptions">
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/recargas/cusco_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Descarga e ingresa a la APP WAYKI.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/recargas/cusco_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Dale clic a la opción PAGOS y luego a la opción VOY A RECARGAR UN CELULAR.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/recargas/cusco_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa el NOMBRE DE LA EMPRESA, luego el NÚMERO CELULAR A RECARGAR, finalmente LA CUENTA CON SALDO A DEBITAR. </p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/recargas/cusco_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Verifica todos los datos e ingresa la CLAVE SMS que te llegará a tu celular, finalmente dar clic en CONFIRMAR.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][1][0].option[1] }">
                        <div class="accordion__subtitle" @click="openAccordion(1,0,1)"><a>Vía APP 
                            <h5>Pagos de Claro</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][1][0].option[1]" :duration="300">
                          <div class="accordion__info">
                            <div class="content web">
                              <vue-slick class="content__list" ref="slick20" :options="slickOptions">
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/cajas/app/pagos/cusco_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Descarga e ingresa a la APP WAYKI.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/cajas/app/pagos/cusco_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Dale clic a la opción PAGOS y luego a la opción VOY A PAGAR UN SERVICIO.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/cajas/app/pagos/cusco_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa el NOMBRE DE LA EMPRESA, luego escoge PAGO POR DNI, finalmente ingresa el DNI DEL TITULAR DE LA DEUDA. </p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure class="web"><img src="/assets/cajas/app/pagos/cusco_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa la CLAVE SMS que te llegará a tu celular, finalmente dar clic a CONFIRMAR PAGO. </p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 1 }"> 
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][1][1].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(1,1,0)"><a>Vía APP 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][1][1].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content">
                              <vue-slick class="content__list" ref="slick22" :options="slickOptions">
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/huancayo_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresar al APP de CAJA HUANCAYO y registra los datos solicitados.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/huancayo_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona la opción PAGOS, luego PAGO DE SERVICIOS.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/huancayo_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Buscar en empresa AMERICA MOVIL - CLARO, Ingresar el “Número de celular” o “Teléfono fijo” y dale clic a SIGUIENTE.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/huancayo_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Verificar el monto a pagar y confirmar.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/huancayo_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Seleccionar la CUENTA DE CARGO, luego Ingresar la CLAVE DINÁMICA y darle clic a CONFIRMAR.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/huancayo_6.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">6</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Para finalizar se visualizará la CONSTANCIA DE PAGO DE SERVICIO, así mismo la constancia será enviada automáticamente al correo registrado.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 2 }"> 
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][1][2].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(1,2,0)"><a>Vía APP 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][1][2].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content">
                              <vue-slick class="content__list" ref="slick32" :options="slickOptions">
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/trujillo_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa al APP de CAJA TRUJILLO y en el menú principal selecciona la opción PAGOS.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/trujillo_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona la opción PAGO DE SERVICIOS.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/trujillo_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Luego ingresa a la opción PAGO DE TELEFONÍA.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/trujillo_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona OPERADOR DE CLARO, TIPO DE SERVICIO y CUENTA ORIGEN para cargar el pago.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/trujillo_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Dar clic en la lupa para visualizar los pagos pendientes, luego dar clic al botón CONSULTAR.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/trujillo_6.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">6</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Visualizarás el RESÚMEN DE PAGO, debes ingresar el CÓDIGO SMS que llegará a tu celular, luego dar clic al botón REALIZAR PAGO.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/trujillo_7.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">7</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Visualizarás la pantalla de PAGO EXITOSO.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/trujillo_8.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">8</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Podrás grabar tu pago como FAVORITO y si deseas lo podrás compartir por redes.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                  <div class="section1__option" :class="{ 'active': hash.selected.active == 3 }"> 
                    <div class="accordion">
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][1][3].option[0] }">
                        <div class="accordion__subtitle" @click="openAccordion(1,3,0)"><a>Vía APP 
                            <h5>Sin comisión</h5></a><i></i></div>
                        <slide-up-down class="accordion__container" :active="accordion['tabs'][1][3].option[0]" :duration="300">
                          <div class="accordion__info">
                            <div class="content">
                              <vue-slick class="content__list" ref="slick33" :options="slickOptions">
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/arequipa_1.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Ingresa al App de CAJA AREQUIPA y en el menú inferior selecciona la opción PAGOS</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/arequipa_2.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">2</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona la opción PAGO DE SERVICIOS E INSTITUCIONES</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/arequipa_3.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">3</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Luego, ingresa a la opción TELEFONÍA</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/arequipa_4.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">4</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona al operador: CLARO</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/arequipa_5.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">5</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Selecciona el TIPO DE PAGO que deseas realizar, por ejemplo: “RECARGAS”.  Ingresa tu NÚMERO DE CONTRATO, luego haz clic en SIGUIENTE.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/arequipa_6.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">6</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>Confirma la CUENTA DE CARGO, ingresa tu CLAVE DIGITAL (6 dígitos) y TOKEN, luego, haz clic en SIGUIENTE.</p>
                                  </figcaption>
                                </div>
                                <div class="content__item">
                                  <figure><img src="/assets/cajas/app/arequipa_7.png" alt=""/></figure>
                                  <figcaption>
                                    <div class="circle">
                                      <div class="circle__inner">
                                        <div class="circle__wrapper">
                                          <div class="circle__content">7</div>
                                        </div>
                                      </div>
                                    </div>
                                    <p>¡Listo! Visualizarás la pantalla de PAGO EXITOSO.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
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

<section class="section21"  >
      <div class="section21__align hide" id="contentalign"> 


        <div class="section21__header">
          <div class="content">
              <div class="content__title">
                <span> CONSIDERACIONES </span>
                <h3> Nos gusta hablar Claro </h3>
              </div>
              <div class="content__close evento__toggle" id="contentclose">
                <span id="changetext"> Saber más </span>
                <img id="changeimage" src="/assets/292fdf05-2aa6-4730-ae50-7e119c7e705a-MasCeleste.svg"/>
              </div>
          </div>
        </div>


        <div class="section21__main">
          <div class="content" id="contentmain">
            <div class="content__title">
              <p>Sobre Bono para Canales Digitales</p> <img src="/assets/8633d187-a147-4b79-bf9c-ff612184b1b7-ArrowDown.svg"/>
            </div>
            <div class="content__info">
              <ul>
                <li>Conoce las bases del bono por pago de tu línea móvil mediante Canales Digitales <a href="https://cl4.ro/bbpagocd" target="_blank">aquí</a></li>
              </ul>
            </div>
          </div>
            
        </div>
      </div>
    </section>

<div class="puntoFooter"></div>


<script type="text/javascript" src="/js/library/jquery.js"></script>
<script type="text/javascript" src="/js/library/vue.js"></script>
<script type="text/javascript" src="/js/library/slick.js" charset="utf-8"></script>
<script type="text/javascript" src="/js/library/vue-slide-up-down.umd.js" charset="utf-8"></script>
<script type="text/javascript" src="/js/main_new.js"></script>
<script type="text/javascript">
  main.init('page1');

  let contentclose = document.getElementById('contentclose')

  if (contentclose) {


    
    let changetext = document.getElementById('changetext')
    let changeimage = document.getElementById('changeimage')
    let contentalign = document.getElementById('contentalign')

    contentclose.addEventListener('click' , () => {
        if ( changetext.textContent.trim() ==  'Cerrar' ) {
            changetext.textContent="Saber más"
            changeimage.setAttribute('src' , '/assets/292fdf05-2aa6-4730-ae50-7e119c7e705a-MasCeleste.svg')
            contentalign.classList.add('hide') 
        }
        else {
          changetext.textContent="Cerrar"
            changeimage.setAttribute('src' , '/assets/148c0a9e-f568-45e1-8fa2-b537400979f6-CloseCeleste.svg')
            contentalign.classList.remove('hide')
        }

    })

    // if (resolucion < 650) {

    //   changetext.textContent= "Saber más"
    //   changeimage.setAttribute('src' , '/assets/292fdf05-2aa6-4730-ae50-7e119c7e705a-MasCeleste.svg')
    //   contentalign.classList.add('hide')

    // }



  }

  let contentmain = document.getElementById('contentmain')

  if (contentmain) {
    $(document).on('click', '#contentmain', function() {
      if($('#contentmain').hasClass('hide')){
        $('#contentmain').removeClass('hide')
      } else {
        $('#contentmain').addClass('hide')
      }
    })
    
    if (resolucion < 650) {
      contentmain.classList.add('hide')
    }
  }

</script>


@endsection