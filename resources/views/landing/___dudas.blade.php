@extends('layouts.master')

@section('content')




<div class="espacioHeader"></div>

<section class="pagina pagina--limitedeconsumo">

	<ul class="pagina__breadcrumb limit">
			<li><a href="/">Inicio</a></li>/
			<li>¿Dudas sobre tu recibo?</li>
	</ul>
	<ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
			<li><a href="/">Inicio</a></li>/
			<li>¿Dudas sobre tu recibo?</li>
	</ul>

	<div class="limit">

		<div class="lineanuevapost_main">

			<h2 class="pagina__titulo">¿Dudas sobre tu recibo?</h2>
			 
			<p class="legal">Sabemos lo importante que es entender tu recibo. Por eso recogimos los casos más<br>
				comunes sobre facturación y te los explicamos paso a paso.</p>
			<!--<div class="box_content">
				<div class="box1">
					<div class="img_box1"></div>
				</div>

				<div class="box2">
					<div class="content_box2">
					

						<a href="">
							<div class="text_box2">
								<i class="ico_arrow2"></i>
								<p></p>
							</div>
						</a>
						

					

					</div>
				</div>
			</div>-->

			<!--implementation 05/09-->
			<div class="facturation">
				<div class="facturation__image"></div>
				<div class="facturation__options">
				  <div class="facturation__align">
					<div class="facturation__content">
					  <div class="facturation__list">
						<ul>
						@foreach ($categorias as $key => $cat)
						@if($key==0)
						  <li data-id="{{ $key }}">
							<h3 class="links"><a>{{$cat->name}}<span></span></a></h3>
							<div>
								@foreach($subcategorias as $sub)
								<a href="{{ $path }}/{{$pathslug}}/{{$sub->slug}}">{{ $sub->name }}</a>
								@endforeach
							</div>
						  </li>
						@else
						  <li>
							<h3><a href="{{ $path }}/{{$cat->slug}}">{{$cat->name}}<span></span></a></h3>
						  </li>
						@endif
						@endforeach
						</ul>
					</div>
				</div>
			</div>


				</div>
			</div>
		</div>

	</div>

</section>
				

<div class="puntoFooter"></div>
@endsection