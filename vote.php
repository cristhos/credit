<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<?php include("parties/tete.php") ?>
	<body>
		<header>
		 <?php include("parties/menu.php") ?>
		</header>
        <div class="container">
                    <h1 class="text-center">Voici la liste de candidat</h1>
                    <h3 class="text-center">Choisissez et voter</h3>
        </div>

        <div class="container col-lg-8  col-sm-8 col-lg-offset-3 col-sm-offset-3">
        	<?php 
                            if($_GET['reussite']=="1" ) echo "<span class=\"alert alert-success\">Je viens de voter !</span> <br />" ; 
                        ?> 
        </div>

        <?php 
             include('conf/db.php');
        	 		
            $candidat = 1;

        	$select="select * from peuple where personnage = $candidat ";

	        $rq=mysql_query($select);

	        
	      echo "<table class=\"table table-bordered table-striped table-condensed table-responsive\">";
		  echo "<tr><td >NI</TD>"; 
		  echo "<td>Nom</td>";
 		  echo "<td>Post Nom</td>";
 		  echo "<td>Prenom</td>"; 
 		  echo "<td>Age</td>";  
 		  echo "<td>Province</td>"; 
 		  echo "<td>Ville</td>"; 
 		  echo "<td>Adresse</td>"; 
 		  echo "<td>Choisir</td>";
 		  echo "<td>Resultat</td></tr>";
		 	  
	    for ($i = 0 ; $i < mysql_num_rows($rq) ; $i ++) 
      	{ 
      	  echo "<TR>"; 
		  echo "<TD >"; echo mysql_result($rq , $i , 'numero'); echo "</TD>"; 
		  echo "<TD >"; echo mysql_result($rq , $i , 'nom'); echo "</TD>";
 		  echo "<TD >"; echo mysql_result($rq , $i , 'postnom');   echo "</TD>";
 		  echo "<TD >"; echo mysql_result($rq , $i , 'prenom'); echo "</TD>"; 
 		  echo "<TD >"; echo mysql_result($rq , $i , 'age'). " ans "; echo "</TD>";  
 		  echo "<TD >"; echo mysql_result($rq , $i , 'province'); echo "</TD>"; 
 		  echo "<TD >"; echo mysql_result($rq , $i , 'ville'); echo "</TD>"; 
 		  echo "<TD >"; echo mysql_result($rq , $i , 'adresse'); echo "</TD>";  
 		  echo "<TD > <a href=\"vote_traitement.php?candidat=".mysql_result($rq , $i , 'numero')."\">Voter</a></TD>";

 		  echo "<TD ><a href=\"resultat_unique.php?numC=".mysql_result($rq , $i , 'numero')."\">Voir les resultats</a></div></TD>";
		 	  
          echo "</TR>"; 
		               

      } 
    
      
	  echo "</table>";


    	


        ?>
		<?php include("parties/pieds.php") ?>
	</body>	
</html>