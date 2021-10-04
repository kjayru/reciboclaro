@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

				<section class="pagina pagina--limitedeconsumo">

						<ul class="pagina__breadcrumb limit">
								<li><a href="/dudas-sobre-tu-facturacion"><img src="/img/arrow.svg"></a></li>/
								<li>Me facturaron más de la cuenta ¿Por qué?</li>
						</ul>
						<ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
								<li><a href="/dudas-sobre-tu-facturacion"><img src="/img/arrow.svg"></a></li>/
								<li>Me facturaron más de la cuenta ¿Por qué?</li>
						</ul>

						<div class="limit">

							<div class="lineanuevapost_main">

								<h2 class="pagina__titulo">Me facturaron más de la cuenta ¿Por qué?</h2>
								<h4>Te explicamos todo sobre tu recibo</h4>

							<ul class="lineanuevapost_listlink">
                                @foreach ($categorias as $cat)
									<a href="{{ $path }}/{{$cat->slug}}">
										<li>
											<i class="ico_arrow"></i>
											<p>{{$cat->name}}</p>
										</li>
                                    </a>
                                @endforeach
									
								</ul>


							</div>

						</div>

				</section>

<div class="puntoFooter"></div>
@endsection