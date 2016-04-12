<?php
	$db_connect=mysql_connect("localhost", "root", "richesse");
	$db_select=mysql_select_db("credit_ul_com");

	if (!($db_connect) | !($db_select)){
		echo "Erreur de la connexion à la base de donnee";
	}
?> 