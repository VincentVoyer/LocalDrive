<?php
require($_SERVER['SCRIPT_FILENAME'].'core/imgClass.php');
extract($_GET);

$thumbs = $_SERVER['SCRIPT_FILENAME'].$dos.'thumbs';

if(!file_exist($thumbs)){
    mkdir($thumbs,0777);  
    $format = explode('x', $format);
    if(Img::creerMin($dos.$name.'.jpg', $dest, $name, $format[0], $format[1]))
    {
        header('Content-type:image/jpg');
        echo file_get_contents($dest);
        exit();
    }
}

?>
