<?php
require(ROOT.'controlers/Panier.php');
class Commande extends Controller{
    var $models = array('Commandes','Produits');
    private $panier;
    
    function __construct() {
        $this->panier = new Panier();
    }
    
    function index(){
        $this->render('index');
    }
    
    function show($id){
        $content['command'] = $this->Commandes->read($id);
        $this->set($content);
        $this->render('show');
    }
    
    function modify($id){
        $content['command'] = $this->Commands->read($id);
        $this->set($content);
        $this->render('form');
    }
    
    function page($numPage=1){
        $ids = $this->panier->getProducts();
        
        if(!empty($ids)){
            $this->loadModel('Produits');
            $conditions = array('conditions'=>' id IN ('.implode(',', $ids).') ');
            
            $products = $this->Produits->find($conditions);
            
            $quantities = $this->panier->getQuantities();
            
            $content['products'] = $products;
            $content['total'] = $this->panier->sum($products);
            $content['quantities'] = $quantities;
            $this->set($content);
            $this->render('list');
        }
        else
        {
           $content['message']="Mon panier est vide";
        }
        
        $this->set($content);
        $this->render('list');
        
    }
    
    function add($id,$quantity = 1){
        $this->panier->addProduct($id,$quantity);
        header('Location: '.WEBROOT);   
    }
    
    function modifyQuantity(){
        var_dump($_POST);
        if(isset($_POST['panier']['quantity'])){
            $data = $_POST['panier']['quantity'];
            $this->panier->recalculate($data);
        }
        header('Location: '.WEBROOT.'Commande/page/1'); 
    }
    
    function save($data){
        $view = 'list';
        if($this->validateForm($data)){
            
        }
        else{
            
        }
        $this->render($view);
    }
    
    function delete($id){
        $this->panier->delProduct($id);
        header('Location: '.WEBROOT.'Commande/page/1');   
    }
    
    function deleteAll(){
        $this->panier->delAll();
        header('Location: '.WEBROOT.'Commande/page/1');   
    }
    
}
?>
