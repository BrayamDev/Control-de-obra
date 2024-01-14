<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!--CSS ESTILOS-->
    <link rel="stylesheet" href="../Css/style.css">
    <title>Control de obras - Contratistas</title>
</head>

<body>
    <?php include "../Global/HeaderGlobal.php" ?>
    <div class="control__partida--links">
        <nav>
            <div class="contenedor__partidas">
                <div class="control__obra--links">
                    <div class="contenedor__campos--partida">
                        <div class="campo-partidas">
                            <label for="">Compañia</label>
                            <input class="input-text" type="text" placeholder="Importe en pesos">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Nombre</label>
                            <input class="input-text" type="text" placeholder="Anticipo en pesos">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Apellido Paterno</label>
                            <input class="input-text" type="text" placeholder="Anticipo en dolares">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Apellido Materno</label>
                            <input class="input-text" type="text" placeholder="F.G. en pesos">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Telefono</label>
                            <input class="input-text" type="text" placeholder="F.G. En dolares">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Correo electronico</label>
                            <input class="input-text" type="text" placeholder="Factura pesos">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Insertar Datos</label>
                            <button class="input-text" type="submit">Insertar datoss</button>
                        </div>
                    </div>
                </div>
                <div class="control__obra--links">
                    <div>
                        <a href="">Regresar presupuesto</a>
                        <a href="">Regresar contratos</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="contenedor__tabla">
        <table class="tabla">
            <thead>
                <tr>
                    <th class="table__head">Compañia</th>
                    <th class="table__head">Nombre</th>
                    <th class="table__head">Apellido paterno</th>
                    <th class="table__head">Apellido Materno</th>
                    <th class="table__head">Telefono</th>
                    <th class="table__head">Correo electronico</th>
                    <th class="table__head">Editar</th>
                    <th class="table__head">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table__data">Proyecto</td>
                    <td class="table__data">Dato en bases de datos</td>
                    <td class="table__data">Dato en bases de datos</td>
                    <td class="table__data">Dato en bases de datos</td>
                    <td class="table__data">Dato en bases de datos</td>
                    <td class="table__data">Dato en bases de datos</td>
                    <td class="table__data">
                        <a href="" class="botones__partida"><i class="fa-regular fa-pen-to-square"></i></a>
                    </td>
                    <td class="table__data">
                        <a href="" class="botones__partida"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>