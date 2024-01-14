<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!--CSS ESTILOS-->
    <link rel="stylesheet" href="../Css/style.css">
    <title>Control de obras - dar de alta</title>
</head>

<body>
    <?php include "../Global/HeaderGlobal.php" ?>

    <div class="contenedor__usuario">
        <form class="formulario">
            <div class="contenedor__usuario--titulo">
                <h2>Alta nuevo cliente</h2>
            </div>
            <fieldset>
                <div class="contenedor-campos">
                    <div class="campo">
                        <label for="">Nombres</label>
                        <input class="input-text" type="text" placeholder="Escribe tu nombre">
                    </div>
                    <div class="campo">
                        <label for="">Apellidos</label>
                        <input class="input-text" type="text" placeholder="Escribe tus apellidos">
                    </div>
                    <div class="campo">
                        <label for="">Alias</label>
                        <input class="input-text" type="text" placeholder="Escribe tu alias">
                    </div>
                    <div class="campo">
                        <label for="">Correo</label>
                        <input class="input-text" type="email" placeholder="Escribe tu correo electronico">
                    </div>
                    <div class="campo">
                        <label for="">Telefono</label>
                        <input class="input-text" type="tel" placeholder="Escribe tu numero telefonico">
                    </div>
                </div>
                <div class="">
                    <input type="submit" value="Dar de alta a cliente" class="boton">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>