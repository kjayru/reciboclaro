<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Claro Facturación</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <script type="text/javascript" src="/js/library/jquery.js"></script>
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/concurso.css">
    <link rel="stylesheet" href="/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css?v={{ uniqid() }}">

    <link rel="stylesheet" href="/css/newdesign.css">
    <!--<link rel="stylesheet" href="/css/pgwmodal.css">-->


    <!-- estilso del menu y del footer -->
    <link rel="stylesheet" href="/css/header_footer.css">
   
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41368265-9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
     
      gtag('config', 'UA-41368265-9');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-542V88J');</script>
    <!-- End Google Tag Manager -->
<style>
    .capavideo{
      display: none;
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0px;
      background: rgba(0,0,0,1);
    }
    .capavideo .reload{
   
      color: white;
      position: absolute;
      font-size: 100px;
      text-align: center;
      width: 100%;
      top: 50%;
      margin-top: -60px;

    }
    .contenedor_video{
      width: 640px;
    height: 360px;
    display: block;
    position: relative;
    margin: 0 auto;
    }
    @media (max-width: 480px){
      .contenedor_video {
        width: 100%;
        height: 220px;
        display: block;
        position: relative;
        margin: 0 auto;
      }
    }

  </style>
</head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-542V88J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="layout" id="app">


      <!-- menu antiguo -->
      <!--<div class="layout__header">
        <div class="section1">
          <div class="section1__align">
            <div class="section1__header"><span> 
                <section id="navM">
                  <div></div>
                  <div></div>
                  <div></div>
                </section><a href="/"><img src="https://static.claro.com.pe/landings/havas/conoce_tu_recibo/assets/claro.png"></a>
               </span><span> 
                <ul>
                  <li id="nav">¿Qué necesitas saber?</li>
                </ul></span></div>
          </div>
        </div>
        <div class="menuContenedor" id="menuContenedor">
          <div class="limit limit--menu">
            <nav class="menu">
              <a class="menu__enlace" href="/como-leer-tu-recibo-movil"><img src="/assets/menu_image1.svg" alt="">¿Cómo leer tu recibo móvil?</a>
              <a class="menu__enlace" href="/lugares-de-pago"> <img src="/assets/menu_image2.svg" alt="">Lugares y medios de pago</a>


              <a class="menu__enlace" href="/lugares-de-pago/debito-automatico"><img src="/assets/menu_image3.svg" alt="">Afíliate al débito automático</a>

              <a class="menu__enlace" href="/dudas-sobre-tu-facturacion"> <img src="/assets/menu_image4.svg" alt="">¿Problemas con tu facturación?</a>

              <a class="menu__enlace" href="/glosario-de-facturacion"><img src="/assets/menu_image5.svg" alt="">Glosario </a>
              <a class="menu__enlace" href="/dudas-y-preguntas-frecuentes"><img src="/assets/menu_image6.svg" alt="">Dudas y preguntas frecuentes</a>

            </nav>
          </div>
          <div class="link">
            <a href="/que-es-el-recibo-por-email">
              <span class="desktop">Olvídate de las hojas impresas, afíliate al recibo por email <b>aquí</b></span>
              <span class="mobil">Afíliate al recibo por email</span>
            </a>
          </div>
        </div>
      </div>-->




      <!-- menu nuevo -->
     <div class="just__header">
        <div class="page1">
          <div class="page1__main">
            <section class="section1">
              <div class="section1__align">
                <div class="section1__main">
                  <div class="item__list">
                    <div class="item">
                      <div class="item__menu"><a href="https://www.claro.com.pe/personas/" target="_blank">
                          <p>Personas</p></a><a href="https://www.claro.com.pe/negocios/" target="_blank">
                          <p>Negocios</p></a><a href="https://www.claro.com.pe/empresas/" target="_blank">
                          <p>Empresas</p></a></div>
                      <div class="item__icon">
                        <div class="icon__menu"><a href="https://www.clarovideo.com/peru/homeuser" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/6388c79e-a8df-437d-a8cf-a6a24aa9053d-icono-video.svg" alt=""><span>Claro Video</span></a><a href="https://www.claromusica.com/landing" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/90a95baf-6208-47a4-8826-7ee5264d67d4-icono-musica.svg" alt=""><span>Claro Música</span></a></div>
                        <div class="icon__line"><span></span></div>
                        <div class="icon__country"><span>Estoy en</span>
                          <select class="selectcountrymobile" id="selectcountrymobile">
                            <option value="https://www.claro.com.ar/personas">Argentina</option>
                            <option value="https://www.claro.com.br/"> Brasil</option>
                            <option value="https://www.clarochile.cl/personas/">Chile</option>
                            <option value="https://www.claro.com.co/personas/"> Colombia</option>
                            <option value="https://www.claro.cr/personas/">Costa Rica</option>
                            <option value="https://www.claro.com.ec/personas/"> Ecuador</option>
                            <option value="https://www.claro.com.sv/personas/">El Salvador</option>
                            <option value="https://www.usclaro.com/"> Estados Unidos</option>
                            <option value="https://www.claro.com.gt/personas/">Guatemala</option>
                            <option value="https://www.claro.com.hn/personas/"> Honduras</option>
                            <option value="https://www.claro.com.ni/personas/">Nicaragua</option>
                            <option value="https://www.claro.com.pa/personas/"> Panamá</option>
                            <option value="https://www.claro.com.py/personas/">Paraguay</option>
                            <option value="https://www.claro.com.pe/personas/">Perú</option>
                            <option value="https://www.clarotodo.com/">Puerto Rico</option>
                            <option value="https://www.claro.com.do/personas/"> Rep. Dominicana</option>
                            <option value="https://www.claro.com.uy/personas/">Uruguay</option>
                          </select>
                          <div class="dropdown-country" id="dropdownCountry"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/ace93caa-2446-486a-ad2a-85b07e8e9a32-peru.svg" alt=""></div>
                          <ul id="dropdownInfo">
                            <li><a href="https://www.claro.com.ar/personas" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/df17218b-b496-484f-a2a7-e5903a6e36c2-argentina.svg" alt="">   Argentina</span></a></li>
                            <li><a href="https://www.claro.com.br/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/6b89de3e-52c0-4270-8339-5ecac16881d9-brasil.svg" alt="">   Brasil</span></a></li>
                            <li><a href="https://www.clarochile.cl/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/b12346f7-e697-4753-a76b-adb1cb64a500-chile.svg" alt="">   Chile</span></a></li>
                            <li><a href="https://www.claro.com.co/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/1ee36c63-cb6a-44dc-ad9a-72dae69b48c6-colombia.svg" alt="">   Colombia</span></a></li>
                            <li><a href="https://www.claro.cr/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/923958db-3258-4ae1-91d9-f44a0685fdd3-costarica.svg" alt="">   Costa Rica</span></a></li>
                            <li><a href="https://www.claro.com.ec/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/2e7da2a9-c582-4a7c-b95d-dd5e742bc82b-ecuador.svg" alt="">   Ecuador</span></a></li>
                            <li><a href="https://www.claro.com.sv/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/4bdb87dd-917e-4e90-9972-9d849d94a096-elsalvador.svg" alt="">   El Salvador</span></a></li>
                            <li><a href="https://www.usclaro.com/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/4018975b-b2af-4af9-a964-9d943db80e9f-usa.svg" alt="">   Estados Unidos</span></a></li>
                            <li><a href="https://www.claro.com.gt/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/7a400045-9ca4-46cf-9185-9c686119a5a2-guatemala.svg" alt="">   Guatemala</span></a></li>
                            <li><a href="https://www.claro.com.hn/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/df05b44d-adc9-4e42-937c-e3bcd606f0ca-honduras.svg" alt="">   Honduras</span></a></li>
                            <li><a href="https://www.claro.com.ni/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/fb674ebb-aa6d-4f36-9443-f0129d97678b-nicaragua.svg" alt="">   Nicaragua</span></a></li>
                            <li><a href="https://www.claro.com.pa/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/f6544495-084c-429c-bac2-bf0dc4cb8b7c-panama.svg" alt="">   Panamá</span></a></li>
                            <li><a href="https://www.claro.com.py/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/02e2dace-24ea-46b1-ae60-fdad98fb6b6a-paraguay.svg" alt="">   Paraguay</span></a></li>
                            <li><a href="https://www.claro.com.pe/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/ace93caa-2446-486a-ad2a-85b07e8e9a32-peru.svg" alt="">   Perú</span></a></li>
                            <li><a href="https://www.clarotodo.com/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/18f242db-48e1-43fd-b03e-09dce965fbbe-puertorico.svg" alt="">   Puerto Rico</span></a></li>
                            <li><a href="https://www.claro.com.do/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/1b9b15a2-b8b6-483d-a129-1765a432bf75-republicadominicana.svg" alt="">   Rep. Dominicana</span></a></li>
                            <li><a href="https://www.claro.com.uy/personas/" target="_blank"><span><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/a416f8f2-4c1b-4cad-8d57-9bf055557334-uruguay.svg" alt="">   Uruguay</span></a></li>
                            <div id="bg-color"></div>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section2" id="bgredheader">
              <div class="section2__align">
                <div class="section2__main">
                  <div class="item__list">
                    <div class="item">
                      <div class="item__prin">
                        <div class="item__brand"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/21800919-bc3a-466f-9663-637d8e04becd-Blanco.svg" alt=""></div>
                        <div class="item__menu">
                          <ul>
                            <li class="desktopmenu movil">¿Qué necesitas saber?
                              <ul class="datos_movil">
                                <li><a href="http://conoceturecibo.com/como-leer-tu-recibo-movil" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/menu_image1.svg" alt="">
                                    <p>¿Cómo leer tu recibo móvil?</p></a></li>
                                <li><a href="http://conoceturecibo.com/lugares-de-pago" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/menu_image2.svg" alt="">
                                    <p>Lugares y medios de pago</p></a></li>
                                <li><a href="http://conoceturecibo.com/lugares-de-pago/debito-automatico" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/menu_image3.svg" alt="">
                                    <p>Afíliate al débito automático</p></a></li>
                                <li><a href="http://conoceturecibo.com/dudas-sobre-tu-facturacion" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/menu_image4.svg" alt="">
                                    <p>¿Problemas con tu facturación?</p></a></li>
                                <li><a href="http://conoceturecibo.com/glosario-de-facturacion" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/menu_image5.svg" alt="">
                                    <p>Glosario </p></a></li>
                                <li><a href="http://conoceturecibo.com/dudas-y-preguntas-frecuentes" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/menu_image6.svg" alt="">
                                    <p>Dudas y preguntas frecuentes</p></a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="item__secu"><a id="miclaroappchange" href="https://mi.claro.com.pe/wps/portal/miclaro/landing2/!ut/p/z1/04_Sj9CPykssy0xPLMnMz0vMAfIjo8ziPQLdXT2cTAz8DFxDLQ0Cg_3NTPwMDYwNvMz0wwkpiAJKG-AAjgZA_VFgJWYGHu4ensEGvv7GgWYGjiFh7p6uJiYGBkZmUAV4zCjIjTDIdFRUBAA48-xV/dz/d5/L2dBISEvZ0FBIS9nQSEh/" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/39e590e9-d474-4f39-997d-a7b68a6c9196-miclaro_blanco.svg" alt="">Mi Claro</a><a href="https://tiendaclaro.pe/?utm_source=PortalClaro&amp;utm_medium=Referral&amp;utm_campaign=BotonHeader&amp;utm_term=Todos&amp;utm_content=Home" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/6216b77e-873d-4659-abc4-a7fbeadf1973-tienda_rojo.svg" alt="">Tienda</a>
                        <div class="burger" id="burger">
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu-movil" id="contentmenumovil">
                    <div class="movil-list-menu">
                      <ul id="contentmenulist">
                        <li class="box-menu">
                          <p><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/d24dcece-79fa-4f32-81fb-24aa60efcc3a-Movil.svg" alt="">  ¿Qué necesitas saber? </p>
                          <div class="detail">
                            <ul> 
                              <li><a href="http://conoceturecibo.com/como-leer-tu-recibo-movil" target="_blank">¿Cómo leer tu recibo móvil?</a></li>
                              <li><a href="http://conoceturecibo.com/lugares-de-pago" target="_blank">Lugares y medios de pago</a></li>
                              <li><a href="http://conoceturecibo.com/lugares-de-pago/debito-automatico" target="_blank">Afíliate al débito automático</a></li>
                              <li><a href="http://conoceturecibo.com/dudas-sobre-tu-facturacion" target="_blank">¿Problemas con tu facturación?</a></li>
                              <li><a href="http://conoceturecibo.com/glosario-de-facturacion" target="_blank">Glosario </a></li>
                              <li><a href="http://conoceturecibo.com/dudas-y-preguntas-frecuentes" target="_blank">Dudas y preguntas frecuentes</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="movil-list-app">
                      <p>Disfruta de:</p>
                      <ul>
                        <li><a href="https://www.clarovideo.com/peru/homeuser" target="_blank"> <img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/c8c9e10b-358a-48b1-8bf9-b98a3c85108e-Video.svg" alt="">   Claro Video</a></li>
                        <li><a href="https://www.claromusica.com/landing" target="_blank"> <img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/f5dc6b5e-d476-462b-b8bd-d21477bd812e-Musica.svg" alt="">   Claro Música</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="menu-movil-btn" id="menumovilbtn">
                    <div class="movil-list-btn"><a href="https://tiendaclaro.pe/?utm_source=PortalClaro&amp;utm_medium=Referral&amp;utm_campaign=BotonHeader&amp;utm_term=Todos&amp;utm_content=Home" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/cc5dd539-6f73-4d8e-b793-a647df0c69e0-tienda_blanco.svg" alt="">Tienda</a></div>
                  </div>
                </div>
              </div>
            </section>
            <div class="bg-color-menu" id="bg-color-menu"></div>
          </div>
        </div>
      </div>




      <div class="layout__main">
      @yield('content')
      </div>
      

      <!-- footer antiguo -->
      <!--<div class="layout__footer">
        <div class="section1">
          <div class="section1__align">
              <div class="section1__footer"><span> <img src="/assets/claro.png">Todos los derechos reservados, Claro 2018</span><span> 
                <ul>
                  <li><a href="http://www.claro.com.pe/wps/portal/pe/sc/institucional" target="_blank">Sitio Institucional</a></li>
                  <li><a href="http://www.claro.com.pe/wps/portal/pe/sc/personas/legal-y-regulatorio" target="_blank">Legal y regulatorio</a></li>
                  <li><a href="http://www.claro.com.pe/wps/portal/pe/sc/personas/legal-y-regulatorio" target="_blank">Información a Abonados y Usuarios</a></li>
                  <li><a href="http://www2.osiptel.gob.pe/Devoluciones/Principal.aspx" target="_blank">Sistema SIRD</a></li>
                </ul></span>
              </div>
          </div>
        </div>
      </div>-->




      <!-- footer nuevo -->
      <div class="just__footer">
        <div class="page1">
          <div class="page1__main">
            <section class="section1">
              <div class="section1__align">
                <div class="section1__header">
                  <div class="content">
                    <div class="content__list first">
                      <div class="logo"><a href="https://www.claro.com.pe/" target="_blank"><img src="https://static.claro.com.pe/landings/havas/header-footer-final/v1/assets/logo_claro.svg" alt=""></a>
                        <p>Todos los derechos reservados 2020</p>
                      </div>
                      <div class="social"><a class="ico_facebook" href="https://www.facebook.com/AmericaMovilPeruSAC" target="_blank"></a><a class="ico_instagram" href="https://www.instagram.com/claroperu/" target="_blank"></a><a class="ico_twitter" href="https://twitter.com/claroperu" target="_blank"></a><a class="ico_youtube" href="https://www.youtube.com/claroperu" target="_blank"></a></div>
                      <div class="info">
                        <blockquote>
                          <p>Para ventas y servicios</p>
                          <h4><a href="tel:0800 00200">0800 00200</a></h4>
                        </blockquote>
                        <blockquote>
                          <p>Contáctanos</p>
                          <h4><a href="tel:0800 00123">0800 00123</a></h4>
                        </blockquote>
                      </div>
                    </div>
                    <div class="content__list">
                      <h3>De Utilidad<span class="btn_down"></span></h3>
                      <ul>
                        <li><a href="https://www.claro.com.pe/personas/estamos-juntos/fraccionamiento" target="_blank">Fracciona tu deuda</a></li>
                        <li><a href="https://www.claro.com.pe/consulta-de-numero/" target="_blank">Consulta de líneas</a></li>
                        <li><a href="https://www.claro.com.pe/mide-tu-velocidad/" target="_blank">Mide tu velocidad</a></li>
                        <li><a href="https://www.claro.com.pe/desbloquea-tu-celular/" target="_blank">Liberación de tu equipo móvil</a></li>
                        <li><a href="https://www.claro.com.pe/comprobantes-electronicos/" target="_blank">Comprobantes electrónicos</a></li>
                        <li><a href="https://static.claro.com.pe/img/otros/Llamada-por-llamada.pdf" target="_blank">Llamada por llamada</a></li>
                      </ul>
                    </div>
                    <div class="content__list">
                      <h3>Nos Hacemos Cargo<span class="btn_down"></span></h3>
                      <ul>
                        <li><a href="https://www.claro.com.pe/legal-y-regulatorio/devoluciones-por-interrupciones/" target="_blank">Devoluciones por interrupciones</a></li>
                        <li><a href="https://www.claro.com.pe/atencion-de-reclamos/" target="_blank">Atención de reclamos</a></li>
                        <li><a href="https://www.claro.com.pe/atencion-de-reclamos/" target="_blank">Consulta de reclamos</a></li>
                        <li><a href="https://www.claro.com.pe/atencion-de-reclamos/" target="_blank">Libro de reclamaciones</a></li>
                      </ul>
                    </div>
                    <div class="content__list">
                      <h3>Institucional<span class="btn_down"></span></h3>
                      <ul>
                        <li><a href="https://www.claro.com.pe/institucional/sobre-nosotros/" target="_blank">Sobre nosotros</a></li>
                        <li><a href="https://www.claro.com.pe/institucional/sostenibilidad/" target="_blank">Sostenibilidad</a></li>
                        <li><a href="https://www.claro.com.pe/trabajos-de-mantenimiento/" target="_blank">Trabajos de mantenimiento</a></li>
                        <li><a href="https://www.claro.com.pe/institucional/centro-de-prensa/" target="_blank">Centro de prensa</a></li>
                        <li><a href="https://denuncias.americamovil.com/paginainicio.aspx" target="_blank">Portal de denuncias</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="section1__main">
                  <div class="title">Legales<span class="btn_down"></span></div>
                  <div class="content">
                    <div class="content__list first">
                      <ul>
                        <li><a href="https://static.claro.com.pe/img/otros/Aviso_Legal_de_uso_del_sitio_web.pdf" target="_blank">Términos y condiciones de la web</a></li>
                        <li><a href="https://www.claro.com.pe/garantia_equipos/" target="_blank">Condiciones de garantía de equipos</a></li>
                      </ul>
                    </div>
                    <div class="content__list">
                      <ul>
                        <li><a href="https://www.claro.com.pe/proteccion-datos/" target="_blank">Política de Privacidad</a></li>
                        <li><a href="https://www.claro.com.pe/legal-y-regulatorio/derechos-arco/" target="_blank">Derechos ARCO</a></li>
                      </ul>
                    </div>
                    <div class="content__list">
                      <ul>
                        <li><a href="https://serviciosweb.osiptel.gob.pe/ConsultaSIRT/Buscar/frmConsultaTar.aspx" target="_blank">Sistema de consultas Tarifarias</a></li>
                        <li><a href="https://static.claro.com.pe/img/otros/Medidas_Relativas_a_Neutralidad_implementadas_mayo_20.pdf" target="_blank">Neutralidad de Red</a></li>
                      </ul>
                    </div>
                    <div class="content__list">
                      <ul>
                        <li><a href="https://serviciosweb.osiptel.gob.pe/Devoluciones/" target="_blank">Sistema de Consulta de Deudas</a></li>
                        <li><a href="https://www.claro.com.pe/legal-y-regulatorio/" target="_blank">Información abonados y usuarios</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>


    </div>
   
    <script type="text/javascript" src="/js/vue.js"></script>
    <script type="text/javascript" src="/js/library/slick.js" charset="utf-8"></script>

    <script type="text/javascript" src="/js/main_v3.js?v={{ uniqid()}}"></script>
    <script type="text/javascript" src="/js/main_desing.js"></script>
    <script src="/js/owl.carousel.js"></script>
    
    <!--<script src="/js/pgwmodal.js"></script>-->
    <script type="text/javascript" src="/js/vue-slick.js" charset="utf-8"></script>
    <script type="text/javascript" src="/js/vue-modal.js"></script>


<!--     header foooter js-->
    <script  src="/js/header_footer.js"></script> 



    <script>
        var tag = document.createElement('script');
    
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    
    
        var player;
        function onYouTubeIframeAPIReady() {
          player = new YT.Player('videoprom', {
            height: '360',
            width: '640',
            videoId: 'xbXEyQ4Rzds',
            playerVars: { 'modestbranding': 1,'loop':0,'showinfo':0},
            events: {
               
                'onStateChange': onPlayerStateChange
              }
          });
        }
        
        var done = false;
          function onPlayerStateChange(event) {
           
            if (event.data == YT.PlayerState.ENDED) {
              //player.seekTo(0);
              $(".capavideo").show();
            }
            /*else if (event.data == YT.PlayerState.PAUSED) {
                  player.playVideo();
            }*/
          }
          function stopVideo() {
            player.stopVideo();
          }  
          function playVideo() {
            player.playVideo();
          }  
    
         $(".reload").hover(function(){
          $(this).css('cursor','pointer');
         },function(){
          $(this).css('cursor','default');
         });
         
         $(".reload").on("click",function(){
            player.playVideo();
            $(".capavideo").fadeOut(1000,'swing',function(){
             
            })
         });
    </script>

    <script type="text/javascript" src="/js/common.js"></script>
    <script src="/js/pagehome_slider.js"></script>
  </body>
</html>