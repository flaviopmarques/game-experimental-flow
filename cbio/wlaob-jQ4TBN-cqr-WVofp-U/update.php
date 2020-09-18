<?php
	$grupo = $_POST['grupo'];
	$chave = $_POST['chave'];
				
	include("../dbconn.class.php");
	$conn = new Dbconn();
	$conn->open();
						
	$sql = "update aval set grp='$grupo' where key='$chave'";
	$result = pg_query($sql) or die('Query failed: ' . pg_last_error());

				
	if ($result){
		echo "Grupo registrado com sucesso!";
	}
	
	$conn->close();	
    
    header("refresh:2; url=index.php");
?>