<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">
<head profile="https://gmpg.org/xfn/11">
    <title>PRIMEIRA ETAPA</title>
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
						$sql = "insert into log_aval(key, reg) values ('$ui','acessou stageone')";
						$result = pg_query($sql); //or die('Query failed: ' . pg_last_error());
						$conn->close();
                        
                        echo '<div id="bar_info">Aten&ccedil;&atilde;o. Utilize sempre o seu identificador: <span>'.$ui.'</span></div>';
                    ?>
                    
					<h1>Primeira Etapa</h1><br><br>
					
					<p>Preencha o formul&aacute;rio abaixo. Clique no bot&atilde;o ao final do formul&aacute;rio para enviar suas respostas.<p><br><br> 
						
					<iframe height="2500px" width="100%" src="https://docs.google.com/forms/d/1MjuA5ZqH-1rLoMsfq5jquhyDjLz4wAfSba2VL--DAfo/viewform?ts=5ede9e6b" name="iframe_a"></iframe>
					
					<br><br>
                    
					<?php
					    $ui = $_GET['ui'];
                        $gp = $_GET['gp'];
					    $targ = "stagetwo_lesson.php";
                        
					    //grupo 4 (grp4) = 20f004fa
					    if ($gp=="20f004fa"){
						    $targ = "stagetwo_game.php";
					    }
                        
                        echo '<a href="'.$targ.'?ui='.$ui.'&gp='.$gp.'"><button>Prosseguir para pr&oacutexima etapa da avalia&ccedil;&atilde;o</button></a>';
					?>		
                </div>
            </div>
        </div>
    </div>
</body>
</html>