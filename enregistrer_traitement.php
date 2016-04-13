<?php  

if(isset($_POST['num_tel']) AND isset($_POST['nom_complet']) AND isset($_POST['mdp'])  AND isset($_POST['mdpc']) 
	AND ($_POST['num_tel'] !== "") AND ($_POST['nom_complet'] !== "") )
{
		if($_POST['mdp'] == $_POST['mdpc'] )
		{
	 		include('config/db_config.php');

	 		$num =  $_POST['num_tel'];
	 		$nom_complet = $_POST['nom_complet'];
	 		$mot_de_passe = $_POST['mdp'];

            $insert = $bd->prepare('INSERT INTO abonnees VALUES (?,?,?,?) ');
	        $insert->execute(array($num, $nom_complet, $mot_de_passe,'20'));          

	        $rep = $bd->prepare('SELECT * FROM abonnees WHERE numero_telephone = ? AND  mot_de_passe = ? ');
	    	$rep->execute(array($num, $mot_de_passe));

		    session_start();

			while ($donnees = $rep->fetch())
			{	
			      $_SESSION['numero'] = $donnees['numero_telephone']; 
			      $_SESSION['nom_complet'] = $donnees['nom_complet'];
			      $_SESSION['solde'] = $donnees['credit'];
			}

	        header('location: mon_compte.php');
		
       
		}
		else
		{
			header('location: enregistrer.php?pass=1');
		}
}
else
{    
	header('location: enregistrer.php?form=1');
}


function creditGeneraror()
{
	    $v = 50;
		$insert = $bd->prepare('INSERT INTO credit VALUES (?,?) ');
	    $insert->execute(array(rand(10000,90000).''.rand(10000,90000).''.rand(10000,90000),$v));
}

?>