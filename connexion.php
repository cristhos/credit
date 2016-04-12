<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<?php include("composants/tete.php") ?>
	<body>
		<header>
		 <?php include("composants/menu.php") ?>
		</header>
        <div class="container">
        		<div class="col-lg-4 col-sm-4 col-lg-offset-4 col-sm-offset-4">
                    <h1 class="text-center">Connexion</h1>
                    <div >
                        <?php 
                            if(isset($_GET['erreure'])) echo "<span class=\"alert alert-warning\">Veillez verifier le login ou le mot de passe svp !</span>" ; 
                        ?> 
                    </div>
                    <form class="form-horizontal" method="POST" action="connexion_traitement.php"  >

                    	<label class="control-label">Numero de telephone (10 chiffre)</label>
                    	<input type="text" required="true" name="numero" class="form-control" placeholder="0991234567"/>
                    	<label class="control-label">Mot de passe</label>
                    	<input type="password" required="true" name="password" class="form-control"/>

                    	<input class="pull-right btn btn-success" type="submit" name="Connexion" />
                    </form>
                </div>
        </div>
		<?php include("parties/pieds.php") ?>
	</body>	
</html>