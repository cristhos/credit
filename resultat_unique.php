<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<?php include("parties/tete.php") ?>
	<body>
		<header>
		 <?php include("parties/menu.php") ?>
		</header>
        <div class="container">
                    <h1 class="text-center">Resulta par candidat</h1>
        </div>

        <?php 
             include('conf/db.php');
        	 		
            $candidat = $_GET['numC'];

        	$select="select * from vote where numeroCandidat = $candidat ";
        	$cout="select * from vote";

        	$rqc = mysql_query($cout);

	        $rq=mysql_query($select);

	        
            echo "<div class=\"container col-lg-6 col-sm-6 col-lg-offset-3 col-sm-offset-3\">
		            <p>Candidat numero :".$candidat."'</p>
		            <p>Nombre de voix :".mysql_num_rows($rq).'/ '.mysql_num_rows($rqc).'</p>
		            <p><a href="vote.php">Retour à la page vote</a></p>
            </div>'; 
		 	  

        ?>
		<?php include("parties/pieds.php") ?>
	</body>	
</html>