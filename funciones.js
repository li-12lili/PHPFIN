function validaNomina () {
const f= document.getElementById('forel')
const salario= parsoFloat(f.salario.value)
const dias= parsoFloat(f.dias.value)
console.log(salario)
console. log(dias)
if( salario <=0 || dias <0){
 window.alert("El valor de salario es incorrecta")
}
if (dias <0){
  window.alert(" El valor de Dias es incorrecto")
}
return false
}
return true
}

function generaOtions (){
  const tipo = document.getElementsByName('tipo')
  const $depto = document.querySelector('#depto')
  // Primero limpia el querySelector
  for (let i = $depto.options.length; i >= 0; i--){
    $depto.remove(i)
  }
  //Dependiento el tipo saelccionado crea las opciones
  if (tipo[0],checked){
    agregar($depto,"COM", "Compras")
  agregar($depto,"DIR", "Dirección")
  agregar($depto,"INF", "Informática")
  agregar($depto,"PER", "Personal")
 agregar($depto,"VEN", "Ventas")
  }
  else {
    agregar($depto, "MAN", "Mantenimiento")
    agregar($depto, "MEN", "Mensajeria")
    agregar($depto, "SER", "Servicios")
  }
  validaNomina()
}
function agregar ($depto, valor, texto){
  const optico = document.createElement("option")
  option.value =valor
  option.text =texto
  $depto.appendChild(option)
}
