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
                        <div class="accordion__subtitle" @click="openAccordion(0,0,0)"><a>V??a APP 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Inicia sesi??n en la App de Interbank registrando tu n??mero de tarjeta y documento de identidad. Si a??n no la tienes desc??rgala desde Google Play o App Store.</p>
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
                                    <p>Ingresa a la secci??n "Paga y Recarga", selecciona PAGO A INSTITUCI??N O EMPRESA</p>
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
                                    <p>Selecciona CLARO y selecciona el servicio que deseas pagar, por ejemplo, "PAGOPORDNI". Ingresa el "N??mero de DNI" y ??Listo!</p>
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
                                    <p>Valida los datos del recibo en la pantalla de CONFIRMACI??N DE PAGO e ingresa la clave de SMS que llegar?? a tu celular.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][0].option[1] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,0,1)"><a>V??a Web 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Ingresa a la banca por internet de  <a href="https://interbank.pe/" target="_blank" tabindex="0">Interbank </a>y selecciona la opci??n Personas.</p>
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
                                    <p>Registra tu tarjeta y n??mero de documento.</p>
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
                                    <p>Ingresa a la secci??n "Mis Operaciones", selecciona PAGO DE SERVICIOS.</p>
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
                                    <p>Escribe CLARO y selecciona el servicio que deseas pagar, por ejemplo "PAGOPORDNI" Ingresa el "DNI" y ??Listo!</p>
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
                                    <p>Selecciona el recibo que quieres cancelar y la cuenta de la cu??l se va descontar el monto. Luego, haz clic en Siguiente.</p>
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
                                    <p>Valida el monto a cancelar e ingresa la clave SMS de confirmaci??n.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][0].option[2] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,0,2)"><a>V??a D??bito autom??tico
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Ingresa a la p??gina de <a href="https://interbank.pe/" target="_blank" tabindex="0">Pago Autom??tico  </a>de Interbank</p>
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
                                    <p>Selecciona la opci??n para recibir tu c??digo de identificaci??n; y luego coloca el c??digo que te llego</p>
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
                                    <p>Ingresa tus datos en el formulario para la afiliaci??n del servicio</p>
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
                                    <p>??Listo! Tu servicio ya se encuentra afiliado al D??bito Autom??tico</p>
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
                        <div class="accordion__subtitle" @click="openAccordion(0,1,0)"><a>V??a APP 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Ingresa al men?? ???Operaciones??? y luego da clic en ???Pagar servicios???</p>
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
                                    <p>Revisa la deuda y elige la cuenta o tarjeta de cr??dito de origen.</p>
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
                                    <p>Revisa la deuda y elige la cuenta o tarjeta de cr??dito de origen.</p>
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
                                    <p>Revisa tus datos, agr??gala a favoritos (no olvides colocar un nombre y confirma la operaci??n).</p>
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
                                    <p>??Listo! Ahora podr??s ahorrar m??s tiempo la pr??xima vez.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][1].option[1] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,1,1)"><a>V??a Web 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Ingresa a <a href="https://www.viabcp.com/" target="_blank" tabindex="0">https://www.viabcp.com </a>y haz clic en el bot??n BANCA POR INTERNET.</p>
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
                                    <p>Ingresa al men?? PAGAR Y TRANSFERIR y selecciona PAGAR UN SERVICIO. Luego, haz clic en BUSCAR POR NOMBRE DE LA EMPRESA</p>
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
                                    <p>Escribe tu n??mero de DNI y haz clic en SIGUIENTE.</p>
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
                        <div class="accordion__subtitle" @click="openAccordion(0,1,2)"><a>V??a D??bito autom??tico
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Ingresa <a href="https://interbank.pe/" target="_blank" tabindex="0">www.viabcp.com </a>y haz clic en CUENTAS, luego en AFILIAR / DESAFILIAR AL D??BITO AUTOM??TICO</p>
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
                                    <p>Selecciona AMERICA M??VIL PER?? S.A.C y completa los datos de la afilici??n.</p>
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
                        <div class="accordion__subtitle" @click="openAccordion(0,2,0)"><a>V??a APP 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Inicia sesi??n en la App del BBVA Banco Continental ingresando tu DNI y CONTRASE??A DE BANCA POR INTERNET. Si a??n no tienes la App, desc??rgala desde Google Play o App Store.</p>
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
                                    <p>Ingresa tu n??mero de DNI.</p>
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
                        <div class="accordion__subtitle" @click="openAccordion(0,2,1)"><a>V??a Web 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Selecciona la opci??n PAGO DE SERVICIOS.</p>
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
                                    <p>Selecciona TELEFON??A M??VIL y luego CLARO DNI.</p>
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
                                    <p>Ingresa el N??MERO DE DNI y selecciona el recibo a cancelar.</p>
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
                                    <p>Para terminar, ingresa la clave de SMS de confirmaci??n.</p>
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
                        <div class="accordion__subtitle" @click="openAccordion(0,3,0)"><a>V??a APP 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Inicia tu secci??n en la APP del Scotiabank.</p>
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
                                    <p>Elige la opci??n PAGAR en la pesta??a Quiero. Luego, la opci??n TEL??FONO, CABLE E INTERNET.</p>
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
                                    <p>Busca la EMPRESA y selecciona CLARO VARIOS. Luego, selecciona el tipo de servicio que deseas cancelar e ingresa tu N??MERO DE DNI.</p>
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
                                    <p>Confirma tu clave SMS y el pago de tu Recibo Claro habr?? sido realizado con ??xito.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][0][3].option[1] }">
                        <div class="accordion__subtitle" @click="openAccordion(0,3,1)"><a>V??a Web 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Elige la opci??n PAGAR O RECARGAR y luego haz clic en TEL??FONO, CABLE E INTERNET.</p>
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
                                    <p>En empresa o insituci??n digita CLARO y selecciona CLARO VARIOS.</p>
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
                                    <p>Selecciona CLARO DNI e ingresa el n??mero de documento. Luego, haz clic en CONTINUAR.</p>
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
                        <div class="accordion__subtitle" @click="openAccordion(0,3,2)"><a>V??a D??bito autom??tico
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Ingresa a la banca por internet de <a href="https://interbank.pe/" target="_blank" tabindex="0">Scotiabank </a>y selecciona la opci??n ACCEDER</p>
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
                                    <p>Elige la opci??n SERVICIO AL CLIENTE, luego seleccionar CARGO AUTOM??TICO y haz clic en AFILIACI??N</p>
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
                                    <p>Selecciona AMERICA M??VIL PER?? S.A.C y completa los datos de la afilici??n.</p>
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
                        <div class="accordion__subtitle" @click="openAccordion(0,4,0)"><a>V??a Web 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Accede a la banca por internet del <a href="https://www.scotiabank.com.pe/Personas/Default" target="_blank" tabindex="0">Banco de la Naci??n  </a>y selecciona la opci??n INGRESA A TUS CUENTAS.</p>
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
                                    <p>Ingresa a pago de servicio y en la opci??n CELULAR selecciona la opci??n RECIBO CLARO.</p>
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
                                    <p>Despu??s, ingresa tu N??MERO CELULAR y selecciona el recibo a cancelar.</p>
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
                                    <p>Por ??ltimo, ingresa los 6 d??gitos de tu TOKEN y da clic en la opci??n pagar.</p>
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
                        <div class="accordion__subtitle" @click="openAccordion(0,5,0)"><a>V??a APP 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Ingresa a la aplicaci??n, selecciona la opci??n <strong>Paga servicios.</strong></p>
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
                                    <p>Selecciona la categor??a <strong>telefon??a </strong>y empresa <strong>Claro.</strong></p>
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
                                    <p>Al seleccionar el servicio tendr??s dos opciones: hacer el pago por <br/><strong>N??mero de celular/Fijo o C??digo de cliente.</strong></p>
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
                                    <p>Si tienes tu c??digo de cliente deber??s ingresarlo.</p>
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
                                    <p>Si tienes N??mero de celular/fijo deber??s ingresarlo.</p>
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
                                    <p>Confirma la operaci??n con tu contrase??a.</p>
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
                                    <p>Y listo, habr??s hecho el pago de tu recibo Claro.</p>
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
                                    <p>No olvides que recibir??s un SMS confirmando el pago.</p>
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
                        <div class="accordion__subtitle" @click="openAccordion(1,0,0)"><a>V??a APP 
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
                                    <p>Dale clic a la opci??n PAGOS y luego a la opci??n VOY A RECARGAR UN CELULAR.</p>
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
                                    <p>Ingresa el NOMBRE DE LA EMPRESA, luego el N??MERO CELULAR A RECARGAR, finalmente LA CUENTA CON SALDO A DEBITAR. </p>
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
                                    <p>Verifica todos los datos e ingresa la CLAVE SMS que te llegar?? a tu celular, finalmente dar clic en CONFIRMAR.</p>
                                  </figcaption>
                                </div>
                              </vue-slick>
                            </div>
                          </div>
                        </slide-up-down>
                      </div>
                      <div class="accordion__item" :class="{ 'active': accordion['tabs'][1][0].option[1] }">
                        <div class="accordion__subtitle" @click="openAccordion(1,0,1)"><a>V??a APP 
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
                                    <p>Dale clic a la opci??n PAGOS y luego a la opci??n VOY A PAGAR UN SERVICIO.</p>
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
                                    <p>Ingresa la CLAVE SMS que te llegar?? a tu celular, finalmente dar clic a CONFIRMAR PAGO. </p>
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
                        <div class="accordion__subtitle" @click="openAccordion(1,1,0)"><a>V??a APP 
                            <h5>Sin comisi??n</h5></a><i></i></div>
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
                                    <p>Selecciona la opci??n PAGOS, luego PAGO DE SERVICIOS.</p>
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
                                    <p>Buscar en empresa AMERICA MOVIL - CLARO, Ingresar el ???N??mero de celular??? o ???Tel??fono fijo??? y dale clic a SIGUIENTE.</p>
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
                                    <p>Seleccionar la CUENTA DE CARGO, luego Ingresar la CLAVE DIN??MICA y darle clic a CONFIRMAR.</p>
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
                                    <p>Para finalizar se visualizar?? la CONSTANCIA DE PAGO DE SERVICIO, as?? mismo la constancia ser?? enviada autom??ticamente al correo registrado.</p>
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
                    <span>Aseg??rate que la opci??n de compras por internet est?? habilitada. Puedes activar esta opci??n en el aplicativo de tu banco.</span>
                </li>
                <li>
                    <span>Ingresa correctamente el CVV de 3 d??gitos y fecha de vencimiento de tu tarjeta.</span>
                </li>
                <li>
                    <span>Revisa si tienes el saldo suficiente para completar la operaci??n.</span>
                </li>
                <li>
                    <span>Si tu tarjeta es Scotiabank, aseg??rate de tener un l??mite diario que permita realizar la operaci??n. Recuerda que puedes cambiar este l??mite en el aplicativo de tu banco.</span>
                </li>
                <li>
                    <span>Si tu tarjeta es del Banco de la Naci??n, solo podr??s hacer compras hasta 200 soles por operaci??n.</span>
                </li>
            </ul>
            <figure>
                <img class="cerrado" src="/img/person_claro.jpg" alt="">
            </figure>
        </article>
    </div>
   

    <div class="view-more-nd">
        <a href="debito-automatico" >
            <h3>Evita las colas y ahorra tiempo afiliando tu tarjeta al D??bito Autom??tico</h3>  <span>Ver m??s</span>
        </a>
    </div>

</section>

<div class="puntoFooter"></div>


<script type="text/javascript" src="/js/library/jquery.js"></script>
<script type="text/javascript" src="/js/library/vue.js"></script>
<script type="text/javascript" src="/js/library/slick.js" charset="utf-8"></script>
<script type="text/javascript" src="/js/library/vue-slide-up-down.umd.js" charset="utf-8"></script>
<script type="text/javascript" src="/js/main_new.js"></script>
<script type="text/javascript">main.init('page1');</script>


@endsection