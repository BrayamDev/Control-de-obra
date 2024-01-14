<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!--CSS ESTILOS-->
    <link rel="stylesheet" href="../Css/style.css">
    <title>Control de obras - Estimaciones</title>
</head>

<body>
    <?php include "../Global/HeaderGlobal.php" ?>
    <div class="control__partida--links">
        <nav>
            <div class="contenedor__partidas">
                <div class="control__obra--links">
                    <div class="contenedor__campos--partida">
                        <div class="control__estimacion--botones">
                            <a href=""><i class="fa-solid fa-file-pdf"></i></a>
                            <a href=""><i class="fa-solid fa-file-excel"></i></a>
                            <a href=""><i class="fa-solid fa-rotate-left"></i></a>
                        </div>
                    </div>

                    <div class="campo-partidas">
                        <label for="">Nº Estimacion: </label>
                        <input class="input-text" type="text" placeholder="">
                    </div>
                    <div class="campo-partidas">
                        <label for="">Nº Factura:</label>
                        <input class="input-text" type="text" placeholder="">
                    </div>
                    <div class="campo-partidas">
                        <label for="">Cambio de factura</label>
                        <input class="input-text" type="submit" value="Cambio de nº Factura">
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="consulta__partidas">
        <h2>Consulta de estimaciones</h2>
    </div>
    <div class="contenedor__tabla">

        <table class="tabla">
            <thead>
                <tr>
                    <th class="table__head">Nº Factura</th>
                    <th class="table__head">Nº Estimacion</th>
                    <th class="table__head">Importe estimacion</th>
                    <th class="table__head">Amortizacion Anticipo</th>
                    <th class="table__head">Fondo de garantia</th>
                    <th class="table__head">Importe Pagado</th>
                    <th class="table__head">Observaciones</th>
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