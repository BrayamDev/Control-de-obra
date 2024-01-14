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
                <h2>Registrar nueva obra</h2>
            </div>
            <fieldset>
                <div class="contenedor-campos">
                    <div class="campo">
                        <label for="">Nombre de obra</label>
                        <input class="input-text" type="text" placeholder="Escribe el nombre de la obra">
                    </div>
                    <div class="campo">
                        <label for="">Tipo de cambio</label>
                        <input class="input-text" type="text" placeholder="Escribe tu tipo de cambio">
                    </div>
                    <div class="campo">
                        <label for="">Nombre representante</label>
                        <input class="input-text" type="text" placeholder="Escribe el nombre de tu representante">
                    </div>
                    <div class="campo">
                        <label for="">Correo</label>
                        <input class="input-text" type="email" placeholder="Escribe tu correo electronico">
                    </div>
                    <div class="campo">
                        <label for="">Telefono</label>
                        <input class="input-text" type="tel" placeholder="Escribe tu numero telefonico">
                    </div>
                    <div class="campo">
                        <label for="">Cliente</label>
                        <select class="input-text">
                            <option value="#" selected="true">--Seleccione el cliente--</option>
                            <option value="#">Cliente 1</option>
                            <option value="#">Cliente 2</option>
                            <option value="#">Cliente 3</option>
                            <option value="#">Cliente 4</option>
                            <option value="#">Cliente 5</option>
                            <option value="#">Cliente 6</option>
                            <option value="#">Cliente 7</option>
                        </select>
                    </div>

                </div>
                <div class="usuario__contenido">
                    <input type="submit" value="Agregar obra" class="boton">
                </div>
            </fieldset>

        </form>

    </div>
</body>

</html>