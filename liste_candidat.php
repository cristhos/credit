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
        </div>

        <?php 
             include('conf/db.php');
        	 		
            $candidat = 1;

        	$select="select * from peuple where personnage = $candidat ";

	        $rq=mysql_query($select);

	        
	      echo "<div class='container'><table class=\"table table-bordered table-striped table-condensed table-responsive\">";
		  echo "<TR><TD >Numero d</TD>"; 
		  echo "<TD >Nom</TD>";
 		  echo "<TD >Post Nom</TD>";
 		  echo "<TD >Prenom</TD>"; 
 		  echo "<TD >Age</TD>";  
 		  echo "<TD >Province</TD>"; 
 		  echo "<TD >Ville</TD>"; 
 		  echo "<TD >Adresse</TD></TR>";  
		 	  
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
		 	  
          echo "</TR>"; 
		               

      } 
	  echo "</table> </div>";



        ?>
		<?php include("parties/pieds.php") ?>
	</body>	
</html>