<?php
class Commande extends Controller{
    var $models = array('Commandes','Produits');
    
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
