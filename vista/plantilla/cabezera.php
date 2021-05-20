<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/standard.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/cabezera.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/acercaDe.css">
    <link rel="stylesheet" href="css/formulario.css">
    <script src="js/validar.js"></script>
    <script src="js/validarZona.js"></script>
    <script src="js/validarCliente.js"></script>
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <header class="header">
        <div class="header__contenedor">
            <input type="checkbox" id="btn-nav">
            <label for="btn-nav" class="nav__btn"><img src="img/menu.png" alt=""></label>
            <nav class="nav">
                <a href="index.php" class="nav__enlace">Inicio</a>
                <a href="cliente.php" class="nav__enlace">Cliente</a>
                <a href="registrar.php" class="nav__enlace">Registrar</a>
                <a href="zona.php" class="nav__enlace">Zona</a>
                <a href="acercade.php" class="nav__enlace">Acerda de</a>
            </nav>
        </div>
    </header>
    