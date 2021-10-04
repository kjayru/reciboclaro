@extends('layouts.master-email')

@section('content')

<div class="espacioHeader"></div>
<div>

    <ul class="pagina__breadcrumb limit">
        <li><a href="/">Inicio</a></li>/
            <li>Qué es el recibo por email</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="/">Inicio</a></li>/
            <li>Qué es el recibo por email</li>
    </ul>
<div>
<section class="sliderSecundario bgCover">
    <div class="limit">
            <article class="sliderSecundario__texto">
                    <strong>¿Qué es el recibo por email?</strong>
            </article>
            <aside class="sliderSecundario__texto--mobile">
                    <strong></strong>
            </aside>
    </div>
</section>




{!! $page->body !!}


<div class="puntoFooter"></div>
@endsection