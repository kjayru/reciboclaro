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
    <!--<link rel="stylesheet" href="/css/header_footer.css">-->

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
   
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
     
      <header class="claro-havas-header">
      <aside class="claro-havas-header__top">
        <nav class="claro-havas-header__top__options"><a class="claro-havas-header__top__options__link -active-" href="https://www.claro.com.pe/personas/">Personas</a><a class="claro-havas-header__top__options__link" href="https://www.claro.com.pe/negocios/">Negocios</a><a class="claro-havas-header__top__options__link" href="https://www.claro.com.pe/empresas/">Empresas</a></nav><b class="claro-havas-header__top__info"><a class="claro-havas-header__top__info__link" href="https://www.claro.com.pe/informacion-a-abonados-y-usuarios/">Información a Abonados y Usuarios</a></b>
        <form class="claro-havas-header__top__form" method="get" action="/buscador/" onsubmit="return (this.q.value == '') ? false:true;"><img class="claro-havas-header__top__form__icon" src="/assets/images/search.svg" loading="lazy">
          <input class="claro-havas-header__top__form__input" type="search" name="q" autocomplete="off" disabled placeholder="Buscar">
        </form>
        <aside class="claro-havas-header__top__more"><strong class="claro-havas-header__top__more__title fnButtonActiveToggle"><span>Más de Claro</span><img src="/assets/images/arrow-bottom.svg" loading="lazy"></strong>
          <nav class="claro-havas-header__top__more__nav">
            <div class="claro-havas-header__top__more__nav__inset"><a class="claro-havas-header__top__more__nav__item" href="https://www.claromusica.com/landing"><img src="/assets/images/icono-musica.svg" loading="lazy">Claro Música</a><a class="claro-havas-header__top__more__nav__item" href="https://www.clarovideo.com/peru/homeuser"><img src="/assets/images/icono-video.svg" loading="lazy">Claro Video</a></div>
          </nav>
        </aside>
        <div class="claro-havas-header__top__countries"><strong class="claro-havas-header__top__countries__selected fnButtonActiveToggle"><img src="/assets/images/peru-v2.svg" loading="lazy"><img src="/assets/images/arrow-bottom.svg" loading="lazy"></strong>
          <select class="claro-havas-header__top__countries__select" onchange="location.href=this.value">
            <option value="https://www.claro.com.ar/">Argentina</option>
            <option value="https://www.claro.com.br/">Brasil</option>
            <option value="https://www.clarochile.cl/">Chile</option>
            <option value="https://www.claro.com.co/">Colombia</option>
            <option value="https://www.claro.cr/">Costa Rica</option>
            <option value="https://www.claro.com.ec/">Ecuador</option>
            <option value="https://www.claro.com.sv/">El salvador</option>
            <option value="https://www.claro.com.es/">España</option>
            <option value="https://www.usclaro.com/">Estados Unidos</option>
            <option value="https://www.claro.com.gt/">Guatemala</option>
            <option value="https://www.claro.com.hn/">Honduras</option>
            <option value="https://www.claro.com.ni/">Nicaragua</option>
            <option value="https://www.claro.com.pa/">Panamá</option>
            <option value="https://www.claro.com.py/">Paraguay</option>
            <option value="https://www.claro.com.pe/">Perú</option>
            <option value="https://www.claropr.com/">Puerto Rico</option>
            <option value="https://www.claro.com.do/">Rep. Dominicana</option>
            <option value="https://www.claro.com.uy/">Uruguay</option>
          </select>
          <nav class="claro-havas-header__top__countries__nav fnNavCountries"><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.ar/"><img src="/assets/images/argentina.svg" loading="lazy">Argentina</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.br/"><img src="/assets/images/brasil.svg" loading="lazy">Brasil</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.clarochile.cl/"><img src="/assets/images/chile.svg" loading="lazy">Chile</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.co/"><img src="/assets/images/colombia.svg" loading="lazy">Colombia</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.cr/"><img src="/assets/images/costarica.svg" loading="lazy">Costa Rica</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.ec/"><img src="/assets/images/ecuador.svg" loading="lazy">Ecuador</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.sv/"><img src="/assets/images/elsalvador.svg" loading="lazy">El salvador</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.es/"><img src="/assets/images/espana.svg" loading="lazy">España</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.usclaro.com/"><img src="/assets/images/estadosunidos.svg" loading="lazy">Estados Unidos</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.gt/"><img src="/assets/images/guatemala.svg" loading="lazy">Guatemala</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.hn/"><img src="/assets/images/honduras.svg" loading="lazy">Honduras</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.ni/"><img src="/assets/images/nicaragua.svg" loading="lazy">Nicaragua</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.pa/"><img src="/assets/images/panama.svg" loading="lazy">Panamá</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.py/"><img src="/assets/images/paraguay.svg" loading="lazy">Paraguay</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.pe/"><img src="/assets/images/peru.svg" loading="lazy">Perú</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claropr.com/"><img src="/assets/images/puertorico.svg" loading="lazy">Puerto Rico</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.do/"><img src="/assets/images/repdominicana.svg" loading="lazy">Rep. Dominicana</a><a class="claro-havas-header__top__countries__nav__link" href="https://www.claro.com.uy/"><img src="/assets/images/uruguay.svg" loading="lazy">Uruguay</a></nav>
        </div>
      </aside>
      <div class="claro-havas-header__principal"><img class="claro-havas-header__principal__mobile-button fnHeaderShowMenu" src="/assets/images/menuMobile.svg" loading="lazy"><strong class="claro-havas-header__principal__title"><img src="/assets/images/claro-logotipo.svg" loading="lazy"></strong>
        <nav class="claro-havas-header__principal__nav fnHeaderMenu">
          <aside class="claro-havas-header__principal__nav__in-mobile"><b class="claro-havas-header__principal__nav__in-mobile__title">
               Menu<img class="fnHeaderHideMenu" src="/assets/images/close.svg" loading="lazy"></b>
            <div class="claro-havas-header__top__options"><a class="claro-havas-header__top__options__link -active-" href="https://www.claro.com.pe/personas/">Personas</a><a class="claro-havas-header__top__options__link" href="https://www.claro.com.pe/negocios/">Negocios</a><a class="claro-havas-header__top__options__link" href="https://www.claro.com.pe/empresas/">Empresas</a></div>
            <form class="claro-havas-header__top__form" method="get" action="/buscador/" onsubmit="return (this.q.value == '') ? false:true;"><img class="claro-havas-header__top__form__icon" src="/assets/images/search.svg" loading="lazy">
              <input class="claro-havas-header__top__form__input" type="search" name="q" autocomplete="off" disabled placeholder="Buscar">
            </form>
          </aside>
          <ul class="claro-havas-header__principal__nav__list">
            <li class="claro-havas-header__principal__nav__item fnHeaderSubMenu"><strong class="claro-havas-header__principal__nav__item__title fnHeaderShowSubMenu">¿Qué necesitas saber?</strong>
              <ul class="claro-havas-header__principal__nav__block">
                <div class="claro-havas-header__principal__nav__block__title-in-mobile">¿Qué necesitas saber?<span class="fnHeaderItemClose"><img src="/assets/images/flechaRegreso.svg" loading="lazy">Regresar</span></div>
                <li class="claro-havas-header__principal__nav__block__item fnHeaderNavItem" data-image="/assets/images/necesita_saber.jpg"><strong class="claro-havas-header__principal__nav__block__item__title"><a class="claro-havas-header__principal__nav__block__item__title__link">¿Qué necesitas saber?</a><img src="/assets/images/centro_de_ayuda.svg" loding="lazy"></strong><a class="claro-havas-header__principal__nav__block__item__link" href="/como-leer-tu-recibo-movil">¿Cómo leer tu recibo móvil?</a><a class="claro-havas-header__principal__nav__block__item__link" href="/lugares-de-pago">Lugares y medios de pago</a><a class="claro-havas-header__principal__nav__block__item__link" href="/lugares-de-pago/debito-automatico">Afíliate al débito automático</a><a class="claro-havas-header__principal__nav__block__item__link" href="/dudas-sobre-tu-facturacion">¿Problemas con tu facturación?</a><a class="claro-havas-header__principal__nav__block__item__link" href="/glosario-de-facturacion/">Glosario </a><a class="claro-havas-header__principal__nav__block__item__link" href="/dudas-y-preguntas-frecuentes">Dudas y preguntas frecuentes</a></li>
                <li class="claro-havas-header__principal__nav__block__item"><img class="claro-havas-header__principal__nav__block__item__image fnHeaderNavItemTargetImage" src="/assets/images/necesita_saber.jpg" loading="lazy"></li>
              </ul>
            </li>
          </ul>
        </nav>
        <nav class="claro-havas-header__principal__nav-mobile"><a class="claro-havas-header__principal__nav-mobile__link" href="tel:080000200"><img src="/assets/images/ventas.svg" loading="lazy">Ventas</a><a class="claro-havas-header__principal__nav-mobile__link" href="https://tiendaclaro.pe/" target="_blank"><img src="/assets/images/tienda.svg" loading="lazy">Tienda</a><a class="claro-havas-header__principal__nav-mobile__link" href="https://play.google.com/store/apps/details?id=com.claro.pe.miclaro&amp;hl=es_PE" target="_blank"><img src="/assets/images/MiClaroMobile.svg" loading="lazy">Mi Claro</a></nav><a class="claro-havas-header__principal__mi-claro" href="https://mi.claro.com.pe/"><img src="/assets/images/mi-claro.svg" loading="lazy">Mi Claro</a>
      </div>
    </header>



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
      <footer class="claro-havas-footer">
      <div class="claro-havas-footer__principal">
        <div class="claro-havas-footer__header"><img class="claro-havas-footer__header__logo" src="/assets/images/claro-footer.svg" loading="lazy">
          <aside class="claro-havas-footer__header__socials"><a class="claro-havas-footer__header__socials__link" href="#"><img src="/assets/images/fb.svg" loading="lazy"></a><a class="claro-havas-footer__header__socials__link" href="#"><img src="/assets/images/instagram.svg" loading="lazy"></a><a class="claro-havas-footer__header__socials__link" href="#"><img src="/assets/images/twitter.svg" loading="lazy"></a><a class="claro-havas-footer__header__socials__link" href="#"><img src="/assets/images/yt.svg" loading="lazy"></a></aside>
          <aside class="claro-havas-footer__header__legal">
            <p class="claro-havas-footer__header__legal__item">Para ventas y servicios<a class="claro-havas-footer__header__legal__link" href="tel:080000200">0800 00200</a><a class="claro-havas-footer__header__legal__link2" href="https://www.claro.com.pe/atencion-de-reclamos/"><img src="/assets/images/libro-de-reclamaciones-desktop.png" loading="lazy"></a></p>
            <p class="claro-havas-footer__header__legal__item">Para información<a class="claro-havas-footer__header__legal__link" href="tel:080000123">0800 00123</a><a class="claro-havas-footer__header__legal__link2" href="https://denuncias.americamovil.com/" target="_blank"><img src="/assets/images/boton_portal_denuncias_azul.svg" loading="lazy"></a></p>
          </aside>
        </div>
        <ul class="claro-havas-footer__list"><strong class="claro-havas-footer__list__title fnFooterShowItem">De Utilidad</strong>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/5g">Claro 5G</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/personas/movil/dias-claro-fans/">Días Claro Fans</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/consulta-de-numero/">Consulta de líneas</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/mide-tu-velocidad/">Mide tu velocidad</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/desbloquea-tu-celular/">Liberación de tu equipo móvil</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/comprobantes-electronicos/">Comprobantes electrónicos</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://static.claro.com.pe/img/otros/Llamada-por-llamada.pdf">Llamada por llamada</a></li>
        </ul>
        <ul class="claro-havas-footer__list"><strong class="claro-havas-footer__list__title fnFooterShowItem">Nos Hacemos Cargo</strong>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/legal-y-regulatorio/devoluciones-por-interrupciones/">Devoluciones por interrupciones</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/atencion-de-reclamos/">Atención de reclamos</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/atencion-de-reclamos/consulta-el-estado-de-tu-reclamo/">Consulta de reclamos</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://static.claro.com.pe/img/otros/Comunicado-Adquirientes-iPhone-6-6S-y-SE.pdf">Adquirientes iPhone 6, 6S y SE</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/no-al-phishing">Mensaje de Seguridad</a></li>
        </ul>
        <ul class="claro-havas-footer__list"><strong class="claro-havas-footer__list__title fnFooterShowItem">Institucional</strong>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/institucional/sobre-nosotros/">Sobre nosotros</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/institucional/sostenibilidad/">Sostenibilidad</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/institucional/centro-de-prensa/">Centro de prensa</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://trabajaenclaro.claro.com.pe/">Trabaja en Claro</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/proveedores/">Proveedores</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://www.claro.com.pe/trabajos-de-mantenimiento/">Trabajos de mantenimiento</a></li>
          <li class="claro-havas-footer__list__item"><a class="claro-havas-footer__list__link" href="https://denuncias.americamovil.com/paginainicio.aspx">Portal de denuncias</a></li>
        </ul>
        <aside class="claro-havas-footer__list-mobile"><strong class="claro-havas-footer__list__title">Redes Sociales</strong>
          <div class="claro-havas-footer__header__socials"><a class="claro-havas-footer__header__socials__link" href="#"><img src="/assets/images/fb.svg" loading="lazy"></a><a class="claro-havas-footer__header__socials__link" href="#"><img src="/assets/images/instagram.svg" loading="lazy"></a><a class="claro-havas-footer__header__socials__link" href="#"><img src="/assets/images/twitter.svg" loading="lazy"></a><a class="claro-havas-footer__header__socials__link" href="#"><img src="/assets/images/yt.svg" loading="lazy"></a></div>
        </aside>
      </div>
      <aside class="claro-havas-footer__bottom">
        <div class="claro-havas-footer__bottom__inset"><strong class="claro-havas-footer__bottom__copyright">Todos los derechos reservados 2022</strong>
          <ul class="claro-havas-footer__bottom__list">
            <li class="claro-havas-footer__bottom__list__item"><a class="claro-havas-footer__bottom__list__link" href="https://static.claro.com.pe/img/otros/Aviso_Legal_de_uso_del_sitio_web_08.pdf">Términos y condiciones de la web</a></li>
            <li class="claro-havas-footer__bottom__list__item"><a class="claro-havas-footer__bottom__list__link" href="https://www.claro.com.pe/garantia_equipos/">Condiciones de garantía de equipos</a></li>
            <li class="claro-havas-footer__bottom__list__item"><a class="claro-havas-footer__bottom__list__link" href="https://www.claro.com.pe/proteccion-datos/">Política de Privacidad</a></li>
            <li class="claro-havas-footer__bottom__list__item"><a class="claro-havas-footer__bottom__list__link" href="https://www.claro.com.pe/legal-y-regulatorio/derechos-arco/">Derechos ARCO</a></li>
            <li class="claro-havas-footer__bottom__list__item"><a class="claro-havas-footer__bottom__list__link" href="https://serviciosweb.osiptel.gob.pe/ConsultaSIRT/Buscar/frmConsultaTar.aspx">Sistema de consultas Tarifarias</a></li>
            <li class="claro-havas-footer__bottom__list__item"><a class="claro-havas-footer__bottom__list__link" href="https://static.claro.com.pe/img/otros/Medidas_Relativas_a_Neutralidad_implementadas-Julio_22.pdf">Neutralidad de Red</a></li>
            <li class="claro-havas-footer__bottom__list__item"><a class="claro-havas-footer__bottom__list__link" href="https://serviciosweb.osiptel.gob.pe/Devoluciones/">Sistema de Consulta de Deudas</a></li>
            <li class="claro-havas-footer__bottom__list__item"><a class="claro-havas-footer__bottom__list__link" href="https://www.claro.com.pe/legal-y-regulatorio/">Legal y Regulatorio</a></li>
          </ul>
        </div>
      </aside>
    </footer>


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
    <!--<script  src="/js/header_footer.js"></script> -->

    <script src="/js/header.js"></script>
    <script src="/js/footer.js"></script>

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