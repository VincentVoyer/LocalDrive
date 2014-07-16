<?php
class Membre extends Controller{
    var $models = array('Membres');
    
    function connect(){
        $idUsr = isset($_SESSION['usr'])? (($_SESSION['usr'] != '')? $_SESSION['usr'] != '' : null)  : null;
        if($idUsr != null)
        {
            $this->disconnect();
        }
        
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        $this->Membres->connect($login,$password);
        header('Location: '.WEBROOT);   
    }
    function connection(){
        $this->render('connexion');
    }
    
    function disconnect(){
        $this->Membres->disconnect();
        header('Location: '.WEBROOT);  
    }
    
    function inscription(){
        $this->render('inscription');
    }
    
    function form(){
        $this->render('form');  
    }
    
    function index(){
         header('Location: '.WEBROOT); 
    }
    
    function show($id){
        $usrCourrant = $_SESSION['usr'];
        if($usrCourrant == $id){
            $this->Membres->id = $id;
            $content['profil'] = $this->Membres->read();
            $this->set($content);
            $this->render('show');
        }
        else{
            header('Location: '.WEBROOT);  
        }
    }
    
    //Appeler le formulaire de modification.
    function modify($id){
        $usrCourrant = $_SESSION['usr'];
        if($usrCourrant == $id){
            $this->Membres->id= $id;
            $content['profil'] = $this->Membres->read();
            $this->set($content);
            $this->render('form');
        }
        else{
            header('Location: '.WEBROOT);  
        }
    }
    
    function page($numPage=1){
        $this->render('list');
    }
    
    function add(){
        $this->render('form');
    }
    
    function save(){
        $data = $_POST;
        if($this->validateForm($data)){
            try
            {
                $this->Membres->save($data);
                header('Location: '.WEBROOT);  
            }
            catch (Exception $e)
            {
                $this->set($data);
                $view = 'form';
                $this->render($view);
            }
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
            $res = true;
        }
            
        return $res;
    }
    
    public static function getIdCurrentUser(){
        return Membre::$IDCURRENTUSR;
    }
}
?>
