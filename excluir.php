<?php

include_once('conexao.php');
$id = $_GET ['id'];

$sql_excluir=mysqli_query ($con , "DELETE FROM tb_usuarios WHERE id='$id' ") ;

//passar a informação ao usuario se houve a exclusão ou não
if($sql_excluir ==true){    
    echo "<script>
    alert ('USUÁRIO FOI EXCLUIDO COM SUCESSO') ;
    window.location.href='usuarios.php';
    </script> "; 
} else {
    echo "<script>
    alert ('ERRO AO EXLUIR O USUÁRIO') ;
    window.location.href='usuarios.php';
    </script> "; 
}
?>
