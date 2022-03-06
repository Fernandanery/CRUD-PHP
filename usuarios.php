<?php
include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>

<body>
    <center>
        <h1>Dados de usuários</h1>
        <hr>
        <table rules="all">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> USUÁRIO </th>
                    <th> SENHA</th>
                    <th> EMAIL </th>
                    <th> NIVEL </th>
                </tr>
            </thead>
            <tbody>
                <?php
                //consulta no banco de dados
                $sql_consulta = mysqli_query($con, "SELECT *FROM tb_usuarios");
                //codigo para mostrar o total de registros
                $total = mysqli_num_rows($sql_consulta);
                //trazer os dados organizados em uma matriz- comando de repetição
                while ($dados = mysqli_fetch_array($sql_consulta)) {
                ?>
                    <tr>
                        <td> <?= $dados[0] ?> </td>
                        <td> <?= $dados[1] ?> </td>
                        <td> <?= $dados[2] ?> </td>
                        <td> <?= $dados[3] ?> </td>
                        <td> <?= $dados[4] ?> </td>
                        <td> <a href="excluir.php?id= <?= $dados[0] ?> ">Excluir</a> </td>
                        <td> <a href="editar.php?id= <?= $dados[0] ?>">Editar</a> </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="7"> <strong>Total de registros: </strong> <?= $total ?> </td>
                </tr>;
            </tbody>
        </table>

                    <hr>

                    <a href="index.html">Voltar</a> <br>
                    <a href="pdf.php">Imprimir</a>


    </center>
</body>
</html>