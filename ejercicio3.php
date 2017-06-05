<?php
/**
 * [getUsuarios funcion que consulta y crea una tabla de usuarios con sus compras totales]
 */
function getUsuarios(){
	try {
		//Conexion a la bd
	    $mbd = new PDO('mysql:host=d6vscs19jtah8iwb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=mlsgg77m0th44950', 'objeh2fgziv7j5nm', 'uyfg4uk86q9u00wj');
	    //Consulta y recorrido de filas
	    foreach($mbd->query('SELECT usuario.nombre, COALESCE(SUM(productos.precio),0) as precio 
	    					FROM compras
	    					RIGHT JOIN usuario ON usuario.id = compras.idusr
	    					LEFT JOIN productos ON compras.idproducto = productos.id
                            WHERE usuario.activo = 1
	    					GROUP BY usuario.nombre') as $fila) {
	        echo "<tr><td>".$fila['nombre'] . "</td><td>". $fila['precio']."</td></tr>";
	    }
	    //Cierre de conexion
	    $mbd = null;
	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
}

echo "<table style='border: 1px solid black; text-align: center;'>
		<tr>
			<th>Nombre Usuario</th>
			<th>Total Comprado</th>
		</tr>";
getUsuarios();
echo "</table>";

?>

<pre>
/**
 * [getUsuarios funcion que consulta y crea una tabla de usuarios con sus compras totales]
 */
function getUsuarios(){
	try {
		//Conexion a la bd
	    $mbd = new PDO('mysql:host=localhost;dbname=hoopla', 'root', '');
	    //Consulta y recorrido de filas
	    foreach($mbd->query('SELECT usuario.nombre, COALESCE(SUM(productos.precio),0) as precio 
	    					FROM compras
	    					RIGHT JOIN usuario ON usuario.id = compras.idusr
	    					LEFT JOIN productos ON compras.idproducto = productos.id
                            WHERE usuario.activo = 1
	    					GROUP BY usuario.nombre') as $fila) {
	        print_r($fila);
	    }
	    //Cierre de conexion
	    $mbd = null;
	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage();
	    die();
	}
}
</pre>