<?php
class Produit extends Controller{
    
    var $models = array('Produits');
    
    function index(){
        $content['products'] = $this->Produits->getMostPopular();
        $this->set($content);
        $this->render('index');
    }
    
    function show($id){
        $content['product'] = $this->Produits->read($id);
        $this->set($content);
        $this->render('show');
    }
    
    function modify($id){
        $content['product'] = $this->Produits->read($id);
        $this->set($content);
        $this->render('form');
    }
    
    function page($numPage=1){
        $this->render('list');
    }
    
    function add(){
        $this->render('form');
    }
    
    function save($id=null){
        $this->render('list');
    }
    
    function delete($id){
    }
}
?>
