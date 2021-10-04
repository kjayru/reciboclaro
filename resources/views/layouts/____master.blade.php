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
        <link rel="stylesheet" href="/css/main.css?v={{ uniqid() }}">
       <link rel="stylesheet" href="/css/slick.css">
        <link rel="stylesheet" href="/css/site.css?v={{ uniqid() }}">
        <link rel="stylesheet" href="/css/site-mobile.css?v={{ uniqid() }}">
        <link rel="stylesheet" href="/css/newdesign.css">
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>



        <!-- este es el estilo del menu y footer -->
        <!-- <link rel="stylesheet" href="/css/header-footer.css"> -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41368265-9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-41368265-9');
    </script>
    </head>
    <body>

        @include('partials.navigation')

        @yield('content')
   
        @include('partials.footer')