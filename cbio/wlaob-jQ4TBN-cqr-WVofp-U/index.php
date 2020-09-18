<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">
<head profile="https://gmpg.org/xfn/11">
    <title>ADMIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css"  href="../style.css" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
	table, td, th {
		border: 1px solid black;
		padding: 8px;
	}

	table {
		border-collapse: collapse;
		width: 100%;
	}

	th {
		height: 20px;
	}
	</style>
</head>
<body>
	<div id="bg1">
		<div id="bg2">
			<div id="site">
				<div id="clientes_descr_1">
					<h1>ADMIN Tabela Participantes</h1>
				</div>
				<div id="middle_bg1">
					<div id="middle_bg2">
						<p>Participantes registrados:</p>
						<?php
						$nome = $_POST['nome'];
						$email = $_POST['email'];
						$key = hash('crc32', $email);
						
						include("../dbconn.class.php");
						$conn = new Dbconn();
						$conn->open();
						
						$sql = "select * from aval";
						$result = pg_query($sql) or die('Query failed: ' . pg_last_error());
						?>
						
						<table>
							<tr>
							<td>Nome</td>
							<td>E-mail</td>
							<td>Chave</td>
							<td>Grupo</td>
							</tr>
							<?php while ($row = pg_fetch_assoc($result)) { ?>
								<tr>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['key']; ?></td>
									<td><?php echo $row['grp']; ?></td>
								</tr>
						<?php } 
						$conn->close();	
						?>
						</table>

						<br><br>
						<p>Atualiza&ccedil;&atilde;o do grupo:</p>
						<br>
						<form action="update.php" method="post">
							<input type="text" id="chave" name="chave" value="" placeholder="Chave do participante" required>
							<input type="text" id="grupo" name="grupo" placeholder="Grupo do participante" required>
							<br><br>
							<input type="submit" value="Enviar">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>