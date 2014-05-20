<?php
    define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
    define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
    require(ROOT.'core/model.php');
    require(ROOT.'core/controller.php');
    require(ROOT.'controlers/Error.php');
    
    $controller = 'Produit';
    $action = 'index';
    $mobile = false;
    if(isset($_GET['p'])){
        $params = explode('/',$_GET['p']);
        if($params[0] != null){
            if($params[0] == 'Membre' || $params[0] == 'Produit' || $params[0] == 'Commande' || $params[0] == 'Commercant' )
            {
                $controller = $params[0];
                $action = isset($params[1]) ? $params[1] : 'index';
            }
        }
    }
    
    require('controlers/'.$controller.'.php');
    $controller = new $controller();
    $controller->mobileDevice = $mobile;
    
    if(method_exists($controller,$action)){
        //$controller->$action();
        unset($params[0]);
        unset($params[1]);
        call_user_func_array(array($controller,$action),$params);
    }
    else{
        $errorManager = new Error();
        $errorManager->show(404);
    }
?>
