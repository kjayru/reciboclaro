<!doctype html>
<html class="no-js" lang="es">
    <head prefix="og: http://ogp.me/ns#">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Claro Facturación</title>
        <meta name="description" content="">
        <meta name="kerwords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:url" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />
    
        <link rel="shortcut icon" href="/favicon.ico" />
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css?v=12112021">
       <link rel="stylesheet" href="/css/slick.css">
        <link rel="stylesheet" href="/css/site.css?v=12112021">
        <link rel="stylesheet" href="/css/site-mobile.css?v=12112021">
        <link rel="stylesheet" href="/css/newdesign.css">
        <link rel="stylesheet" href="/css/pgwmodal.css">
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

        


        <!-- este es el estilo del menu y footer -->
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
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-542V88J"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @include('partials.navigation')

        @yield('content')
   
        @include('partials.footer')