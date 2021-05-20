<?php
    //error_reporting(0);
    $cod=$nom=$dir=$fre=$czo=$cpe=$tcl1=$tcl2=$tcl3=$des="";
    if (isset($_GET['des'])){
        $des = $_GET['des'];
    }
    else if (isset($_GET['cod'])){
        $cod = $_GET['cod'];
        $nom = $_GET['nom'];
        $dir = $_GET['dir'];
        $fre = $_GET['fre'];
        $czo = $_GET['czo'];
        $cpe = $_GET['cpe'];
        switch($_GET['tcl']){
            case '1':
                $tcl1 = "checked= checked";
                break;
            case '2':
                $tcl2 = "checked= checked";
                break;
            case '3':
                $tcl3 = "checked= checked";
                break;
        }
    }
?>
       

<div class="alert"><?php echo $des; ?></div>
    <main class="form-main">
        <div class="contenedor">        
            <h1 class="titulo">Formulario</h1>
        </div>  
        <form action="controlador/c_cliente.php" method="POST" class="form grid col-4">

            <div class="form__contenedor span-col-4 span-col-md-2">

                <label for="codigo" class="form__label">Codigo</label>
                <input type="text" id="codigo" name="codigo" class="form__input" placeholder="ej: 11111111" value="<?php echo $cod; ?>">

               <label for="nombre" class="form__label">Nombre</label>
               <input type="text" id="nombre" name="nombre" class="form__input" placeholder="ej: Pedro" value="<?php echo $nom; ?>">
               
               <label for="nombre" class="form__label">codigo de la Zona</label>
               <input type="text" id="codZona" name="codZona" class="form__input" placeholder="ej: 001" value="<?php echo $czo; ?>">

            </div>
            <div class="form__contenedor span-col-4 span-col-md-2">

                <label for="direccion" class="form__label">Direccion</label>
                <textarea name="direccion" class="form__textarea" id="direccion" value=""><?php echo $dir; ?></textarea>
                
                <label for="cantidadPedido" class="form__label">Cantidad de Pedidos</label>
                <input type="text" id="cantidadPedido" name="cantidadPedido" class="form__input" placeholder="ej: 2" value="<?php echo $cpe; ?>">
            </div>

            <div class="form__contenedor span-col-4 span-col-md-2">

                <h2 class="form__subtitulo">Tipo de Cliente</h2>

                <div class="grid col-6">

                    <div class="span-col-2">
                        A contado: <input type="radio" id="contado" value="1" <?php echo $tcl1; ?> name="tipoCliente">
                    </div>

                    <div class="span-col-2">
                        A credito: <input type="radio" id="credito" value="2" <?php echo $tcl2; ?> name="tipoCliente">
                    </div>

                    <div class="span-col-2">
                        Ambos: <input type="radio" id="Ambos" value="3" <?php echo $tcl3; ?> name="tipoCliente">
                    </div>

                </div>

            </div>

            <div class="form__contenedor span-col-4 span-col-md-2">
                <h2 class="form__subtitulo">fecha de Registro</h2>
                <input type="date" id="fechaRegistro" name="fechaRegistro" class="form__input"
                value="<?php echo $fre; ?>">
            </div>
            <br>
           <div class="span-col-4 grid col-4">
                <div>
                    <input type="button" name="incluir" value="incluir" class="form__submit" id="incluir" onclick="evaluarCliente(this.value)">
                </div>
                <div>
                    <input type="button" name="buscar" value="buscar" class="form__submit" id="buscar" onclick="evaluarCliente(this.value)">
                </div>
                <div>
                    <input type="button" name="editar" value="editar" class="form__submit" id="editar" onclick="evaluarCliente(this.value)">
                </div>
                <div>
                    <input type="button" name="eliminar" value="eliminar" class="form__submit" id="eliminar" onclick="evaluarCliente(this.value)">
                </div>
            </div>

        </form>
    </main>
        
</body>
</html>