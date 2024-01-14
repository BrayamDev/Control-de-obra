<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!--CSS ESTILOS-->
    <link rel="stylesheet" href="../Css/style.css">
    <title>Control de obras - Vista principal</title>
</head>

<body>
    <?php include "../Global/HeaderGlobal.php" ?>

    <div class="control__obra--links">
        <nav>
            <a href="../Partidas/Partidas.php">Partidas</a>
            <a href="../Contratos/Contratos.php">Contratos</a>
            <a href="../Contratistas/Contratistas.php">Contratista</a>
            <a href="">Presupuesto</a>
            <a href="../Estimaciones/Estimaciones.php">Estimacion</a>
            <a href="">Actividades</a>
            <a href="../Facturas/Facturas.php">Facturas</a>
            <a href="../Obra/AccesoObra.php">Cambio obra</a>
        </nav>
    </div>
    <div class="control__obra--botones">
        <a href=""><i class="fa-solid fa-file-pdf"></i></a>
        <a href=""><i class="fa-solid fa-file-excel"></i></a>
        <a href="../Obra/AccesoObra.php"><i class="fa-solid fa-rotate-left"></i></a>
    </div>

    <div class="contenedor__tabla">
        <table class="tabla">
            <thead>
                <tr>
                    <th class="table__head">Concepto</th>
                    <th class="table__head">Importe Original</th>
                    <th class="table__head">Importe Contratado</th>
                    <th class="table__head">Diferencia</th>
                    <th class="table__head">Importe Estimado</th>
                    <th class="table__head">Importe por Estimar</th>
                    <th class="table__head">Importe Pagado</th>
                    <th class="table__head">Importe Autorizado</th>
                    <th class="table__head">Importe por Estimar</th>
                    <th class="table__head">Importe F.G.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table__data">Proyecto</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>