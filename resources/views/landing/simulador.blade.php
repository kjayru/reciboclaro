@extends('layouts.master')

@section('content')


<div class="espacioHeader"></div>

<section class="pagina">

    <ul class="pagina__breadcrumb limit">
        <li><a href="/">Inicio</a></li>/
        <li>Simulador de periodo de facturación</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="/">Inicio</a></li>/
        <li>Simulador de periodo de facturación</li>
    </ul>
    
    <div class="limit">
        <h2 class="pagina__titulo">Simulador de periodo de facturación</h2>
    </div>
        
    <article class="ciclodefacturacion">
        <div class="ciclodefacturacion__referencia">
            <strong><a href="#" class="verFactura">Haz clic aquí para obtener las fechas de tu ciclo</a></strong>
        </div>
        
        <div id="datepicker"></div>
        <div class="ciclodefacturacion__selecciones">
            <div class="ciclodefacturacion__seleccion">
                 De 
                <div id="inicio" class="inicio">---</div>
            </div>
            <div class="ciclodefacturacion__seleccion">
                 al 
                <div id="final">---</div>
            </div>
            <p class="ciclodefacturacion__novalido">Ciclo no válido</p>
        </div>
        <div class="ciclodefacturacion__boton">Simular</div>
    </article>
    
    <div class="ciclodefacturacion__resultado">
        <ul class="ciclodefacturacion__lista">
            <li class="ciclodefacturacion__item">
                <article id="msg1">
                    <strong><img src="img/calendario-icono.svg" alt=""><span>5-mar-2017 al 4-abril-2017</span></strong>
                    <p>Cada xxxx del mes recibes los megas, minutos y SMS correspondientes a tu plan. Puedes utilizarlos hasta que finalice tu ciclo de facturación</p>
                </article>
            </li>
            <li class="ciclodefacturacion__item">
                <article id="msg2">
                    <strong><img src="img/recibo-icono.svg" alt=""><span>Emisión de tu recibo</span></strong>
                    <p>Tu recibo se emite entre los xx y xx de cada mes.</p>
                </article>
            </li>
            <li class="ciclodefacturacion__item">
                <article id="msg3">
                    <strong><img src="img/dia-de-pago-icono.svg" alt=""><span>Último día de pago:</span></strong>
                    <p>La fecha límite de pago son 15 días posteriores a la emisión de tu recibo.</p>
                </article>
            </li>
        </ul>
        <div class="ciclodefacturacion__referencia">
            <strong><a href="#" class="ciclodefacturacion__otro">< Hacer otra simulación</a></strong>
        </div>
    </div>
    
</section>

<div class="puntoFooter"></div>

<div id="box__facturacion" class="box">
    <div class="box__table">
        <div class="box__table__cell">
            <div class="box__contenido">
                <img src="img/factura.jpg" alt="">
                <div class="box__cerrar">x</div>
            </div>
        </div>
    </div>
</div>

<div id="box__errorCiclo" class="box">
    <div class="box__table">
        <div class="box__table__cell">
            <div class="box__contenido box__contenido--novalido">
                <div class="box__contenido__novalido">Periodo no válido</div>
                <div class="box__cerrar">x</div>
            </div>
        </div>
    </div>
</div>
@endsection