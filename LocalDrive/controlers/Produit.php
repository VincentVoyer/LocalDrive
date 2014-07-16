<?php
class Produit extends Controller{
    
    var $models = array('Produits');
    
    function index(){
        $content['products'] = $this->Produits->getMostPopular();
        $allProducts = $content['products'];
        for( $i = 0 ; $i < sizeof($allProducts); $i++){
            $product = $allProducts[$i];
             if(strlen($product['description']) > 50){
                $product['description'] = substr($product['description'], 0, 50).'...';
            }
            $allProducts[$i] = $product;
        }
        $content['products'] = $allProducts;
        $this->set($content);
        $this->render('index');
    }
    
        //Afficher les produits du commercant connecté
    function myProducts(){
        if(isset($_SESSION['isCommercant']) && $_SESSION['isCommercant']==1){
            $idCommercant = $_SESSION['usr'];
            $args = array();
            $args["conditions"] = "idCommercant = $idCommercant";
            $content['products'] = $this->Produits->find($args);
            $allProducts = $content['products'];
            for( $i = 0 ; $i < sizeof($allProducts); $i++){
                $product = $allProducts[$i];
                 if(strlen($product['description']) > 50){
                    $product['description'] = substr($product['description'], 0, 50).'...';
                }
                $allProducts[$i] = $product;
            }
            $content['products'] = $allProducts;
            $this->set($content);
            $this->render('myProducts');
        }
        else{
            header('Location: '.WEBROOT); 
        }
        
    }
    
    function show($id){
        $this->Produits->id = $id;
        $content['product'] = $this->Produits->read();
        $this->set($content);
        $this->render('show');
    }
    
    function modify($id){
        if(isset($_SESSION['isCommercant'])&&$_SESSION['isCommercant']==1){
            if($this->allowToModify($id)){
                $content = array();
                $this->Produits->id = $id;
                $content['product'] = $this->Produits->read();
                $this->set($content);
                $this->render('form');
            }
            else{
            }
        }
        else{
            header('Location: '.WEBROOT);   
        }
        
        
    }
    
    
    function page($numPage=1)
    {
        
        $content['products'] = $this->Produits->find();
        
        $allProducts = $content['products'];
        for( $i = 0 ; $i < sizeof($allProducts); $i++){
            $product = $allProducts[$i];
             if(strlen($product['description']) > 50){
                $product['description'] = substr($product['description'], 0, 50).'...';
            }
            $allProducts[$i] = $product;
        }
        $content['products'] = $allProducts;
        $this->set($content);
        $this->render('list');
    }
    
    function add(){
        $this->render('form');
    }
    
    function save(){
        $data = $_POST;
           
        $view = 'list';
        if($this->validateForm($data)){
            $id = $this->Produits->save($data);
            $type = substr($_FILES['image']['tmp_name'], -3);
            
            $tmp_name = $_FILES['image']['tmp_name'];
            $name = "$id.jpeg";
            move_uploaded_file($tmp_name, ROOT.'img/'.$name);
            $this->page();        
        }
        else{
            $this->set($data);
            $view = 'form';
            $this->render($view);
        }
        
        
    }
    
    function delete($id){
    }
    
    private function validateForm($data = null){
        $res = false;
        if($data != null){
            if(!empty($data['description']) &&
               !empty($data['name']) && 
                $data['price'] >= 0 )
                $res = true;
                
        }
        
        return $res;
    }
    
    private function allowToModify($idProduit){
//        require_once(ROOT.'controlers/Membre.php');
//        $idMember = Membre::getIdCurrentUser();
//        if($idMember != NULL)
//        {
//            $this->Produits->id = $idProduit;
//            $produit = $this->Produits->read();
//            if($produit['IdCommercant'] == $idMember){
//                return true;
//            }
//        }
//        return false;
        return true;
    }
}
?>
