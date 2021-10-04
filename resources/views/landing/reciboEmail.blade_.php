@extends('layouts.master-email')

@section('content')

<div class="espacioHeader"></div>

<section class="sliderSecundario bgCover">
    <div class="limit">
            <article class="sliderSecundario__texto">
                    <strong>Recibo por email</strong>
            </article>
            <aside class="sliderSecundario__texto--mobile">
                    <strong>Recibo por email</strong>
            </aside>
    </div>
</section>


<section class="pagina">

    <ul class="pagina__breadcrumb limit">
            <li><a href="index.html">Inicio</a></li>/
            <li>Recibo por email</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
            <li><a href="index.html">Inicio</a></li>/
            <li>Recibo por email</li>
    </ul>
</section>

{!! $page->body !!}


<div class="puntoFooter"></div>
@endsection