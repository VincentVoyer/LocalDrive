<?php
require(ROOT.'controlers/Membre.php');
class Commercant extends Membre{
    var $models = array('Membres');
    
    function index(){
        $this->render('index');
    }
    
    function form(){
        $this->render('form');  
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
    
    function save($data){
        $view = 'list';
        if($this->validateForm($data)){
            try{
            $this->Membres->save($data);
            }
            catch (Exception $e)
            {
                $this->set($data);
                $view = 'form';
            }
        }
        else{
            $this->set($data);
            $view = 'form';
        }
        
         $this->render($view);
    }
    
    function delete($id){
    }
    
    private function validateForm($data = null){
        $res = false;
        if($data != null){
            $res = true;
        }
        
        return $res;
    }
}

?>
