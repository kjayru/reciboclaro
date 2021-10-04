@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>
        <section class="pagina pd-botttom">
               
         
            <ul class="pagina__breadcrumb limit">
                <li><a href="/">Inicio</a></li>/
                <li>cómo leer tu recibo móvil</li>             
            </ul>
            
            <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
                <li><a href="/">Inicio</a></li>/
                <li>cómo leer tu recibo móvil</li>
            </ul>
       

       

            <h2 class="pagina__titulo pagina__titulo--miclaro">¿Cómo leer tu recibo móvil?</h2>
            <p style="text-align:center; padding-bottom: 25px;">Haz clic en los círculos para conocer cada sección del recibo</p>
            <div class="dominaturecibo">
                <ul class="dominaturecibo__opciones">
                    
                @foreach($recibos as $key => $recibo)
                    
                    <li>
                        <a href="/como-leer-tu-recibo-movil/{{ $recibo->slug }}" @if($recibo->slug == $pag) class="act" @endif >  Hoja {{ $key +1 }}</a>
                    </li>
                  
                 @endforeach
                </ul>
               
            @foreach($invoices as $key => $invoice) 
            
              @if($invoice->mobile==0)
                <div class="hoja hoja{{ $key + 1}} act">
                    <div class="dominaturecibo__contenido">
                        <div class="dominaturecibo__recibo recibo--web">
                                <img class="dominaturecibo__recibo__imagen" src="/storage/{{ $invoice->imagen }}" alt="">
                                @foreach($invoice->positions as $k => $pos)
                                <div class="dominaturecibo__recibo__puntos punto-anime" style="top:{{ $pos->laty }}px; left:{{ $pos->latx }}px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">{{  $pos->order }}</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                    {!! $pos->descripcion !!}
                                    </article>
                                </div>
                                @endforeach
                                
                               
                        </div>
                        
                    </div>
                   
                </div>
              @endif
             @endforeach
            <!--mobile seccion -->
            @foreach($invoices as $key => $invoice) 
                 @if($invoice->mobile==2)
                <div class="hoja hoja{{ $key + 1}} act dominaturecibo__recibo__lista--mobile padding-t ">
                    <div class="dominaturecibo__contenido">
                      
                        <div class="dominaturecibo__recibo recibo--mobile">
                                <img class="dominaturecibo__recibo__imagen" src="/storage/{{ $invoice->imagen }}" alt="">
                                @foreach($invoice->positions as $k => $pos)
                                    <div class="dominaturecibo__recibo__puntos" style="top:{{ $pos->laty }}px; left:{{ $pos->latx }}px;" data-hash="hoja{{ $key + 1}}-{{ $k + 1}}">
                                        <strong class="dominaturecibo__recibo__puntos--abrir act">{{  $pos->order }}</strong>
                                    </div>
                               @endforeach  
                        </div>

                    </div>
                    <ul class="dominaturecibo__recibo__lista--mobile ul-pt">
                      @foreach($invoice->positions as $k => $pos)
                        <li id="hoja{{ $key + 1}}-{{ $k + 1}}">
                            <article>
                                {!! $pos->descripcion !!}
                            </article>
                        </li>
                      @endforeach 
                    </ul>
                </div>
                @endif
            @endforeach
            </div>

        </section>

        <div class="puntoFooter"></div>

        @endsection