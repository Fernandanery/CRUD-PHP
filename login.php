<?php
// ESSE DOCUMENTO VAI NOS PERMITIR COMPARAR OU RESTRINGIR O ACESSO AO SISTEMA

include_once('conexao.php');
// conexao - documento responsavel por ligar nosso sistema com o servidor

$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];
//comando para verificar os dados (login e senha) no banco de dados, caso esteja correto ira direcionar para esta página

$sql_logar = mysqli_query($con," SELECT *FROM tb_usuarios WHERE usuario = '$usuario' and senha = '$senha' ");
//consutar e coparar dados recebidos com o banco de dados

//se a consulta for feita e encontrar pelo menos um resultado, irá abrir a tela principal, de acordo com a condição abaixo
if(mysqli_num_rows($sql_logar)!=0){
    header('location:principal.php');
}
//caso não encontre ao menos um resultado, informar um alerta conforme ondição abaixo
else {
    echo " <script>
    alert('USUÁRIO NÃO REGISTRADO');
    window.location.href='index.html';
           </script> ";
}

?>