// alert("Funcionando...")

function enviar(){
    // alert("Funcionando...")
    var nombreP = document.getElementById('nombreP').value
    var apellidoP = document.getElementById('apellidoP').value
    var nombreS = document.getElementById('nombreS').value
    var apellidoS = document.getElementById('apellidoS').value
    var ci = document.getElementById('ci').value
    var email = document.getElementById('email').value
    var tel = document.getElementById('tel').value
    var genero = document.getElementsByName('sexo')
    var fechaNacimiento = document.getElementById('fechaNacimiento').value;
    var isEmail = /\w+@\w+\./;
    
    if (nombreP === "" || nombreS === "" || apellidoP === "" || apellidoS === "" || ci === "" || email === "" || tel === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    
    else if(nombreP.length > 30 || nombreS.length > 30){
        alert("los campos de Nombres solo pueden llevar 30 caracteres maximo");
        return false;
    }
    
    else if(apellidoP.length > 30 || apellidoS.length > 30){
        alert("los campos de Apellidos solo pueden llevar 30 caracteres maximo");
        return false;
    }
    
    else if(email.length > 100){
        alert("el campo Email solo puede llevar 100 caracteres");
        return false;
    }
    
    else if(!isEmail.test(email)){
        alert("El Email no es valido");
        return false;
    }
    
    else if(ci.length > 11){
        alert("el campo Cedula solo puede llevar 11 caracteres maximo");
        return false;
    }
    
    else if(isNaN(ci)){
        alert("el campo Cedula solo puedes ingresar numeros");
        return false;
    }
    
    else if(tel.length > 11){
        alert("el campo Cedula solo puede llevar 11 caracteres fijos");
        return false;
    }
    
    else if(isNaN(tel)){
        alert("el campo Telefono solo puedes ingresar numeros");
        return false;
    }
    
    else if (fechaNacimiento === "") {
        alert("Agrege su fecha de Nacimiento");
    }
    
    else if (genero[0].checked === true || genero[1].checked === true || genero[2].checked === true) {
        alert("Se han enviados Los datos exitosamente")
        return true
    } 
    else {
        alert("Tienes que elegir un genero");
        return false;
    }
}