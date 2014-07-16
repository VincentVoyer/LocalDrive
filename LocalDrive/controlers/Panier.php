<?php
class Panier{
    
    public function __construct() { 
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
    }
    
    public function getQuantities(){
         return $_SESSION['panier'];
    }
    
    public function sum($products){
        $sum = 0;
        foreach ($products as $product){
            $sum += intval($product['price']) * $_SESSION['panier'][$product['id']];
        }
        return $sum;
    }
    
    public function getProducts()
    {
        return array_keys($_SESSION['panier']);
    }
    
    public function count(){
        return array_sum($_SESSION['panier']);
    }
    public function addProduct($id,$quantity = 1){
        if(!isset($_SESSION['panier'][$id])){
            $_SESSION['panier'][$id] = 0;
        }
        
        $_SESSION['panier'][$id] += $quantity;
        
    }
    
    public function delProduct($id){
        unset($_SESSION['panier'][$id]);
    }
    
    public function delAll(){
         unset($_SESSION['panier']);
         $_SESSION['panier'] = array();
    }


    public function recalculate($data){
        
        foreach ($_SESSION['panier'] as $idProduct => $quantity){
            if(isset($data[$idProduct])){
                $_SESSION['panier'][$idProduct] = $data[$idProduct];
            }
        }
    }
}
?>
