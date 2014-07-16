
<?php
$name = isset($product['name'])?$product['name']:'';;
$description = isset($product['description'])?$product['description']:'';
$price = isset($product['price'])?$product['price']:'';
$image  = WEBROOT.'img/'.$product['id'].'.jpeg';
?>
<div class="col-s-12 col-m-6 m-center">
    <div class="col-s-6">
        <?php
            if(!file_exists($image)){
                $image = WEBROOT.'img/noImage.jpg';
            }
        ?>
        <image class="col-s-12" alt="image" src="<?php echo $image; ?>">
    </div>
    <div class="col-s-6">
        <h1 class="col-s-12">
            <?php echo $name;?>
        </h1>
        <i class="col-s-12">
            <?php echo $description;?>
        </i>
        <h4 class="col-s-4 col-s-push-8 price">
            <?php echo$price;?> €
        </h4>
    </div>
    <div class="col-s-6 s-center col-m-4 col-m-push-8">
        <?php if (isset($_SESSION['usr']) && $product['idCommercant'] == $_SESSION['usr'] ) { ?>
        <a href="<?php echo WEBROOT; ?>Produit/modify/<?php echo $product['id'];?>"
           class="action">
            Modifier le produit
        </a>
        <?php } ?>
    </div>
</div>