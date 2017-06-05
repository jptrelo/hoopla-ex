/**
 * [setPermutar funcion que configura y obtiene posibles permutaciones de un string]
 */
function setPermutar(){
	// elemento donde se mostrara el array
	var text = document.getElementById('array');
	//array donde se guardaran las posibles permutaciones
	var arrayPermuta = [];
	conta = 0;
	//Obtenemos el string
	var cadena = document.getElementById('txtPermutar').value;
	//validamos si no es vacio
	if (cadena) {
		//llamado a la funcion que retorna las posibles permutaciones
		arrayPermuta = permutaString("",cadena, arrayPermuta);
	  	text.innerHTML = arrayPermuta.toString();

	  }else{
	  	alert("String Vacio!");
	  }
  	
}

/**
 * [permutaString funcion que retorna las posibles permutaciones de un string]
 * @param  cad_I   [string inicial]
 * @param  cad_D   [string dado por el usuario]
 * @param  arreglo [array donde se agregaran las permutaciones]
 * @return [array con las permutaciones]
 */
function permutaString(cad_I, cad_D, arreglo) {

  if (cad_D.length == 1)
  {
  	//se agrega una permutacion en el array
  	arreglo.push(++conta + " = " + cad_I + cad_D);
  return;
  }

  //se recorre el array y se hace llamado recursivo
  for (var i =0; i < cad_D.length ; i++) {
  	permutaString(cad_I + cad_D.charAt(i), cad_D.replace(cad_D.charAt(i),""), arreglo);
  } 

  return arreglo;

}