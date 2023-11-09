function objectAjax(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch (E){
			xmlhttp = false;	
		}		
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener('load', read, false);

function read(){
        $.ajax({        
        		type: 'POST',
                url:   '?c=administrator&m=table_users',               
                beforeSend: function () {
                        $("#information").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#information").html(response);
                }
        });
}

function register(){
	console.log("Entrando en la función de registrar");
	nameComercial 	= document.formUser.nameComercial.value;
	rfc 			= document.formUser.rfc.value;
	nameSocial 		= document.formUser.nameSocial.value;
	tipoProducto 	= document.formUser.tipoProducto.value;
	direccion	 	= document.formUser.direccion.value;
	telefono	 	= document.formUser.telefono.value;
	correo		 	= document.formUser.correo.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=registeruser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();			
			alert('Los datos guardaron correctamente.');			
			$('#addUser').modal('hide');
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nameComercial="+nameComercial+"&rfc="+rfc+"&nameSocial="+nameSocial+"&tipoProducto="+tipoProducto+"&direccion="+direccion+"&telefono="+telefono+"&correo="+correo);
}	

function update(){
	console.log("Entrando en la función actualizar.");
	id 					= document.formUserUpdate.id.value;
	nameComercial 		= document.formUserUpdate.nameComercial.value;
	rfc 				= document.formUserUpdate.rfc.value;
	nameSocial	 		= document.formUserUpdate.nameSocial.value;
	tipoProducto 		= document.formUserUpdate.tipoProducto.value;
	direccion 			= document.formUserUpdate.direccion.value;
	telefono	 		= document.formUserUpdate.telefono.value;
	correo		 		= document.formUserUpdate.correo.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=updateuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){
			read();
			$('#updateUser').modal('hide');
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nameComercial="+nameComercial+"&rfc="+rfc+"&nameSocial="+nameSocial+"&tipoProducto="+tipoProducto+"&direccion="+direccion+"&telefono="+telefono+"&correo="+correo+"&id="+id);

}

function deleteUser(id){	
	if(confirm('¿Esta seguro de eliminar este registro?')){						
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=deleteuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();		
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+id);
	}
}

function ModalRegister(){
	$('#addUser').modal('show');
}

function ModalUpdate(id,nameComercial,rfc,nameSocial,tipoProducto,direccion,telefono,correo){			
	document.formUserUpdate.id.value 				= id;
	document.formUserUpdate.nameComercial.value 	= nameComercial;
	document.formUserUpdate.rfc.value 				= rfc;
	document.formUserUpdate.nameSocial.value 		= nameSocial;
	document.formUserUpdate.tipoProducto.value 		= tipoProducto;
	document.formUserUpdate.direccion.value 		= direccion;
	document.formUserUpdate.telefono.value 			= telefono;
	document.formUserUpdate.correo.value 			= correo;
	$('#updateUser').modal('show');
}

/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/