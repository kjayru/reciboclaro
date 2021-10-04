    
    var pathnamePage = window.location.pathname;
    console.log(pathnamePage)

  // console.log('aquiii')

  let tabSearch = window.location.hash
  console.log(tabSearch)

  let ancho = window.innerWidth

  let digitales = 'canales-digitales'
  let presenciales = 'canales-presenciales'
  let infoDigital = document.getElementById(`${digitales}`)
  let infoPresencial = document.getElementById(`${presenciales}`)
  let listTab = document.getElementById('listTab')
  let tabDigital = document.getElementById(`tab-${digitales}`)
  let tabPresencial = document.getElementById(`tab-${presenciales}`)


  let listPoint = document.getElementById('listPoint')
  let establecimientos = 'establecimientos'
  let financieras = 'financieras'
  let table1 = document.getElementById('table1')
  let table2 = document.getElementById('table2')
  // let table3 = document.getElementById('table3')
  let tabEstablecimientos = document.getElementById(`tab-${establecimientos}`)
  let tabFinancieras = document.getElementById(`tab-${financieras}`)
  let infoEstablecimientos = document.getElementById(`${establecimientos}`)
  let infoFinancieras = document.getElementById(`${financieras}`)


  let hidden1 = document.getElementById('hidden1')
  let hidden2 = document.getElementById('hidden2')


  let bcp = 'bcp'
  let bbva = 'bbva'
  let interbank = 'interbank'
  let scotiabank = 'scotiabank'
  let nacion = 'banco-nacion'
  let listBank = document.getElementById('list_bank')
  let tabBcp = document.getElementById(`tab-${bcp}`)
  let tabBbva= document.getElementById(`tab-${bbva}`)
  let tabInterbank = document.getElementById(`tab-${interbank}`)
  let tabScotiabank = document.getElementById(`tab-${scotiabank}`)
  let tabNacion = document.getElementById(`tab-${nacion}`)
  let infoBcp = document.getElementById(`info-${bcp}`)
  let infoBbva= document.getElementById(`info-${bbva}`)
  let infoInterbank = document.getElementById(`info-${interbank}`)
  let infoScotiabank = document.getElementById(`info-${scotiabank}`)
  let infoNacion = document.getElementById(`info-${nacion}`)

  let listBankDigital = document.getElementById('list_bank_digital')
  let tabEmpresaBcp = document.getElementById('tab-empresabcp')
  let tabEmpresaScotiabank= document.getElementById('tab-empresascotiabank')
  let infoEmpresaBcp = document.getElementById('info-empresabcp')
  let infoEmpresaScotiabank = document.getElementById('info-empresascotiabank')

  let textDesktop = document.getElementById('textDesktop')
  let textMob = document.getElementById('textMob')

  let listBankDebito = document.getElementById('list_bank_debito')
  let tabDebitoBcp = document.getElementById('tab-debitobcp')
  let tabDebitoScotiabank= document.getElementById('tab-debitoscotiabank')
  let infoDebitoBcp = document.getElementById('info-debitobcp')
  let infoDebitoScotiabank = document.getElementById('info-debitoscotiabank')

  if (pathnamePage === '/lugares-de-pago') {
    
      document.title = "Lugares de pago | Claro Perú "
  }

  if (pathnamePage === '/lugares-de-pago/mi-claro') {
    
      document.title = "Mi Claro | Claro Perú "
  }

  if (pathnamePage === '/lugares-de-pago/banco-digital') {
    
      document.title = "Banca digital | Claro Perú "
  }


  if (pathnamePage === '/lugares-de-pago/debito-automatico') {
    
      document.title = "Débito automático | Claro Perú  "
  } 


  if (pathnamePage === '/lugares-de-pago/cajeros-claro') {
    
      document.title = "Cajeros Claro | Claro Perú "
  } 

  if (pathnamePage === '/lugares-de-pago/puntos-autorizados') {
    
      document.title = "Puntos autorizados | Claro Perú  "
  }

  if (pathnamePage === '/lugares-de-pago-empresas') {
    
      document.title = "Lugares de pago | Empresas | Claro Perú"
  }  


  if (pathnamePage === '/lugares-de-pago-empresas/banca-digital') {
    
      document.title = "Banca digital | Empresas | Claro Perú "
  } 


  if (pathnamePage === '/lugares-de-pago-empresas/debito-automatico') {
    
      document.title = "Débito automático | Empresas | Claro Perú "
  } 













  if (pathnamePage === '/lugares-de-pago/Pagos-digitales/mi-claro' || pathnamePage === '/lugares-de-pago/Pagos-digitales/Interbank' ||
    pathnamePage === '/lugares-de-pago/Pagos-digitales/bcp' || pathnamePage === '/lugares-de-pago/Pagos-digitales/bbva' 
    || pathnamePage === '/lugares-de-pago/Pagos-digitales/scotiabank' || pathnamePage === '/lugares-de-pago/Pagos-digitales/banco-de-la-nacion' || 
    pathnamePage === '/lugares-de-pago/Pagos-digitales') {

      window.location.replace("http://conoceturecibo.com/lugares-de-pago/banco-digital")
  }


  if (pathnamePage === '/debito-automatico') {
    
      window.location.replace("http://conoceturecibo.com/lugares-de-pago/debito-automatico")
  }


  if (pathnamePage === '/lugares-de-pago-empresas-bcp' || pathnamePage === '/lugares-de-pago-empresas-scotiabank') {
    
      window.location.replace("http://conoceturecibo.com/lugares-de-pago-empresas/banca-digital")
  }


  if (pathnamePage === '/lugares-de-pago-empresas-debito-automatico-bcp' || pathnamePage === '/lugares-de-pago-empresas-debito-automatico-scotiabank') {
    
      window.location.replace("http://conoceturecibo.com/lugares-de-pago-empresas/debito-automatico")
  }


  





let changeText = document.querySelector("body > section > div > div.hoja.hoja1.act > .dominaturecibo__contenido  > .dominaturecibo__recibo > .dominaturecibo__recibo__puntos:nth-child(5) > .dominaturecibo__recibo__puntos__contenido > p")
let changeTextMobile = document.querySelector("#hoja2-4 > article > p")


if (changeText) {
 changeText.textContent = "Aquí podrás ver el costo de tu plan contratado y los servicios adicionales adquiridos."
}


if (changeTextMobile) {
  console.log(changeTextMobile)
   changeTextMobile.textContent = "Aquí podrás ver el costo de tu plan contratado y los servicios adicionales adquiridos."
}





  if (pathnamePage === '/lugares-de-pago-empresas') {

    //window.location.replace("http://127.0.0.1:8000/lugares-de-pago")

    $('#canalesempresas').slick({
      infinite: false,
      slidesToShow: 3,
      arrows: false,
      variableWidth: true,
      dots: false,
      responsive: [
          {
              breakpoint: 9999,
              settings: "unslick"
          },
          {
            breakpoint: 650,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
          
            }
          }
          
        ]
    });
  }


  if (pathnamePage === '/lugares-de-pago') {
    if (tabSearch == '') {
      window.location.hash = `tab=${digitales}`
      tabDigital.classList.add('active')
      infoDigital.classList.add('active')
    }

    if (tabSearch == '#tab=canales-digitales') {
      infoDigital.classList.add('active')
      tabDigital.classList.add('active')
    }

    if (tabSearch == '#tab=canales-presenciales') {
      infoPresencial.classList.add('active')
      tabPresencial.classList.add('active')
    }



    listTab.addEventListener('click' , e  => {
    const t= e.target
    const getId = t.getAttribute('id')
    //console.log(getId)
    // console.log(tabSearch)

      if (getId === 'tab-canales-presenciales' ) {

        window.location.hash = 'tab=canales-presenciales'

        tabPresencial.classList.add('active')
        infoPresencial.classList.add('active')
        tabDigital.classList.remove('active')
        infoDigital.classList.remove('active')
      }

      if (getId === 'tab-canales-digitales' ) {

        window.location.hash =  'tab=canales-digitales'

        tabDigital.classList.add('active')
        infoDigital.classList.add('active')
        tabPresencial.classList.remove('active')
        infoPresencial.classList.remove('active')
      }

    })


    $('#canalesdig').slick({
      infinite: false,
      slidesToShow: 3,
      arrows: false,
      variableWidth: true,
      dots: false,
      responsive: [
          {
              breakpoint: 9999,
              settings: "unslick"
          },
          {
            breakpoint: 650,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
          
            }
          }
          
        ]
    });


    $('#canalespre').slick({
      infinite: false,
      slidesToShow: 3,
      arrows: false,
      variableWidth: true,
      dots: false,
      responsive: [
          {
              breakpoint: 9999,
              settings: "unslick"
          },
          {
            breakpoint: 650,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
          
            }
          }
          
        ]
    });
  }
  

  if (pathnamePage === '/lugares-de-pago/banco-digital') {

    // let divBcp =  document.querySelector(`.bancadigital-acor.bcp`)
    // let divBbva =  document.querySelector(`.bancadigital-acor.bbva`)
    // let divInterbank =  document.querySelector(`.bancadigital-acor.interbank`)
    // let divScotiabank =  document.querySelector(`.bancadigital-acor.scotiabank`)
    // let divNacion =  document.querySelector(`.bancadigital-acor.banco-nacion`)

    // divBcp.classList.add('no-active')
    // divBbva.classList.add('no-active')
    // divInterbank.classList.add('no-active')
    // divScotiabank.classList.add('no-active')
    // divNacion.classList.add('no-active')

    //console.log(divBcp)

    console.log(tabSearch)
    let center = tabSearch.slice(5)

    let caractCenter = center.length

    if (caractCenter >= 1) {

      console.log('funciona')

      let it = document.querySelector(`.banco__item-mobile.${center}`)
      it.classList.add('class' , `${center}`)

      var indexToGet = $('.banco__item-mobile').index( $(`.${center}`) );
    } else {
        window.location.hash = `tab=${interbank}`
        tabInterbank.classList.add('act')
        infoInterbank.classList.add('active')
    }


    if (tabSearch == '#tab=interbank') {
      tabInterbank.classList.add('act')
      infoInterbank.classList.add('active')
    }

    if (tabSearch == '#tab=bbva') {
      tabBbva.classList.add('act')
      infoBbva.classList.add('active')
    }

    if (tabSearch == '#tab=bcp') {
      tabBcp.classList.add('act')
      infoBcp.classList.add('active')
    }

    if (tabSearch == '#tab=scotiabank') {
      tabScotiabank.classList.add('act')
      infoScotiabank.classList.add('active')
    }

    if (tabSearch == '#tab=banco-nacion') {
      tabNacion.classList.add('act')
      infoNacion.classList.add('active')
    }



    $('#list_bank').slick({
      infinite: false,
        // slidesToShow: 3,
        arrows: false,
        dots: false,
        responsive: [
          {
              breakpoint: 9999,
              settings: "unslick"
          },
          {
            breakpoint: 770,
            settings: {
      
              // slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
              initialSlide: indexToGet,
              focusOnSelect: true,
            }
          },
          {
            breakpoint: 650,
            settings: {
      
              // slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
              initialSlide: indexToGet,
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
    });  


    listBank.addEventListener('click' , e  => {
      const t= e.target
      const getId = t.getAttribute('id')
      console.log(getId)
  
      if (getId === 'tab-interbank' ) {

        window.location.hash = 'tab=interbank'
        tabInterbank.classList.add('act')
        infoInterbank.classList.add('active')
        tabBcp.classList.remove('act')
        infoBcp.classList.remove('active')
        tabBbva.classList.remove('act')
        infoBbva.classList.remove('active')
        tabScotiabank.classList.remove('act')
        infoScotiabank.classList.remove('active')
        tabNacion.classList.remove('act')
        infoNacion.classList.remove('active')
      }


      if (getId === 'tab-bcp' ) {
        window.location.hash = 'tab=bcp'
        tabInterbank.classList.remove('act')
        infoInterbank.classList.remove('active')
        tabBcp.classList.add('act')
        infoBcp.classList.add('active')
        tabBbva.classList.remove('act')
        infoBbva.classList.remove('active')
        tabScotiabank.classList.remove('act')
        infoScotiabank.classList.remove('active')
        tabNacion.classList.remove('act')
        infoNacion.classList.remove('active')

      }


      if (getId === 'tab-bbva' ) {
        window.location.hash = 'tab=bbva'
        tabInterbank.classList.remove('act')
        infoInterbank.classList.remove('active')
        tabBcp.classList.remove('act')
        infoBcp.classList.remove('active')
        tabBbva.classList.add('act')
        infoBbva.classList.add('active')
        tabScotiabank.classList.remove('act')
        infoScotiabank.classList.remove('active')
        tabNacion.classList.remove('act')
        infoNacion.classList.remove('active')

      }

      if (getId === 'tab-scotiabank' ) {
        window.location.hash = 'tab=scotiabank'
        tabInterbank.classList.remove('act')
        infoInterbank.classList.remove('active')
        tabBcp.classList.remove('act')
        infoBcp.classList.remove('active')
        tabBbva.classList.remove('act')
        infoBbva.classList.remove('active')
        tabScotiabank.classList.add('act')
        infoScotiabank.classList.add('active')
        tabNacion.classList.remove('act')
        infoNacion.classList.remove('active')

      }


      if (getId === 'tab-banco-nacion' ) {
        window.location.hash = 'tab=banco-nacion'
        tabInterbank.classList.remove('act')
        infoInterbank.classList.remove('active')
        tabBcp.classList.remove('act')
        infoBcp.classList.remove('active')
        tabBbva.classList.remove('act')
        infoBbva.classList.remove('active')
        tabScotiabank.classList.remove('act')
        infoScotiabank.classList.remove('active')
        tabNacion.classList.add('act')
        infoNacion.classList.add('active')

      }

    })

  }


  if (pathnamePage === '/lugares-de-pago/puntos-autorizados') {

    if ( ancho < 770) {
        table2.classList.add('close')
    }

    if (tabSearch == '') {
      window.location.hash = `tab=${financieras}`
      tabFinancieras.classList.add('active')
      infoFinancieras.classList.add('active')
    }


    if (tabSearch == '#tab=financieras') {
      tabFinancieras.classList.add('active')
      infoFinancieras.classList.add('active')
    }

    if (tabSearch == '#tab=establecimientos') {
      tabEstablecimientos.classList.add('active')
      infoEstablecimientos.classList.add('active')
    }



    hidden1.addEventListener('click' , e  => {
      table1.classList.toggle('close')
        
    })

    hidden2.addEventListener('click' , e  => {
      table2.classList.toggle('close')
        
    })

    // hidden3.addEventListener('click' , e  => {
    //   table3.classList.toggle('close')
        
    // })



    listPoint.addEventListener('click' , e  => {
    const t= e.target
    const getId = t.getAttribute('id')
    //console.log(getId)
    // console.log(tabSearch)

      if (getId === 'tab-financieras' ) {

        window.location.hash = 'tab=financieras'

        tabFinancieras.classList.add('active')
        infoFinancieras.classList.add('active')
        tabEstablecimientos.classList.remove('active')
        infoEstablecimientos.classList.remove('active')
      }

      if (getId === 'tab-establecimientos' ) {

        window.location.hash =  'tab=establecimientos'

        tabFinancieras.classList.remove('active')
        infoFinancieras.classList.remove('active')
        tabEstablecimientos.classList.add('active')
        infoEstablecimientos.classList.add('active')

      }

    })

  }


  if (pathnamePage === '/lugares-de-pago-empresas/banca-digital') {

    console.log(tabSearch)
    let center = tabSearch.slice(5)


    let caractCenter = center.length

    if (caractCenter >= 1) {

      let it = document.querySelector(`.banco__item-mobile.${center}`)
      it.classList.add('class' , `${center}`)

      var indexToGet = $('.banco__item-mobile').index( $(`.${center}`) );

    } else {
        window.location.hash = 'tab=bcp'
        tabEmpresaBcp.classList.add('act')
        infoEmpresaBcp.classList.add('active')
    }


    if (tabSearch == '#tab=bcp') {
      tabEmpresaBcp.classList.add('act')
        infoEmpresaBcp.classList.add('active')
    }

    if (tabSearch == '#tab=scotiabank') {
      tabEmpresaScotiabank.classList.add('act')
      infoEmpresaScotiabank.classList.add('active')
    }




    $('#list_bank_digital').slick({
      infinite: false,
        // slidesToShow: 3,
        arrows: false,
        dots: false,
        responsive: [
          {
              breakpoint: 9999,
              settings: "unslick"
          },
          {
            breakpoint: 770,
            settings: {
      
              // slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
              initialSlide: indexToGet,
              focusOnSelect: true,
            }
          },
          {
            breakpoint: 650,
            settings: {
      
              // slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
              initialSlide: indexToGet,
            }
          }
        ]
    });  


    listBankDigital.addEventListener('click' , e  => {
      const t= e.target
      const getId = t.getAttribute('id')
      console.log(getId)

      if (getId === 'tab-empresabcp' ) {
        window.location.hash = 'tab=bcp'
        tabEmpresaBcp.classList.add('act')
        infoEmpresaBcp.classList.add('active')
        tabEmpresaScotiabank.classList.remove('act')
        infoEmpresaScotiabank.classList.remove('active')
      }


      if (getId === 'tab-empresascotiabank' ) {
        window.location.hash = 'tab=scotiabank'
        tabEmpresaBcp.classList.remove('act')
        infoEmpresaBcp.classList.remove('active')
        tabEmpresaScotiabank.classList.add('act')
        infoEmpresaScotiabank.classList.add('active')

      }

    })

  }


  if (pathnamePage === '/lugares-de-pago-empresas/debito-automatico') {

    let styleBox1 = document.querySelector('.acordeon--estilo2 .acordeon__item')
    let styleBox2 = document.querySelector('.acordeon--estilo2 .acordeon__item.type2')

    styleBox1.style.borderBottom = 'none'
    styleBox2.style.borderBottom = 'none'

    console.log(tabSearch)
    let center = tabSearch.slice(5)


    let caractCenter = center.length

    if (caractCenter >= 1) {

      let it = document.querySelector(`.banco__item-mobile.${center}`)
      it.classList.add('class' , `${center}`)

      var indexToGet = $('.banco__item-mobile').index( $(`.${center}`) );

    } else {
        window.location.hash = 'tab=bcp'
        tabDebitoBcp.classList.add('act')
        infoDebitoBcp.classList.add('active')
    }


    if (tabSearch == '#tab=bcp') {
        tabDebitoBcp.classList.add('act')
        infoDebitoBcp.classList.add('active')
    }

    if (tabSearch == '#tab=scotiabank') {
      tabDebitoScotiabank.classList.add('act')
      infoDebitoScotiabank.classList.add('active')
      textMob.textContent = 'Scotiabank'
      textDesktop.textContent = 'Scotiabank'
    }




    $('#list_bank_debito').slick({
      infinite: false,
        // slidesToShow: 3,
        arrows: false,
        dots: false,
        responsive: [
          {
              breakpoint: 9999,
              settings: "unslick"
          },
          {
            breakpoint: 770,
            settings: {
      
              // slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
              initialSlide: indexToGet,
              focusOnSelect: true,
            }
          },
          {
            breakpoint: 650,
            settings: {
      
              // slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
              initialSlide: indexToGet,
            }
          }
        ]
    });  


    listBankDebito.addEventListener('click' , e  => {
      const t= e.target
      const getId = t.getAttribute('id')
      console.log(getId)

      if (getId === 'tab-debitobcp' ) {
        window.location.hash = 'tab=bcp'
        tabDebitoBcp.classList.add('act')
        infoDebitoBcp.classList.add('active')
        tabDebitoScotiabank.classList.remove('act')
        infoDebitoScotiabank.classList.remove('active')
        textMob.textContent = 'BCP'
        textDesktop.textContent = 'BCP'
      }


      if (getId === 'tab-debitoscotiabank' ) {
        window.location.hash = 'tab=scotiabank'
        tabDebitoBcp.classList.remove('act')
        infoDebitoBcp.classList.remove('active')
        tabDebitoScotiabank.classList.add('act')
        infoDebitoScotiabank.classList.add('active')
        textMob.textContent = 'Scotiabank'
        textDesktop.textContent = 'Scotiabank'

      }

    })

  }