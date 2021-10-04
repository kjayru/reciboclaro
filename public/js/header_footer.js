let c = console.log
let w = window.innerWidth

//paises select
let dropdownCountry = document.getElementById('dropdownCountry')
let dropdownInfo = document.getElementById('dropdownInfo')


//mwnu movil
let contentmenumovil = document.getElementById('contentmenumovil')
let menumovilbtn = document.getElementById('menumovilbtn')
let burger = document.getElementById('burger')


//fondo negro desktop
let bgblackmenu = document.getElementById('bg-color-menu')

//
let bgredheader = document.getElementById('bgredheader')

let selectcountrymobile = document.getElementById('selectcountrymobile')

let miclaroappchange = document.getElementById('miclaroappchange')




var isMobile = {
  Android: function() {
    return navigator.userAgent.match(/Android/i);
  },
  BlackBerry: function() {
    return navigator.userAgent.match(/BlackBerry/i);
  },
  iOS: function() {
    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
  },
  iPhone: function() {
        return navigator.userAgent.match(/iPhone/i);
    },
  iPad: function() {
        return navigator.userAgent.match(/iPad/i);
    },
  Opera: function() {
    return navigator.userAgent.match(/Opera Mini/i);
  },
  Windows: function() {
    return navigator.userAgent.match(/IEMobile/i);
  },
  any: function() {
    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
  }
};

if ( isMobile.iPhone() && w < 650) {
  miclaroappchange.setAttribute('href' , 'https://apps.apple.com/pe/app/mi-claro-per%C3%BA/id785700933')
}

if ( isMobile.Android() && w < 650 ) {
  miclaroappchange.setAttribute('href' , 'https://play.google.com/store/apps/details?id=com.claro.pe.miclaro&amp;hl=es_PE')
}

window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
   

    if (scroll > 37) {
      bgredheader.classList.add('scroll')
    } else {
      bgredheader.classList.remove('scroll')
    }
  
});



selectcountrymobile.addEventListener('change' , e  => {
  console.log(e.target.value)
  let rute = e.target.value
  window.open(rute , '_blank') 
  
})


//menu desktop efecto
/*let ayudacontactanos = document.querySelector('.layout__header .page1__main .section2__main .item__list .item__prin .item__menu ul li ul li.ayuda-contactanos')
let ayudacontactanosinfo = document.querySelector('.layout__header .page1__main .section2__main .item__list .item__prin .item__menu ul li ul li .ayuda-contactanos-info')

let ayudahazlo = document.querySelector('.layout__header .page1__main .section2__main .item__list .item__prin .item__menu ul li ul li.ayuda-hazlo')
let ayudahazloinfo = document.querySelector('.layout__header .page1__main .section2__main .item__list .item__prin .item__menu ul li ul li .ayuda-hazlo-info')

let ayudaaprende = document.querySelector('.layout__header .page1__main .section2__main .item__list .item__prin .item__menu ul li ul li.ayuda-aprende')
let ayudaaprendeinfo = document.querySelector('.layout__header .page1__main .section2__main .item__list .item__prin .item__menu ul li ul li .ayuda-aprende-info')





//menu efecto desktop griss submenu
ayudacontactanosinfo.addEventListener('mouseenter' , e  => {
  ayudacontactanos.classList.add('active')
})
ayudacontactanosinfo.addEventListener('mouseleave' , e  => {
  ayudacontactanos.classList.remove('active')
})

ayudahazloinfo.addEventListener('mouseenter' , e  => {
  ayudahazlo.classList.add('active')
})
ayudahazloinfo.addEventListener('mouseleave' , e  => {
  ayudahazlo.classList.remove('active')
})

ayudaaprendeinfo.addEventListener('mouseenter' , e  => {
  ayudaaprende.classList.add('active')
})
ayudaaprendeinfo.addEventListener('mouseleave' , e  => {
  ayudaaprende.classList.remove('active')
})
*/





//menu fondo negro desktoop
const nodelist = Array.from(document.querySelectorAll('.desktopmenu'))
nodelist.map( el => {
  el.addEventListener('mouseenter' , e  => {
    console.log("yaoe");
    bgblackmenu.classList.add('active')
  })
  el.addEventListener('mouseleave' , e  => {
    bgblackmenu.classList.remove('active')
  })
})



//burger menu movil
burger.addEventListener('click' , () => {
  console.log("ya movil");
  contentmenumovil.classList.toggle('active')
  menumovilbtn.classList.toggle('active')
  burger.classList.toggle('active')
})



//paises desplegables
dropdownCountry.addEventListener('click' , () => {
  dropdownInfo.classList.toggle('active')
  dropdownCountry.classList.toggle('active')
})







let menumovillist = Array.apply(null, document.querySelectorAll('.just__header .page1__main .section2__main .menu-movil .movil-list-menu ul li p'));
  c(menumovillist)
  menumovillist.filter(function (element, index) {
    element.addEventListener("click", function(event){ 



      if (index === 0 ) {
        element.parentNode.classList.toggle('active')
        /*menumovillist[1].parentNode.classList.remove('active')
        menumovillist[2].parentNode.classList.remove('active')
        menumovillist[3].parentNode.classList.remove('active')*/
    
      } /*else if (index === 1 ) {
        element.parentNode.classList.toggle('active')
        menumovillist[0].parentNode.classList.remove('active')
        menumovillist[2].parentNode.classList.remove('active')
        menumovillist[3].parentNode.classList.remove('active')
    
      }  else if (index === 2 ) {
        element.parentNode.classList.toggle('active')
        menumovillist[1].parentNode.classList.remove('active')
        menumovillist[0].parentNode.classList.remove('active')
        menumovillist[3].parentNode.classList.remove('active')
    
      }  else if (index === 3 ) {
        element.parentNode.classList.toggle('active')
        menumovillist[1].parentNode.classList.remove('active')
        menumovillist[2].parentNode.classList.remove('active')
        menumovillist[0].parentNode.classList.remove('active')
    
      } */


    })

})



let submenumovillist = Array.apply(null, document.querySelectorAll('li.sub-menu  a'));
  submenumovillist.filter(function (element, index) {
    element.addEventListener("click", function(event){ 
      


      if (index === 0 ) {
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
     
    
      }  

    })

})


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