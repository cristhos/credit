<?php 

	if( isset($_POST['credit']) AND ($_POST['credit'] !== "") )
	{
		$credit = $_POST['credit'];
		if(($credit->getLenth()) == 2)
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

			  	header('location: mon_compte.php?recharge=1');
			}else
			{
				header('location: mon_compte.php?error=1');
			}	
	    }else
		{
			header('location: mon_compte.php?invalid=1');
		}
		
	}else
	{
		header('location: mon_compte.php?credit=1');	
	}
?>