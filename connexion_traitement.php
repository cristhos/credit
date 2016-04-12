<?php session_start(); ?>
<?php 

	if( isset($_POST['numero']) AND isset($_POST['password']) )
	{
		include('config/db_config.php');

		$num = $_POST['numero'];
		$pass = $_POST['password'];

		$select="SELECT * FROM abonnees WHERE 'numero_telephone' = $num AND 'mot_de_passe' = $pass";
	    $rq=mysql_query($select);

		if($rq)
		{
			session_start();
			$_SESSION['numero'] = $num;

		  	header('location: mon_compte.php');
		}else
		{
			header('location: connexion.php?error=1');
		}	
	}else
	{
		header('location: connexion.php?auth=1');	
	}
?>