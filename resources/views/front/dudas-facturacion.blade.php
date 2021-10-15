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
			
			<div class="facturation">
				<div class="facturation__image"></div>
				<div class="facturation__options">
				  <div class="facturation__align">
					<div class="facturation__content">
					  <div class="facturation__list">
						 
						<ul>
						@foreach ($quizes as $key => $cat)
							
							@if(count($cat->parent)>0 && !isset($cat->contenido)) 
							<li class="exist">
									<dl>
										<dt>
											<h3 class="links"><a class="facturacion__item__link" href="#" >{{$cat->titulo}}<span></span></a></h3>	
											<div>								
												<h4>Otras razones</h4>										
													@foreach($cat->parent as $sub)
														<a href="/{{ @$path }}/{{@$cat->slug}}/{{$sub->slug}}">{{ @$sub->titulo }}</a>
													@endforeach
											
											</div>
										
										</dt>
										@if(isset($cat->video))
										<dd>
											<h4>Video explicativo</h4>
											<a class="btnVideo" youtubeid="{{$cat->video}}"><img src="../img/play_video2.png"></a>
											<blockquote>
												<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$cat->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</blockquote>
										</dd>
										@endif
									</dl>
							</li>
							
							@elseif(isset($cat->contenido) && count($cat->parent)==0)
							<li class="contenido">
									<dl>
										<dt>
											<h3 class="links"><a class="facturacion__item__link" href="#" >{{$cat->titulo}}<span></span></a></h3>	
											<div>								
																					
												{!! $cat->contenido !!}
											
											</div>
										
										</dt>
										@if(isset($cat->video))
										<dd>
											<h4>Video explicativo</h4>
											<a class="btnVideo" youtubeid="{{$cat->video}}"><img src="../img/play_video2.png"></a>
											<blockquote>
												<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$cat->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</blockquote>
										</dd>
										@endif
									</dl>
							</li>
							@elseif(count($cat->parent)==0 && !isset($cat->contenido))

							<li class="no-exist">
								<dl>
										<dt>
											<h3><a href="/{{ @$path }}/{{@$cat->slug}}">{{$cat->titulo}}<span></span></a></h3>
										</dt>
										@if(isset($cat->video))
										<dd>
											<h4>Video explicativo</h4>
											<a class="btnVideo" youtubeid="{{$cat->video}}"><img src="../img/play_video2.png"></a>
											<blockquote>
												<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$cat->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</blockquote>
										</dd>
										@endif
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
	

</section>
				

<div class="puntoFooter"></div>
@endsection