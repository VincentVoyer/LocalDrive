
<a href="<?php echo WEBROOT; ?>Produit/add" class="col-s-12 action">
    Ajouter un nouveau Produit
</a>

<?php 
    foreach($products as $product)
    {
?>

<div class=" col-s-12 col-m-6 col-l-4 ">
    <div class="miniDetail col-s-12">
        <div class="col-s-12">
            <a class="col-s-12" href="<?php echo WEBROOT; ?>Produit/show/<?php echo $product['id'];?>">
               <?php
                 $image  = ROOT.'img/'.$product['id'].'.jpeg';
                 if(!file_exists($image)){
                     $image = WEBROOT.'img/noImage.jpg';
                 }
                 else{
                     $image  = WEBROOT.'img/'.$product['id'].'.jpeg';
                 }
             ?>
             <image class="col-s-12 miniImg" alt="image" src="<?php echo $image; ?>">
            </a>    
            <h1 class="col-s-12"><?php echo $product['name']; ?></h1>
            <i class="col-s-12"><?php echo $product['description']; ?></i>
            <h4 class="col-s-4 col-s-push-8 price"><?php echo $product['price']; ?> €</h4>
        </div>
        
    </div>
</div>
<?php
    }
?>

