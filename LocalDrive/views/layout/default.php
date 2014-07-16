<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
    <meta name="description" content="Site de e-commerce de proximité." />
    <meta name="keywords" content="Local Drive,LocalDrive, e-commerce local, local, drive local" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo WEBROOT;?>css/grid.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php echo WEBROOT;?>css/loader.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php echo WEBROOT;?>css/style.css" media="screen"/>
    <title>Local Drive</title>
</head>

<body class="row">

    <header class="col-s-12">
        <h1 class="col-s-8 col-m-10 col-l-12">Local Drive</h1>
        <nav class="col-s-4 col-m-2 col-l-12 ">
            <a href="<?php echo WEBROOT;?>" class="col-s-12 col-m-2 menu">Home</a>
            <a href="<?php echo WEBROOT;?>Produit/page/1" class="col-s-12 col-m-2 menu">Produits</a>
            <a href="<?php echo WEBROOT;?>Commande/page/1" class="col-s-12 col-m-2 menu">Mon Panier</a>
            <?php
            if(isset($_SESSION['usr']) && $_SESSION['usr'] == null ){
            ?>
            <a href="<?php echo WEBROOT;?>Membre/connection" class="col-s-12 col-m-2 menu">Connexion</a>
            <?php
                
            }
            else{if(isset($_SESSION['isCommercant']) && $_SESSION['isCommercant'] == 1){ 
            ?>
            <a href="<?php echo WEBROOT;?>Produit/myProducts/" class="col-s-12 col-m-2 menu">Mes Produits</a>
            <?php
                }
            ?>
            
            <a href="<?php echo WEBROOT;?>Membre/show/<?php echo $_SESSION['usr'];?>" class="col-s-12 col-m-2 menu">Profil</a>
            <a href="<?php echo WEBROOT;?>Membre/disconnect" class="col-s-12 col-m-2 menu">Déconnexion</a>
            <?php
            }
            ?>
        </nav>
    </header>
    
    <section class="col-s-12">
        <div class="col-s-12 col-m-10 s-center">
            <?php echo $contents_for_layout?>
        </div>
    </section>
    
    <footer class="col-s-12">
        <p class="annotation">@copyright : TIXIER Vincent & VOYER Vincent</p>
    </footer>
</body>

