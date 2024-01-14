<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!--CSS ESTILOS-->
    <link rel="stylesheet" href="../Css/style.css">
    <title>Control de obras - Contratos</title>
</head>

<body>
    <?php include "../Global/HeaderGlobal.php" ?>
    <div class="control__partida--links">
        <nav>
            <div class="contenedor__partidas">
                <div class="control__obra--links">
                    <div class="contenedor__campos--partida">
                        <div class="partidas--dropdown">
                            <label for="">Concepto</label>
                            <select class="input-text">
                                <option value="#" selected="true">--Concepto--</option>
                                <option value="#">Concepto numero 1</option>
                                <option value="#">Concepto numero 2</option>
                                <option value="#">Concepto numero 3</option>
                                <option value="#">Concepto numero 4</option>
                                <option value="#">Concepto numero 5</option>
                                <option value="#">Concepto numero 6</option>
                                <option value="#">Concepto numero 7</option>
                            </select>
                        </div>
                        <div class="partidas--dropdown">
                            <label for="">SubConcepto</label>
                            <select class="input-text">
                                <option value="#" selected="true">--SubConcepto--</option>
                                <option value="#">Concepto numero 1</option>
                                <option value="#">Concepto numero 2</option>
                                <option value="#">Concepto numero 3</option>
                                <option value="#">Concepto numero 4</option>
                                <option value="#">Concepto numero 5</option>
                                <option value="#">Concepto numero 6</option>
                                <option value="#">Concepto numero 7</option>
                            </select>
                        </div>
                        <div class="campo-partidas">
                            <label for="">Importe Pesos</label>
                            <input class="input-text" type="text" placeholder="Importe en pesos">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Anticipo Pesos</label>
                            <input class="input-text" type="text" placeholder="Anticipo en pesos">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Anticipo Dolares</label>
                            <input class="input-text" type="text" placeholder="Anticipo en dolares">
                        </div>
                        <div class="campo-partidas">
                            <label for="">F.G Pesos</label>
                            <input class="input-text" type="text" placeholder="F.G. en pesos">
                        </div>
                        <div class="campo-partidas">
                            <label for="">F.G Dolares</label>
                            <input class="input-text" type="text" placeholder="F.G. En dolares">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Factura pesos</label>
                            <input class="input-text" type="text" placeholder="Factura pesos">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Factura dolares</label>
                            <input class="input-text" type="text" placeholder="Factura dolares">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Contratista</label>
                            <input class="input-text" type="text" placeholder="Contratista">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Insertar</label>
                            <button class="input-text" type="submit">Insertar</button>
                        </div>
                    </div>
                </div>
                <div class="control__obra--links">
                    <div>
                        <a href="">Regresar presupuesto</a>
                        <a href="">Regresar contratos</a>
                        <a href="../Obra/AccesoObra.php"><i class="fa-solid fa-rotate-left"></i></a>
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
                    <th class="table__head">Nombre</th>
                    <th class="table__head">Concepto</th>
                    <th class="table__head">SubConcepto</th>
                    <th class="table__head">Importe Pesos</th>
                    <th class="table__head">Importe Dolares</th>
                    <th class="table__head">Anticipo Pesos</th>
                    <th class="table__head">Anticipo Dolares</th>
                    <th class="table__head">F.G. Pesos</th>
                    <th class="table__head">F.G. Dolares</th>
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