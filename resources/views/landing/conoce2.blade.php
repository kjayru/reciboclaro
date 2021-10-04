@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>
        <section class="pagina">
               
         
            <ul class="pagina__breadcrumb limit">
               
                <li><a href="/{{$path1->slug}}"><img src="/img/arrow.svg" alt="{{$path1->name }}"></a></li>/
                <li>{{ $path2->name  }}</li>
            </ul>
            <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
               
                <li><a href="/{{$path1->slug}}"><img src="/img/arrow.svg" alt="{{$path1->name }}"></a></li>/
             
                <li>{{ $path2->name  }}</li>
            </ul>
       

       

            <div class="addtext thetitle limit">
                    {!! @$datos->body !!}
                 </div>  
            
            <div class="dominaturecibo">
                <ul class="dominaturecibo__opciones">
                @foreach($recibos as $key => $recibo)
                    
                    <li><a href="/{{ $path }}/{{ $recibo->slug }}" 
                        @if($recibo->slug== $pag)
                        class="act"
                        @endif
                        >Hoja {{ $key +1 }}</a></li>
                  
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
                <div class="hoja hoja{{ $key + 1}} act dominaturecibo__recibo__lista--mobile">
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
                    <ul class="dominaturecibo__recibo__lista--mobile">
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
            <div class="addtext thejustify limit">
                    {!! @$datos->body_bottom !!}
            </div>
        </section>

        <div class="puntoFooter"></div>

        @endsection