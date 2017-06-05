<?php
/**
 * [searchPos funcion que busca un valor entero en un array]
 * @param  [type] $arreglo [array donde buscar]
 * @param  [type] $valor   [valor a buscar dentro del array]
 */
function searchPos($arreglo, $valor){
	if (is_int($valor)) {		
		$pos = array_search($valor, $arreglo);
		if (!$pos) {
			echo "-1";
		} else {
			echo $pos;
		}
		
	} else {
		echo "El valor a buscar no es entero.";
	}
	
	
}

$arreglo = array(1,2,3,4,5);
searchPos($arreglo, 4);

echo "<br/>";

searchPos($arreglo, 7);

echo "<br/>";

searchPos($arreglo, "hola");

?>

<pre>
/**
 * [searchPos funcion que busca un valor entero en un array]
 * @param  [type] $arreglo [array donde buscar]
 * @param  [type] $valor   [valor a buscar dentro del array]
 */
function searchPos($arreglo, $valor){
	if (is_int($valor)) {		
		$pos = array_search($valor, $arreglo);
		if (!$pos) {
			echo "-1";
		} else {
			echo $pos;
		}
		
	} else {
		echo "El valor a buscar no es entero.";
	}
	
	
}

$arreglo = array(1,2,3,4,5);
searchPos($arreglo, 4);

searchPos($arreglo, 7);

searchPos($arreglo, "hola");

</pre>