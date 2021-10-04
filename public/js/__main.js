var msg1Titulo, 
	mesActual = new Date(), 
    meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    mesesCortos = ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'];

$(document).on('ready', function(){

	if(location.hash.length){
		var qtpem = ['#tengo_una_nueva_linea', '#no_pague_a_tiempo', '#me_cobraron_mas', '#pague_menos', '#me_robaron_mi_celular', '#sali_de_viaje'];
		if(qtpem.indexOf(location.hash)>-1) { 
			$('.listadoStandard, .quetepasoestemes__item').removeClass('act');
			$('.acordeon').removeClass('primero act'); 
			$(location.hash).addClass('act');
			$(location.hash+'-mobile').addClass('act');
			$('.quetepasoestemes__item a[href="'+location.hash+'"]').parent().addClass('act');
		}
		var qtpem = ['#bcp', '#interbank', '#bbva', '#scotiabank', '#banco-de-la-nacion'];
		if(qtpem.indexOf(location.hash)>-1) { 
			$('.banco__item').removeClass('act');
			$('.acordeon').removeClass('primero act'); 
			$(location.hash).addClass('primero act');
			$('.banco__item a[href="'+location.hash+'"]').parent().addClass('act');
		}
	}

	var swiper2 = new Swiper('.sliderClaroFacturacion', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: false,
      navigation: {  nextEl: '.sliderClaroFacturacion__flecha--right', prevEl: '.sliderClaroFacturacion__flecha--left' }
    });

    var swiper3 = new Swiper('.slideGlosario', {
      slidesPerView: 7,
      spaceBetween: 0,
      navigation: {
        nextEl: '.glosario__right',
        prevEl: '.glosario__left'
      }/*,
      breakpoints: {
        730: { slidesPerView: 12 }, 
        620: { slidesPerView: 10 }, 
        520: { slidesPerView: 8 }, 
        420: { slidesPerView: 6 }
      }*/
    });

	var menuBoton = true;
	$('#menuBoton').on('click', function(){
		menuBoton ? ( $('#menuContenedor').fadeIn(350), menuBoton=false, $(this).addClass('act') ) : ( $('#menuContenedor').fadeOut(200), menuBoton=true, $(this).removeClass('act') ) ;
	});

	$('.acordeon__boton').on('click', function(){
		var t = $(this).parent(),
			acordeon__contenido = t.find('.acordeon__contenido'),
			alto = t.find('.acordeon__contenido__detalle').outerHeight(), 
			acordeon__contenido__activo =  t.parent().find('.acordeon__contenido.act');
			console.log(acordeon__contenido__activo.data('target'));

		if($(this).hasClass('act')){
			$(this).removeClass('act');
			acordeon__contenido.animate({ height:0 },500);
			acordeon__contenido.removeClass('act');
		} else {
			$('.acordeon__boton').removeClass('act');
			$(this).addClass('act');

			acordeon__contenido__activo.animate({ height:0 },500);
			acordeon__contenido__activo.removeClass('act');
			acordeon__contenido.animate({ height:alto },500, function(){
				acordeon__contenido.css('height','auto');
			});
			acordeon__contenido.addClass('act');
		}
	});

	var quetepasoestemesMobile = true, block1 = true;
	$('.quetepasoestemes__item a').on('click', function(event){
		event.preventDefault();
		if(block1) {
			block1=false;
			var t = $($(this).attr('href') ),
				tMobile = $($(this).attr('href')+'-mobile' ),
				listadoStandardActivo =$('.listadoStandard.act'),
				acordeonMobileActivo = $('.acordeon--mobile.act');

			if($(this).parent().hasClass('act') && $(window).outerWidth()<=700 )
			{
				quetepasoestemesMobile ? ( $('.quetepasoestemes__lista').animate({height:421},400), quetepasoestemesMobile = false ) : ( $('.quetepasoestemes__lista').animate({height:71},350), quetepasoestemesMobile = true ) ;
				block1 = true;
			} else {
				$('.quetepasoestemes__item').removeClass('act');
				$(this).parent().addClass('act');
				listadoStandardActivo.fadeOut(150, function() {
					listadoStandardActivo.removeClass('act');
					t.fadeIn(450);
					t.addClass('act');
					setTimeout(function(){ block1 = true; },500) 
				});
				acordeonMobileActivo.fadeOut(150, function() {
					acordeonMobileActivo.removeClass('act');
					tMobile.fadeIn(450);
					tMobile.addClass('act');
					setTimeout(function(){ block1 = true; },500) 
					if( $(window).outerWidth()<=700 ) {
						$('.quetepasoestemes__lista').animate({height:71},350);
						quetepasoestemesMobile = true;
					}
				});
			}
		}
		
	});

	var bancoMobile=true, block2=true;
	$('.banco__item a').on('click', function(event){
		event.preventDefault();
		if(block2){
			block2=false;
			var t = $($(this).attr('href') ),
				acordeonMobileActivo = $('.acordeon--estilo2.act');

			if($(this).parent().hasClass('act') && $(window).outerWidth()<=700 )
			{
				bancoMobile ? ( $('.banco__lista').animate({height:421},400), bancoMobile = false ) : ( $('.banco__lista').animate({height:71},350), bancoMobile = true ) ;
				block2=true;
			} else {
				$('.banco__item').removeClass('act');
				$(this).parent().addClass('act');

				acordeonMobileActivo.removeClass('opacity');
				setTimeout(function(){ 
					acordeonMobileActivo.removeClass('height');
					acordeonMobileActivo.removeClass('act primero');
				},510);
				setTimeout(function(){ t.addClass('height'); },510);
				setTimeout(function(){ 
					t.addClass('opacity'); 
					t.addClass('act');
					if( $(window).outerWidth()<=700 ) {
						$('.banco__lista').animate({height:71},350);
						bancoMobile = true;
					}
				},510);
				setTimeout(function(){ block2 = true; },550) ;
			}
		}
	});

	$('.glosario__item a').on('click', function(event){
		event.preventDefault();
		var t = $($(this).attr('href') ),
			listadoStandardActivo =$('.listadoStandard.act');
		$('.glosario__item a').removeClass('act');
		$(this).addClass('act');
		$(listadoStandardActivo).fadeOut(150, function() {
			listadoStandardActivo.removeClass('act');
			t.fadeIn(450);
			t.addClass('act');
		});
	});

	setInterval(function(){ footer(); },100); 
	$(window).on('resize scroll', function(){
		footer();
		$(window).outerWidth()<=700 && $('.quetepasoestemes__lista').removeAttr('style') && ( quetepasoestemesMobile = true );
	});

	

    $( "#datepicker" ).datepicker({
    	monthNames: meses,
		monthNamesShort: mesesCortos, 
		dayNamesMin: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
		dateFormat: 'dd/mm/yy',
		defaultDate: new Date(mesActual.getFullYear(),(mesActual.getMonth() +1)-1,1),
		onSelect: function(date) { 
			var datos = date.split('/'),
				dia = Math.round(datos[0]),
				mes = Math.round(datos[1]-1),
				year = datos[2];
			$('.hasDatepicker').addClass('act');
			simulacion(dia, mes, year);
			
		}
    });
	
    $('.ciclodefacturacion__boton').on('click', function(event){
    	event.preventDefault();
    	$('.ciclodefacturacion').fadeOut(250, function(){
    		$('.ciclodefacturacion__resultado').fadeIn(350);
    	});
    });
    
    $('.ciclodefacturacion__otro').on('click', function(event){
    	event.preventDefault();
    	$('.ciclodefacturacion__boton').removeAttr('style');
    	$('#inicio, #final').html('---');
    	$('.hasDatepicker').removeClass('act');
    	$('.ciclodefacturacion__resultado').fadeOut(250, function(){
    		$('.ciclodefacturacion').fadeIn(350);
    	});
    });

    $('.verFactura').on('click', function(event){
    	event.preventDefault();
    	$('#box__facturacion').fadeIn(300);
    });
    $('.box__cerrar').on('click', function(event){
    	event.preventDefault();
    	$('.box').fadeOut(200);
    });
    
    var dominaBotonCerrar, dominaBotonAbrir, dominaContenido, dominaBlock=false;
    $('.dominaturecibo__recibo__puntos--abrir, .dominaturecibo__recibo__puntos--cerrar')
	    .on('click', function(event){
	    	event.preventDefault();
	    	if($(window).outerWidth()>=950){
	    		var t = $(this).parent(),
		    		contenido = t.find('article'), 
		    		cerrar = t.find('.dominaturecibo__recibo__puntos--cerrar'),
		    		abrir = t.find('.dominaturecibo__recibo__puntos--abrir');

		    	if(dominaBlock){
		    		dominaBotonCerrar.removeClass('act');
		    		dominaBotonAbrir.addClass('act');
		    		dominaContenido.fadeOut(150);
		    	}

		    	if(!t.hasClass('act')){
		    		t.parent().find('.dominaturecibo__recibo__puntos.act').removeClass('act');
		    		t.addClass('act');
		    		cerrar.addClass('act');
		    		abrir.removeClass('act');
		    		contenido.fadeIn(300);
		    		dominaBlock=true;

		    		dominaBotonCerrar = cerrar,
		    		dominaBotonAbrir = abrir,
		    		dominaContenido = contenido;
		    	} else {

		    		
		    		cerrar.removeClass('act');
		    		abrir.addClass('act');
		    		contenido.fadeOut(150, function(){ t.removeClass('act'); });
		    		dominaBlock=false;
		    	}
	    	}
	    });

	
	$('.dominaturecibo__opciones a').on('click', function(event){
		event.preventDefault();
		var t = $(this).attr('href'),
			t = t.toString().replace('#','.');
		$('.dominaturecibo__opciones a').removeClass('act');
		$(this).addClass('act');
		$('.hoja.act').fadeOut(250, function(){
    		$('.hoja.act').removeClass('act');
    		$(t).addClass('act');
    		$(t).fadeIn(350);
    	});
	});

	$('.videoClickFull').on('click', function(){
		$('.boxVideoDomina').fadeIn(250, function(){
			$('#boxVideoDominaID').attr('src','https://www.youtube.com/embed/xDw0N8bOmdk?rel=0&amp;showinfo=0&amp;autoplay=1');
		});
	});
	
	$('.boxVideoDomina__cerrar').on('click', function(){
		$('.boxVideoDomina').fadeOut(250, function(){
			$('#boxVideoDominaID').attr('src','');
		});
	});

})

function simulacion(dia, mes, year){
	ultimoDia(dia, mes, year);
}
function ultimoDia(dia, mes, year) {
	var opc1 = [1],
		opc2 = [2],
		opc3 = [4,5,6,8,9,11,12,14,16,18,19,20,22,24,25,26,28];

	switch (true) {
		case (opc1.indexOf(dia)!=-1) :

			var ultimoDia = new Date(2018,(mes)+1,0).getDate(),
				texto = ultimoDia+'-'+mesesCortos[mes]+'-'+year;
			$('#final').html(texto);
			msg1Titulo = texto;
			primerDia(dia, mes, year);

			msgs(dia);

			$('.ciclodefacturacion__boton').fadeIn(350);

			break;
		case (opc2.indexOf(dia)!=-1) :

			year = mes>10 ? parseInt(year)+1 : year ;
			mes = mes>10 ? 0 : mes ;

			var texto = dia+'-'+mesesCortos[mes+1]+'-'+year;
			$('#final').html(texto);
			msg1Titulo = texto;
			dia = dia+1;
			primerDia(dia, mes, year);

			msgs(dia);

			$('.ciclodefacturacion__boton').fadeIn(350);

			break;
		case (opc3.indexOf(dia)!=-1) :

			year = mes>10 ? parseInt(year)+1 : year ;
			mes = mes>10 ? 0 : mes ;
			var texto = dia-1+'-'+mesesCortos[mes+1]+'-'+year;
			$('#final').html(texto);
			msg1Titulo = texto;
			primerDia(dia, mes, year);

			msgs(dia);

			$('.ciclodefacturacion__boton').fadeIn(350);
			
			break;
		default:

			primerDia(dia, mes, year);
			$('#final').html('- - - -');

			$('.ciclodefacturacion__boton').fadeOut(200);
			$('#box__errorCiclo').fadeIn(300);
			//$('.ciclodefacturacion__novalido').fadeIn(300);

			break;
	}
}

function primerDia(dia, mes, year){
	var texto = dia+'-'+mesesCortos[mes]+'-'+year;
	$('#inicio').html(texto);
	msg1Titulo = texto+' al '+msg1Titulo;
}

function msgs(dia){
	var pago, 
		msg1 = 'Cada '+dia+' del mes recibes los megas, minutos y SMS correspondientes a tu plan. Puedes utilizarlos hasta que finalice tu ciclo de facturación', 
		msg2 = 'Tu recibo se emite el '+dia+' de cada mes.', 
		msg3 = 'Las fechas límites de pago para tu recibo van ';

	switch(dia) {
		case 1,3: pago = 'entre el 18 y 22 de cada mes.';  break;
		case 4,5: pago = 'entre el 19 y 23 de cada mes.';  break;
		case 6: pago = 'entre el 20 y 24 de cada mes.';  break;
		case 8: pago = 'entre el 22 y 26 de cada mes.';  break;
		case 9: pago = 'entre el 24 y 28 de cada mes.';  break;
		case 11: pago = 'entre el 29 y 03 de cada mes.';  break;
		case 12: pago = 'entre el 01 y 05 de cada mes.';  break;
		case 14: pago = 'entre el 02 y 06 de cada mes.';  break;
		case 16: pago = 'entre el 03 y 07 de cada mes.';  break;
		case 18: pago = 'entre el 04 y 08 de cada mes.';  break;
		case 19: pago = 'entre el 06 y 10 de cada mes.';  break;
		case 20: pago = 'entre el 07 y 11 de cada mes.';  break;
		case 22: pago = 'entre el 09 y 13 de cada mes.';  break;
		case 24: pago = 'entre el 11 y 15 de cada mes.';  break;
		case 25: pago = 'entre el 12 y 16 de cada mes.';  break;
		case 26: pago = 'entre el 13 y 17 de cada mes.';  break;
		case 28: pago = 'entre el 15 y 19 de cada mes.';  break;
	}

	$('.ciclodefacturacion__novalido').removeAttr('style');
	$('#msg1 p').html(msg1);
	$('#msg1 strong span').html(msg1Titulo);
	$('#msg2 p').html(msg2);
	//$('#msg3 p').html(msg3+' '+pago);
}

function footer(){
	var puntoFooter = $('.puntoFooter').offset().top, 
		footerbottom = $(window).outerHeight() - $('.footer').outerHeight();

	puntoFooter>=footerbottom ? $('.footer').removeClass('footer--bottom') : $('.footer').addClass('footer--bottom') ;
}
