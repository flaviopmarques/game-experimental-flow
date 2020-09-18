<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">
<head profile="https://gmpg.org/xfn/11">
    <title>TERMO DE CONSENTIMENTO LIVRE E ESCLARECIDO</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css"  href="style.css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<div id="bg1">
		<div id="bg2">
			<div id="site">
				<div id="clientes_descr_1">
					<h1>OBRIGADO POR PARTICIPAR!</h1><br>
				</div>
				<div id="middle_bg1">
					<div id="middle_bg2">
                        <p>Obrigado por aceitar o Termo de Consentimento Livre e Esclarecido.</p>
						<p>Seu identificador para ser utilizado nas etapas seguintes é:</p>
						<br>
						
						<?php
						$nome = $_POST['nome'];
						$email = $_POST['email'];
						$key = hash('crc32', $email);
						
						include("dbconn.class.php");
						$conn = new Dbconn();
						$conn->open();
						
						$sql = "insert into aval(email, name, key) values ('$email','$nome','$key')";
						$result = pg_query($sql); //or die('Query failed: ' . pg_last_error());
						
						if ($result){
							$sql2 = "select grp, count(grp) from aval group by grp";
							$result2 = pg_query($sql2); //or die('Query failed: ' . pg_last_error());
							
							while ($row = pg_fetch_assoc($result2)) {
								//echo 'grup: '.$row['grp'].' qtd: '.$row['count'].'<br>';
								if ($row['grp']){
									$contagem[$row['grp']] = $row['count'];
								}
							}
							//echo array_search(min($contagem),$contagem);
							$grupo = array_search(min($contagem),$contagem);
                           // echo '<p>'.$grupo.'</p>';

							$sql3 = "update aval set grp='$grupo' where key='$key'";
							$result3 = pg_query($sql3); //or die('Query failed: ' . pg_last_error());
						
						}
                        
						echo '<p style="font-size:50px; color:red; font-weight:bold; text-align:center;">'.$key.'</p><br>';
						
                        echo '<br><p>Continue sua participa&ccedil;&atilde;o no experimento. Para isso, realize agora a primeira etapa da avalia&ccedil;&atilde;o atrav&eacute;s do bot&atilde;o abaixo.</p><br>';
						
                        
                        $sql = "select * from aval where key='$key'";
                    	$result = pg_query($sql); //or die('Query failed: ' . pg_last_error());
	                    
                        $gp = "";
                    	$row = pg_fetch_assoc($result);
                        if ($row['grp'] == 1) {
                            $gp = "4b9bc1ed";
                        }
                        if ($row['grp'] == 2) {
                            $gp = "92bd82e0";
                        }
                        if ($row['grp'] == 3) {
                            $gp = "25a043e4";
                        }
                        if ($row['grp'] == 4) {
                            $gp = "20f004fa";
                        }
                        
                        echo '<a href="stageone.php?ui='.$key.'&gp='.$gp.'" target="_blank"><button>Prosseguir para primeira etapa da avalia&ccedil;&atilde;o</button></a>';
                        
                        $conn->close();
                        
						?>
                    </div>				
                </div>
		    </div>
        </div>
    </div>
</body>
</html>

