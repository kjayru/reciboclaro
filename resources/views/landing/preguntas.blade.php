@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

<section class="pagina">

    <ul class="pagina__breadcrumb limit">
        <li><a href="/">Inicio</a></li>/
        <li>Preguntas frecuentes</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="/">Inicio</a></li>/
        <li>Preguntas frecuentes</li>
    </ul>

    <h2 class="pagina__titulo">Dudas y preguntas frecuentes</h2>

    <div class="limit">

        <div class="acordeon--preguntasfrecuentes">
            <div class="acordeon acordeon--estilo2">
         @foreach($preguntas as  $preg)
              @foreach($preg->posts as $key => $post)
                <div class="acordeon__item">
                    <div class="acordeon__boton @if($key==0) act @endif" data-target="a{{ $key+1}}">
                        <strong>{{ $post->title }}</strong>
                        <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                        <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                    </div>
                    <div class="acordeon__contenido  @if($key==0) open act @endif" data-target="a{{ $key+1}}">
                        <div class="acordeon__contenido__detalle" data-target="a{{ $key+1}}">
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
                @endforeach
         @endforeach 
               
            </div>
        </div>
    </div>

</section>

<div class="puntoFooter"></div>

@endsection