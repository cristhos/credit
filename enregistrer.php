<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<?php include("composants/tete.php") ?>
	<body>
		<header>
		 <?php include("composants/menu.php") ?>
		</header>
        <div class="container">
        	    <div class="col-lg-6 col-sm-6 col-lg-offset-3 col-sm-offset-3">
                    <h1 class="text-center">Enregister des abonnees</h1>
                    <div >
                        <?php 
                            if($_GET['erreure']=="pass") 
                            {
                                echo "<span class=\"alert alert-warning\">Le mot de passe ne sont identique</span>" ; 
                            }  
                            if($_GET['erreure']=="form") 
                            {
                                echo "<span class=\"alert alert-warning\">Formulaire mal remplie</span>" ; 
                            }             
                        ?> 
                    </div>
                    <form class="form-horizontal" method="POST" action="enregistrer_traitement.php">
                    	<label>Numero de telephone</label>
                    	<input type="text" required="true" name="num_tel" class="form-control" />

                    	<label>Nom Complet</label>
                    	<input type="text" required="true" name="nom_complet"  class="form-control" />
                    	
                    	<label>Mot de passe</label>
                    	<input type="password" required="true" name="mdp" class="form-control" />
                    	<label>Confirmer le Mot de passe</label>
                    	<input type="password" required="true" name="mdpc" class="form-control" />

                    	<input class="pull-right btn btn-success" type="submit" name="Enregister" />
                    </form>
                </div>
        </div>
		<?php include("composants/pieds.php") ?>
	</body>	
</html>