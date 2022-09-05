@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

        <section class="pagina puntoautorizados">

            <ul class="pagina__breadcrumb limit">
                <li><a href="/">Inicio</a></li>/
                <li>Glosario de facturación</li>/
                <li>{{strtoupper($pag)}}</li>
            </ul>
            <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
                <li><a href="/">Inicio</a></li>/
                <li>Glosario de facturación</li>
            </ul>
            
            <div class="limit" id="secc-L">
                <h2 class="pagina__titulo">Glosario de facturación</h2>
                <article class="glosario__listaContenedor">
                    <img class="glosario__listaContenedor__flecha glosario__left" src="/img/calendario-left.png" alt="" />
                    <ul class="glosario__lista">
                        <div class="swiper-container slideGlosario">
                            <ul class="swiper-wrapper">
                                   @foreach($terms->sortBy('name') as $k=> $term)
                                    <li class="swiper-slide glosario__item">
                                        <a href="/glosario-de-facturacion/{{$term->name}}" data-num="{{$loop->index}}" class="click @if($term->name==strtoupper($pag)) act @endif">{{$term->name}}</a>
                                    </li>
                                    @endforeach
                            </ul>
                        </div>
                    </ul>
                    <img class="glosario__listaContenedor__flecha glosario__right" src="/img/calendario-right.png" alt="" />
                    <div class="swiper-scrollbar swiper-scrollbar--slideGlosario"></div>
                </article>
                <div class="limit listadoStandardContenedor">
                    <ul id="c" class="listadoStandard act">
                      
                     @foreach($glosario->glosaries->sortBy('order') as $gloso) 
                        <li>
                            <article>
                                <h3>{{ $gloso->name }}</h3>
                               
                                        {!! $gloso->content !!}
                               
                            </article>
                        </li>
                    @endforeach
                    </ul>
                    
                </div>
            </div>

        </section>

        <div class="puntoFooter"></div>
@endsection