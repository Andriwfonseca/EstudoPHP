<!DOCTYPE html>
<?php
require 'config.php';
?>
<html>
<head>
	<title>Manipulação de usuarios</title>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
	
	<a href="adicionar.php"><input type="submit" name="adicionarUsuario" value="Adicionar Usuário"></a>
	<table border="0" width="100%">
		<tr>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Ações</th>
		</tr>
		<?php
			$sql = "SELECT * FROM usuarios";
			$sql = $pdo->query($sql);
			if ($sql->rowCount()>0){
				foreach ($sql->fetchall() as $usuario) {
					echo '<tr>';
					echo "<td>".$usuario['nome']."</td>";
					echo "<td>".$usuario['email']."</td>";
					echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> -
					<a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
					echo '</tr>';
				}
			} 
		?>
	</table>
</body>
</html>
