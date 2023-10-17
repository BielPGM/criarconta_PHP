<?php

include 'conexao.php';

if (isset($_POST['txt_busca_nome']) !='') {

	$sql=mysql_query("select * from tb_login where USUARIO like '{$_POST['txt_busca_nome']}%' order by USUARIO asc");
}

else {

	$sql=mysql_query("select * from tb_login order by USUARIO asc");
}


if (isset($_GET['apagar'])) {

	$sql = mysql_query("delete from tb_login where USUARIO=". $_GET['apagar']);

	echo "<br>";
	echo "<Center>";
	echo "<hr>";
	echo "CONTA EXCLUIDA COM SUCESSO!!!";
	echo "<br>";
	echo "<a href=\"listagem.php\">VOLTAR</a>";
	echo "<hr>";
	return false;
}

?>

<html>
<body>
	<center>
		<form name="frm_listagem" method="POST" action="listagem.php">
			DIGITE UM NOME DE USUARIO:
			<input type="text" name="txt_busca_nome">
			<input type="submit" value="FILTRAR">
		</form>

		<table border="1" align="center">
			<tr>
				<th colspan="4" bgcolor="orange">LISTAGEM DE CONTAS CADASTRADAS</th>
			</tr>
			<tr>
				<th bgcolor="yellow">USUARIO</th>
				<th bgcolor="yellow">E-MAIL</th>
				<th bgcolor="yellow">SENHA</th>
				<th bgcolor="yellow">EXCLUIR</th>
			</tr>

			<tr>
				<?php
				     while($linha = mysql_fetch_assoc($sql)) {
				?>
                     <td align="left"><?php echo $linha['USUARIO']; ?></td>
                     <td align="left"><?php echo $linha['EMAIL']; ?></td>
                     <td align="center"><?php echo $linha['SENHA']; ?></td>
                     <td align="center"><a href="listagem.php?apagar='<?php echo $linha['USUARIO']; ?>'"><img src='excluir_contas.png'></a></td>
            <tr>
				<?php  }

				echo "<br>";
				echo "<center>";
				echo "<hr>";
				echo "<a href=\"login.html\">RETORNAR AO LOGIN </a>";
				echo "<hr>";

				?>
		</table>
	</body>
</html>
