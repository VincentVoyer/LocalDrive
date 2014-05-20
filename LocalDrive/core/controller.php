<?php
class Controller{
    public $mobileDevice;
    var $vars = array();
    var $layout = 'default';
    
    function __construct() {
        if(isset($_POST)){
            $this->data = $_POST;
        }
        if(isset($this->models)){
            foreach ($this->models as $model)
            {
                $this->loadModel($model);
            }
        }
    }
            
    function set($data){
        //$this->vars[] = $data;
        $this->vars = array_merge($this->vars,$data);
    }
    
    function render($filename){
        extract($this->vars);
        ob_start();
        require(ROOT.'views/'.get_class($this).'/'.$filename.'.php');
        $contents_for_layout = ob_get_clean();
        
        if($this->layout==false)
        {
            echo $contents_for_layout;
        }
        else
        {
             require(ROOT.'views/layout/'.$this->layout.'.php');
        }
    }
    
    function loadModel($name)
    {
        require_once(ROOT.'models/'.$name.'.php');
        
        $this->$name = new $name();
    }
}
?>
