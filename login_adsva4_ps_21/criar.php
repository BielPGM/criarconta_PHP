<?php 
    
    include 'conexao.php'; // conexão de banco de dados

    $usuario = $_POST ["txt_usuario"];
    $email = $_POST ["txt_email"];
    $senha = $_POST ["txt_senha"];

    $sql = mysql_query("select * from tb_login where USUARIO='$usuario' or EMAIL='$email'");

    if (mysql_num_rows($sql) > 0) {

    	echo "<center>";
    	echo "<hr>";
    	echo "VOCÊ JÁ POSSUI CADASTRO!";
    	echo "<hr>";
    	echo "<br>";
    	echo "<a href=\"criar_conta.html\">RETORNAR AO CADASTRO </a>";
    }

    else {

    	$sql = mysql_query("insert into tb_login (USUARIO,EMAIL,SENHA) values ('$usuario','$email','$senha')");

    	echo "<center>";
    	echo "<hr>";
    	echo "CONTA CRIADA COM SUCESSO!";
    	echo "<hr>";
    	echo "<br>";
    	echo "<a href=\"criar_conta.html\">RETORNAR AO CADASTRO </a>";
    }

?>

