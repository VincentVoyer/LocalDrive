<?php
    $login = isset($profil['login'])?$profil['login']:'';
    $nom = isset($profil['firstname'])?$profil['firstname']:'';
    $prenom = isset($profil['lastname'])?$profil['lastname']:'';
    $email = isset($profil['email'])?$profil['email']:'';
    $numAdress = isset($profil['numAdress'])?$profil['numAdress']:'';
    $codePostalAdress = isset($profil['codePostalAdress'])?$profil['codePostalAdress']:'';
    $cityAdress = isset($profil['cityAdress'])?$profil['cityAdress']:'';
    $adress = isset($profil['adress'])?$profil['adress']:'';
    $telephone = isset($profil['telephone'])?$profil['telephone']:'';
?>
<div class="col-s-12 col-m-6 col-m-push-3">
    <div class="col-s-12 col-m-6">
        <h1 class="col-s-12"><?php echo $login; ?></h1>
    </div>
    
    <div class="col-s-12 col-m-6">
        <div class="col-s-12">
            <p>Nom : <?php echo $nom; ?></p>
            <p>Prenom : <?php echo $prenom; ?></p>
        </div>
        <div class="col-s-12">
            <p>email : <?php echo $email; ?></p>
            <p>téléphone : <?php echo $telephone; ?></p>
        </div>
        <div class="col-s-12">
            <p>Adress : </p>
            <p>
                <?php echo $numAdress; ?> <?php echo $adress; ?><br/>
                <?php echo $codePostalAdress; ?> <?php echo $cityAdress; ?>
            </p>
        </div>
    </div>
</div>