<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">
<head profile="https://gmpg.org/xfn/11">
    <title>SEGUNDA ETAPA</title>
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
						$sql = "insert into log_aval(key, reg) values ('$ui','acessou stagetwo lesson')";
						$result = pg_query($sql); //or die('Query failed: ' . pg_last_error());
						$conn->close();
                        
                        echo '<div id="bar_info">Aten&ccedil;&atilde;o. Utilize sempre o seu identificador: <span>'.$ui.'</span></div>';
                    ?>
                    
					<h1>Segunda Etapa - Vídeoaula</h1><br>
				</div>
				<div id="middle_bg1">
					<div id="middle_bg2">
						<p>Nesta segunda etapa voc&ecirc; primeiramente dever&aacute; assistir ao v&iacute;deo dispon&iacute;vel nesse link sobre o tema de Controle Biol&oacute;gico. O v&iacute;deo assistido &eacute; uma colagem de tr&ecirc;s outros v&iacute;deos, uma reportagem do Globo Rural e dois v&iacute;deos do Instituto Biol&oacute;gico. As informa&ccedil;&otilde;es para acesso ao material na &iacute;ntegra ser&atilde;o apresentadas antes do in&iacute;cio de cada parte.</p>
						<br>
						
						<video width="400" controls>
							<source src="videoaula/videoaula.mp4" type="video/mp4">
						</video>
						
						<br><br><br><br>
                        
                        <p> Ap&oacute;s ter assistido ao v&iacute;deo, prossiga para pr&oacutexima etapa da avalia&ccedil;&atilde;o atrav&eacute;s do bot&atilde;o abaixo.</p>
                        <br>
						
						<?php
    					    $ui = $_GET['ui'];
                            $gp = $_GET['gp'];
                            $targ = "#";
						
    						//grupo 1 (grp1) = 4b9bc1ed
    						if ($gp=="4b9bc1ed"){
    							$targ = "stagetwo_exercise.php";
    						}
    						//grupo 2 (grp2) = 92bd82e0
    						if ($gp=="92bd82e0"){
    							$targ = "stagetwo_game.php";
    						}
    						//grupo 3 (grp3) = 25a043e4
    						if ($gp=="25a043e4"){
    							$targ = "stagethree.php";
    						}
                            
                            echo '<a href="'.$targ.'?ui='.$ui.'&gp='.$gp.'"><button>Prosseguir para pr&oacutexima etapa da avalia&ccedil;&atilde;o</button></a>';
						?>
					</div>	
				</div>				
			</div>
		</div>
	</div>
</body>
</html>

