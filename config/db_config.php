<?php
	try
	{
		$bd = new PDO('mysql:host=localhost;dbname=credit_ul_com', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
?> 