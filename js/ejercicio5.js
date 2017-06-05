/**
 * [getTable funcion que crea tabla de 10 x 10]
 */
function getTable(){
	var cell = 1;
	var counter = 11;
	var tabla = document.getElementById('table');
	var tablaHtml = "";

	for (var i = 1; i <= 10; i++) { 
		tablaHtml += "<tr>";
		for (var j = cell; j < counter; j++) {
			tablaHtml += "<td>"+ j + "</td>";
		}
		tablaHtml += "</tr>";
		//tomamos lo que seria el valor de la siguiente celda a agregar
		cell = counter;
		//contador para la siguiente fila de celdas
		counter = counter + 10;		
	}

	tabla.innerHTML = tablaHtml;
}

window.load = getTable();