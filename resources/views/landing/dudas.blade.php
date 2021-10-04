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
			 
			<p class="legal">Sabemos lo importante que es entender tu recibo. Por eso, escogimos los casos <br>
				más comunes sobre facturación y te los explicamos paso a paso.</p>
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
						  	<dl>
							    <dt>

										<h3 class="links"><a>{{$cat->name}}<span></span></a></h3>
										
										<div>
											<!--<h4>Resuelve tus dudas con este video explicativo</h4>-->
											
											<h4>Otras razones</h4>
											@foreach($subcategorias as $sub)
											<a href="{{ $path }}/{{$pathslug}}/{{$sub->slug}}">{{ $sub->name }}</a>
											@endforeach
										</div>
									</dt>
									<dd>
										<h4>Video explicativo</h4>
										<a class="btnVideo" youtubeid="zRWqpMAhS14"><img src="../img/play_video2.png"></a>
										<blockquote>
											<iframe width="560" height="315" src="https://www.youtube.com/embed/zRWqpMAhS14" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</blockquote>
									</dd>
								</dl>
						  </li>
						@else
						  <li>
						  	<dl>
							    <dt>
										<h3><a href="{{ $path }}/{{$cat->slug}}">{{$cat->name}}<span></span></a></h3>
									</dt>
									<dd>
										@if($key==1)
										<a class="btnVideo" youtubeid="xbXEyQ4Rzds"><img src="../img/play.png"></a>
										<blockquote>
											<iframe width="560" height="315" src="https://www.youtube.com/embed/xbXEyQ4Rzds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</blockquote>
										
										@endif
										@if($key==2)
										<a class="btnVideo" youtubeid="2bnrYVfw1gs"><img src="../img/play_video3.png"></a>
										<blockquote>
											<iframe width="560" height="315" src="https://www.youtube.com/embed/2bnrYVfw1gs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</blockquote>
										@endif
										<!--<blockquote>
											<iframe width="560" height="315" src="https://www.youtube.com/embed/xbXEyQ4Rzds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</blockquote>-->
									</dd>
								</dl>
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

	<link rel="stylesheet" href="/css/grt-youtube-popup.css">
	<script type="text/javascript" src="/js/change-text.js"></script>

</section>
				

<div class="puntoFooter"></div>
@endsection