console.log('aqui')

let firstBox = document.querySelector("body > section > div > div > div > div.facturation__options > div > div > div > ul > li:nth-child(1) > dl > dt > h3 > a")
let secondBox = document.querySelector("body > section > div > div > div > div.facturation__options > div > div > div > ul > li:nth-child(2) > dl > dt > h3 > a")
let lastBox = document.querySelector("body > section > div > div > div > div.facturation__options > div > div > div > ul > li:nth-child(3) > dl > dt > h3 > a")


firstBox.innerHTML = "Mi recibo llegó con un monto mayor al habitual <span></span>"
secondBox.innerHTML = "Mi recibo llegó con un monto menor al habitual <span></span>"
lastBox.innerHTML = "Me llegó un correo con un monto cero y un recibo con monto negativo <span></span>"