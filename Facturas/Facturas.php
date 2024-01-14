<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!--CSS ESTILOS-->
    <link rel="stylesheet" href="../Css/style.css">
    <title>Control de obras - Facturas</title>
</head>

<body>
    <?php include "../Global/HeaderGlobal.php" ?>
    <div class="control__partida--links">
        <nav>
            <div class="contenedor__partidas">
                <div class="control__obra--links">
                    <div class="contenedor__campos--partida">
                        <div class="campo-partidas">
                            <label for="">Filtrar contratista</label>
                            <input class="input-text" type="text" placeholder="Escribe el nombre del contratista">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Contratos</label>
                            <input class="input-text" type="text" placeholder="">
                        </div>
                        <div class="campo-partidas">
                            <a href="../Obra/AccesoObra.php">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="consulta__partidas">
        <h2>Lista de facturas</h2>
    </div>
    <div class="contenedor__tabla">

        <table class="tabla">
            <tr>
                <th class="table__head">Contrato</th>
                <th class="table__head">Contratista</th>
                <th class="table__head">Nº de Factura</th>
                <th class="table__head">Importe pesos</th>
                <th class="table__head">Nº Factura</th>
                <th class="table__head">Importe Dolares</th>
            </tr>
            <thead>
                <tr>
                    <th class="table__head"> Estimaciones </th>
                    <th class="table__head"> </th>
                    <th class="table__head"> </th>
                    <th class="table__head"> </th>
                    <th class="table__head"> </th>
                    <th class="table__head"> </th>
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
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>