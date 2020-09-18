<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">
<head profile="https://gmpg.org/xfn/11">
    <title>SEGUNDA ETAPA - ATIVIDADE DOIS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css"  href="style.css" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<div id="bg1">
		<div id="bg2">
			<div id="site">
				<div id="clientes_descr_1">
                    <?php
                        $ui = $_GET['ui'];
                        $gp = $_GET['gp'];
						
						include("dbconn.class.php");
						$conn = new Dbconn();
						$conn->open();
						$sql = "insert into log_aval(key, reg) values ('$ui','acessou stagetwo game')";
						$result = pg_query($sql); //or die('Query failed: ' . pg_last_error());
						$conn->close();
                        
                        echo '<div id="bar_info">Aten&ccedil;&atilde;o. Utilize sempre o seu identificador: <span>'.$ui.'</span></div>';
                    ?>
                    
					<h1>Segunda Etapa - Jogo</h1><br>
				</div>
				<div id="middle_bg1">
					<div id="middle_bg2">
						<p>Nesta etapa voc&ecirc; ir&aacute; jogar o jogo Control Harvest 2. Comece assistindo ao v&iacute;deo dispon&iacute;vel nesse link com uma breve explica&ccedil;&atilde;o sobre a interface do jogo.</p>
						<br>
						
						<video width="400" controls>
							<source src="videoaula/tutorial.mp4" type="video/mp4">
						</video>
						
						<br><br><br>
						<p>Nesse primeiro contato, para sua ambientação, jogue livremente por <b>5 minutos</b>, acessando a vers&atilde;o simplificada no link abaixo.</p>
						<br>
						<p><b>Utilize seu identificador no lugar do nome para que possamos acompanhar sua evolu&ccedil;&atilde;o ao longo do experimento.</b></p>
						<br>
						<a href="../controlharvest/pratice/" target="_blank" onclick="log_pratice()"><button>Vers&atilde;o sem metas </button></a>
						<br>
						<br>
						<br>
						<br>
						<p>Agora que voc&ecirc; j&aacute; est&aacute; ambientado com o jogo, jogue <b>por 10 a 20 minutos</b>, acessando a vers&atilde;o completa no link abaixo.</p>
						<br>
						<p><b>Utilize seu identificador no lugar do nome para que possamos acompanhar sua evolu&ccedil;&atilde;o ao longo do experimento.</b></p>
						<br>
						<a href="../controlharvest/game/" target="_blank" onclick="log_game()"><button>Vers&atilde;o com metas </button></a>
						<br>
						<br>
						<br>
						<br>
						<p>Caro participante, dando continuidade ao nosso experimento pedimos que prossiga para pr&oacutexima etapa da avalia&ccedil;&atilde;o atrav&eacute;s do bot&atilde;o abaixo.</p>
						<br>
                        
    					<?php
    					    $ui = $_GET['ui'];
                            $gp = $_GET['gp'];
                        
                            echo '<a href="stagethree.php?ui='.$ui.'&gp='.$gp.'"><button>Prosseguir para pr&oacutexima etapa da avalia&ccedil;&atilde;o</button></a>';
    					?>
						
						<script>
							function log_pratice() {
								<?php
								$conn->open();
								$sql = "insert into log_aval(key, reg) values ('$ui','acessou game sem metas')";
								$result = pg_query($sql); //or die('Query failed: ' . pg_last_error());
								$conn->close();
								?>
							}
							function log_game() {
								<?php
								$conn->open();
								$sql = "insert into log_aval(key, reg) values ('$ui','acessou game completo')";
								$result = pg_query($sql); //or die('Query failed: ' . pg_last_error());
								$conn->close();
								?>
							}
						</script>
                        
						<br><br>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>