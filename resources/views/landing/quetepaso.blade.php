@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>



        <section class="pagina pagina--quetepasoestemes">

            <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin limit">
                <li><a href="/">Inicio</a></li>/
                <li><a href="/que-te-paso-este-mes">¿Qué te pasó este mes?</a></li>/
                <li>{{ strip_tags($content[0]->title) }}</li>
            </ul>
            <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin pagina__breadcrumb--mobile limit">
                <li><a href="/">Inicio</a></li>/
                <li><a href="/que-te-paso-este-mes">¿Qué te pasó este mes?</a></li>/
                <li>{{ strip_tags($content[0]->title) }}</li>
            </ul>

            <h2 class="pagina__titulo pagina__titulo--quetepasoestemes">¿Qué te pasó este mes?</h2>
            <article class="contbox">
                 @desktop  
                    <ul class="quetepasoestemes__lista">
                 
                    @foreach($posts as $key =>  $post) 
                        <li class="quetepasoestemes__item @if($post->slug == $pag) act @endif">
                            <a href="/que-te-paso-este-mes/{{ $post->slug }}">
                                <img src="/storage/{{ $post->image }}" alt="">
                                <strong>{!! $post->title !!}</strong>
                            </a>
                        </li>
                    @endforeach
                       
                    </ul>
                @enddesktop 
                @handheld
                <ul class="quetepasoestemes__lista"> 
                    @foreach($posts as $key =>  $post) 
                        <li class="quetepasoestemes__item @if($post->slug == $pag) act @endif">
                            <a href="/que-te-paso-este-mes/{{ $post->slug }}">
                                <img src="/storage/{{ $post->image }}" alt="">
                                @if($post->slug == 'creo-que-me-cobraron-demas')
                                <strong class="doblelinea">{{ strip_tags($post->title) }}</strong>
                                @else
                                <strong>{{ strip_tags($post->title) }}</strong>
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
                <a href="#" class="capsula cap-qps"><span class="boton-open"></span></a>
                @endhandheld
            </article>
          
            <div class="limit " id="quepaso">
                <div class="listadoStandardContenedor listadoStandardContenedor--quetepasoestemes">
                    @foreach($content as   $pt) 
                      {!! $pt->body !!}
                    @endforeach
                   
                </div>
                <div class="acordeon--mobile--quepasoestemesContenedor">
                    @foreach($content as   $cont)   
                        {!! $cont->excerpt !!}
                    @endforeach
                </div>
            </div>

        </section>

        <div class="puntoFooter"></div>
@endsection