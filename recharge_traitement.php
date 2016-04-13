<?php 

	if( isset($_POST['credit']) AND ($_POST['credit'] !== "") )
	{
		$credit = $_POST['credit'];
		
			include('config/db_config.php');

			$num_credit = $_POST['credit'];
			

		             

	        $rep1 = $bd->prepare('SELECT * FROM credit WHERE numero_credit = ?');
	    	$rep1->execute(array($num_credit));

		    session_start();

			while ($donnees = $rep1->fetch())
			{	
			      $_SESSION['solde'] = $_SESSION['solde'] + $donnees['valorisation'];
			}

			header('location: mon_compte.php?error=1');			
	}else
	{
		header('location: mon_compte.php?credit=1');	
	}
?>