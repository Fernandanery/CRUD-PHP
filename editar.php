<?php 
include_once('conexao.php');
$id = $_GET ['id'];
$sql_consultar = mysqli_query($con," SELECT *FROM tb_usuarios WHERE id = '$id' ");
$dados = mysqli_fetch_array($sql_consultar);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar cadastros </title>
</head>
<body>
    <center>
        <h1> Central Universidade</h1>
        <hr>
        <h2> Alteração dos dados </h2>
        <hr>
        <form method="POST" action="atualizar.php">
            <input type="hidden" name="codigo" value="<?= $dados[0] ?>" >

            USUÁRIO: <br>
            <input type="text" name="usuario" value="<?= $dados[1] ?>"> <br>
            <br>            
            SENHA: <br>
            <input type="password" name="senha" value="<?= $dados[2] ?>"> <br>
            <br>
            EMAIL: <br>
            <input type="email" name="email" value="<?= $dados[3] ?>"> <br>
            <br>            
            NÍVEL: <br><select name="nivel">
                <option value="<?= $dados[4] ?>"> <?= $dados[4]?> </option>
                <option value="professor">Professor</option>
                <option value="aluno">Aluno</option>
                <option value="outro">Outros</option>
            </select> <br>
            <br>
            <input type="submit" value="ATUALIZAR"> <br>
            <br>
            <a href="index.html"> ENTRAR </a>
    </center>
    </form>
</body>
</html>