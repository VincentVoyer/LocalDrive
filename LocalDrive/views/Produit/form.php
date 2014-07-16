<?php
    $id = (isset($product)? (isset($product['id'])? $product['id'] : '') : '');
    $idCommercant = (isset($product)? (isset($product['idCommercant'])? $product['idCommercant'] : '') : $_SESSION['usr']);
    $name = (isset($product)? (isset($product['name'])? $product['name'] : '') : '');
    $price = (isset($product)? (isset($product['price'])? $product['price'] : '') : '');
    $image = (isset($product)? (isset($product['image'])? WEBROOT."img/".$product['image'] : '') : '');
    $description = (isset($product)? (isset($product['description'])? $product['description'] : '') : '');
    echo $id;
?>
<div class="col-s-12 col-m-6 m-center">
    <form method="POST" action="<?php echo WEBROOT; ?>Produit/save" id="prodform" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id" value="<?php echo$id;?>" class="col-s-12"/>
        <input type="hidden" id="idCommercant" name="idCommercant" value="<?php echo$idCommercant;?>" class="col-s-12"/>

        <div class="col-s-12">
            <label for="name" class="col-s-3">Nom : </label>
            <input type="text" id="name" name="name" class="col-s-9" value="<?php echo $name;?>"/>
        </div>

        <div class="col-s-12">
            <label for="price" class="col-s-3">Prix : </label>
            <input type="text" id="price" name="price" class="col-s-9" value="<?php echo$price;?>"/>
        </div>

        <div class="col-s-12">
            <label for="image" class="col-s-3">Image : </label>
            <input type="file" id="image" name="image" class="col-s-9"/>
        </div>
        
        <div class="col-s-12">
            <label class="col-s-12">Description: </label>
            <textarea name="description" form_id="prodform" class="col-s-12"><?php echo$description;?></textarea>
        </div>
        
        <div class="col-s-12">
             <input type="submit" value="Valider" class="col-s-2 col-s-push-10"/>
        </div>
    </form>
    
</div>