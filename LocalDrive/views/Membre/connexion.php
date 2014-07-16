<?php
$login = '';
?>

<div class="col-s-12 col-m-6 m-center">
    <form name="connexionForm" method="post" action="<?php echo WEBROOT;?>Membre/connect" >
        <div class="col-s-12">
            <label for="login" class="col-s-3">Login : </label>
            <input type="text" id="login" name="login" class="col-s-9" value="<?php echo $login; ?>" />
        </div>
        <div class="col-s-12">
            <label for="password" class="col-s-3">Mot de passe : </label>
            <input type="password" id="password" name="password" class="col-s-9" />
        </div>
        <div class="col-s-12">
             <input type="submit" value="Connexion" class="col-s-2 col-s-push-10" />
        </div>
    </form>
    <div class="col-s-12 col-m-4 col-m-push-8">
        <a href="<?php echo WEBROOT;?>Membre/inscription" >Pas encore inscrit ?</a>
    </div>
    
</div>
