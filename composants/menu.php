<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">ULCOM</a>
               </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">

                            <?php if ($_SESSION['numero']){
                                        echo'<li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['numero'].'<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="">'.$_SESSION['nom_complet'].'</a></li>
                
                                                <li>
                                                    <a href="deconnexion.php">
                                                        <i class="fa fa-sign-out"></i> Deconnexion
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>';

                                   }else
                                   {
                                       echo'<li><a href="index.php ">Aceuill</a></li>
                                        <a class="btn btn-link navbar-btn" href="enregistrer.php">S\'identifier</a>
                                        <a class="btn btn-primary navbar-btn" href="connexion.php">Connexion</a>';
                                
                                   }
                         ?>
                              
                    </ul>
                </div>
    </div>
</nav>	