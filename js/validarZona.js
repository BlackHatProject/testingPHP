//alert("Funcionando...")

function enviarZona(value){
    var cod = document.getElementById('cod').value;
    var des = document.getElementById('des').value;
    var ubi = document.getElementsByName('ubi');
    
    if (cod === "" || des === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    
    else if(cod.length > 3){
        alert("El campo Codigo solo pueden llevar 3 caracteres maximo");
        return false;
    }
    
    else if(des.length > 40){
        alert("El campo Descripcion solo puede llevar como maximo 40 caracteres");
        return false;
    }
    
    else if (ubi[0].checked === true || ubi[1].checked === true || ubi[2].checked === true) {
        alert("Se estan enviando los datos");
        document.getElementById(value).setAttribute('type','submit');
    } 
    
    else {
        alert("tienes que elegir una ubicación");
        return false;
    }
}

function buscarZona(value){
    var cod = document.getElementById('cod').value;
    
    if (cod === "") {
        alert("El campo Codigo es obligatorios");
        return false;
    }
    
    else if(cod.length > 3){
        alert("El campo Codigo solo pueden llevar 3 caracteres maximo");
        return false;
    }
    
    else {
        document.getElementById(value).setAttribute('type','submit');
    }
}

function evaluarZona(value) {
    switch (value) {
        case "incluir":
            enviarZona(value)
            break
        case "buscar":
            buscarZona(value)
            break
        case "editar":
            enviarZona(value)
            break
        case "eliminar":
            buscarZona(value)
            break
    }
}