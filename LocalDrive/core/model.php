<?php
class Model{
	
    private static $HOST ='localhost';
    private static $USRNAME ='root';
    private static $PWD ='';
    private static $DBNAME ='dbvivoyer';
    
    public $table;
    public $id;
    private $DB;
    
    public function __construct() {
        try{
            $this->DB = new PDO('mysql:host='.Model::$HOST.';dbname='.MODEL::$DBNAME, MODEL::$USRNAME, MODEL::$PWD,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch(PDOException $e){
            echo 'La base de donnée est momentanemment indisponible. <br/> Veuillez rééssayer plus tard. '; 
        }
        
    }
    
    public function read($fields = null){
        if($fields == null){ $fields = "*"; }
        $sql = "SELECT $fields FROM ".$this->table." WHERE id = ".$this->id;
        
        try{
            $request = $this->DB->query($sql);
            $data = $request->fetch(PDO::FETCH_ASSOC);
            foreach($data as $key=>$value)
            {
                $this.$key = $value;
            }
        }
        catch(PDOException $e)
        {
            return false;
        }
        return true;
    }
	
    public function save($data){
        
	if(isset($data["id"]) && !empty($data["id"]))
	{
            $res = $this->updateRequest($data);
	}
	else
	{
            $res = $this->insertRequest($data);
	}
        
        return $res;
    }
    
    private function insertRequest($data){
        try
        {
            $this->DB->beginTransaction();
           
            $sql = "INSERT INTO".$this->table." (";
            unset($data["id"]);
            foreach($data as $key=>$value)
            {
                $sql .="$key,";
            }
            $sql = substr($sql,0,-1);
            $sql .=") VALUES ( ";
            foreach($data as $key=>$value)
            {
                $sql .=":$key,";
            }
            $sql = substr($sql,0,-1);
            $sql .=")";
            
            $request = $DB->prepare($sql);
            $request->execute($data);
            $this->DB->commit();
            $this->id = $DB->lastInsertId();
            return  true;
        }
        catch(PDOException $e)
        {
            $this->DB->rollback();
            return false;
        }
    }
    
    private function updateRequest($data){
        try
        {
            $this->DB->beginTransaction();
            $sql ="UPDATE ".$this->table." SET ";
            foreach($data as $key=>$value)
            {
                if($key != "id")
                {
                    $sql .= "$key=:$key,";
                }
            }
            $sql = substr($sql,0,-1);
            $sql .= " WHERE id=".$data["id"];
            
            $request = $DB->prepare($sql);
            $request->execute($data);
            $this->DB->commit();
            return true;
        }
        catch(PDOException $e)
        {
            $this->DB->rollback();
            return false;
        }
    }

    public function find($data = array()){
	$conditions = "1=1";
	$fields = "*";
	$limit = "";
        $order = "id DESC";
		
	if(isset($data["conditions"])){ $conditions = $data["conditions"];}
	if(isset($data["fields"])){ $fields = $data["fields"];}
	if(isset($data["limit"])){ $limit = "LIMIT ".$data["limit"]; }
	if(isset($data["order"])){ $order = $data["order"];}
        
        $sql = "SELECT $fields FROM ".$this->table." WHERE $conditions ORDER BY $order $limit";
        
        try{
            $result = array();
            $request = $this->DB->query($sql);
            
            while($data = $request->fetch(PDO::FETCH_ASSOC)){
                $result[] = $data;
            }
            return $result;
        }
        catch(PDOException $e)
        {
            return null;
        }
    }
	
    public function delete($id=null){
	if($id == null){ $id = $this->id; }
	$sql = "DELETE FROM ".$this->table." WHERE id = $id";
        try
        {
            $this->DB->beginTransaction();
            $this->DB->exec($sql);
            $this->DB->commit();
            return true;
        }
        catch(PDOException $e)
        {
            $this->DB->rollback();
            return false;
        }
    }

    static function load($name){
	require_once(ROOT.'models/'.$name.'.php');
        $this->$name = new $name();	
    }
}
?>