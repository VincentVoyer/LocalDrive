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
    <!--
    <p class="col-s-12 l-show">visible sur large</p>
    <p class="col-s-12 m-show">visible sur medium</p>
    -->
    <header class="col-s-12">
        <h1 class="col-s-8 col-m-10 col-l-12">Local Drive</h1>
        <nav class="col-s-4 col-m-2 col-l-12">
            <a href="<?php echo WEBROOT;?>" class="col-s-12 col-m-2 menu">Home</a>
                <a href="<?php echo WEBROOT;?>Produit/index" class="col-s-12 col-m-2 menu">Produits</a>
                <a href="#" class="col-s-12 col-m-2 menu">Connexion</a>
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

