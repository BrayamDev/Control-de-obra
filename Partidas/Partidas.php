<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!--CSS ESTILOS-->
    <link rel="stylesheet" href="../Css/style.css">
    <title>Control de obras - Partidas</title>
</head>

<body>
    <?php include "../Global/HeaderGlobal.php" ?>
    <div class="control__partida--links">
        <nav>
            <div class="contenedor__partidas">
                <div class="partidas__links">
                    <div class="campo-partidas">
                        <label for="">Partida nueva</label>
                        <input class="input-text" type="email" placeholder="Nueva partida">
                    </div>
                    <div class="campo-partidas">
                        <label for="">Sub partida</label>
                        <input class="input-text" type="tel" placeholder="Nueva subpartida">
                    </div>
                    <div class="campo-partidas">
                        <label for="">Insertar Importes</label>
                        <button class="input-text" type="submit">Insertar partida</button>
                    </div>

                </div>

                <div class="control__obra--links">
                    <div class="contenedor__campos--partida">
                        <div class="partidas--dropdown">
                            <label for="">Partida</label>
                            <select class="input-text">
                                <option value="#" selected="true">--Seleccione la Partida--</option>
                                <option value="#">Partida numero 1</option>
                                <option value="#">Partida numero 2</option>
                                <option value="#">Partida numero 3</option>
                                <option value="#">Partida numero 4</option>
                                <option value="#">Partida numero 5</option>
                                <option value="#">Partida numero 6</option>
                                <option value="#">Partida numero 7</option>
                            </select>
                        </div>
                        <div class="partidas--dropdown">
                            <label for="">SubPartida</label>
                            <select class="input-text">
                                <option value="#" selected="true">--Seleccione la SubPartida--</option>
                                <option value="#">Partida numero 1</option>
                                <option value="#">Partida numero 2</option>
                                <option value="#">Partida numero 3</option>
                                <option value="#">Partida numero 4</option>
                                <option value="#">Partida numero 5</option>
                                <option value="#">Partida numero 6</option>
                                <option value="#">Partida numero 7</option>
                            </select>
                        </div>
                        <div class="campo-partidas">
                            <label for="">Importe Pesos</label>
                            <input class="input-text" type="text" placeholder="Escribe tu importe en pesos">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Importe Dolares</label>
                            <input class="input-text" type="text" placeholder="Escribe tu en dolares">
                        </div>
                        <div class="campo-partidas">
                            <label for="">Insertar Importes</label>
                            <button class="input-text" type="submit">Insertar importe</button>
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
    <div class="consulta__partidas">
        <h2>Consulta partidas</h2>
    </div>
    <div class="contenedor__tabla">
        <table class="tabla">
            <thead>
                <tr>
                    <th class="table__head">Numero</th>
                    <th class="table__head">Concepto</th>
                    <th class="table__head">SubConcepto</th>
                    <th class="table__head">Importe Pesos</th>
                    <th class="table__head">Importe Dolares</th>
                    <th class="table__head">Editar</th>
                    <th class="table__head">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table__data">Proyecto</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
                    <td class="table__data">$5,753,043</td>
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