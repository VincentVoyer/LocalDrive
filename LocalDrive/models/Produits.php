<?php
class Produits extends Model{
    public $tableSelect = 'AllProducts';
    public $table = 'Produits';
    
    function getMostPopular($num = 10){
        return $this->find(array(
            'limit' => $num,
            'order' => 'countCommande'
        ));
    }
}
?>
