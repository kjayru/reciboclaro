
/** implementación 28/06/21 */

$(document).on('click',".evento__toggle",function(){
  let contenedor = $("#contentalign");

  if(contenedor.hasClass('hide')===true){
   
    contenedor.removeClass('hide');
    $("#contentclose").removeClass('evento__toggle');
    contenedor.addClass('show');
    $("#contentclose").addClass('evento__toggle__show');
  }
 
  
});

$(document).on('click','.evento__toggle__show',function(){
  let contenedor = $("#contentalign");
  if(contenedor.hasClass('show')===true){
    contenedor.removeClass('show');
    $("#contentclose").removeClass('evento__toggle__show');
    contenedor.addClass('hide');
    $("#contentclose").addClass('evento__toggle');
  }
});

  var menuBoton = true;

  let resolucion = innerWidth
  console.log(resolucion )

  $("#nav , #navM").on("click", function() {
    //$(this).toggleClass('actitve')
    menuBoton
      ? ($("#menuContenedor").fadeIn(350),
        (menuBoton = false),
        $(this).addClass("act"))
      : ($("#menuContenedor").fadeOut(200),
        (menuBoton = true),
        $(this).removeClass("act"));
  });


  $('.consideraciones__main .head-acordeon').on('click', function(){
    var target = $(this).attr('target'),
      span = $('.consideraciones__main .body-acordeon[target="'+target+'"]'),
      spanChild = span.find('div').outerHeight()+6;
    if(span.hasClass('act')){
      $(this).removeClass('act');
      span.removeClass('act').animate({height:0},300);
    } else {
      $('.consideraciones__main .head-acordeon').removeClass('act');
      $(this).addClass('act');
      $('.consideraciones__main .body-acordeon.act').removeClass('act').animate({height:0},300);
      span.addClass('act').animate({height:spanChild},300);
    }
  });



  let contentclose = document.getElementById('contentclose')

  if (contentclose) {


    
    let changetext = document.getElementById('changetext')
    let changeimage = document.getElementById('changeimage')
    let contentalign = document.getElementById('contentalign')

    contentclose.addEventListener('click' , () => {
        if ( changetext.textContent.trim() ==  'Cerrar' ) {
            changetext.textContent="Saber más"
            changeimage.setAttribute('src' , '/assets/292fdf05-2aa6-4730-ae50-7e119c7e705a-MasCeleste.svg')
            contentalign.classList.add('hide') 
        }
        else {
          changetext.textContent="Cerrar"
            changeimage.setAttribute('src' , '/assets/148c0a9e-f568-45e1-8fa2-b537400979f6-CloseCeleste.svg')
            contentalign.classList.remove('hide')
        }

    })

    // if (resolucion < 650) {

    //   changetext.textContent= "Saber más"
    //   changeimage.setAttribute('src' , '/assets/292fdf05-2aa6-4730-ae50-7e119c7e705a-MasCeleste.svg')
    //   contentalign.classList.add('hide')

    // }



  }

  let contentmain = document.getElementById('contentmain')
  if ( contentmain ) {

   contentmain.addEventListener('click' , () => {
        contentmain.classList.toggle('hide')
    })
    
    if (resolucion < 650) {
        contentmain.classList.add('hide')
    }

  } 

  

//   //se mide en milisegundos

// // Set the date we're counting down to
// var countDownDate = new Date("Oct31, 2010 00:00:00").getTime();

// // Update the count down every 1 second
// var x = setInterval(function() {

//   // Get today's date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   console.log(days , hours , minutes , seconds)

//   if (distance < 0) {
//     clearInterval(x);
//     if (newsection1) {
//       let newafil = document.getElementById('new-afil')
//       const nuevospan= document.createElement('span')
//       nuevospan.textContent = 'Solicita la afiliación de tus servicios'

//       newafil.insertAdjacentElement('beforeend',nuevospan)





//       let newsection1 = document.getElementById('newsection1') 
//       let newsection2 = document.getElementById('newsection2') 
//       let oldsection1 = document.getElementById('oldsection1')
//       let oldsection2 = document.getElementById('oldsection2')

//       oldsection1.style.display = 'none'
//       oldsection2.style.display = 'none'
//       newsection1.style.display = 'block'
//       newsection2.style.display = 'block'
//     }
//   }
// }, 1000);

document.addEventListener("DOMContentLoaded", function(e) {
    let btn_down = Array.apply(null, document.querySelectorAll('.btn_down'));

    btn_down.filter(function (element, index) {
      element.addEventListener("click", function(event){ 
        
        console.log("event",event.target.parentNode.nextElementSibling);

        event.target.parentNode.classList.toggle('active');

        let btn = event.target.parentNode.nextElementSibling; 
        btn.classList.toggle('active');

        //btn.nextSibling.classList.toggle('active');

        /*if (index === 0 ) {
          element.parentNode.classList.toggle('active')
          submenumovillist[4].parentNode.classList.remove('active')
          submenumovillist[10].parentNode.classList.remove('active')

      
        } else if (index === 4 ) {
          element.parentNode.classList.toggle('active')
          submenumovillist[10].parentNode.classList.remove('active')
          submenumovillist[0].parentNode.classList.remove('active')

      
        }  else if (index === 10 ) {
           element.parentNode.classList.toggle('active')
          submenumovillist[0].parentNode.classList.remove('active')
          submenumovillist[4].parentNode.classList.remove('active')
       
      
        }  */

      })

    })
});



