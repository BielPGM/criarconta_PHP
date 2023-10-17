<?php 

include 'conexao.php';

$usuario = $_POST["txt_usuario"];
$senha = $_POST["txt_senha"];

$sql=mysql_query("select * from tb_login where (USUARIO='$usuario' or EMAIL='$usuario') and senha='$senha'");

if (mysql_num_rows($sql) > 0) {

	echo "<script language=javascript>alert('Conta logada com sucesso!');</script>";

    echo "<center>";
    echo "<hr>";
    echo "CONTA LOGADA COM SUCESSO!";
    echo "<hr>";
    echo "<br>";
    echo "<a href=\"listagem.php\">Visualizar Contas</a>";

}

else {
    echo "<center>";
    echo "<hr>";
    echo "Usuario ou Senha Invalidos!";
    echo "<hr>";
    echo "<br>";
    echo "<a href=\"login.html\">VOLTAR</a>";

}

?>

