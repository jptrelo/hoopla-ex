<?php
/**
 * [getSumatoria funcion que calcula la sumatoria de una nuemro aleatorio entre 1 y 20]
 */
function getSumatoria(){
	// se genera el numero aleatorio
	$aleatorio = rand(1, 20);
	$sumatoria = 0;
	//loop para sumar desde 1 hasta aleatorio
	for ($i=1; $i <= $aleatorio ; $i++) { 
		$sumatoria = $i + $sumatoria;
	}

	echo $aleatorio . "<br/>Sumatoria: " . $sumatoria;
}


getSumatoria();

?>

<pre>

/**
 * [getSumatoria funcion que calcula la sumatoria de una nuemro aleatorio entre 1 y 20]
 */
function getSumatoria(){
	// se genera el numero aleatorio
	$aleatorio = rand(1, 20);
	$sumatoria = 0;
	//loop para sumar desde 1 hasta aleatrio
	for ($i=1; $i <= $aleatorio ; $i++) { 
		$sumatoria = $i + $sumatoria;
	}

	echo $aleatorio . "<br/>Sumatoria: " . $sumatoria;
}


getSumatoria();

</pre>