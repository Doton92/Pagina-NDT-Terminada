function validar(){
var usuario,correo,contra,telefono,direccion,exprecion;
usuario = document.getElementById("name").value;
correo = document.getElementById("email").value;
contra = document.getElementById("contra").value;
contra2 = document.getElementById("contra2").value;
telefono = document.getElementById("telefono").value;
direccion = document.getElementById("direccion").value;


exprecion = /\w+@\w+\.+[a-z]/;

/*validacion de contraceñas */ 
if (contra == contra2 ){
    
}else{
    alert("la contraseña no coincide ");
    return false;
}

/*Inicio validacion de campo vacio*/ 

/*validacion de usuario*/ 
if (usuario === ""){
    alert("El campo nombre esta vacio");
    return false;
}

else if (usuario.length>30){
    alert("El usuario es muy largo");
    return false;
    let usuario="";
    
}

/*validacion de correo*/ 
if (correo === ""){
    alert("El campo correo esta vacio");
    return false;
}

else if (!exprecion.test(correo)){
    alert("El correo no es valido");
    return false;
}

/*validacion de telefono*/
if (telefono === ""){
    alert("El campo telefono esta vacio");
    return false;
}

else if (isNaN(telefono)){
    alert("El telefono ingresado no es un numero");
    return false;   
}

/*valodacion direccion*/
if (direccion === ""){
    alert("El campo direccion esta vacio");
    return false;
}

else if (direccion.length>15){
    alert("La direccion es muy larga");
    return false;    
    
}

/*validacion contraceña*/
if (contra === ""){
    alert("El campo contraceña esta vacio");
    return false;
}

else if (contra.length>15){
    alert("Contraseña muy larga");
    return false;
    
}

if (contra2 === ""){
    alert("El campo contraceña esta vacio");
    return false;
}

else if (contra2.length>15){
    alert("Contraseña muy larga");
    return false;
    
}
/*fin */

















/*fin */



}

