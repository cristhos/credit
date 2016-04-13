<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<?php include("composants/tete.php") ?>
	<body>
		<header>
		 <?php include("composants/menu.php") ?>
		</header>
        <div class="container">
        	<div class="row">
        		<div class="col-lg-5 col-sm-5">
        				<div class="panel panel-primary">
        					<div class="panel panel-heading">
        						<h3 class="panel-title text-center"><?php echo $_SESSION['nom_complet']; ?></h3>
        					</div>
        					
		        			<div class="panel-body">
		        				<h1 class="text-center">Mon status</h1>
                                <p class="lead">Solde : <?php  echo $_SESSION['solde'];  ?></p>
		        			</div>
		        			<div class="panel panel-footer">
        						<h3 class="panel-title">Tel : <?php echo $_SESSION['numero']; ?></h3>
        					</div>
		        		</div>
        		</div>
        		<div class="col-lg-7 col-sm-7">
        				<div class="panel panel-primary">
        					<div class="panel panel-heading">
        						<h3 class="panel-title text-center">Recharger le credit </h3>
        					</div>
        					
		        			<div class="panel-body">
		        	<form class="form-horizontal" method="POST" action="recharge_traitement.php"  >
                    	<label class="control-label">Numero de la carte de credit (13 chiffre)</label>
                    	<input type="text" required="true" name="credit" class="form-control" />
                    	<input class="pull-right btn btn-success" type="submit" name="Recharger" />
                    </form>
        		</div>
        		<div class="panel panel-footer">
        						<h3 class="panel-title alert alert-warning">L'effet de recharger plusieurs faux numero conduits vers le blocage imediat du compte</h3>
        	    </div>
        	</div>
        		
                    
        </div>
		<?php include("composants/pieds.php") ?>
	</body>	
</html>