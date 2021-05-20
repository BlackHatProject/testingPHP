//alert("Funcionando...")

function enviarCliente(value){
    var codigo = document.getElementById('codigo').value;
    var nombre = document.getElementById('nombre').value;
    var direccion = document.getElementById('direccion').value;
    var tipoCliente = document.getElementsByName('tipoCliente');
    var fechaRegistro = document.getElementById('fechaRegistro').value;
    var dateFR = new Date(fechaRegistro);
    var fechaActual = new Date();
    var codZona = document.getElementById('codZona').value;
    var cantidadPedido = document.getElementById('cantidadPedido').value;
    var pedidoInt = Number(cantidadPedido)

    if (codigo === "" || nombre === "" || direccion === "" || codZona === "" || fechaRegistro === "" || cantidadPedido === "") {
        alert("Todos los campos son obligatorios")
        return false
    }

    else if (isNaN(codigo) || isNaN(codZona) || isNaN(cantidadPedido)){
        alert("los campos codigo, codigo de la zona y la cantidad de pedidos solo puedes ingresar numeros")
        return false
    }
    
    else if (codigo.length < 4 || codigo.length > 10) {
        alert("El campo codigo solo se aceptan de 4 a 10 caracteres")
        return false
    }
    
    else if (nombre.length < 2 || nombre.length > 60) {
        alert("El campo codigo solo se aceptan de 4 a 10 caracteres")
        return false
    }
    
    else if (direccion.length > 100) {
        alert("El campo direccion solo acepta hasta 100 caracteres")
        return false
    }
    
    else if (codZona.length > 3) {
        alert("El campo codigo solo se aceptan hasta 3 caracteres")
        return false
    }
    
    else if (cantidadPedido.length > 1 || pedidoInt > 4) {
        alert("El campo de Cantidad de pedidos solo aceptan 1 caracter y solo puedes pedir hasta 4 pedidos")
        return false
    }

    if (dateFR >= fechaActual) {
        alert("la Fecha es muy reciente o se pasa de la fecha actual")
        return false
    }
    
    else if (tipoCliente[0].checked === true || tipoCliente[1].checked === true || tipoCliente[2].checked === true) {
        alert("Se han enviados Los datos exitosamente")
        document.getElementById(value).setAttribute('type','submit');
    } 
    else {
        alert("Tienes que elegir un genero");
        return false
    }
}

function buscarCliente(value){
    var codigo = document.getElementById('codigo').value;
    
    if (codigo.length < 4 || codigo === "") {
        alert("El campo codigo solo se aceptan de 4 a 10 caracteres y no puede estar vacio")
        return false
    }
    else {
        document.getElementById(value).setAttribute('type','submit');
    }
}

function evaluarCliente(value) {
    switch (value) {
        case "incluir":
            enviarCliente(value)
            break
        case "buscar":
            buscarCliente(value)
            break
        case "editar":
            enviarCliente(value)
            break
        case "eliminar":
            buscarCliente(value)
            break
    }
}