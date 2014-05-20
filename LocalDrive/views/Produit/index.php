
<?php 
    foreach($products as $product)
    {
?>
<div class=" col-s-12 col-m-6 col-l-4 ">
    <div class="miniDetail col-s-12">
        <div class="col-s-12">
            <image class="miniImg"  alt="image" src="<?php echo $product['image']; ?>">
        </div>
        <h1 class="col-s-12"><?php echo $product['name']; ?></h1>
        <i class="col-s-10"><?php echo $product['description']; ?></i>
        <h4 class="col-s-2 price"><?php echo $product['price']; ?> €</h4>
        <a href="<?php echo WEBROOT; ?>Produit/show/<?php echo $product['id'];?>" class="col-s-2 col-s-push-10 action">Show</a>
    </div>
</div>
<?php
    }
?>
<div class=" col-s-12 col-m-6 col-l-4 ">
    <div class="miniDetail col-s-12">
        <div class="col-s-12">
            <image class="miniImg"  alt="image" src="<?php echo WEBROOT;?>img/test.jpg">
        </div>
        <h1 class="col-s-12">Bananes de test</h1>
        <i class="col-s-10">Des bananes, ce qui permet de vérifier si tout marche. </i>
        <h4 class="col-s-2 price">10 €</h4>
        <a href="#" class="col-s-2 col-s-push-10 action">Show</a>
    </div>
</div>

<div class=" col-s-12 col-m-6 col-l-4 ">
    <div class="miniDetail col-s-12">
        <div class="col-s-12">
            <image class="miniImg"  alt="image" src="<?php echo WEBROOT;?>img/test2.jpg">
        </div>
        <h1 class="col-s-12">Poire de test</h1>
        <i class="col-s-10">Des poires pour mieux déguster la vie. </i>
        <h4 class="col-s-2 price">10 €</h4>
        <a href="#" class="col-s-2 col-s-push-10 action">Show</a>
    </div>
</div>

<div class=" col-s-12 col-m-6 col-l-4 ">
    <div class="miniDetail col-s-12">
        <div class="col-s-12">
            <image class="miniImg"  alt="image" src="<?php echo WEBROOT;?>img/test3.jpg">
        </div>
        <h1 class="col-s-12">Steak de test</h1>
        <i class="col-s-10">Un bon gros steak pour faire le plein de forces. </i>
        <h4 class="col-s-2 price">10 €</h4>
        <a href="#" class="col-s-2 col-s-push-10 action">Show</a>
    </div>
</div>

<div class=" col-s-12 col-m-6 col-l-4 ">
    <div class="miniDetail col-s-12">
        <div class="col-s-12">
            <image class="miniImg"  alt="image" src="<?php echo WEBROOT;?>img/test.jpg">
        </div>
        <h1 class="col-s-12">Bananes de test</h1>
        <i class="col-s-10">Des bananes, ce qui permet de vérifier si tout marche. </i>
        <h4 class="col-s-2 price">10 €</h4>
        <a href="#" class="col-s-2 col-s-push-10 action">Show</a>
    </div>
</div>

<div class=" col-s-12 col-m-6 col-l-4 ">
    <div class="miniDetail col-s-12">
        <div class="col-s-12">
            <image class="miniImg"  alt="image" src="<?php echo WEBROOT;?>img/test2.jpg">
        </div>
        <h1 class="col-s-12">Poire de test</h1>
        <i class="col-s-10">Des poires pour mieux déguster la vie. </i>
        <h4 class="col-s-2 price">10 €</h4>
        <a href="#" class="col-s-2 col-s-push-10 action">Show</a>
    </div>
</div>

<div class=" col-s-12 col-m-6 col-l-4 ">
    <div class="miniDetail col-s-12">
        <div class="col-s-12">
            <image class="miniImg"  alt="image" src="<?php echo WEBROOT;?>img/test3.jpg">
        </div>
        <h1 class="col-s-12">Steak de test</h1>
        <i class="col-s-10">Un bon gros steak pour faire le plein de forces. </i>
        <h4 class="col-s-2 price">10 €</h4>
        <a href="#" class="col-s-2 col-s-push-10 action">Show</a>
    </div>
</div>