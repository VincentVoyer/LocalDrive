<?php
class Error extends Controller{
    
    public function show($numError)
    {
        $tab['errorMessage'] = array('num'=> $numError,
                       'message'=>'Une Erreur',
                       'titre'=>'Erreur numéro '.$numError,
                       'urlRetour'=> WEBROOT.'/Produit/index');
        $this->set($tab);
        $this->render('show');
    }
    
    public function showException($numError,$message)
    {
        $tab['errorMessage'] = array('num'=> $numError,
                       'message'=>$message,
                       'titre'=>'Erreur numéro '.$numError,
                       'urlRetour'=> WEBROOT.'/Produit/index');
        $this->set($tab);
        $this->render('show');
    }
}
?>
