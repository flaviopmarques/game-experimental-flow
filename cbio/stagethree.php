<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">
<head profile="https://gmpg.org/xfn/11">
    <title>TERCEIRA ETAPA</title>
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
						$sql = "insert into log_aval(key, reg) values ('$ui','acessou stagethree')";
						$result = pg_query($sql); //or die('Query failed: ' . pg_last_error());
						$conn->close();
                        
                        echo '<div id="bar_info">Aten&ccedil;&atilde;o. Utilize sempre o seu identificador: <span>'.$ui.'</span></div>';
                        
                        echo '<h1>Terceira Etapa</h1><br><br>';
						
						echo '<p>Preencha o formul&aacute;rio abaixo. Clique no bot&atilde;o ao final do formul&aacute;rio para enviar suas respostas.<p><br><br>';
					
                        
                        // default questionnaire
                        $targ = "https://docs.google.com/forms/d/1JViPXbNp2H1DtGqjGkt3bFawo6LFlFl_qoys9BPVG_A/viewform?ts=5ede9e26";
                        
                        // if from group playing game - group 2 (92bd82e0) and group (20f004fa)
						if ($gp=="92bd82e0" or $gp=="20f004fa"){
							$targ = "https://docs.google.com/forms/d/1n1_I5gI9whoe3LEfD1Fmj0zmQeOD7mH-Cpvr6xGgHvY/viewform?ts=5ede9e42";
						}
                                                
						echo '<iframe height="5600px" width="100%" src="'.$targ.'" name="iframe_a"></iframe>';
						
					?>
					<br><br>
					<p>Obrigado pela sua participa&ccedil;&atilde;o!</p>
					<br>
				</div>
			</div>
		</div>
	</div>
</body>
</html>