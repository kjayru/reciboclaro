var menuBoton = true;
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


let URLactual = window.location.href 
let  rute = URLactual


let medida = screen.width
let textMobile = document.getElementById('new-text-mobile')

console.log(textMobile )

if (medida < 650) {
 if (textMobile) {
   textMobile.textContent = 'Lugares de Pago'
 }
}



  

  if (rute.includes('Pagos-digitales/banco-de-la-nacion') === true ) {
    
      let webActive_t = document.querySelector('.second .acordeon__boton')
      let webActive_c = document.querySelector('.second .acordeon__contenido')
      webActive_t.setAttribute('class' , 'acordeon__boton act')
      webActive_c.setAttribute('class' , 'acordeon__contenido act')
      webActive_c.style.height = 'auto'
  } 





let firstList = document.querySelector('.lugaresdepago__opciones .lugaresdepago__item.a:first-child strong')
if (firstList) {
  firstList.textContent = 'Pagos Digitales'
}



let UlList = document.querySelector('.lugaresdepago__opciones .lugaresdepago__item.a:first-child .bancos__listaSelect')


if (UlList) {
  let lista = document.createElement('li')
  let link = document.createElement('a')
  link.textContent = 'Mi Claro'
  link.setAttribute('href' , '/lugares-de-pago/Pagos-digitales/mi-claro')
  lista.appendChild(link)
  UlList.insertAdjacentElement('afterbegin',lista)
}



// let personas = document.getElementById('personas')
// let empresas = document.getElementById('empresas')
// let para_personas = document.getElementById('para_personas')
// let para_empresas = document.getElementById('para_empresas')



// if (personas) {
//   personas.addEventListener('click' , () => {
//     personas.setAttribute('class' , 'limit active')
//     para_personas.setAttribute('class' , 'limit')
//     empresas.setAttribute('class' , 'limit')
//     para_empresas.setAttribute('class' , 'limit notactive')

//   })
// }

// if (empresas) {
//   empresas.addEventListener('click' , () => {
//     empresas.setAttribute('class' , 'limit active')
//     para_empresas.setAttribute('class' , 'limit')
//     personas.setAttribute('class' , 'limit')
//     para_personas.setAttribute('class' , 'limit notactive')

//   })

// }


// if (medida < 771) {

  //prod
  //let datahref = rute.slice(68)


  //local
  //let datahref = rute.slice(54)

  // let it = document.querySelector(`.banco__item-mobile.${datahref}`)
  // it.setAttribute('id' , 'center_on_me')

  // var indexToGet = $('.banco__item-mobile').index( $('#center_on_me') );



  //  $('#list_bank').slick({
  //   infinite: false,
  //   // slidesToShow: 3,
  //   arrows: false,
  //   dots: false,
  //   responsive: [
  //       {
  //           breakpoint: 9999,
  //           settings: "unslick"
  //       },
  //       {
  //         breakpoint: 770,
  //         settings: {
    
  //           // slidesToShow: 1,
  //           slidesToScroll: 1,
  //           variableWidth: true,
  //           initialSlide: indexToGet,
  //           focusOnSelect: true,
  //         }
  //       },
  //       {
  //         breakpoint: 650,
  //         settings: {
    
  //           // slidesToShow: 1,
  //           slidesToScroll: 1,
  //           variableWidth: true,
  //           initialSlide: indexToGet,
  //         }
  //       }
  //       // You can unslick at a given breakpoint now by adding:
  //       // settings: "unslick"
  //       // instead of a settings object
  //     ]
  // });





// }

  

  // if (rute.includes('Pagos-digitales/mi-claro') === true) {
  //   let bank =  document.querySelector('#list_bank .slick-track')
  //    bank.style.transform = "translate3d(-14385px, 0px, 0px)";
  // }


  // if (rute.includes('Pagos-digitales/Interbank') === true ) {
  //     let bank =  document.querySelector('.banco__item-mobile')
  //      let bank2 =  document.querySelector('.banco__item-mobile.interbank')
  //      bank2.setAttribute("data-time", "1")
  //      bank.setAttribute("data-time", "5")
  // }


  // if (rute.includes('Pagos-digitales/bcp') === true ) {
  //   let bank =  document.querySelector('.banco__item-mobile')
  //    let bank2 =  document.querySelector('.banco__item-mobile.bcp')
  //    bank2.setAttribute("data-time", "1")
  //    bank.setAttribute("data-time", "5")
  // }


  // if (rute.includes('Pagos-digitales/bbva') === true ) {
  //   let bank =  document.querySelector('.banco__item-mobile')
  //    let bank2 =  document.querySelector('.banco__item-mobile.bbva')
  //    bank2.setAttribute("data-time", "1")
  //    bank.setAttribute("data-time", "5")
  // }


  // if (rute.includes('Pagos-digitales/scotiabank') === true ) {
  //   let bank =  document.querySelector('.banco__item-mobile')
  //    let bank2 =  document.querySelector('.banco__item-mobile.scotiabank')
  //    bank2.setAttribute("data-time", "1")
  //    bank.setAttribute("data-time", "5")
  // }


  // if (rute.includes('Pagos-digitales/banco-de-la-nacion') === true ) {
  //    // $('#list_bank').addClass('nacion')

  //    $( document ).ready(function() {
  //     $('#list_bank .slick-track').css('width',' 100px')
  // });


  // }


// $( ".banco__item-mobile" ).hover(function() {
//   $('#list_bank').removeClass('nacion')
// });





  // var items = $('#list_bank li');
  // items.sort(function(a, b){
  //     return +$(a).data('time') - +$(b).data('time');
  // });
      
  // items.appendTo('#list_bank');









 




