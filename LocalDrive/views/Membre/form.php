<?php
    $id = (isset($profil)? (isset($profil['id'])? $profil['id'] : '') : '');
    $login = (isset($profil)? (isset($profil['login'])? $profil['login'] : '') : '');
    $password = (isset($profil)? (isset($profil['password'])? $profil['password'] : '') : '');
    $firstname = (isset($profil)? (isset($profil['firstname'])? $profil['firstname'] : '') : '');
    $lastname = (isset($profil)? (isset($profil['lastname'])? $profil['lastname'] : '') : '');
    $numAdress = (isset($profil)? (isset($profil['numAdress'])? $profil['numAdress'] : '') : '');
    $adress = (isset($profil)? (isset($profil['adress'])? $profil['adress'] : '') : '');
    $city = (isset($profil)? (isset($profil['city'])? $profil['city'] : '') : '');
    $codePostalAdress = (isset($profil)? (isset($profil['codePostalAdress'])? $profil['codePostalAdress'] : '') : '');
    $telephone = (isset($profil)? (isset($profil['telephone'])? $profil['telephone'] : '') : '');
    $email = (isset($profil)? (isset($profil['email'])? $profil['email'] : '') : '');
    
?>
<div class="col-s-12 col-m-6 m-center form">
    <form method="POST" action="<?php echo WEBROOT; ?>/Membre/save" >
        <input type="hidden" id="id" name="id" value="<?php echo $id;?>" class="col-s-12"/>
        <div class="col-s-12">
            <label for="login" class="col-s-3">Login : </label>
            <input type="text" id="login" name="login" class="col-s-9" value="<?php echo $login;?>"/>
        </div>
        
        <div class="col-s-12">
            <label for="password" class="col-s-3">Mot de passe: </label>
            <input type="password" id="password"  name="password" class="col-s-9" value="<?php echo $password;?>"/>
        </div>
        
        <div class="col-s-12">
            <label for="firstname" class="col-s-3">Prenom : </label>
            <input type="text" id="firstname" name="firstname" class="col-s-9" value="<?php echo $firstname;?>"/>
        </div>
        
        <div class="col-s-12">
            <label for="lastname" class="col-s-3">Nom: </label>
            <input type="text" id="lastname" name="lastname" class="col-s-9" value="<?php echo $lastname;?>"/>
        </div>
        <div class="col-s-12">
            <label for="numAdress" class="col-s-3">Numéro: </label>
            <input type="text" id="numAdress" name="numAdress" class="col-s-9" value="<?php echo $numAdress;?>"/>
        </div>
        <div class="col-s-12">
            <label for="adress" class="col-s-3">Adresse: </label>
            <input type="text" id="adress" name="adress" class="col-s-9" value="<?php echo $adress;?>"/>
        </div>
        <div class="col-s-12">
            <label for="city" class="col-s-3">Ville: </label>
            <input type="text" id="city" name="cityAdress" class="col-s-9" value="<?php echo $city;?>"/>
        </div>
        <div class="col-s-12">
            <label for="codePostalAdress" class="col-s-3">Code postal : </label>
            <input type="text" id="codePostalAdress" name="codePostalAdress" class="col-s-9" value="<?php echo $codePostalAdress;?>"/>
        </div>
        <div class="col-s-12">
            <label for="telephone" class="col-s-3">Tel: </label>
            <input type="tel" id="telephone" name="telephone" class="col-s-9" value="<?php echo $telephone;?>"/>
        </div>
        <div class="col-s-12">
            <label for="email" class="col-s-3">Email: </label>
            <input type="email" id="email" name="email" class="col-s-9" value="<?php echo $email;?>"/>
        </div>
        <div class="col-s-12">
             <input type="submit" value="Valider" class="col-s-2 col-s-push-10"/>
        </div>
       
    </form>
</div>