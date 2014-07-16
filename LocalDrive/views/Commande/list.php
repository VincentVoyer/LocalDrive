
<?php
if(isset($message)){
?>
    <div class="col-s-12">
        <span><?php echo $message;?></span>
    </div>
<?php
}
else{
?>
<form method="POST" action="<?php echo WEBROOT;?>Commande/modifyQuantity">
<?php
foreach ($products as $product){
    $quantity = isset($quantities[$product['id']])?$quantities[$product['id']]:'x';
    ?>
<div class="col-s-12 ligneCommande">

    <div class="col-s-4">
        <image class="col-s-3 detailCommandeImage" alt="image" src="<?php echo WEBROOT.'img/'.$product['id'].'.jpeg'; ?>"/>
        
    </div>
    <div class="col-s-8">
        <span class="col-s-4 case"><?php echo $product['name'];?></span>
        <input class="col-s-4 case" type=number name="panier[quantity][<?php echo $product['id'];?>]" value="<?php echo $quantity;?>"/>
        <span class="col-s-4 case"><?php echo number_format((intval($product['price']) * $quantity) * 1.196, 2, ',', ' ' );?>€</span>
    </div>
    <div class="col-s-12">
        <a href="<?php echo WEBROOT;?>Commande/delete/<?php echo $product['id']; ?>" class="col-s-4 col-s-push-8 action">supprimer</a>
    </div>
</div>
<?php

}
?>
<div class="col-s-12">
    <input type="submit" value="Recalculer" class="col-s-2"/>
    <span class="col-s-2 col-s-push-8 case">Total TTC : <?php echo number_format($total * 1.196, 2, ',', ' ');?>€</span>

</div>
</form>

<div class="col-s-12">
    <div class="col-s-4 col-s-push-8">
        <a class="col-s-12 col-m-6  action" href="<?php echo WEBROOT;?>Commande/deleteAll">Tout supprimer</a>
        <?php
            if(isset($_SESSION['usr']) && !empty($_SESSION['usr'])){
        ?>
        <a class="col-s-12 col-m-6  action" href="<?php echo WEBROOT;?>Commande/deleteAll">Payer</a>
        <?php
            }
        ?>
    </div>
    
</div>

<?php
    
}
?>
