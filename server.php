<?php
class server
{
    private $con;
    public function __construct()
    {
        
        $this->con = (is_null($this->con))? self::connect():$this->con;
    }
    
    static function connect()
    {
        $con = mysql_connect('localhost','root','');
        $db = mysql_select_db('mqnpkowp_product_crud',$con);
        
        return $con;
    }
    
    public function getStudentName($id_array)
    {
        $id = $id_array['id'];
        $sql = "select * from products where product_id = '$id'";
        $query = mysql_query($sql,$this->con);
        $res = mysql_fetch_array($query);
        return $res;
    }
    
}

$params = array('uri'=>'Laravel_practice/soap/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();
?>