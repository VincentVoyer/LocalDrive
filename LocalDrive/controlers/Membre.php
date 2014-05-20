<?php
class Membre extends Controller{
    var $models = array('Membres');
    
    function index(){
        $this->render('index');
    }
    
    function show($id){
        $content['profil'] = $this->Membres->read($id);
        $this->set($content);
        $this->render('show');
    }
    
    function modify($id){
        $content['profil'] = $this->Membres->read($id);
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
