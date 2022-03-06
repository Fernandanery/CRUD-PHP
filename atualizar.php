<?php
// concluir alteração no banco pelo documento editar
include_once('conexao.php');
// cria porta de ligação do nosso sistema com banco de dados - conexao.php

$id = $_POST['codigo'];

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];

$sql_atualizar = mysqli_query ($con , " UPDATE tb_usuarios SET usuario='$usuario', senha='$senha', email='$email', nivel='$nivel'WHERE id='$id' " );
//gravar dados no banco de dados a alteração

if($sql_atualizar == true){
    echo " <script>
    alert('ALTERAÇÃO DOS DADOS EFETUADA COM SUCESSO');
    window.location.href='usuarios.php';
           </script> "; 
}
else {
    echo " <script>
    alert('ERRO AO ALTERAR OS DADOS');
    window.location.href='editar.php';
           </script> "; 
}
//instrucao condicional para usuario receber a mensagem se o cadastro foi efetuado ou nao com sucesso

