<?php session_start(); ?>
<?php 
if(isset($_GET['candidat']))
{
	
 		include('conf/db.php');

 		$numC =  $_GET['candidat'];
 		$numE = $_SESSION['numero'];
 	

 		$insert="insert into vote (numeroCandidat, numeroElecteur) values ('$numC', '$numE')";



		$rq=mysql_query($insert);
	
		if ($rq)
			header('location: vote.php?reussite=1');
		else 
			header('location: vote.php?reussite=0');
}
else
{    
	header('location: vote.php?erreure="form"');
}

?>