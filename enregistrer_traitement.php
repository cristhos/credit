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

	        //deux personne ne peuvent pas s'enregistrer avec le meme numero
	 		$insert="INSERT INTO abonnees(numero_telephone, nom_complet, mot_de_passe) VALUES('$num', '$nom_complet', '$mot_de_passe')";
                      

			$rq=mysql_query($insert);
			if ($rq)
			{
				session_start();
				$_SESSION['numero'] = $num;
				$_SESSION['nom_complet'] = $nom_complet;
				header('location: mon_compte.php');
			}
			else 
			{
				header('location: enregistrer.php?reussite=0');
			}
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

?>