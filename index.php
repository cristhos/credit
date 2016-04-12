<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<?php include("composants/tete.php") ?>
	<body>
		<header>
		 <?php include("composants/menu.php") ?>
		</header>
        <div class="container">
        			<?php if($_GET['deconnecte']) echo '<div class="alert alert-success "><h3 class="text-center">Merci pour votre connection ! Hum! vous nous manquez déja !</h3></div>'; ?>
                    <h1 class="text-center">Bienvenu dans le système de recharge ulcom </h1>
        </div>
		<?php include("composants/pieds.php") ?>
	</body>	
</html>