/**
 * [setExercise funcion que inicializa el ejercicio seleccionado]
 * @param ejercicio [numero de ejercicio]
 */
function setExercise(path, ejercicio, extension){
	loadFile(path, ejercicio, extension);
	loadInFrame(ejercicio);
}

/**
 * [loadFile funcion que trae por ajax el archivo deseado y lo muestra el la pagina]
 * @param  {[type]} path      [ruta de archivo]
 * @param  {[type]} ejercicio [numero de ejercicio]
 * @param  {[type]} extension [extension del archivo]
 */
function loadFile(path, ejercicio, extension){
	//elemento donde se insertara el texto del archivo
	var txtCode = document.getElementById("txtCode");
	//ajax
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open('GET', path + 'ejercicio'+ ejercicio +"."+ extension, false);
	xmlhttp.send();
	txtCode.innerHTML = xmlhttp.responseText.toString();
}

/** [loadInFrame funcion que muestra el resultado del ejercicio en el iframe] */
function loadInFrame(ejercicio){
	var doc = document.getElementById('ifrmContent');
	doc.src = "ejercicio"+ ejercicio + ".php";
}