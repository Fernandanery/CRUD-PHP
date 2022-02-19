<?php
// criar o cadastro para enviar dados ao banco

include_once('conexao.php');
// cria porta de ligação do nosso sistema com banco de dados - conexao.php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];
//insere os valores que vem do cadastro de usuarios

$sql_cadastro = mysqli_query ($con , "INSERT INTO tb_usuarios (usuario, senha, email, nivel) values ('$usuario' , '$senha' , '$email' , '$nivel') " );
//gravar dados no banco de dados

if($sql_cadastro == true){
    echo " <script>
    alert('USUÁRIO CADASTRADO COM SUCESSO');
    window.location.href='index.html';
           </script> "; 
}
else {
    echo " <script>
    alert('FALHA NO CADASTRO');
    window.location.href='cadastro_usuarios.html';
           </script> "; 
}
//instrucao condicional para usuario receber a mensagem se o cadastro foi efetuado ou nao com sucesso
