<?php
class Membres extends Model{
    public $tableSelect = 'AllMembres';
    public $table = 'Membres';

    function connect($login='',$password=''){
        
        $result = $this->find(array('conditions'=>'login = \''.$login.'\' AND password = \''.$password.'\'','limit'=>1));
        if($result != null){
            $idUsr= isset($result[0]['id'])?$result[0]['id']:'';
            $_SESSION['testIdUsrRecup']=$idUsr;
            $isCommercant = isset($result[0]['isCommercant'])?$result[0]['isCommercant']:0;
            $token= md5(time() *  rand(7, 97));

            $_SESSION['usr']=$idUsr;
            $_SESSION['token']=$token;
            $_SESSION['isCommercant']=$isCommercant;
            return $idUsr;
        }
        return null;
    }
    
    function disconnect(){
        $_SESSION['usr']='';
        $_SESSION['token']='';
        $_SESSION['isCommercant']='';
    }
    
}
?>
