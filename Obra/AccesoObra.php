<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!--CSS ESTILOS-->
    <link rel="stylesheet" href="../Css/style.css">
    <title>Acceso a obra</title>
</head>

<body>
    <div class="contenedor__titulo">
        <h1>Control de obras</h1>
    </div>

    <div class="contenedor__usuario">
        <form class="formulario">
            <div class="contenedor__usuario--titulo">
                <h2>Acceso a obra</h2>
            </div>
            <fieldset>
                <div class="contenedor-campos">
                    <div class="campo">
                        <label for="">Obra</label>
                        <select class="input-text">
                            <option value="#" selected="true">--Seleccione la obra--</option>
                            <option value="#">Obra numero 1</option>
                            <option value="#">Obra numero 2</option>
                            <option value="#">Obra numero 3</option>
                            <option value="#">Obra numero 4</option>
                            <option value="#">Obra numero 5</option>
                            <option value="#">Obra numero 6</option>
                            <option value="#">Obra numero 7</option>
                        </select>
                    </div>
                    <div class="campo--botones">
                        <div class="campo--contenido">
                            <div>
                                <p for="">Nuevo cliente</p>
                                <a href="../Cliente/AltaNuevoCliente.php" class="botonNuevo">Agregar cliente</a>
                            </div>
                            <div>
                                <p for="">Nueva obra</p>
                                <a href="../Obra/AltaNuevaObra.php" class="botonNuevo">Agregar obra</a>
                            </div>

                        </div>
                        <div class="campo--contenido">

                        </div>
                    </div>
                </div>
                <div class="campo--contenido--boton">
                    <a href="../ControlObra/IndexControlObra.php" class="botonNuevo">Acceder a la obra</a>
                </div>
    </div>
    </fieldset>
    </form>
    </div>
</body>

</html>