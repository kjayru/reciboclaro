@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>
        <section class="pagina {{ @$path1->slug }}">
               
            
            <ul class="pagina__breadcrumb limit nivel-2">
               
                <li><a href="/dudas-sobre-tu-facturacion"><img src="/img/arrow.svg" alt="{{$quiz->titulo }}"></a></li>/
                <li>{{ $quiz->titulo  }}</li>
            </ul>
            <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
              
                <li><a href="/dudas-sobre-tu-facturacion"><img src="/img/arrow.svg" alt="{{$quiz->titulo }}"></a></li>/
             
                <li>{{ $quiz->titulo  }}</li>
            </ul>
       
           
         <div class="addtext thetitle limit">
           {!! @$subcat->body !!}
        </div>  
            <div class="dominaturecibo">
                <ul class="dominaturecibo__opciones">
                    @foreach($invoices as $key => $recibo)
                        <li><a href="#"  class=" @if($key==0) act @endif" data-page="{{$key+1}}" data-hoja="{{$recibo->slug}}">Hoja {{ $key +1 }}</a></li>                 
                    @endforeach
                </ul>
              
               
                @foreach($invoices as $key => $invoice) 
                   
                    @if(isset($invoice->InvoiceItems))

                        @foreach($invoice->InvoiceItems as $k => $item) 

                        @if($item->mobile==0)
                            <div class="hoja @if($key==0) act @endif" id="hoja{{ $key + 1}}" data-id="{{@$item->id}}">
                                <div class="dominaturecibo__contenido">
                                    
                                    <div class="dominaturecibo__recibo recibo--web">
                                            
                                        <img class="dominaturecibo__recibo__imagen" src="/storage/{{ @$item->imagen }}" alt="">
                                            
                                            @if(isset($item->positions))
                                                @foreach($item->positions as $ke => $pos)
                                                    <div class="dominaturecibo__recibo__puntos punto-anime" style="top:{{ @$pos->laty }}px; left:{{ @$pos->latx }}px;">
                                                        <strong class="dominaturecibo__recibo__puntos--abrir act">{{ $pos->order }}</strong>
                                                        <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                                        <article class="dominaturecibo__recibo__puntos__contenido">
                                                        {!! $pos->descripcion !!}
                                                        </article>
                                                    </div>
                                                @endforeach
                                            @endif 
                                    </div>                             
                                </div>
                            </div>
                          @else
                          
                            <div class="hoja @if($key==0) act @endif dominaturecibo__recibo__lista--mobile" id="mhoja{{ $key + 1}}" data-id="{{@$item->id}}">
                                <div class="dominaturecibo__contenido">
                                    <div class="dominaturecibo__recibo recibo--mobile">
                                            <img class="dominaturecibo__recibo__imagen" src="/storage/{{ $item->imagen }}" alt="">
                                            @foreach($item->positions as $kk => $pos)
                                                <div class="dominaturecibo__recibo__puntos" style="top:{{ $pos->laty }}px; left:{{ $pos->latx }}px;" data-hash="hoja{{ $key + 1}}-{{ $k + 1}}">
                                                    <strong class="dominaturecibo__recibo__puntos--abrir act">{{ $pos->order }}</strong>
                                                </div>
                                        @endforeach  
                                    </div>
                                </div>
                                <ul class="dominaturecibo__recibo__lista--mobile">
                                    @foreach($item->positions as $k => $pos)
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
                    @endif
                @endforeach
               
            </div>
            <div class="addtext thejustify limit">
                {!! @$datos->body_bottom !!}
            </div>
        </section>

        <div class="puntoFooter"></div>

        @endsection