

/* 	Esta Funcion se encarga de validar si en el campo solo se escrivieron valores numericos
	Para validar campos numericos como por ejemplo el codigo postal	*/	
function SoloNumeros(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }





        