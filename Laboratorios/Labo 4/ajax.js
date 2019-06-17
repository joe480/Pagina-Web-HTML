function llamar(url){
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function(){
		if(ajax.readyState == 4){
			document.getElementById("contenido").innerHTML = ajax.responseText;
		}
	};
ajax.open("GET", url, true);
ajax.send();
}
