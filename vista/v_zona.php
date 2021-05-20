<?php
    $cod=$des=$ubi=$ubi1=$ubi2=$ubi3="";
    if (isset($_GET['cod'])){
        $cod = $_GET['cod'];
        $des = $_GET['des'];
        switch($_GET['ubi']){
            case '1':
                $ubi1 = "checked= checked";
                break;
            case '2':
                $ubi2 = "checked= checked";
                break;
            case '3':
                $ubi3 = "checked= checked";
                break;
        }
    }
?>
   

<main class="form-main">
   <div class="contenedor">
       <h1 class="titulo">Formulario de Zona</h1>
   </div>
    <form action="controlador/c_zona.php" class="form grid col-8" method="POST">
       <div class="form__contenedor span-col-8 span-col-md-4">
        <p><label for="cod">codigo:</label><input type="text" name="cod" id="cod" class="form__input" value="<?php echo $cod; ?>"></p>
        <p><label for="des">descripcion:</label><input type="text" name="des" id="des" class="form__input" value="<?php echo $des; ?>"></p>
        </div>
        <div class="form__contenedor span-col-8 span-col-md-4">
            <p>ubicacion:</p>
            <br>
            <div class="grid col-6">
                <div class="span-col-2">
                    <input type="radio" id="oriente" name="ubi" value="1" <?php echo $ubi1; ?> ><label for="oriente">Oriente</label>
                </div>
                <div class="span-col-2">
                    <input type="radio" id="centro" name="ubi" value="2" <?php echo $ubi2; ?> ><label for="centro">Centro</label>
                </div>
                <div class="span-col-2">
                    <input type="radio" id="occidente" name="ubi" value="3" <?php echo $ubi3; ?> ><label for="occidente">Occidente</label>
                </div>
            </div>
            <br>
        </div>
        <div class="span-col-8 grid col-4">
            <div>
                <input type="button" name="incluir" value="incluir" class="form__submit" id="incluir" onclick="evaluarZona(this.value)">
            </div>
            <div>
                <input type="button" name="buscar" value="buscar" class="form__submit" id="buscar" onclick="evaluarZona(this.value)">
            </div>
            <div>
                <input type="button" name="editar" value="editar" class="form__submit" id="editar" onclick="evaluarZona(this.value)">
            </div>
            <div>
                <input type="button" name="eliminar" value="eliminar" class="form__submit" id="eliminar" onclick="evaluarZona(this.value)">
            </div>
        </div>
        
         
    </form>
</main>

</body>
</htmt>
