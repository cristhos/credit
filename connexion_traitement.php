<?php 

	if( isset($_POST['numero']) AND isset($_POST['password']) )
	{
		include('config/db_config.php');
        
		$num = $_POST['numero'];
		$pass = $_POST['password'];

	    $rep = $bd->prepare('SELECT * FROM abonnees WHERE numero_telephone = ? AND  mot_de_passe = ? ');
	    $rep->execute(array($num, $pass));

		session_start();


			while ($donnees = $rep->fetch())
			{	
			      $_SESSION['numero'] = $donnees['numero_telephone']; 
			      $_SESSION['nom_complet'] = $donnees['nom_complet'];
			      $_SESSION['solde'] = $donnees['credit'];
			}
	        header('location: mon_compte.php');
		
        $req->closeCursor();
        
	}else
	{
		header('location: connexion.php?auth=1');	
	}
?>